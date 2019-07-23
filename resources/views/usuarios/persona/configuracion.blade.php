@extends('layouts.gentemplate')

@section('Content')
<!-- page content -->
<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Configuraciones de la cuenta <small>Account settings</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!--Subir imagen-->
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        <img src="images/{{ Session::get('image') }}">
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> Ha ocurrido un problema con su imagen.
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <h4>Cambiar imagen</h4>
        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="file" name="image" value="{{old('image', Auth::user()->image)}}" class="form-control">
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="submit" class="btn btn-success">Subir</button>
            </div>

          </div>
        </form>
        <!-- /Subir imagen -->
        <h4>Modificar datos</h4>
        <!-- User data -->
        <form action="/usuario/update" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="item form-group col-md-12">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Nombre de usuario <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="{{old('username', Auth::user()->username)}}" name="username" placeholder="Usuario ej: Jon Doe" type="text">
            </div>
          </div>
          <div class="item form-group col-md-12">
            <label for="email" class="control-label col-md-3">Correo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email" type="email" name="email" value="{{old('email', Auth::user()->email)}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group col-md-12">
            <label for="password" class="control-label col-md-3">Contraseña</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
            <button type="submit" class="btn btn-success pull-right">Modificar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection