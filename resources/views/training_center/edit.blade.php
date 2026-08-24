@extends('layouts.app')

@section('content')

<div class="training-center-page">

    <div class="training-center-card">

        <div class="training-center-header">

            <div class="training-center-icon">
                <i class="bi bi-building-fill"></i>
            </div>

            <div>
                <h1>Actualizar centro de formación</h1>
                <p>Modifica la información del centro de formación</p>
            </div>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('training_center.update', $training_center->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div class="form-group">

                <label for="name">
                    Nombre del centro
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-input"
                    value="{{ old('name', $training_center->name) }}"
                    placeholder="Ingrese el nombre del centro"
                >

            </div>

            <!-- Ubicación -->
            <div class="form-group">

                <label for="location">
                    Ubicación
                </label>

                <input
                    type="text"
                    name="location"
                    id="location"
                    class="form-input"
                    value="{{ old('location', $training_center->location) }}"
                    placeholder="Ingrese la ubicación del centro"
                >

            </div>

            <!-- Botones -->
            <div class="form-actions">

                <a href="{{ route('training_center.index') }}" class="btn-cancel">
                    Cancelar
                </a>

                <button type="submit" class="btn-save">
                    <i class="bi bi-check-circle-fill"></i>
                    Actualizar centro
                </button>

            </div>

        </form>

    </div>

</div>

<style>

.training-center-page {
    padding: 30px 0 40px;
}

.training-center-card {
    max-width: 650px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 14px;
    padding: 30px 35px;
    border: 1px solid #e5e7eb;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.training-center-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eeeeee;
}

.training-center-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e9fbed;
    color: #128c35;
    border-radius: 12px;
    font-size: 22px;
}

.training-center-header h1 {
    margin: 0;
    font-size: 26px;
    font-weight: 700;
    color: #1f2937;
}

.training-center-header p {
    margin: 4px 0 0;
    font-size: 14px;
    color: #6b7280;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #374151;
}

.form-input {
    width: 100%;
    min-height: 46px;
    padding: 10px 13px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    background: #ffffff;
    color: #374151;
    font-size: 14px;
    outline: none;
    box-sizing: border-box;
    transition: all .2s ease;
}

.form-input:focus {
    border-color: #1ed14b;
    box-shadow: 0 0 0 3px rgba(30, 209, 75, 0.12);
}

.form-input::placeholder {
    color: #9ca3af;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 12px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eeeeee;
}

.btn-cancel {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 9px 18px;
    border-radius: 8px;
    border: 1px solid #d1d5db;
    background: #ffffff;
    color: #4b5563;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
}

.btn-save {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-height: 42px;
    padding: 9px 20px;
    border: none;
    border-radius: 8px;
    background: #1ed14b;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
}

.btn-save:hover {
    background: #128c35;
}

</style>

@endsection