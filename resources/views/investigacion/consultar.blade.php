@extends('layouts.gentemplate')

@section('css')

    <!-- Datatables -->
    <link href="{{asset('datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

@endsection

@section('Content')
    <div class="page-title">
        <div class="title_left">
        <h3>Titulo de la investigación aquí</h3>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Holograma de la investigación -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Holograma de la investigación</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <!-- Tabla holopráxica -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Tabla holopráxica</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <!-- Tabla de operacionalización -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Tabla de operacionalización</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    This example shows FixedHeader being styling by the Bootstrap CSS framework.
                </p>
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Definición conceptual</th>
                        <th>Definición operacional</th>
                        <th>Sinergias</th>
                        <th>Indicios</th>
                        <th>Fuentes</th>
                        <th>Ítemes</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de especificaciones -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Tabla de especificaciones</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <!-- Tablas de población y muestra -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Tablas de población y muestra</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <!-- Tabla de argumentos de la justificación -->
        <div class="x_panel">
            <div class="x_title">
            <h2>Tabla de argumentos de la justificación</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
            <h2>Plain Page 7</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
            <h2>Plain Page 8</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
            <h2>Plain Page 9</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
            <h2>Plain Page 10</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>                
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page ...
            </div>
        </div>

        </div>
    </div>
@endsection

@section('js')

    <!-- Datatables -->
    <script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('pdfmake/build/vfs_fonts.js')}}"></script>

@endsection