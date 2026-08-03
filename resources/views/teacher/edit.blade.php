@extends('layouts.app')
@section('content')
    <h1>Actualizar Teacher</h1>

    <form action="{{ route('teacher.update', $teacher) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $teacher->nombre) }}">
        </label>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email', $teacher->email) }}">
        </label>
        <br>

        <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $teacher->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <select name="training_center_id" class="form-select">
            @foreach ($training_centers as $training_center)
                <option value="{{ $training_center->id }}" {{ $teacher->training_center_id == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->id }} - {{ $training_center->name }}
                </option>
            @endforeach
        </select>


        <br><br>
        <button type="submit" class="btn btn-success">Actualizar Teacher:</button>


    </form>
@endsection
