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
        @include('layouts.home.homeNavigation')
    </head>

    <body class="font-sans antialiased bg-light">
        <div class="container">
            @yield('content') 
        </div>
        
    </body>

    <!-- Bootstrap core JS-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
       <!-- Footer-->
       <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localização</h4>
                        <p class="lead mb-0">
                            Rio de Janeiro - Brasil
                            <br />
                            Maricá-Rj, 2490000
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Nossas Redes Sociais </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><ion-icon name="logo-linkedin"></ion-icon></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Trabalhe Conosco.</h4>
                        <p class="lead mb-0">
                        Conheca nossa planos de Carreira
                            <a href="#">Clique Aqui</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; 2024 </small></div>
        </div>
</html>