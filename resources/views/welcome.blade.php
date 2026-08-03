
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f7fb;
        }

        .hero{
            background:linear-gradient(135deg,#198754,#0d6efd);
            color:white;
            padding:50px;
            border-radius:20px;
            margin-bottom:40px;
            box-shadow:0 10px 25px rgba(0,0,0,.15);
        }

        .card{
            border:none;
            border-radius:18px;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 30px rgba(0,0,0,.18);
        }

        .icon{
            font-size:55px;
            margin-bottom:15px;
        }

        .btn{
            width:100%;
            border-radius:10px;
            font-weight:bold;
        }

        footer{
            margin-top:60px;
            color:gray;
        }
    </style>

</head>

<body>

<div class="container py-5">

    <div class="hero text-center">

        <h1 class="display-4 fw-bold">
            🎓 AdminSena
        </h1>

        <p class="lead mb-0">
            Sistema de Gestión Académica
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">📚</div>

                    <h4>Áreas</h4>

                    <p class="text-muted">
                        Registrar y administrar las áreas de formación.
                    </p>

                    <a href="/area/create" class="btn btn-success">
                        Registrar Área
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">📖</div>

                    <h4>Cursos</h4>

                    <p class="text-muted">
                        Registrar los cursos disponibles.
                    </p>

                    <a href="/course/create" class="btn btn-primary">
                        Registrar Curso
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">👨‍🏫</div>

                    <h4>Instructores</h4>

                    <p class="text-muted">
                        Administrar los instructores del sistema.
                    </p>

                    <a href="/teacher/create" class="btn btn-warning">
                        Registrar Instructor
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">👨‍🎓</div>

                    <h4>Aprendices</h4>

                    <p class="text-muted">
                        Registrar aprendices.
                    </p>

                    <a href="/apprentice/create" class="btn btn-danger">
                        Registrar Aprendiz
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">💻</div>

                    <h4>Computadores</h4>

                    <p class="text-muted">
                        Gestionar los equipos del centro.
                    </p>

                    <a href="/computer/create" class="btn btn-secondary">
                        Registrar Computador
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100 text-center">
                <div class="card-body">

                    <div class="icon">🏢</div>

                    <h4>Centros</h4>

                    <p class="text-muted">
                        Administrar los centros de formación.
                    </p>

                    <a href="/training_center/create" class="btn btn-dark">
                        Registrar Centro
                    </a>

                </div>
            </div>
        </div>

    </div>

    <footer class="text-center">

        <hr>

        <p>
            © {{ date('Y') }} <strong>AdminSena</strong><br>
            Sistema de Gestión Académica
        </p>

    </footer>

</div>

</body>
</html>
