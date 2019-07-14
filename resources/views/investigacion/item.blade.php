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
            <h2>{{$evento->nombre}} -> {{$sinergia->nombre}} -> {{$indicio->nombre}}</h2>
            <div class="clearfix"></div>
        </div>

      <div class="x_content">

        <form method="POST" action="/item/store">
          @csrf
          <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
          <input type="hidden" name="EveID" value="{{old('EveID', $evento->id)}}">
          <input type="hidden" name="SinID" value="{{old('SinID', $sinergia->id)}}">
          <input type="hidden" name="IndID" value="{{old('IndID', $indicio->id)}}">
          <!-- Aquí se agregan los itemes-->
          <div class="form-group">
            <h4>Agregue un <b>item</b> al instrumento de recolección:</h4>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" placeholder="Item" name="item" value="{{old('item')}}" id="item-descripcion" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-3 col-xs-12">
              <input type="text" placeholder="Parámetro" name="parametro" value="{{old('parametro')}}" id="item-parametro" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-3 col-xs-12">
              <input type="text" placeholder="Nivel" name="itemNivel" value="{{old('itemNivel')}}" id="item-nivel" class="form-control col-md-7 col-xs-12">
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
              <th>Instrumento</th>
              <th>Parámetros</th>
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
<script id="parametros-template" type="mustache/x-tmpl">
  @verbatim
  <div class="label label-info" style="font-size: 15px; vertical-align: 10px; line-height: 2;">Parámetros de item: <%numero%></div>
  <table class="table" id="parametros-<%id%>">
      <thead>
      <tr>
          <th>Categoría</th>
          <th>Descripción</th>
          <th>Nivel</th>
          <th>Opciones</th>
      </tr>
      </thead>
  </table>
  @endverbatim
</script>

<script>
  Mustache.tags = ["<%", "%>"];
  var template = $('#parametros-template').html();
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
      ajax: {
        url: '{!! route('item.data') !!}',
        "data": {
          id: {!! $investigacion->id !!},
          eveID: {!! $evento->id !!},
          sinID: {!! $sinergia->id !!},
          indID: {!! $indicio->id !!}
        }
      },  
      columns: [
          {data: 'numero', name: 'numero'},
          {data: 'descripcion', name: 'descripcion'},
          {data: 'instrumento', name: 'instrumento'},
          {
            "className":      'details-control',
            "orderable":      false,
            "searchable":     false,
            "data":           null,
            "defaultContent": ''
          },
          {data: 'action', name: 'action', orderable: false, searchable: false}
      ],
  });

  // Add event listener for opening and closing details
  $('#item-table tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row(tr);
      var tableId = 'parametros-' + row.data().id;
      if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
      } else {
          // Open this row
          row.child( Mustache.render(template, row.data()) ).show();
          initTable(tableId, row.data());
          console.log(row.data());
          tr.addClass('shown');
          tr.next().find('td').addClass('no-padding bg-gray');
      }
  });

  function initTable(tableId, data) {
      console.log(data);
      $('#' + tableId).DataTable({
          processing: true,
          serverSide: true,
          ajax: data.parametros_url,  
          columns: [
          { data: 'categoria', name: 'categoria' },
          { data: 'descripcion', name: 'descripcion' },
          { data: 'nivel', name: 'nivel'},
          { data: 'action', name: 'action', orderable: false, searchable: false}
          ]
      })
  }

</script>
@endpush