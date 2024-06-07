<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }

        .menu-item {
            margin: 0 10px;
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
        }

        .menu-item.active a {
            font-weight: bold;
            color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-3">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item menu-item">
                <a class="nav-link {{ Request::is('appointments') ? 'active' : '' }}" href="{{ route('appointments.index') }}">Agendamentos</a>
            </li>
            <li class="nav-item menu-item">
                <a class="nav-link {{ Request::is('doctors') ? 'active' : '' }}" href="{{ route('doctors.index') }}">Médicos</a>
            </li>
            <li class="nav-item menu-item">
                <a class="nav-link {{ Request::is('patients') ? 'active' : '' }}" href="{{ route('patients.index') }}">Pacientes</a>
            </li>
        </ul>
    </div>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
