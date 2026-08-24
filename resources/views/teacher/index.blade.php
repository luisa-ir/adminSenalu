@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>LISTAR PROFESORES</h1>

    <a href="{{ route('teacher.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Profesor
    </a>

    {{-- Alerta de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->area->name ?? $teacher->area_id }}</td>
                    <td>{{ $teacher->training_center->name ?? $teacher->training_center_id }}</td>
                    <td>
                        {{-- 1. Mostrar --}}
                        <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info btn-sm">Mostrar</a>

                        {{-- 2. Editar --}}
                        <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        {{-- 3. Eliminar --}}
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este profesor?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection