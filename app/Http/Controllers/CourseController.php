<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function consultaArea()
    {
        $curso = Course::find(2);

        return $curso->areas;
    }

    public function consultaCentro()
    {
        $curso = Course::find(1);

        return $curso->training_centers;
    }

    public function consultaAprendiz()
    {
        $curso = Course::find(1);

        return $curso->aprendices;
    }

    public function consultaProfe()
    {
        $curso = Course::find(1);

        return $curso->teachers;
    }

    // LISTAR
    public function index()
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    // MOSTRAR
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('course.show', compact('course'));
    }

    // FORMULARIO CREAR
    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'course.create',
            compact('areas', 'training_centers')
        );
    }

    // GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'course_number' => 'required',
            'day' => 'required',
            'area_id' => 'required',
            'training_center_id' => 'required',
        ]);

        Course::create($request->all());

        return redirect()
            ->route('course.index')
            ->with('success', 'Curso creado correctamente.');
    }

    // FORMULARIO EDITAR
    public function edit(Course $course)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view(
            'course.edit',
            compact('course', 'areas', 'training_centers')
        );
    }

    // ACTUALIZAR
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number' => 'required',
            'day' => 'required',
            'area_id' => 'required',
            'training_center_id' => 'required',
        ]);

        $course->update($request->all());

        return redirect()
            ->route('course.index')
            ->with('success', 'Curso actualizado correctamente.');
    }

    // ELIMINAR
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('course.index')
            ->with('success', 'Curso eliminado correctamente.');
    }
}