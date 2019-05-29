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
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="row">

            <table class="table table-bordered" id="roles-table">
              <thead>
                  <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th style="width: 128px">Accion</th>
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
        processing: true,
        serverSide: true,
        ajax: '{!! route('rol.data') !!}',
        columns: [
            { data: 'code', name: 'code' },
            { data: 'nombre', name: 'nombre' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush