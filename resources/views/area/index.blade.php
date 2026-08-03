@extends('layouts.app')

@section('content')
    <h1>LISTAR AREA</h1>

    <div class ="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>


                    <th>Id</th>
                    <th>Name</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <a href="{{ route('area.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva area
                </a>
                @foreach ($areas as $area)
                    <tr>
                        <br>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>


                     <td><a href="{{ route('area.show', $area->id) }}">Mostrar</a></td>


                        <td><a href="{{ route('area.edit', $area->id) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('area.destroy', $area->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-success">Eliminar area:</button>
                            </form>
                        </td>


                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection<
