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
    
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index',compact('computers'));

    }

    public function create()
    {
         return view('computer.create');
    }

    
    public function store(Request $request)
    {
        $computer=Computer::create($request->all());
        return redirect()->route('computer.index');
    }

    
    public function show(string $id)
    {
        $computer = Computer::findOrFail($id);
        return view('computer.show', compact('computer'));
    }

   
    public function edit(string $id)
    {
        $computer = Computer::findOrFail($id);
        return view('computer.edit', compact('computer'));
    }

    
    public function update(Request $request, Computer $computer)
    {
        $computer->update($request->all());
        return redirect()->route('computer.index');
    }

    
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
