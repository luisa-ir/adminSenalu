<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    // Listar todos los cursos
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    // Formulario para crear un nuevo curso
    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.create', compact('areas', 'training_centers'));
    }

    // Guardar un curso en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        Course::create($request->all());

        
        return redirect()->route('course.index')->with('success', 'Curso creado con éxito.');
    }

    // Mostrar un curso específico
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    // Formulario para editar un curso existente
    public function edit(Course $course)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        
        return view('course.edit', compact('course', 'areas', 'training_centers'));
    }

    // Actualizar un curso
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $course->update($request->all());

        return redirect()->route('course.index')->with('success', 'Curso actualizado con éxito.');
    }

    // Eliminar un curso
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Curso eliminado con éxito.');
    }

    // --- MÉTODOS DE CONSULTA Y RELACIONES ---

    public function consultaArea($id = 2)
    {
        $curso = Course::findOrFail($id);
        return $curso->area;
    }

    public function consultaCentro($id = 1)
    {
        $curso = Course::findOrFail($id);
        return $curso->training_center;
    }

    public function consultaAprendiz($id = 1)
    {
        $curso = Course::findOrFail($id);
        return $curso->aprendices;
    }

    public function consultaProfe($id = 1)
    {
        $curso = Course::findOrFail($id);
        return $curso->teachers;
    }
}