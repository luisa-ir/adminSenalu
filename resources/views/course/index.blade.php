@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>LISTAR CURSOS</h1>

    <a href="{{ route('course.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo Curso
    </a>

    {{-- Mensaje de éxito al guardar/editar/eliminar --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Curso</th>
                <th>Día</th>
                <th>Área</th>
                <th>Centro de Formación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_number }}</td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->area->name ?? $course->area_id }}</td>
                    <td>{{ $course->training_center->name ?? $course->training_center_id }}</td>
                    <td>
                        {{-- 1. Mostrar --}}
                        <a href="{{ route('course.show', $course->id) }}" class="btn btn-info btn-sm">Mostrar</a>

                        {{-- 2. Editar --}}
                        <a href="{{ route('course.edit', $course->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        {{-- 3. Eliminar --}}
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este curso?')">
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