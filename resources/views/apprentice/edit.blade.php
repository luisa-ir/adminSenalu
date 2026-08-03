@extends('layouts.app')
@section('content')
    <h1>Actualizar Apprentice</h1>

    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre :
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $apprentice->nombre) }}">
        </label>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email', $apprentice->email) }}">
        </label>
        <br>
        <label>
            Cell_number:
            <br>
            <input type="text" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number) }}">
        </label>
        <br>
        <select name="course_id" class="form-select">
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ $apprentice->course_id == $course->id ? 'selected' : '' }}>
                    {{ $course->id }} - {{ $course->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <select name="computer_id" class="form-select">
            @foreach ($computers as $computer)
                <option value="{{ $computer->id }}" {{ $apprentice->computer_id == $computer->id ? 'selected' : '' }}>
                    {{ $computer->id }} - {{ $computer->name }}
                </option>
            @endforeach
        </select>


        <br><br>
        <button type="submit" class="btn btn-success">Actualizar Apprentice:</button>


    </form>
@endsection
