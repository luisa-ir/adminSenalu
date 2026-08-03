@extends('layouts.app')
@section('content')
    <h1>Actualizar Area</h1>

    <form action="{{ route('area.update', $area) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre :
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $area->nombre) }}">
        </label>
        <br>
        <button type="submit" class="btn btn-success">Actualizar Area:</button>


    </form>
@endsection
