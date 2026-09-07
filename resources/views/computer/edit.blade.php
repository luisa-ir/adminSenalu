@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 700px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h3 class="mb-0">Editar computador</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('computer.update', $computer) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="number" class="form-label">Número del computador</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $computer->number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $computer->brand) }}" required>
                </div>

                <div class="mb-3">
                    <label for="urlFoto" class="form-label">Imagen del computador</label>
                    <input type="file" name="urlFoto" id="urlFoto" class="form-control" accept="image/*">
                    @if ($computer->urlFoto)
                        <small class="text-muted">Deja este campo vacío para conservar la imagen actual.</small>
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('computer.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Actualizar computador</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
