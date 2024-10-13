<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        
    </head>

    <body class="font-sans antialiased bg-light">
        @auth
        <div class="sidebar">
            <h4>Menu do Administrador</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"> Dashboard </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Usuários </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Configurações </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Relátorios </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Sair </a>
                </li>
            </ul>
        </div>
        @endauth
        
        <div class="content">
            

            <div class="container">
                @include('layouts.navigation')
                @yield('content') 
            </div>

        </div>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>

