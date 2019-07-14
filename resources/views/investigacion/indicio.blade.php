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
                <h2>{{$evento->nombre}} -> {{$sinergia->nombre}}</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <form method="POST" action="/indicio/store">
                    @csrf
                    <!-- Aquí se agregan los indicios a la sinergia de un evento-->
                    <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                    <input type="hidden" name="EveID" value="{{old('EveID', $evento->id)}}">
                    <input type="hidden" name="SinID" value="{{old('SinID', $sinergia->id)}}">
                    <div class="form-group">
                        <h4>Agregue un <b>indicio</b> a la sinergia:</h4>
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <input type="text" placeholder="Nombre" name="nombreIndicio" id="indicio-nombre" value="{{old('nombreIndicio')}}" class="form-control col-md-7 col-xs-12">
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
                <h2>Listado de los <b>indicios</b> de la <b>sinergia</b>:</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <!-- Aquí se muestran los indicios-->
                <table id="indicio-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
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
    var table = $('#indicio-table').DataTable({
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
          url: '{!! route('indicio_sinergia.data') !!}',
          "data": {
            id: {!! $investigacion->id !!},
            eveID: {!! $evento->id !!},
            sinID: {!! $sinergia->id !!}
          }
        }, 
        columns: [{
                data: 'nombre',
                name: 'nombre'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ],
    });
</script>
@endpush