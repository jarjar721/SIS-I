@extends('layouts.login_template')

@section('Login_Content')
<div>

  <div class="login_wrapper">
    <div id="register">
      <section class="login_content">
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <h1>Regístrate</h1>
          <div>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Usuario" required autocomplete="username" />
            @error('username')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Contraseña" required autocomplete="new-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}" placeholder="Confirmar contraseña" required autocomplete="new-password" />
          </div>
          <div>
            <button type="submit" class="btn btn-default submit" style="font-size: 12px">
              {{ __('Registrarse') }}
            </button>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">¿Ya eres miembro?
              <a href="login" class="to_register"> Inicia sesión </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fas fa-pen-alt"></i>Sistema Administrativo de Investigaciones (Sis-I)</h1>
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