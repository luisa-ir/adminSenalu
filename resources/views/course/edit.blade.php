@extends('layouts.app')
@section('content')
    <h1>Actualizar Course</h1>

    <form action="{{ route('course.update', $course) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre Curso:
            <br>
            <input type="text" name="nombre curso" value="{{ old('nombre curso', $course->nombre curso) }}">
        </label>
        <br>
        <label>
            Day:
            <br>
            <input type="text" name="day" value="{{ old('day', $course->day) }}">
        </label>
        <br>

        <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $course->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <select name="training_center_id" class="form-select">
            @foreach ($training_centers as $training_center)
                <option value="{{ $training_center->id }}" {{ $course->training_center_id == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->id }} - {{ $training_center->name }}
                </option>
            @endforeach
        </select>


        <br><br>
        <button type="submit" class="btn btn-success">Actualizar Course:</button>


    </form>
@endsection
