<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // Listar profesores
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    // Formulario de creación
    public function create()
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.create', compact('areas', 'training_centers'));
    }

    // Guardar registro
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teacher.index')->with('success', 'Profesor creado con éxito.');
    }

    // Mostrar detalle
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.show', compact('teacher'));
    }

    // Formulario de edición (CORREGIDO: Ahora incluye $training_centers)
    public function edit(Teacher $teacher)
    {
        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('teacher.edit', compact('teacher', 'areas', 'training_centers'));
    }

    // Actualizar registro
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teacher.index')->with('success', 'Profesor actualizado con éxito.');
    }

    // Eliminar registro
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with('success', 'Profesor eliminado con éxito.');
    }

    // --- MÉTODOS DE CONSULTA Y RELACIONES ---

    public function consultaArea($id = 1)
    {
        $profe = Teacher::findOrFail($id);
        return $profe->area;
    }

    public function consultaCentro($id = 1)
    {
        $profe = Teacher::findOrFail($id);
        return $profe->training_center;
    }

    public function consultaCurso($id = 1)
    {
        $profe = Teacher::findOrFail($id);
        return $profe->courses;
    }
}