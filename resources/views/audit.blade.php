@extends('layouts.gentemplate')
@section('Content')
<div class="page-title">
              <div class="title_left">
                <h3>Panel de Control <small>Auditoría</small></h3>
              </div>
            
            <div class="clearfix"></div>
            @if(Session::has('message'))
              <div class="alert alert-info"> {{Session::get('message')}} </div>
            @endif
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Auditoría</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped projects" id="aud-table">
                      <thead>
                        <tr>
                          <th>Usuario</th>
                          <th>Descripción</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>

                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection

@push('js')
<script>
    var table = $('#aud-table').DataTable({
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
        ajax: '{!! route('audit.data') !!}',
        columns: [
            {data: 'user', name: 'user'},
            {data: 'descripcion', name: 'descripcion'},
            {data: 'created_at', name: 'created_at'}
        ],
    });
</script>
@endpush