<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar navbar-expand-lg navbar-dark shadow navbar-sena">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>
            AdminSena
        </a>

        <!-- Menú -->
        <div class="ms-auto">

            <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto')}}">
                        <i class="bi bi-envelope-fill me-1"></i>
                        Contacto
                    </a>
                </li>

                <!-- Inicio -->
                <li class="nav-item me-4">

                    <a class="nav-link active" href="{{ url('/') }}">
                        <i class="bi bi-house-door-fill me-1"></i>
                        Inicio
                    </a>

                </li>


                <!-- Gestión -->
                <li class="nav-item mega-dropdown">

                    <a class="nav-link" href="#">
                        <i class="bi bi-grid-fill me-1"></i>
                        Gestión
                    </a>


                    <!-- Mega menú -->
                    <div class="mega-menu">

                        <a href="{{ route('area.list') }}">
                            <i class="bi bi-diagram-3"></i>
                            <span>Áreas</span>
                        </a>

                        <a href="{{ route('course.list') }}">
                            <i class="bi bi-book"></i>
                            <span>Cursos</span>
                        </a>

                        <a href="{{ route('teacher.list') }}">
                            <i class="bi bi-person-workspace"></i>
                            <span>Instructores</span>
                        </a>

                        <a href="{{ route('apprentice.list') }}">
                            <i class="bi bi-people"></i>
                            <span>Aprendices</span>
                        </a>

                        <a href="{{ route('computer.list') }}">
                            <i class="bi bi-pc-display"></i>
                            <span>Equipos</span>
                        </a>

                        <a href="{{ route('training_center.list') }}">
                            <i class="bi bi-building"></i>
                            <span>Centros</span>
                        </a>

                    </div>

                </li>

            </ul>

        </div>

    </div>

</nav>


<style>

/* =========================================
   NAVBAR
========================================= */

.navbar-sena {

    padding: 14px 0;

    background: linear-gradient(
        90deg,
        #128C35,
        #1ED14B
    );

}


/* =========================================
   LOGO
========================================= */

.navbar-brand {

    font-weight: 700;

    letter-spacing: .5px;

    color: #fff !important;

}

.navbar-brand i {

    color: #fff;

}


/* =========================================
   LINKS
========================================= */

.nav-link {

    color: #fff !important;

    font-size: 16px;

    font-weight: 600;

    transition: .3s;

    padding: 8px 15px;

    border-radius: 8px;

}


/* Hover */

.nav-link:hover {

    background: rgba(255,255,255,.18);

    color: #fff !important;

}


/* =========================================
   MEGA DROPDOWN
========================================= */

.mega-dropdown {

    position: relative;

}


/* Menú */

.mega-menu {

    position: absolute;

    top: 110%;

    right: 0;

    width: 430px;

    display: none;

    grid-template-columns: repeat(2,1fr);

    gap: 12px;

    padding: 18px;

    background: #fff;

    border-radius: 15px;

    box-shadow: 0 15px 35px rgba(0,0,0,.18);

    z-index: 1000;

}


/* Mostrar */

.mega-dropdown:hover .mega-menu {

    display: grid;

}


/* =========================================
   OPCIONES DEL MENÚ
========================================= */

.mega-menu a {

    display: flex;

    align-items: center;

    gap: 12px;

    text-decoration: none;

    color: #333;

    padding: 12px;

    border-radius: 10px;

    transition: .25s;

}


/* Hover opción */

.mega-menu a:hover {

    background: #1ED14B;

    color: #fff;

    transform: translateY(-2px);

}


/* Iconos */

.mega-menu i {

    font-size: 24px;

    color: #128C35;

}


/* Icono al pasar */

.mega-menu a:hover i {

    color: #fff;

}


/* =========================================
   INICIO ACTIVO
========================================= */

.nav-link.active {

    background: rgba(255,255,255,.18);

    color: #fff !important;

}

</style>
