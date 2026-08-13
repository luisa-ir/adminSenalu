@extends('layouts.app')

@section('content')

<div class="course-page">

    <div class="course-card">

        <!-- Encabezado -->
        <div class="course-header">

            <div class="course-icon">
                <i class="bi bi-book-fill"></i>
            </div>

            <div>
                <h1>Crear curso</h1>
                <p>Registra la información del nuevo curso académico</p>
            </div>

        </div>


        <!-- Formulario -->
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <!-- Número de curso -->
            <div class="form-group">

                <label for="course_number">
                    Número de curso
                </label>

                <input
                    type="number"
                    name="course number"
                    id="course_number"
                    class="form-input"
                    placeholder="Ingrese el número del curso"
                >

            </div>


            <!-- Día -->
            <div class="form-group">

                <label for="day">
                    Día
                </label>

                <input
                    type="text"
                    name="day"
                    id="day"
                    class="form-input"
                    placeholder="Ej: Lunes"
                >

            </div>


            <!-- Área -->
            <div class="form-group">

                <label for="area_id">
                    Área
                </label>

                <select
                    name="area_id"
                    id="area_id"
                    class="form-input"
                >

                    <option value="">
                        Seleccione un área
                    </option>

                    @foreach($areas as $area)

                        <option value="{{ $area->id }}">
                            {{ $area->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- Centro de formación -->
            <div class="form-group">

                <label for="training_center_id">
                    Centro de formación
                </label>

                <select
                    name="training_center_id"
                    id="training_center_id"
                    class="form-input"
                >

                    <option value="">
                        Seleccione un centro de formación
                    </option>

                    @foreach($training_centers as $training_center)

                        <option value="{{ $training_center->id }}">
                            {{ $training_center->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <!-- Botones -->
            <div class="form-actions">

                <a href="{{ route('course.list') }}" class="btn-cancel">
                    Cancelar
                </a>

                <button type="submit" class="btn-save">
                    <i class="bi bi-check-circle-fill"></i>
                    Guardar curso
                </button>

            </div>

        </form>

    </div>

</div>


<style>

/* CONTENEDOR*/

.course-page {
    padding: 20px 0 40px;
}


/*TARJETA*/

.course-card {
    max-width: 760px;
    margin: 0 auto;

    background: #ffffff;

    border-radius: 14px;

    padding: 30px 35px;

    border: 1px solid #e5e7eb;

    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}


/*ENCABEZADO*/

.course-header {
    display: flex;
    align-items: center;
    gap: 15px;

    margin-bottom: 30px;

    padding-bottom: 20px;

    border-bottom: 1px solid #eeeeee;
}

.course-icon {
    width: 48px;
    height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #e9fbed;

    color: #128c35;

    border-radius: 12px;

    font-size: 22px;
}

.course-header h1 {
    margin: 0;

    font-size: 26px;

    font-weight: 700;

    color: #1f2937;
}

.course-header p {
    margin: 4px 0 0;

    font-size: 14px;

    color: #6b7280;
}


/*CAMPOS*/

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;

    margin-bottom: 7px;

    font-size: 14px;

    font-weight: 600;

    color: #374151;
}

.form-input {
    width: 100%;

    min-height: 44px;

    padding: 10px 13px;

    border: 1px solid #d1d5db;

    border-radius: 8px;

    background: #ffffff;

    color: #374151;

    font-size: 14px;

    outline: none;

    transition: all .2s ease;
}


/* Focus */

.form-input:focus {

    border-color: #1ed14b;

    box-shadow: 0 0 0 3px rgba(30, 209, 75, 0.12);

}


/* Placeholder */

.form-input::placeholder {
    color: #9ca3af;
}


/* Select */

select.form-input {
    cursor: pointer;
}


/*BOTONES*/

.form-actions {

    display: flex;

    justify-content: flex-end;

    align-items: center;

    gap: 12px;

    margin-top: 30px;

    padding-top: 20px;

    border-top: 1px solid #eeeeee;
}


/* Cancelar */

.btn-cancel {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    min-height: 42px;

    padding: 9px 18px;

    border-radius: 8px;

    border: 1px solid #d1d5db;

    background: #ffffff;

    color: #4b5563;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    transition: .2s;
}

.btn-cancel:hover {

    background: #f3f4f6;

    color: #374151;

}


/* Guardar */

.btn-save {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    min-height: 42px;

    padding: 9px 20px;

    border: none;

    border-radius: 8px;

    background: #1ed14b;

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    transition: .2s;
}

.btn-save:hover {

    background: #128c35;

    transform: translateY(-1px);

    box-shadow: 0 4px 10px rgba(18, 140, 53, 0.25);

}


/* ESCRITORIO*/

@media (min-width: 769px) {

    .course-card {
        width: 760px;
    }

}

</style>

@endsection
