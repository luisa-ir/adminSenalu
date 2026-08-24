@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2>DETALLE DEL CURSO</h2>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Curso #: {{ $course->course_number }}</h5>
            <p class="card-text"><strong>ID:</strong> {{ $course->id }}</p>
            <p class="card-text"><strong>Día:</strong> {{ $course->day }}</p>
            <p class="card-text"><strong>Área:</strong> {{ $course->area->name ?? $course->area_id }}</p>
            <p class="card-text"><strong>Centro de Formación:</strong> {{ $course->training_center->name ?? $course->training_center_id }}</p>
        </div>
    </div>

    {{-- CORREGIDO: Redirige a 'course.index' --}}
    <a href="{{ route('course.index') }}" class="btn btn-secondary">
        Volver a la lista
    </a>
</div>
@endsection