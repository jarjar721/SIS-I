@extends('layouts.gentemplate')
@section('Content')
<!-- internal content -->
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Intituciones</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="x_panel">
        <div class="x_title">
            <h2>Lista <small>(Mostrando todos los existentes) </small></h2>
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

                <table class="table table-striped table-bordered dt-responsive nowrap" id="inst-table">	
                    <thead>
                        <tr>
                            <th>Intituciones</th>
                            <th>Investigaciones</th>
                            <th style="width:128px; text-align:center">Acción</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
      </div>
    </div>
<!-- /internal content -->
@endsection

@push('scripts')
<script>
    $(function() {
        $('#inst-table').DataTable({
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
            ajax: '{!! route('inst.data') !!}',
            columns: [
                { data: 'institucion', name: 'institucion' },
                { data: 'investigacion', name: 'investigacion' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush