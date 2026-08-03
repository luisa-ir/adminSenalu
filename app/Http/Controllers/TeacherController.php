<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class TeacherController extends Controller
{
    // muestra que area da un profesor
    public function consultaArea(){
        $profe = Teacher::find(1);
        return $profe->area;
    }
    // muestra en que centro se encuentra el profesor
    public function consultaCentro(){
        $profe = Teacher::find(1);
        return $profe->training_center;
    }


    public function consultaCurso(){
        $profe = Teacher::find(1);
        return $profe->courses;
    }

    public function index(){
    $teachers = Teacher::all();
    return view('teacher.index',compact('teachers'));
    }

    public function show(string $id){
        $teacher = Teacher::find($id);
        return view('teacher.show', compact('teacher'));
    }

     public function create (){

    $areas=Area::all();
    $training_centers=Training_center::all();

     return view('teacher.create',compact('areas','training_centers'));
    }

    public function store(Request $request){

    $teacher=Teacher::create($request->all());

    return $teacher;

    }

    public function edit(Teacher $teacher)
    { //Encuentro el Course
        $areas = Area::all();
        return view('teacher.edit', compact('teacher', 'areas'));
    }

    public function update(Request $request, Teacher $teacher)
    {

        $teacher->update($request->all());

        return redirect()->route('teacher.index');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }







}
