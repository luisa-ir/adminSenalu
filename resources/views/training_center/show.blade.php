@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                Detalle de training_center #{{ $training_center->id }}
            </h5>

            <a href="{{ route('training_center.index') }}"
               class="btn btn-sm btn-light">
                Volver
            </a>

        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    ID:
                </label>

                <p class="fs-5">
                    {{ $training_center->id }}
                </p>
            </div>


            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Nombre del Centro:
                </label>

                <p class="fs-5">
                    {{ $training_center->name }}
                </p>
            </div>


            <div class="mb-3">
                <label class="form-label text-muted fw-bold">
                    Ubicación:
                </label>

                <p class="fs-5">
                    {{ $training_center->location }}
                </p>
            </div>

        </div>


        <div class="card-footer text-end">

            <a href="{{ route('training_center.index') }}"
               class="btn btn-secondary">
                Regresar a la lista
            </a>

            <a href="{{ route('training_center.edit', $training_center->id) }}"
               class="btn btn-warning">
                Editar
            </a>

        </div>

    </div>

</div>

@endsection