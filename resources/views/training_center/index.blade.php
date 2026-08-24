@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>LISTAR TRAINING_CENTER</h1>

        <a href="{{ route('training_center.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nuevo training_center
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table id="idTraining_center" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>
                        <td>
                            {{-- Mostrar --}}
                            <a href="{{ route('training_center.show', $training_center->id) }}" class="btn btn-info btn-sm">Mostrar</a>

                            {{-- Editar --}}
                            <a href="{{ route('training_center.edit', $training_center->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            {{-- Eliminar --}}
                            <form action="{{ route('training_center.destroy', $training_center->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este registro?')">
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