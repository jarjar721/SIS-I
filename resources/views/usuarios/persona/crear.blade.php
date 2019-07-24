@extends('layouts.login_template')

@section('Login_Content')
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
                <input id="cedula" type="number" class="form-control" name="cedula" value="{{ old('cedula') }}" placeholder="Cédula" required />
              </div>
              <div>
                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required autocomplete="nombre" />
              </div>
              <div>
                <input id="nombre2" type="text" class="form-control" name="nombre2" value="{{ old('nombre2') }}" placeholder="Segundo nombre (Opcional)" autocomplete="nombre2" />
              </div>
              <div>
                <input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" required autocomplete="apellido" />
              </div>
              <div>
                <input id="institucion" type="text" class="form-control" name="institucion" value="{{ old('institucion') }}" placeholder="Institución (Opcional)" autocomplete="institucion" />
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
@endsection