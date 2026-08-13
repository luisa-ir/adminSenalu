<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Sena</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        html,
        body {
            margin: 0;
            padding: 0;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
        }

        /* Estructura general */
        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
        }

    </style>

</head>

<body>

    <div class="page">

        <!-- Navbar -->
        @include('includes.navbar')


        <!-- Contenido -->
        <main class="main-content">

            <div class="container mt-4">

                @yield('content')

            </div>

        </main>


        <!-- Footer -->
        @include('includes.footer')

    </div>


    <!-- Dependencias JavaScript -->
    @include('includes.dependenciasbody')

</body>

</html>
