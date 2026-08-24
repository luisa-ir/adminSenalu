<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    // Listar aprendices
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));
    }

    // Formulario de creación
    public function create()
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.create', compact('courses', 'computers'));
    }

    // Guardar en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);

        Apprentice::create($request->all());

        // Redirección al index
        return redirect()->route('apprentice.index')->with('success', 'Aprendiz creado con éxito.');
    }

    // Mostrar detalle
    public function show($id)
    {
        $apprentice = Apprentice::findOrFail($id);
        return view('apprentice.show', compact('apprentice'));
    }

    // Formulario de edición (incluye los datos para los select)
    public function edit(Apprentice $apprentice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }

    // Actualizar registro
    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cell_number' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ]);

        $apprentice->update($request->all());

        return redirect()->route('apprentice.index')->with('success', 'Aprendiz actualizado con éxito.');
    }

    // Eliminar registro
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentice.index')->with('success', 'Aprendiz eliminado con éxito.');
    }

    // --- MÉTODOS DE CONSULTA Y RELACIONES ---

    public function consultaCurso($id = 1)
    {
        $aprendiz = Apprentice::findOrFail($id);
        return $aprendiz->course;
    }

    public function consultaComputador($id = 3)
    {
        $aprendiz = Apprentice::findOrFail($id);
        return $aprendiz->computer;
    }
}