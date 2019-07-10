@extends('layouts.gentemplate')

@section('css')

@endsection

@section('Content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <h4>{{$investigacion->tema}}</h4>
        </div>
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
                <p>{{$enunciado_holopraxico->pregunta}}</p>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Objetivo Principal -->
        <div class="x_panel">
            <div class="x_title">
                <h2>Objetivo Principal <small>Objetivo General</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p>{{$objetivo_general->objetivo}}</p>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12 col-xs-12">

        <!-- Preguntas y Objetivos Secundarios -->
        <div class="x_panel">
            <div class="x_title">
                <h2>Preguntas y Objetivos Secundarios</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start objetivos y preguntas secundarias -->
                <table class="table table-striped projects" id="pregunta_objetivo_2-table">
                    <thead>
                        <tr>
                            <th>Pregunta Directriz</th>
                            <th>Objetivo Secundario</th>
                            <th>Estadio</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                </table>

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
            <h2>Tabla Holopráxica</h2>
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
            <h2>Tabla de Operacionalización</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="tabla_operacionalizacion-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Sinergias</th>
                        <th>Indicios</th>
                        <th>Ítemes</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Tabla de especificaciones -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Tabla de Especificaciones</h2>
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
            <h2>Tablas de Población y Muestra</h2>
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

@push('js')

<script>
    var table = $('#pregunta_objetivo_2-table').DataTable({
        language: {
            "emptyTable": "No hay datos disponibles en la tabla",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        processing: true,
        serverSide: true,
        ajax: '/pregunta_objetivo_2/{{$investigacion->id}}',
        columns: [{
                data: 'pregunta_secundaria',
                name: 'pregunta_secundaria'
            },
            {
                data: 'objetivo',
                name: 'objetivo'
            },
            {
                data: 'estadio',
                name: 'estadio'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
    });

    var table = $('#tabla_operacionalizacion-table').DataTable({
        language: {
            "emptyTable": "No hay datos disponibles en la tabla",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        processing: true,
        serverSide: true,
        ajax: '/tabla_operacionalizacion/{{$investigacion->id}}',
        columns: [{
                data: 'evento',
                name: 'evento'
            },
            {
                data: 'sinergia',
                name: 'sinergia'
            }
        ],
    });

</script>

@endpush