<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Computer;

class ComputerController extends Controller
{
     public function consultaApprentice(){
        $computer = Computer::findOrFail(3);
        return $computer->apprentices;
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

    
    public function store(Request $request){
        $validated = $request->validate([
            'number' => ['required', 'integer'],
            'brand' => ['required', 'string', 'max:100'],
            'urlFoto' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('urlFoto')) {
            $validated['urlFoto'] = $request->file('urlFoto')->store('images', 'public');
        }

        Computer::create($validated);
         
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
        $validated = $request->validate([
            'number' => ['required', 'integer'],
            'brand' => ['required', 'string', 'max:100'],
            'urlFoto' => ['nullable', 'image', 'max:5120'],
        ]);

        if ($request->hasFile('urlFoto')) {
            if ($computer->urlFoto) {
                Storage::disk('public')->delete($computer->urlFoto);
            }

            $validated['urlFoto'] = $request->file('urlFoto')->store('images', 'public');
        }

        $computer->update($validated);
        return redirect()->route('computer.index');
    }

    
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
