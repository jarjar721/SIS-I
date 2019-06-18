@extends('layouts.gentemplate')
@section('Content')
<div class="page-title">
              <div class="title_left">
                <h3>Panel de Control <small>Proyectos de Investigación</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
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
                          <th style="width: 20%">Título de la investigación</th>
                          <th>Miembros</th>
                          <th style="width: 20%">Opciones</th>
                        </tr>
                      </thead>

                    </table>
                    <!--<script id="details-template" type="text/x-handlebars-template">
                        <div class="label label-info">Miembros de investigación @{{ _id }}</div>
                        <table class="table details-table" id="posts-@{{ _id }}">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                        </table>
                    </script>-->
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
@endsection

@push('js')
<script>
    /*var template = Handlebars.compile($("#details-template").html());*/
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
            {data: 'titulo', name: 'titulo'},
            {data: 'fk_usuario', name: 'fk_usuario'},
            /*{
                "className":      'details-control',
                "orderable":      false,
                "searchable":      false,
                "data":           null,
                "defaultContent": ''
            },*/
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });

    // Add event listener for opening and closing details
    /*$('#invs-table tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
        var tableId = 'posts-' + row.data().id;

        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(template(row.data())).show();
            initTable(tableId, row.data());
            tr.addClass('shown');
            tr.next().find('td').addClass('no-padding bg-gray');
        }
    });

    function initTable(tableId, data) {
        $('#' + tableId).DataTable({
            processing: true,
            serverSide: true,
            ajax: data.details_url,
            columns: [
                { data: 'id', name: 'id' },
                { data: 'username', name: 'username' }
            ]
        })
    }*/
</script>
@endpush