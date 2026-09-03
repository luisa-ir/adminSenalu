<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | AdminSenalu</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a, #134e4a);
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .25);
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo h1 {
            color: #0f766e;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .logo p {
            color: #64748b;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #334155;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            border-color: #0f766e;
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 9px;
            background: #0f766e;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #115e59;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #94a3b8;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="logo">
        <h1>AdminSenalu</h1>
        <p>Gestión administrativa</p>
    </div>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="admin@adminsenalu.test"
                required
                autofocus
            >
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required
            >
        </div>

        <button type="submit" class="btn-login">
            Iniciar sesión
        </button>
    </form>

    <div class="footer">
        AdminSenalu © {{ date('Y') }}
    </div>

</div>

</body>
</html>