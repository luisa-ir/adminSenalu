@extends('layouts.app')

@section('content')

<style>

/* =====================================================
   FONDO GENERAL
===================================================== */

body {
    background:
        radial-gradient(circle at 10% 10%, rgba(20,184,166,.08), transparent 30%),
        radial-gradient(circle at 90% 90%, rgba(37,99,235,.08), transparent 30%),
        #f8fafc;
}


/* =====================================================
   CONTENEDOR
===================================================== */

.welcome-container {
    max-width: 1150px;
    margin: auto;
    padding: 35px 20px 50px;
}


/* =====================================================
   CARRUSEL
===================================================== */

.carousel {
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 45px;
    box-shadow: 0 12px 35px rgba(0,0,0,.15);
}

.carousel-item {
    min-height: 270px;
}


/* DEGRADADOS DEL CARRUSEL */

.slide-one {
    background: linear-gradient(
        135deg,
        #1ed14b,
        #14b8a6,
        #2563eb
    );
}

.slide-two {
    background: linear-gradient(
        135deg,
        #2563eb,
        #06b6d4,
        #7c3aed
    );
}

.slide-three {
    background: linear-gradient(
        135deg,
        #1ed14b,
        #14b8a6,
        #7c3aed
    );
}


.carousel-content {

    min-height: 270px;

    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;

    text-align: center;

    color: white;

    padding: 40px;

}


.carousel-icon {
    font-size: 52px;
    margin-bottom: 8px;
}


.carousel-content h1 {

    font-size: 40px;

    font-weight: 800;

    margin-bottom: 8px;

    text-shadow: 0 2px 5px rgba(0,0,0,.15);
}


.carousel-content p {

    font-size: 17px;

    margin: 0;

    opacity: .95;

}


/* =====================================================
   TITULOS
===================================================== */

.section-title {

    text-align: center;

    margin-bottom: 28px;
}


.section-title h2 {

    font-size: 28px;

    font-weight: 750;

    color: #222;

    margin-bottom: 6px;
}


.section-title p {

    color: #777;

    margin: 0;
}


/* =====================================================
   MISIÓN / VISIÓN / PROPÓSITO
===================================================== */

.institutional-section {
    margin-bottom: 50px;
}


.institutional-card {

    position: relative;

    height: 100%;

    padding: 30px 25px;

    border-radius: 18px;

    background: white;

    text-align: center;

    border: 1px solid #eeeeee;

    box-shadow: 0 8px 25px rgba(0,0,0,.08);

    overflow: hidden;

    transition: .3s;
}


.institutional-card:hover {

    transform: translateY(-6px);

    box-shadow: 0 14px 32px rgba(0,0,0,.14);

}


/* LINEA SUPERIOR */

.institutional-card::before {

    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 5px;

}


.mission::before {

    background: linear-gradient(
        90deg,
        #1ed14b,
        #14b8a6
    );
}


.vision::before {

    background: linear-gradient(
        90deg,
        #2563eb,
        #7c3aed
    );
}


.purpose::before {

    background: linear-gradient(
        90deg,
        #f59e0b,
        #ec4899
    );
}


.institutional-icon {

    width: 70px;
    height: 70px;

    margin: 5px auto 18px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 20px;

    font-size: 34px;

    background: linear-gradient(
        135deg,
        #f0fdf4,
        #eff6ff
    );
}


.institutional-card h3 {

    font-size: 22px;

    font-weight: 700;

    margin-bottom: 12px;

    color: #222;
}


.institutional-card p {

    color: #666;

    font-size: 14px;

    line-height: 1.7;

    margin: 0;
}


/* =====================================================
   TARJETAS DE GESTIÓN
===================================================== */

.management-section {
    margin-bottom: 20px;
}


.management-card {

    background: white;

    border-radius: 17px;

    padding: 23px 18px;

    text-align: center;

    height: 100%;

    border: 1px solid #eeeeee;

    box-shadow: 0 7px 20px rgba(0,0,0,.09);

    transition: all .3s ease;
}


.management-card:hover {

    transform: translateY(-6px);

    box-shadow: 0 14px 30px rgba(0,0,0,.15);
}


.card-icon {

    font-size: 43px;

    margin-bottom: 8px;

    display: inline-block;
}


.management-card h4 {

    font-size: 18px;

    font-weight: 700;

    margin-bottom: 6px;

    color: #333;
}


.management-card p {

    font-size: 13px;

    color: #777;

    min-height: 38px;

    margin-bottom: 15px;
}


/* =====================================================
   BOTONES
===================================================== */

.btn-management {

    display: block;

    width: 100%;

    padding: 9px 10px;

    border-radius: 8px;

    color: white;

    text-decoration: none;

    font-size: 13px;

    font-weight: 600;

    transition: .25s;
}


.btn-management:hover {

    color: white;

    transform: scale(1.03);
}


/* VERDE */

.btn-green {

    background: linear-gradient(
        90deg,
        #1ed14b,
        #14b8a6
    );
}


/* AZUL */

.btn-blue {

    background: linear-gradient(
        90deg,
        #2563eb,
        #06b6d4
    );
}


/* MORADO */

.btn-purple {

    background: linear-gradient(
        90deg,
        #7c3aed,
        #ec4899
    );
}


/* AMARILLO */

.btn-yellow {

    background: linear-gradient(
        90deg,
        #f59e0b,
        #f97316
    );
}


/* ROJO */

.btn-red {

    background: linear-gradient(
        90deg,
        #ef4444,
        #ec4899
    );
}


/* OSCURO */

.btn-dark {

    background: linear-gradient(
        90deg,
        #374151,
        #111827
    );
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 768px) {

    .welcome-container {
        padding: 25px 15px 40px;
    }

    .carousel-item,
    .carousel-content {
        min-height: 220px;
    }

    .carousel-content h1 {
        font-size: 30px;
    }

    .carousel-icon {
        font-size: 42px;
    }

}

</style>


<div class="welcome-container">


    <!-- =================================================
         CARRUSEL PRINCIPAL
    ================================================== -->

    <div id="adminSenaCarousel"
         class="carousel slide"
         data-bs-ride="carousel"
         data-bs-interval="4000">


        <!-- INDICADORES -->

        <div class="carousel-indicators">

            <button type="button"
                    data-bs-target="#adminSenaCarousel"
                    data-bs-slide-to="0"
                    class="active">
            </button>

            <button type="button"
                    data-bs-target="#adminSenaCarousel"
                    data-bs-slide-to="1">
            </button>

            <button type="button"
                    data-bs-target="#adminSenaCarousel"
                    data-bs-slide-to="2">
            </button>

        </div>


        <div class="carousel-inner">


            <!-- SLIDE 1 -->

            <div class="carousel-item active slide-one">

                <div class="carousel-content">

                    <div class="carousel-icon">
                        🎓
                    </div>

                    <h1>
                        AdminSena
                    </h1>

                    <p>
                        Sistema de Gestión Académica
                    </p>

                </div>

            </div>


            <!-- SLIDE 2 -->

            <div class="carousel-item slide-two">

                <div class="carousel-content">

                    <div class="carousel-icon">
                        📚
                    </div>

                    <h1>
                        Gestión Académica
                    </h1>

                    <p>
                        Administra cursos, áreas,
                        instructores y aprendices.
                    </p>

                </div>

            </div>


            <!-- SLIDE 3 -->

            <div class="carousel-item slide-three">

                <div class="carousel-content">

                    <div class="carousel-icon">
                        💻
                    </div>

                    <h1>
                        Formación y Tecnología
                    </h1>

                    <p>
                        Una herramienta para organizar
                        y facilitar la gestión académica.
                    </p>

                </div>

            </div>


        </div>


        <!-- ANTERIOR -->

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#adminSenaCarousel"
                data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

            <span class="visually-hidden">
                Anterior
            </span>

        </button>


        <!-- SIGUIENTE -->

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#adminSenaCarousel"
                data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

            <span class="visually-hidden">
                Siguiente
            </span>

        </button>

    </div>



    <!-- =================================================
         MISIÓN / VISIÓN / PROPÓSITO
    ================================================== -->

    <section class="institutional-section">


        <div class="section-title">

            <h2>
                Conoce AdminSena
            </h2>

            <p>
                Tecnología al servicio de la gestión académica
            </p>

        </div>


        <div class="row g-4">


            <!-- MISIÓN -->

            <div class="col-md-4">

                <div class="institutional-card mission">

                    <div class="institutional-icon">
                        🎯
                    </div>

                    <h3>
                        Misión
                    </h3>

                    <p>
                        Facilitar la gestión de la información
                        académica mediante una plataforma
                        sencilla, organizada y accesible que
                        permita administrar eficientemente
                        los procesos de formación.
                    </p>

                </div>

            </div>


            <!-- VISIÓN -->

            <div class="col-md-4">

                <div class="institutional-card vision">

                    <div class="institutional-icon">
                        🔭
                    </div>

                    <h3>
                        Visión
                    </h3>

                    <p>
                        Consolidarnos como una herramienta
                        tecnológica confiable para la gestión
                        académica, contribuyendo a la transformación
                        digital y a la mejora continua de los
                        procesos de formación.
                    </p>

                </div>

            </div>


            <!-- PROPÓSITO -->

            <div class="col-md-4">

                <div class="institutional-card purpose">

                    <div class="institutional-icon">
                        💡
                    </div>

                    <h3>
                        Nuestro propósito
                    </h3>

                    <p>
                        Brindar una solución tecnológica que
                        permita organizar, consultar y administrar
                        la información académica de manera rápida,
                        clara y eficiente.
                    </p>

                </div>

            </div>


        </div>

    </section>



    <!-- =================================================
         MÓDULOS DE GESTIÓN
    ================================================== -->

    <section class="management-section">


        <div class="section-title">

            <h2>
                Módulos de Gestión
            </h2>

            <p>
                Selecciona el módulo que deseas administrar
            </p>

        </div>


        <div class="row g-4">


            <!-- ÁREAS -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        📚
                    </div>

                    <h4>
                        Áreas
                    </h4>

                    <p>
                        Registrar y administrar las
                        áreas de formación.
                    </p>

                    <a href="{{ route('area.create') }}"
                       class="btn-management btn-green">

                        Registrar Área

                    </a>

                </div>

            </div>



            <!-- CURSOS -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        📖
                    </div>

                    <h4>
                        Cursos
                    </h4>

                    <p>
                        Registrar los cursos
                        disponibles.
                    </p>

                    <a href="{{ route('course.create') }}"
                       class="btn-management btn-blue">

                        Registrar Curso

                    </a>

                </div>

            </div>



            <!-- INSTRUCTORES -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        🧑‍🏫
                    </div>

                    <h4>
                        Instructores
                    </h4>

                    <p>
                        Administrar los instructores
                        del sistema.
                    </p>

                    <a href="{{ route('teacher.create') }}"
                       class="btn-management btn-yellow">

                        Registrar Instructor

                    </a>

                </div>

            </div>



            <!-- APRENDICES -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        👩‍🎓
                    </div>

                    <h4>
                        Aprendices
                    </h4>

                    <p>
                        Registrar y administrar
                        los aprendices.
                    </p>

                    <a href="{{ route('apprentice.create') }}"
                       class="btn-management btn-red">

                        Registrar Aprendiz

                    </a>

                </div>

            </div>



            <!-- COMPUTADORES -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        💻
                    </div>

                    <h4>
                        Computadores
                    </h4>

                    <p>
                        Gestionar los equipos
                        del centro.
                    </p>

                    <a href="{{ route('computer.create') }}"
                       class="btn-management btn-purple">

                        Registrar Computador

                    </a>

                </div>

            </div>



            <!-- CENTROS -->

            <div class="col-md-6 col-lg-4">

                <div class="management-card">

                    <div class="card-icon">
                        🏢
                    </div>

                    <h4>
                        Centros
                    </h4>

                    <p>
                        Administrar los centros
                        de formación.
                    </p>

                    <a href="{{ route('training_center.create') }}"
                       class="btn-management btn-dark">

                        Registrar Centro

                    </a>

                </div>

            </div>


        </div>

    </section>


</div>

@endsection
