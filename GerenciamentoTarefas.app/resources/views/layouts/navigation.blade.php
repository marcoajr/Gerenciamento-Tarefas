<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logoheader.jpg')}}" alt="Logo" class="img-fluid" style="max-width: 50px;">
        </a>

        <!-- Hamburger (mobile toggle button) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar (Navigation Links) -->
             
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
            </ul>
            
            <!-- Right Side Of Navbar (Settings Dropdown) -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- Guest Links (if applicable) -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <!-- Authenticated User Dropdown -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Responsive Navigation Menu for Mobile -->
<div class="d-md-none bg-white border-top">
    <div class="container py-3">
        @auth
            <div class="mb-3">
                <strong>{{ Auth::user()->name }}</strong><br>
                <small>{{ Auth::user()->email }}</small>
            </div>

            <!-- Logout Button for Mobile -->
            <a class="btn btn-outline-danger w-100" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('mobile-logout-form').submit();">
                {{ __('Log Out') }}
            </a>

            <form id="mobile-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endauth
    </div>
</div>
