<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logoheader.jpg')}}" alt="Logo" class="img-fluid" style="max-width: 50px;">
        </a>

        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">       
            <p class="mb-0 me-2">Não tem uma conta?</p>
            <a type="button" href="{{ route('register') }}" class="btn btn-outline-danger">Cria Conta</a>
        </div>
    </div>
</nav>