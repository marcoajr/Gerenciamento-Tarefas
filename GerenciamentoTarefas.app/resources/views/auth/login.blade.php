@extends('layouts.app')

@section('content')

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-xl-10">
      <!-- Row para agrupar as colunas -->
      <div class="row">
        <!-- Coluna do formulário -->
        <div class="col-lg-6">
          <div class="card-body p-md-5 mx-md-4">

            <div class="text-center">
              <img src="{{ asset('img/logo.jpg') }}" style="width: 185px;" alt="logo">
              <h4 class="mt-1 mb-5 pb-1">Bem vindo ao seu Gerenciamento de Tarefas</h4>
            </div>

            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
              @csrf
              <p>Por favor, faça login na sua conta</p>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example11">{{ __('Email:') }}</label>
                <input type="email" id="form2Example11" class="form-control" name="email" value="{{ old('email') }}"
                  placeholder="Insira o seu endereço de E-mail" required autofocus />
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form2Example22">{{ __('Senha:') }}</label>
                <input type="password" id="form2Example22" class="form-control" name="password" required />
              </div>

              <!-- Remember Me -->
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">{{ __('Lembre-me') }}</label>
              </div>

              <div class="text-center pt-1 mb-5 pb-1">
                <button type="submit" class="btn btn-primary btn-block gradient-custom-2 mb-3">Login</button>
                @if (Route::has('password.request'))
                  <a class="text-muted" href="{{ route('password.request') }}">{{ __('Esqueceu sua senha?') }}</a>
                @endif
              </div>

              <div class="d-flex align-items-center justify-content-center pb-4">
                <p class="mb-0 me-2">Não tem uma conta?</p>
                <a type="button" href="{{ route('register') }}" class="btn btn-outline-danger">Cria Conta</a>
              </div>
            </form>

          </div>
        </div>

        <!-- Coluna da Imagem -->
        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
          <div class="w-100 h-100">
            <img src="{{ asset('img/imagemdologin.jpg') }}" class="img-fluid w-100 h-100" alt="Imagem de Tarefa" style="object-fit: cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
