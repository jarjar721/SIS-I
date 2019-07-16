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
                <h2>Determinemos los contextos de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/contexto/store">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Agregue los <b>contextos</b> a la investigación:</h4>
                                <input type="text" id="contexto" class="form-control" name="contexto">
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
                <h2>Listado de <b>contextos</b> de la investigación:</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <!-- Aquí se muestran los Contextos de la investigación-->
                <table id="contexto-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Contexto</th>
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
    var table = $('#contexto-table').DataTable({
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
          url: '{!! route('contexto.data') !!}',
          "data": {
            id: {!! $investigacion->id !!}
          }
        },
        columns: [
            {data: 'contexto', name: 'contexto'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>

@endpush()