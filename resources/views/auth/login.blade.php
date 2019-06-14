<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema Administrativo de Investigaciones</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="{{asset('nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
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
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Usuario" required autocomplete="username" autofocus/>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="Contraseña" required autocomplete="current-password"/>
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
                <p class="change_link">¿Nuevo a Sis-I?
                  <a href="register" class="to_register"> Crear una cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fas fa-pen-alt"></i>Sistema Administrativo de Investigaciones (Sis-I)</h1>
                  <p>Proyecto de Sistemas de Base de Datos I</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>