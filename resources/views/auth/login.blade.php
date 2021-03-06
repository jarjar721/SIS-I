@extends('layouts.login_template')

@section('Login_Content')
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <h1>Iniciar sesión</h1>
          <div>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Usuario" required autocomplete="username" autofocus />
            @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="Contraseña" required autocomplete="current-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div>
            <button type="submit" class="btn btn-default submit" style="font-size: 12px">
              {{ __('Ingresar') }}
            </button>
            @if (Route::has('password.request'))
            <a style="color: #5A738E; margin-bottom: 10px" class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('¿Olvidó su contraseña?') }}
            </a>
            @endif
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">¿Nuevo a SIS-I?
              <a href="register" class="to_register"> Crear una cuenta </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fas fa-pen-alt"></i> Sistema Administrativo de Investigaciones (SIS-I)</h1>
              <p>Proyecto de Sistemas de Base de Datos I - UCAB 2019</p>
              <p>Adrián De Oliveira</p>
              <p>José Andrés Rodriguez</p>
            </div>
          </div>
        </form>
      </section>
    </div>

  </div>
</div>
@endsection