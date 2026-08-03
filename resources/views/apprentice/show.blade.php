@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Apprentice #{{ $apprentice->id }}</h5>
            <a href="{{ route('apprentice.list') }}" class="btn btn-sm btn-light">Volver</a>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $apprentice->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Aprendis:</label>
                <p class="fs-5">{{ $apprentice->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Correo del Aprendis:</label>
                <p class="fs-5">{{ $apprentice->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Numero del Aprendis:</label>
                <p class="fs-5">{{ $apprentice->cell_number }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Curso del Aprendis:</label>
                <p class="fs-5">{{ $apprentice->course_id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Computador del Aprendis:</label>
                <p class="fs-5">{{ $apprentice->computer_id }}</p>
            </div>
        </div>

        <div class="card-footer text-end">
    <a href="{{ route('apprentice.list') }}" class="btn btn-secondary">
        Regresar a la lista
    </a>
</div>
</div>
@endsection
