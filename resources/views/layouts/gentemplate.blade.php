<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Administración de Investigaciones</title>

    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}"/>
    <!-- Font Awesome -->
    <link href="{{asset('font-awesome/css/all.css')}}" rel="stylesheet">
    <script defer src="{{asset('font-awesome/js/all.js')}}"></script>
    <!-- NProgress -->
    <link href="{{asset('nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  
    <!-- Custom Theme Style -->
    @if(Auth::user()->fk_rol == 1) 
      <link href="{{asset('build/css/admin.min.css')}}" rel="stylesheet">
    @else 
      <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    @endif
    @yield('css')

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fas fa-pen-alt"></i> <span>Investigaciones UCAB</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/'.Auth::user()->image)}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                  @if(Auth::user()->fk_rol == 1) 
                    <span>Bienvenido admin,</span>
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
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li><a href="/usuario">Lista de Usuarios</a></li>
                        <li><a href="/rol">Roles</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fas fa-edit"></i> Investigación <span class="fas fa-chevron-down" style="float:right"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="/investigación/delimitación_tema">Delimitación del Tema</a></li>
                        <li><a href="/investigación/">Eventos</a></li>
                        <li><a href="/investigación/">Unidades de Información</a></li>
                        <li><a href="/investigación/">Justificaciones</a></li>
                        <li><a href="/investigación/">Metodología</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fas fa-chart-bar"></i> Reportes <span class="fas fa-chevron-down" style="float:right"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="chartjs.html">Chart JS</a></li>
                        <li><a href="chartjs2.html">Chart JS2</a></li>
                        <li><a href="morisjs.html">Moris JS</a></li>
                        <li><a href="echarts.html">ECharts</a></li>
                        <li><a href="other_charts.html">Other Charts</a></li>
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
                    <img src="{{asset('images/'.Auth::user()->image)}}" alt="">{{Auth::user()->username}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout"><i class="fas fa-sign-out-alt pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-envelope"></i>
                    <span class="badge bg-blue">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
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
        <!-- page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="{{asset('DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('DataTables-1.10.18/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('nprogress/nprogress.js')}}"></script>
    <!-- Chart.js')}} -->
    <script src="{{asset('Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js')}} -->
    <script src="{{asset('gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('moment/min/moment.min.js')}}"></script>
    <script src="{{asset('bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- App scripts -->
    @stack('scripts')
    @stack('js')

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
	
  </body>
</html>