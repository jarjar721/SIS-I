@extends('layouts.gentemplate')
@section('Content')

<div class="page-title">
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel">
      <div class="x_title">
        <h2>Describa las <b>sinergias e indicios</b> de los eventos:</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        <div class="accordion" id="lista-eventos" role="tablist" aria-multiselectable="true">

          <!-- Aquí se agregan los paneles de los eventos-->
          <div class="panel"><a class="panel-heading" role="tab" id="eventoejemplo" data-toggle="collapse" data-parent="#lista-eventos" href="#collapseejemplo" aria-expanded="false" aria-controls="collapseejemplo">
              <h4 class="panel-title">' + nombre + ' <small>Temática de la investigación</small><i class="borrar-evento fa fa-close pull-right"></i></h4>
            </a>
            <div id="collapseejemplo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="eventoejemplo">
              <div class="panel-body">

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4><b>Descripcion de la clase de evento</b></h4>
                    <textarea id="descripcion-clase-evento" class="form-control" name="descripcion-clase-evento" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="row">
                  <h4>Especifique los <b>eventos intervinientes</b> de esta clase de evento:</h4>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                    <input type="text" placeholder="Nombre" id="sinergia-nombre" class="form-control col-md-7 col-xs-12">
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <textarea id="descripcion-tipo-evento" placeholder="Descripción" class="form-control" name="descripcion-clase-evento" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <select class="form-control">
                      <option>Tipo</option>
                      <option>Proceso</option>
                      <option>Caracterìstica</option>
                      <option>Comportamiento</option>
                      <option>Viviencia</option>
                      <option>Situación</option>
                      <option>Hecho</option>
                    </select>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-12">
                    <button type="button" id="agregar-sinergia" class="btn btn-round btn-md btn-info">+</button>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="accordion" id="lista-sinergia" role="tablist" aria-multiselectable="true">

                    <!-- Aquí se agregan los paneles de las sinergias-->
                    <div class="panel"><a class="panel-heading" role="tab" id="sinergiaejemplo" data-toggle="collapse" data-parent="#lista-sinergia" href="#collapsesinergia" aria-expanded="false" aria-controls="collapsesinergia">
                        <h4 class="panel-title">Sinergia Ejemplo<i class="borrar-evento fa fa-close pull-right"></i></h4>
                      </a>
                      <div id="collapsesinergia" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="sinergiaejemplo">
                        <div class="panel-body">

                          <div class="row">
                            <div class="col-md-11 col-sm-11 col-xs-12">
                              <h4>Especifique los <b>indicios</b> de esta sinergia:</h4>
                              <input type="text" placeholder="Agregue los indicios de este evento" id="indicio-nombre" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                              <button type="button" id="agregar-indicio" class="btn btn-round btn-md btn-info">+</button>
                            </div>
                          </div>

                          <br>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

@endsection

@section('js')

<!-- Script Pregunta Secundaria -->

<script type="text/javascript">
  count_evento = 0;
  count_sinergia = 0;

  // all done btn
  $("#agregar-evento").click(function() {
    var nombre = $("#evento-nombre").val();
    var descripcion = $("#evento-descripcion").val();
    createevento(nombre, descripcion);
  });

  //create task
  function createevento(nombre, descripcion) {
    count_evento = count_evento + 1;
    var markup = '<div class="panel"><a class="panel-heading" role="tab" id="evento' + count_evento + '" data-toggle="collapse" data-parent="#lista-eventos" href="#collapse' + count_evento + '" aria-expanded="false" aria-controls="collapse' + count_evento + '"><h4 class="panel-title">' + nombre + ' <small>Aquí va el tipo de evento</small><i class="borrar-evento fa fa-close pull-right"></i></h4></a><div id="collapse' + count_evento + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="evento' + count_evento + '"><div class="panel-body">' +
      '<div class="row">' +
      '<h4><b>Descripcion del evento</b></h4>' +
      '<p>' + descripcion + '</p>' +
      '<div class="col-md-11 col-sm-11 col-xs-12">' +
      '<h4>Especifique las <b>sinergias</b> del evento:</h4>' +
      '<input type="text" placeholder="Agregue las sinergias del evento" id="sinergia-nombre" required="required" class="form-control col-md-7 col-xs-12">' +
      '<button type="button" id="agregar-sinergia" class="btn btn-round btn-md btn-info pull-right">+</button>' +
      '</div>' +
      '</div>' +
      '<br>' +
      '</div></div></div>';
    $('#lista-eventos').append(markup);
    $("#evento-nombre").val('');
    $("#evento-descripcion").val('');
  }

  // all done btn
  $("#agregar-sinergia").click(function() {
    var nombre = $("#sinergia-nombre").val();
    createsinergia(nombre);
  });

  function createsinergia(nombre) {
    count_sinergia = count_sinergia + 1;
    var markup = '<div class="panel"><a class="panel-heading" role="tab" id="sinergia' + count_sinergia + '" data-toggle="collapse" data-parent="#lista-sinergia" href="#collapse-sinergia' + count_sinergia + '" aria-expanded="false" aria-controls="collapse-sinergia' + count_sinergia + '"><h4 class="panel-title">' + nombre + '<i class="borrar-sinergia fa fa-close pull-right"></i></h4></a><div id="collapse-sinergia' + count_sinergia + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="sinergia' + count_sinergia + '"><div class="panel-body"><h4>Collapsible Body #1</h4></div></div></div>';
    $('#lista-sinergia').append(markup);
    $("#sinergia-nombre").val('');
  }

  //delete done task from "already done"
  $('#lista-eventos').on('click', '.borrar-evento', function() {
    removeItem(this);
  });

  $('#lista-eventos').on('click', '.borrar-sinergia', function() {
    removeItem(this);
  });

  //remove done task from list
  function removeItem(element) {
    $(element).parent().parent().parent().remove();
  }
</script>

@endsection()