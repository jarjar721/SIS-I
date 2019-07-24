@extends('layouts.gentemplate')

@section('Content')

<div class="">

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Información personal <small>Datos de la cuenta</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left" action="/configuraciones/update" method="POST">
            @csrf

            <h4>Configuraciones del perfil:</h4>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Foto de perfil
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="btn btn-primary btn-upload" for="inputImage" title="Cargar imagen">
                  <input type="file" class="sr-only" value="{{old('image', Auth::user()->image)}}" id="image" accept="image/*">
                  <span class="docs-tooltip" data-toggle="tooltip" title="Cargar imagen">
                    <span class="fa fa-upload"></span>
                  </span>
                </label>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="nombre" name="nombre" class="form-control col-md-7 col-xs-12" value="{{old('nombre', $persona->nombre)}}" required="required" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_2">Segundo nombre
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="nombre_2" name="nombre_2" value="{{old('nombre_2', $persona->nombre_2)}}" class="form-control col-md-7 col-xs-12" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="apellido" name="apellido" value="{{old('apellido', $persona->apellido)}}" class="form-control col-md-7 col-xs-12" required="required" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cédula de Identidad <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" id="cedula" name="cedula" value="{{old('cedula', $persona->cedula)}}" class="form-control col-md-7 col-xs-12" disabled>
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Teléfono <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" id="telefono" name="telefono" value="{{old('telefono', $persona->telefono)}}" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="institucion">Institución
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="institucion" name="institucion" type="text" value="{{old('nombre', $institucion->nombre)}}" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Ocupacíon <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="ocupacion" name="ocupacion" type="text" class="optional form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="ln_solid"></div>

            <h4>Configuraciones de la cuenta:</h4>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="username" name="username" value="{{old('username', Auth::user()->username)}}" class="form-control col-md-7 col-xs-12" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" value="{{old('email', Auth::user()->email)}}" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Password</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="password" name="password" type="password" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="ln_solid"></div>

            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success pull-right">Guardar</button>
              </div>
            </div>
            
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection