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
  <link href="{{secure_asset('font-awesome/css/all.css')}}" rel="stylesheet">
  <script defer src="{{secure_asset('font-awesome/js/all.js')}}"></script>
  <!-- NProgress -->
  <link href="{{secure_asset('nprogress/nprogress.css')}}" rel="stylesheet">

  <!-- iCheck -->
  <link href="{{secure_asset('iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- bootstrap-progressbar -->
  <link href="{{secure_asset('bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="{{secure_asset('bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Switchery -->
  <link href="{{secure_asset('switchery/dist/switchery.min.css')}}" rel="stylesheet">
  <!-- Datatable -->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}" />

  <!-- Custom Theme Style -->
  @if(Auth::user()->fk_rol == 1)
  <link href="{{secure_asset('build/css/admin.min.css')}}" rel="stylesheet">
  @else
  <link href="{{secure_asset('build/css/custom.min.css')}}" rel="stylesheet">
  @endif
  @yield('css')

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="/dashboard" class="site_title"><i class="fas fa-pen-alt"></i> <span>Investigaciones UCAB</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{secure_asset('images/'.Auth::user()->image)}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              @if(Auth::user()->fk_rol == 1)
              <span>Bienvenido Admin,</span>
              @else
              <span>Bienvenido,</span>
              @endif
              <h2> {{Auth::user()->username}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menú Principal</h3>
              <ul class="nav side-menu">
                <li><a><i class="fas fa-list"></i> Usuarios <span class="fas fa-chevron-down" style="float:right"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/usuario">Lista de usuarios</a></li>
                    <li><a href="/rol">Roles</a></li>
                  </ul>
                </li>
                <li><a><i class="fas fa-edit"></i> Investigación <span class="fas fa-chevron-down" style="float:right"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/investigacion/delimitacion_tema">Delimitación del Tema</a></li>
                    <li><a href="/investigacion/unidad_estudio">Unidades de Estudio</a></li>
                    <li><a href="/investigacion/poblacion_muestra">Población y Muestra</a></li>
                    <li><a href="/investigacion/unidad_informacion">Unidades de Información</a></li>
                    <li><a href="/investigacion/">Metodología</a></li>
                    <li><a href="/investigacion/item">Instrumento de Recolección</a></li>
                  </ul>
                </li>
                @if(isset($investigacion->id))
                <li><a><i class="fas fa-journal"></i> Detalles de investigación <span class="fas fa-chevron-down" style="float:right"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/investigacion/{{$investigacion->id}}/evento">Eventos</a></li>
                    <li><a href="/investigacion/{{$investigacion->id}}/justificacion">Justificación</a></li>
                    <li><a href="/investigacion/{{$investigacion->id}}/contexto">Contexto</a></li>
                    @if(isset($evento->id))
                    <li><a href="/investigacion/{{$investigacion->id}}/evento/'{{$evento->id}}/sinergia">Sinergias</a></li>
                    @if(isset($sinergia->id))
                    <li><a href="/investigacion/{{$investigacion->id}}/evento/{{$evento->id}}/sinergia/{{$sinergia->id}}/indicio">Indicios</a></li>
                    @if(isset($indicio->id))
                    <li><a href="/investigacion/{{$investigacion->id}}/evento/{{$evento->id}}/sinergia/{{$sinergia->id}}/indicio/{{$indicio->id}}/item">Items</a></li>
                    @endif
                    @endif
                    @endif
                  </ul>
                </li>
                @endif
                <li><a><i class="fas fa-chart-bar"></i> Reportes <span class="fas fa-chevron-down" style="float:right"></span></a>
                  <ul class="nav child_menu">
                    @if(Auth::user()->fk_rol == 1)
                    <li><a href="/audit">Auditoria</a></li>
                    @endif
                    @if(isset($investigacion->id))
                    <li><a href="/investigacion/MAITI/{{$investigacion->id}}">MAITI</a></li>
                    @endif
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i style="height: 25px;width: 25px;" class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{secure_asset('images/'.Auth::user()->image)}}" alt="">{{Auth::user()->username}}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li>
                    <a href="configuraciones">
                      <span>Configuraciones</span>
                    </a>
                  </li>
                  <li>
                    <a href="logout">
                      <i class="fas fa-sign-out-alt pull-right"></i> Log out
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        @yield('Content')
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Proyecto de Sistemas de Bases de Datos I - UCAB 2019
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{secure_asset('jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{secure_asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{secure_asset('fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{secure_asset('nprogress/nprogress.js')}}"></script>
  <!-- Skycons -->
  <script src="{{secure_asset('skycons/skycons.js')}}"></script>

  <!-- DateJS -->
  <script src="{{secure_asset('DateJS/build/date.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{secure_asset('moment/min/moment.min.js')}}"></script>
  <script src="{{secure_asset('bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- Switchery -->
  <script src="{{secure_asset('switchery/dist/switchery.min.js')}}"></script>
  <!-- Mustache -->
  <script type='text/javascript' src="{{secure_asset('mustache/mustache.min.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{secure_asset('build/js/custom.min.js')}}"></script>

  <!-- App scripts -->
  @stack('js')

</body>

</html>