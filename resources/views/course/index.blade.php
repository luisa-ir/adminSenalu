@extends('layouts.app')

@section('content')
    <h1>LISTAR COURSES</h1>

    <div class ="container">
        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Course_number</th>
                    <th>Day</th>
                    <th>area_id</th>
                    <th>training_center_id</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <a href="{{ route('course.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nueva course
                </a>
                @foreach ($courses as $course)
                    <tr>
                        <br>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day}}</td>
                        <td>{{ $course->area_id}}</td>
                        <td>{{ $course->training_center_id}}</td>


                        <td>
                            <a href="{{ route('course.show', $course->id) }}">Mostrar</a>
                        </td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection
