<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_Center;

class TrainingCenterController extends Controller
{
    // LISTAR
    public function index()
    {
        $training_centers = Training_Center::all();

        return view('training_center.index', compact('training_centers'));
    }

    // MOSTRAR FORMULARIO DE CREACIÓN
    public function create()
    {
        return view('training_center.create');
    }

    // GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        Training_Center::create($request->all());

        return redirect()
            ->route('training_center.index')
            ->with('success', 'Centro de formación creado correctamente.');
    }

    // MOSTRAR UNO
    public function show($id)
    {
        $training_center = Training_Center::findOrFail($id);

        return view('training_center.show', compact('training_center'));
    }

    // FORMULARIO DE EDICIÓN
    public function edit($id)
    {
        $training_center = Training_Center::findOrFail($id);

        return view('training_center.edit', compact('training_center'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $training_center = Training_Center::findOrFail($id);

        $training_center->update($request->all());

        return redirect()
            ->route('training_center.index')
            ->with('success', 'Centro de formación actualizado correctamente.');
    }

    // ELIMINAR
    public function destroy($id)
    {
        $training_center = Training_Center::findOrFail($id);

        $training_center->delete();

        return redirect()
            ->route('training_center.index')
            ->with('success', 'Centro de formación eliminado correctamente.');
    }
}