@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>LISTAR COMPUTERS</h1>

    {{-- Botón fuera de la tabla --}}
    <a href="{{ route('computer.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Nuevo computer
    </a>

    {{-- Alerta de confirmación al guardar, editar o borrar --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="idComputer" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Number</th>
                <th>Brand</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>
                        {{-- 1. Mostrar --}}
                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-info btn-sm">Mostrar</a>

                        {{-- 2. Editar --}}
                        <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        {{-- 3. Eliminar --}}
                        <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este equipo?')">
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