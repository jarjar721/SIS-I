@extends('layouts.gentemplate')
@section('Content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <h4>(AQUE VA EL TEMA DE LA INVESTIGACION)</h4>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel">
      <div class="x_title">
        <h2>Agregar un ítemes:</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        <form method="POST" action="/item/store">
          @csrf
          <!-- Aquí se agregan los eventos-->
          <div class="form-group">
            <h4>Agregue un <b>item</b> al instrumento de recolección:</h4>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" placeholder="Item" id="item-descripcion" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-3 col-xs-12">
              <input type="text" placeholder="Parámetro" id="item-parametro" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-3 col-xs-12">
              <input type="text" placeholder="Nivel" id="item-nivel" class="form-control col-md-7 col-xs-12">
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
        <h2>Listado de <b>items</b> del instrumento de recolección:</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <!-- Aquí se muestran los eventos-->
        <table id="item-table" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Número</th>
              <th>Item</th>
              <th>Parámetro</th>
              <th>Nivel</th>
              <th>Indicio que mide</th>
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
    var table = $('#item-table').DataTable({
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
        ajax: '{!! route('item.data') !!}',
        columns: [
            {data: 'numero', name: 'numero'},
            {data: 'item', name: 'item'},
            {data: 'parametro', name: 'parametro'},
            {data: 'nivel', name: 'nivel'},
            {data: 'indicio', name: 'indicio', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],
    });
</script>
@endpush