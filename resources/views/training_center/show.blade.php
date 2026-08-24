@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2>DETALLE DEL CENTRO DE FORMACIÓN</h2>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $training_center->name }}</h5>
            <p class="card-text"><strong>ID:</strong> {{ $training_center->id }}</p>
            <p class="card-text"><strong>Ubicación:</strong> {{ $training_center->location }}</p>
        </div>
    </div>

    {{-- CORREGIDO: Redirige a 'training_center.index' en lugar de 'training_center.list' --}}
    <a href="{{ route('training_center.index') }}" class="btn btn-secondary">
        Volver a la lista
    </a>
</div>
@endsection