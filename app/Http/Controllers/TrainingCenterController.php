<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // Listar todos los centros de formación
    public function index()
    {
        $training_centers = Training_center::all();
        return view('training_center.index', compact('training_centers'));
    }

    // Formulario para crear un nuevo centro
    public function create()
    {
        return view('training_center.create');
    }

    // Guardar el nuevo centro en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        
        Training_center::create($request->all());
        return redirect()->route('training_center.index')->with('success', 'Centro de formación creado con éxito.');
    }

    // Mostrar un centro específico
    public function show($id)
    {
        $training_center = Training_center::findOrFail($id);
        return view('training_center.show', compact('training_center'));
    }

    // Formulario para editar un centro existente
    public function edit($id)
    {
        $training_center = Training_center::findOrFail($id);
        return view('training_center.edit', compact('training_center'));
    }

    // Actualizar los datos del centro en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $training_center = Training_center::findOrFail($id);
        $training_center->update($request->all());

        return redirect()->route('training_center.index')->with('success', 'Centro de formación actualizado con éxito.');
    }

    // Eliminar un centro de la base de datos
    public function destroy($id)
    {
        $training_center = Training_center::findOrFail($id);
        $training_center->delete();

        return redirect()->route('training_center.index')->with('success', 'Centro de formación eliminado con éxito.');
    }


    // Consulta de qué profesores hay en cada centro
    public function consultaProfesores($id = 4)
    {
        $centro = Training_center::findOrFail($id);
        return $centro->teachers;
    }

    // Consulta en qué centro de formación se da un curso
    public function consultaCursos($id = 1)
    {
        $centro = Training_center::findOrFail($id);
        return $centro->courses;
    }
}