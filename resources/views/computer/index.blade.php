@extends('layouts.app')

@section('content')

<div class="container mt-4">

    {{-- ENCABEZADO --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>LISTAR COMPUTADORES</h1>

        <a href="{{ route('computer.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            Nuevo computador
        </a>

    </div>


    {{-- MENSAJE DE ÉXITO --}}
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    {{-- TABLA --}}
    <div class="table-responsive">

        <table id="idComputer"
               class="table table-striped table-bordered"
               style="width:100%">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($computers as $computer)

                    <tr>

                        <td>
                            {{ $computer->id }}
                        </td>

                        <td>
                            {{ $computer->number }}
                        </td>

                        <td>
                            {{ $computer->brand }}
                        </td>

                        <td>

                            {{-- MOSTRAR --}}
                            <a href="{{ route('computer.show', $computer->id) }}"
                               class="btn btn-primary btn-sm">

                                <i class="bi bi-eye"></i>
                                Mostrar

                            </a>


                            {{-- EDITAR --}}
                            <a href="{{ route('computer.edit', $computer->id) }}"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>
                                Editar

                            </a>


                            {{-- ELIMINAR --}}
                            <form action="{{ route('computer.destroy', $computer->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf

                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Seguro que deseas eliminar este computador?')">

                                    <i class="bi bi-trash"></i>
                                    Eliminar

                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection