<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
   public function consultaCurso(){
        $apprendiz = Apprentice::find(1);
        return $apprendiz->course;
    }

    public function consultaComputador(){
        $aprendice = Apprentice::find(3);
        return $aprendice->computer;
    }

    public function index(){
    $apprentices = Apprentice::all();
    return view('apprentice.index',compact('apprentices'));

    }

    public function create (){

    $courses=Course::all();
    $computers=Computer::all();

    return view('apprentice.create',compact('courses','computers'));
    }

    public function store(Request $request){
    $apprentice=Apprentice::create($request->all());

    return redirect()->route('apprentice.index');
    }

    public function show($id){
        $apprentice = Apprentice::find($id);
        return view('apprentice.show', compact('apprentice'));
    }

    public function edit($id){
    $apprentice = Apprentice::findOrFail($id);
    return view('apprentice.edit', compact('apprentice'));
    }

    public function update(Request $request, Apprentice $apprentice){
    $apprentice->update($request->all());
    return  redirect()->route('apprentice.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Apprentice $apprentice){
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }

}


