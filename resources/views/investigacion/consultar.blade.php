@extends('layouts.gentemplate')
@section('Content')
<div class="">
    <div class="page-title">
    <div class="title_left">
        <h3>Investigación</h3>
    </div>
    </div>
    <div class="clearfix"></div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Consulta <small>Revise la investigación</small></h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_content">
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
                <table id="inves-table" class="table table-striped table-bordered dt-responsive nowrap">
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
</div>
@endsection

@section('scripts')

    <script>
        $(function() {
            $('#inves-table').DataTable({
                language: {
                        "emptyTable": "No hay datos disponible en la tabla",
                        "search": "Buscar:",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                        "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
                        "lengthMenu":     "Mostrar _MENU_ entradas",
                        "loadingRecords": "Cargando...",
                        "processing":     "Procesando...",
                        "paginate": {
                            "first":      "Primera",
                            "last":       "Última",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        },
                    },
                processing: true,
                serverSide: true,
                ajax: '{!! route('rol.data') !!}',
                columns: [
                    { data: 'code', name: 'code' },
                    { data: 'nombre', name: 'nombre' },
                    { data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>

@endsection