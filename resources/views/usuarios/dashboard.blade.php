@extends('layouts.gentemplate')
@section('Content')
<!-- page content -->
  <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Dashboard</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">

          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Perfil {{Auth::user()->name}} <small>Modifique su perfil</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
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
                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="id" hidden type="number">
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre de usuario <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="{{old('name', Auth::user()->name)}}" name="name" placeholder="Usuario ej: Jon Doe" type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label for="email" class="control-label col-md-3">Correo</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="email" type="email" name="email" value="{{old('email', Auth::user()->email)}}" class="form-control col-md-7 col-xs-12">
                  </div>
                <div class="item form-group">
                  <label for="password" class="control-label col-md-3">Contraseña</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="password" type="password" name="password" value="{{old('password', Auth::user()->password)}}" data-validate-length="6,8" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button type="submit" class="btn btn-success">Modificar</button>
                </div>
                <!-- /User data -->
              </div>
            </div>
          </div>
        </div>
  </div>
<!-- /page content -->
@endsection