@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">

@endsection()

@section('Content')

<div class="page-title">
    <div class="title_left">
        <h3>Delimitación del tema</h3>
    </div>
    <div class="title_right">
        <div class="col-md-4 col-sm-4 col-xs-12 pull-right top_search">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Cuestionario de la idea</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Cuestionario de la idea</h4>
                        </div>
                        <div class="modal-body">
                            <h4>¿Qué sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuándo sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles son las consecuencias de lo que sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hay antecedentes?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Quiénes son los involucrados?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué se espera como resultado?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo se relaciona la problematica con el contexto académico de investigación?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué me inquieta como investigador de la situación planteada?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles son las contradicciones evidentes de la situación planteada?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué se ha estudiado anteriormente acerca de esto?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué aspectos no se han estudiado y/o aún no se tiene respuesta?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles temáticas del contexto académico, industrial y/o organizacional se asocian a esta situación?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿A cuál contexto pertenece este tema?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué aspectos de este tema sobresalen en relación con la situación preocupante?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo se relacionan estos aspectos entre sí?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hay algún aspecto en particular que me interese más?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hasta dónde se pueden investigar esos aspectos?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

            <div class="x_title">
                <h2>Determinemos las justificaciones de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/investigacion/justificacion/store">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Agregue los <b>argumentos</b> que justificaran la investigación:</h4>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <textarea id="justificacion" onkeyup="stoppedTyping()" class="form-control" name="justificacion"></textarea>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Tipo de justificacion</label>
                                        <select id="tipo-justificacion" class="form-control" required>
                                            <option value="a1">A1</option>
                                            <option value="a2">A2</option>
                                            <option value="a3">A3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <button type="button" id="agregar-justificacion" class="btn btn-round btn-lg btn-info" disabled>+</button>
                                    </div>
                                    <!-- Si campo esta vacio, inhabilita el boton -->
                                    <script type="text/javascript">
                                        function stoppedTyping() {
                                            if (document.getElementById("justificacion").value === "") {
                                                document.getElementById('agregar-justificacion').disabled = true;
                                            } else {
                                                document.getElementById('agregar-justificacion').disabled = false;
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion" id="lista-justificacions" role="tablist" aria-multiselectable="true">

                                <!-- Aqui se anexan las justificacions secundarias-->

                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="hidden" id="iteracion" value="iteracion" name="iteracion" />
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-round btn-lg btn-success pull-right">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<!-- bootstrap-datetimepicker -->
<script src="{{asset('bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Script justificacion Secundaria -->
<script type="text/javascript">
    count_justificacion = 0;
    // all done btn
    $("#agregar-justificacion").click(function() {
        var justificacion = $("#justificacion").val();
        var tipo = $("#tipo-justificacion").val();
        createjustificacion(justificacion, tipo);
        document.getElementById('agregar-justificacion').disabled = true;
    });

    //create task
    function createjustificacion(justificacion, tipo) {
        count_justificacion = count_justificacion + 1;
        var markup = '<div class="panel">' +
            '<a style="min-height: 40px;" class="panel-heading" role="tab" id="justificacion' + count_justificacion + '" data-toggle="collapse" data-parent="#lista-justificacions" href="#collapse' + count_justificacion + '" aria-expanded="false" aria-controls="collapse' + count_justificacion + '">' +
            '<h4 class="panel-title">Justificación #' + count_justificacion + '<i class="borrar-justificacion fas fa-times pull-right"></i></h4>' +
            '</a>' +
            '<input type="hidden" id="argumento' + count_justificacion + '" value="' + justificacion + '" name="argumento' + count_justificacion + '"/>' +
            '<input type="hidden" id="tipo-argumento' + count_justificacion + '" value="' + tipo + '" name="tipo-argumento' + count_justificacion + '"/>' +
            '<div id="collapse' + count_justificacion + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="justificacion' + count_justificacion + '">' +
            '<div class="panel-body">' +
            '<div class="row">' +
            '<div class="form-group">' +
            
            '<div class="col-md-8 col-sm-8 col-xs-12" style="width: 50%">' +
            '<label>Argumento</label>' +
            '<h3 id="argumento' + count_justificacion + '" name="argumento' + count_justificacion + '">' + justificacion + '</h3>' +
            '</div>' +

            '<div class="col-md-8 col-sm-8 col-xs-12" style="width: 50%">' +
            '<label>Tipo de Argumento</label>' +
            '<h3 id="tipo-argumento' + count_justificacion + '" name="tipo-argumento' + count_justificacion + '">' + tipo + '</h3>' +
            '</div>' +
            
            '</div>' +
            '</div>' +
            '<br>' +
            '</div>' +
            '</div>' +
            '</div>';
        $('#lista-justificacions').append(markup);
        $('#justificacion').val('');
        document.getElementById("iteracion").value = count_justificacion;
    }

    //delete done task from "already done"
    $('#lista-justificacions').on('click', '.borrar-justificacion', function() {
        removeItem(this);
    });

    //remove done task from list
    function removeItem(element) {
        $(element).parent().parent().parent().remove();
    }
</script>

@endpush()