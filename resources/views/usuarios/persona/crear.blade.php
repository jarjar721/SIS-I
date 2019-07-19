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
    <link href="{{secure_asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="{{secure_asset('nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{secure_asset('animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{secure_asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div id="register">
          <section class="login_content">
            <form method="POST" action="/usuario/persona/store">
            @csrf

                @if(Session::has('messagedel'))
                  <div class="alert alert-danger"> {{Session::get('messagedel')}} </div>
                @endif
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Ingrese datos de su persona:</h1>
                    <div>
                        <input id="cedula" type="number" class="form-control" name="cedula" value="{{ old('cedula') }}" placeholder="Cédula" required/>
                    </div>
                    <div>
                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required autocomplete="nombre"/>
                    </div>
                    <div>
                        <input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" required autocomplete="apellido" />
                    </div>
                    <h5 style="color:red;margin-bottom:20px">Opcional</h5>
                    <div>
                      <input id="nombre2" type="text" class="form-control" name="nombre2" value="{{ old('nombre2') }}" placeholder="Segundo nombre" autocomplete="nombre2"/>
                    </div>
                    <div>
                        <input id="apellido2" type="text" class="form-control" name="apellido2" placeholder="Segundo apellido" value="{{ old('apellido2') }}" autocomplete="apellido2" />
                    </div>
                    <div>
                        <input id="institucion" type="text" class="form-control" name="institucion" value="{{ old('institucion') }}" placeholder="Institución" autocomplete="institucion"/>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit" style="font-size: 12px">
                            {{ __('Crear') }}
                        </button>
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
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