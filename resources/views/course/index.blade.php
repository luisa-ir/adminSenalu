@extends('layouts.app')

@section('content')

<div class="container mt-4">

    {{-- ENCABEZADO --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>LISTAR CURSOS</h1>

        <a href="{{ route('course.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            Nuevo curso
        </a>

    </div>


    {{-- MENSAJE DE ÉXITO --}}
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif


    {{-- ERRORES --}}
    @if ($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- TABLA --}}
    <div class="table-responsive">

        <table id="idCourse"
               class="table table-striped table-bordered"
               style="width:100%">

            <thead>

                <tr>
                    <th>ID</th>
                    <th>Número del curso</th>
                    <th>Día</th>
                    <th>Área</th>
                    <th>Centro de formación</th>
                    <th>Acciones</th>
                </tr>

            </thead>


            <tbody>

                @foreach ($courses as $course)

                    <tr>

                        {{-- ID --}}
                        <td>
                            {{ $course->id }}
                        </td>


                        {{-- NÚMERO --}}
                        <td>
                            {{ $course->course_number }}
                        </td>


                        {{-- DÍA --}}
                        <td>
                            {{ $course->day }}
                        </td>


                        {{-- ÁREA --}}
                        <td>
                            @if($course->areas)
                                {{ $course->areas->name }}
                            @else
                                {{ $course->area_id }}
                            @endif
                        </td>


                        {{-- CENTRO DE FORMACIÓN --}}
                        <td>
                            @if($course->training_centers)
                                {{ $course->training_centers->name }}
                            @else
                                {{ $course->training_center_id }}
                            @endif
                        </td>


                        {{-- ACCIONES --}}
                        <td>

                            {{-- MOSTRAR --}}
                            <a href="{{ route('course.show', $course->id) }}"
                               class="btn btn-primary btn-sm">

                                <i class="bi bi-eye"></i>
                                Mostrar

                            </a>


                            {{-- EDITAR --}}
                            <a href="{{ route('course.edit', $course->id) }}"
                               class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>
                                Editar

                            </a>


                            {{-- ELIMINAR --}}
                            <form action="{{ route('course.destroy', $course->id) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf

                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Seguro que deseas eliminar este curso?')">

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