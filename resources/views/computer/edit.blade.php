@extends('layouts.app')
@section('content')
    <h1>Actualizar Computer</h1>

    <form action="{{ route('computer.update', $computer) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre :
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $computer->nombre) }}">
        </label>
        <br>
        <label>
            brand:
            <br>
            <input type="text" name="brand" value="{{ old(' brand', $computer-> brand) }}">
        </label>

        <br>
        <button type="submit" class="btn btn-success">Actualizar Computer:</button>


    </form>
@endsection
