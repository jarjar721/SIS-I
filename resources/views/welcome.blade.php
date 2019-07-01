@extends('layouts.gentemplate')
@section('Content')
<div class="page-title">
              <div class="title_left">
                <h3>Panel de Control <small>Proyectos de Investigación</small></h3>
              </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Proyectos de Investigación</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Estos son los proyectos de investigación disponibles hasta la fecha:</p>

                    <!-- start project list -->
                    <table class="table table-striped projects" id="invs-table">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 60%">Tema de investigación</th>
                          <th style="width: 30%">Disciplina</th>
                          <th style="width: 19%">Opciones</th>
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
    var table = $('#invs-table').DataTable({
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
        ajax: '{!! route('inv.data') !!}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'tema', name: 'tema'},
            {data: 'disciplina', name: 'disciplina'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>
@endpush