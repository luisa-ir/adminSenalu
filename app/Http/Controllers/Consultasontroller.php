<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Teacher;
use App\Models\Area;

class ConsultasController extends Controller
{
   public function consulta_1(){

        $aprendiz = new Apprentice();

        $aprendiz = Apprentice::find(1);// consulta simple

        $aprendiz = Apprentice::with(['computer'])->get();// consulta anidada devuelve todo
        $aprendiz = Apprentice::with(['computer'])->find(1);// consulta anidada y deveulve uno en especifico
        return $aprendiz->computer;
    }

    public function consulta_2(){
        $compu = new Computer();

        $compu = Computer::find(1);

        $compu = Computer::with(['aprendice.course.training_center.teachers.area'])->find(1); // consulta varias tablas relacionadas

        $compu = Computer::whereHas('aprendice', function ($query){ $query->where('course_id', 3); })->get();

        return $compu;
    }

    public function consulta_3(){
    $curso = new Course();

    $curso = Course::find(1);
    return $curso->aprendices;
    }

    public function consulta_4(){
    $centro = new Training_center();

    $centro = Training_center::find(1);
    return $centro->teachers;
    }

    public function consulta_5(){
        $profe = new Teacher();

        $profe = Teacher::find(1);

        $profe = Teacher::with(['training_center.courses'])->find(1);// consulta tres relaciones
        return $profe;
    }

    public function consulta_6(){
        $area = new Area();

        $area = Area::find(1);
        return $area->teachers;
    }
}

$computadores = Computer::whereHas('aprendice', function ($query) {
    $query->where('course_id', 5); // Solo computadores cuyo aprendiz sea del curso 5
})->get();

