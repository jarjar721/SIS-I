@extends('layouts.gentemplate')
@section('Content')
<!-- internal content -->
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Roles</h3>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="x_panel">
        <div class="x_title">
          <h2>Lista <small>(Mostrando todos los existentes) </small></h2>
          <!-- Agregar -->
            <a id="add" class="btn btn-s btn-primary" style="float:right"><i class="glyphicon glyphicon-plus"></i> Agregar rol</a>

            <div id="add-div" style="width: 50%;float: right" hidden>
                <form action="/rol/store" method="POST">
                @csrf
                  <div class="form-group" style="width: 80%;float: left;">
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduzca el nombre del rol" required>
                  </div>
                  <div style="float: right">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
              </form>
            </div>
          <!-- /Agregar -->
          <div class="clearfix"></div>
        </div>
      </div>
      @if(Session::has('messagedel'))
        <div class="alert alert-danger"> {{Session::get('messagedel')}} </div>
      @elseif(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}} </div>
      @endif
      <div class="x_panel">
        <div class="x_content">

            <div class="row">

              <table class="table table-striped table-bordered dt-responsive nowrap" id="roles-table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th style="width: 128px">Acción</th>
                    </tr>
                </thead>
              </table>
            </div>

        </div>
      </div>
    </div>
<!-- /internal content -->
@stop

@push('scripts')
<script>
  $(function() {
      $('#roles-table').DataTable({
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
<script>
  $("#add").click(function() {
    $("#add").hide();
    $("#add-div").show();
  });
</script>
@endpush