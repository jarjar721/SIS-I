@extends('layouts.gentemplate')

@section('css')

@endsection()

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

        <div class="x_panel">
            <div class="x_title">
                <h2>Determinemos las justificaciones de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/justificacion/store">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h4>Agregue los <b>argumentos</b> que justificaran la investigación:</h4>
                                    <textarea id="argumento" class="form-control" name="argumento"></textarea>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Tipo de Argumento</label>
                                    <select id="tipo-argumento" name="tipo" class="form-control" required>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Acerca de</label>
                                    <select id="tipo-argumento" name="acerca_de" class="form-control" required>
                                        <option value="Unidad de Estudio">Unidad de Estudio</option>
                                        <option value="Contexto">Contexto</option>
                                        <option value="Temporalidad">Temporalidad</option>
                                        <option value="Evento">Evento</option>
                                        <option value="Criterio Metodológico">Criterio Metodológico</option>
                                    </select>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success pull-right">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2>Listado de <b>argumentos</b> de la justificación:</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <!-- Aquí se muestran los argumentos de la justificacion-->
                <table id="justificacion-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Argumento</th>
                            <th>Tipo de Argumento</th>
                            <th>Acerca de</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection

@push('js')

<script>
    var table = $('#justificacion-table').DataTable({
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
        ajax: {
          url: '{!! route('justificacion.data') !!}',
          "data": {
            id: {!! $investigacion->id !!}
          }
        },
        columns: [
            {data: 'argumento', name: 'argumento'},
            {data: 'tipo', name: 'tipo'},
            {data: 'acerca_de', name: 'acerca_de'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>

@endpush()