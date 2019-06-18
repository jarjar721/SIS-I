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
        <h3>{{$investigacion->titulo}}</h3>
    </div>

</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Enunciado Holopráxico -->
        <div class="x_panel">
            <div class="x_title">
                <h2>Enunciado Holopráxico <small>Pregunta Principal</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page...
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xs-12">

        <!-- Preguntas secundarias -->
        <div class="x_panel">
            <div class="x_title">
                <h2>Preguntas Directrices <small>Preguntas Secundarias</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page...
            </div>
        </div>

    </div>

    <div class="col-md-6 col-xs-12">

        <!-- Objetivos -->
        <div class="x_panel">
            <div class="x_title">
                <h2>Objetivos <small>Objetivos de la Investigación</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Add content to the page...
            </div>
        </div>

    </div>

</div>

<div class="row">

    <!-- Tabla de Argumentos de la Justificación -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla de Argumentos de la Justificación</h2>
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

<div class="row">

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