@extends('layouts.app')

@section('content')
    <h1>LISTAR COMPUTERS</h1>

    <div class ="container">
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
                <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo computer
                </a>
                @foreach ($computers as $computer)

                        <br>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand}}</td>


                         <td>
                            <a href="{{ route('computer.show', $computer->id) }}">Mostrar</a>
                        </td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection

