<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
     public function consultaApprentice(){
        $computer = Computer::findOrFail(3);
        return $computer->apprentice;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index',compact('computers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('computer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer=Computer::create($request->all());
        return redirect()->route('computer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $computer = Computer::findOrFail($id);
        return view('computer.show', compact('computer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $computer = Computer::findOrFail($id);
        return view('computer.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());
        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
