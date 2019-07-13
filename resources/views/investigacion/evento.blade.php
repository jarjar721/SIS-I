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
        <h2>Agregar un evento:</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        <form method="POST" action="/evento/store">
          @csrf
          <!-- Aquí se agregan los eventos-->
          <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
          <div class="form-group">
            <h4>Agregue un <b>evento</b> a la investigación:</h4>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" placeholder="Nombre" name="nombreEvento" value="{{old('nombreEvento')}}" id="evento-nombre" class="form-control col-md-7 col-xs-12" required>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <select id="claseEvento" class="form-control" name="claseEvento" required>
                <option value="" disabled selected hidden>Clase</option>
                <option value="Evento a Modificar" @if (old('claseEvento') == "Evento a Modificar") selected @endif>Evento a Modificar</option>
                <option value="Evento Causal" @if (old('claseEvento') == "Evento Causal") selected @endif>Evento Causal</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <select id="tipoEvento" class="form-control" name="tipoEvento" required>
                <option value="" disabled selected hidden>Tipo</option>
                <option value="Proceso" @if (old('tipoEvento') == "Proceso") selected @endif>Proceso</option>
                <option value="Característica" @if (old('tipoEvento') == "Característica") selected @endif>Característica</option>
                <option value="Comportamiento" @if (old('tipoEvento') == "Comportamiento") selected @endif>Comportamiento</option>
                <option value="Viviencia" @if (old('tipoEvento') == "Viviencia") selected @endif>Viviencia</option>
                <option value="Situación" @if (old('tipoEvento') == "Situación") selected @endif>Situación</option>
                <option value="Hecho" @if (old('tipoEvento') == "Hecho") selected @endif>Hecho</option>
              </select>
            </div>
          </div>

          <br>

          <div class="form-group">
            <div class="col-md-12">
              <div class="ln_solid"></div>
              <button type="submit" class="btn btn-success pull-right">Agregar</button>
            </div>
          </div>
        </form>

      </div>
    </div>

    <div class="x_panel">
      <div class="x_title">
        <h2>Listado de <b>eventos</b> de la investigación:</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <!-- Aquí se muestran los eventos-->
        <table id="evento-table" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Evento</th>
              <th>Clase</th>
              <th>Tipo</th>
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
    var table = $('#evento-table').DataTable({
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
          url: '{!! route('evento.data') !!}',
          "data": {
            id: {!! $investigacion->id !!}
          }
        },
        columns: [
            {data: 'nombre', name: 'nombre'},
            {data: 'clase', name: 'clase'},
            {data: 'tipo', name: 'tipo'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>
@endpush