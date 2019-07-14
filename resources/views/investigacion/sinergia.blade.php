@extends('layouts.gentemplate')
@section('Content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <h4>{{$investigacion->tema}}</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if(Session::has('message'))
            <div class="alert alert-danger"> {{Session::get('message')}} </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2>{{$evento->nombre}}</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <form method="POST" action="/sinergia/store">
                    @csrf
                    <!-- Aquí se agregan las sinergias de un evento-->
                    <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                    <input type="hidden" name="EveID" value="{{old('EveID', $evento->id)}}">
                    <div class="form-group">
                        <h4>Agregue una <b>sinergia</b> al evento:</h4>
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <input type="text" placeholder="Nombre" name="nombreSinergia" id="sinergia-nombre" value="{{old('nombreSinergia')}}" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success pull-right">Agregar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="x_panel">
            <div class="x_title">
                <h2>Listado del <b>evento</b> y sus <b>sinergias</b> de la investigación:</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <!-- Aquí se muestran las sinergias-->
                <table id="sinergia-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sinergia</th>
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
    var table = $('#sinergia-table').DataTable({
        language: {
            "emptyTable": "No hay datos disponible en la tabla",
            "search": "Buscar:",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "lengthMenu": "Mostrar _MENU_ entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "paginate": {
                "first": "Primera",
                "last": "Última",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        },
        processing: true,
        serverSide: true,
        ajax: {
          url: '{!! route('sinergia_evento.data') !!}',
          "data": {
            id: {!! $investigacion->id !!},
            eveID: {!! $evento->id !!}
          }
        },
        columns: [
            {data: 'nombre', name: 'nombre'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>
@endpush