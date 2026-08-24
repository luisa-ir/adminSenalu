@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h2>EDITAR CENTRO DE FORMACIÓN</h2>

    <form action="{{ route('training_center.update', $training_center->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-class form-control" value="{{ old('name', $training_center->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $training_center->location) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('training_center.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection