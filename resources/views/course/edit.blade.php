@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Actualizar Course</h1>

    <form action="{{ route('course.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="course_number" class="form-label">Número de Curso:</label>
        <br>
        {{-- CORREGIDO: Se cambió 'nombre curso' por 'course_number' --}}
        <input type="text" name="course_number" id="course_number" class="form-control mb-3" value="{{ old('course_number', $course->course_number) }}" required>

        <label for="day" class="form-label">Día:</label>
        <br>
        <input type="text" name="day" id="day" class="form-control mb-3" value="{{ old('day', $course->day) }}" required>

        <label for="area_id" class="form-label">Área:</label>
        <select name="area_id" id="area_id" class="form-select mb-3" required>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $course->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>

        <label for="training_center_id" class="form-label">Centro de Formación:</label>
        <select name="training_center_id" id="training_center_id" class="form-select mb-3" required>
            @foreach ($training_centers as $training_center)
                <option value="{{ $training_center->id }}" {{ $course->training_center_id == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->id }} - {{ $training_center->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-success">Actualizar Course</button>
        <a href="{{ route('course.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection