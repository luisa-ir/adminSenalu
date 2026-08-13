<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;


class AreaController extends Controller
{
   public function consultaProfe(){
        $area = Area::find(2);
        return $area->teachers;
    }

    public function consultasCurso(){
        $area = Area::find(1);
        return $area->courses;
    }

    public function index(){

    $areas = Area::all();
    return view('area.index',compact('areas'));

    }

    public function create()
{
    return view('area.create');
}

    public function show($id){
        $area = Area::find($id);
        return view('area.show', compact('area'));
    }

    public function store(Request $request)
{
    Area::create($request->all());
    return redirect()->route('area.list');

}

/*public function store(Request $request)
    {
        Area::create($request->all());
        return redirect()->route('area.list');
    }*/

    public function edit($id){
    $area = Area::findOrFail($id);
    return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area){
    $area->update($request->all());
    return  redirect()->route('area.list');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Area $area){
        $area->delete();
        return redirect()->route('area.list');
    }





}
