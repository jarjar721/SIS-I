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

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
          
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Subir</button>
                        </div>

                    </div>
                </form>
                <!-- /Subir imagen -->
                <h4>Modificar datos</h4>
                <!-- User data -->
                
                <!-- /User data -->
              </div>
            </div>
          </div>
        </div>
  </div>
<!-- /page content -->
@endsection