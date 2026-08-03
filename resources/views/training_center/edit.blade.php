@extends('layouts.app')
@section('content')
    <h1>Actualizar Training_center</h1>

    <form action="{{ route('training_center.update', $training_center) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $training_center->nombre) }}">
        </label>
        <br>
        <label>
            location:
            <br>
            <input type="text" name="location" value="{{ old('location', $training_center->location) }}">
        </label>
        <br>

        <button type="submit" class="btn btn-success">Actualizar Training_center:</button>


    </form>
@endsection
