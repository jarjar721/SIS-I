@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans')}}">

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

        <div class="x_panel ">
            <div class="x_title">
                <h2>Componentes del enunciado holopráxico</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#que_saber" data-toggle="tab">¿Qué quieres saber?</a>
                        </li>
                        <li><a href="#evento" data-toggle="tab">Eventos</a>
                        </li>
                        <li><a href="#uestudio" data-toggle="tab">Unidades de estudio</a>
                        </li>
                        <li><a href="#contexto" data-toggle="tab">Contexto</a>
                        </li>
                        <li><a href="#temporalidad" data-toggle="tab">Temporalidad</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="que_saber">
                            <p class="lead">¿Qué se quiere hacer?</p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class="tab-pane" id="evento">
                            <p class="lead">¿Sobre qué se quiere hacer?</p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class="tab-pane" id="uestudio">
                            <p class="lead">¿Qué o quién manifiesta el evento?</p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class="tab-pane" id="contexto">
                            <p class="lead">¿Cuándo se manifiesta?</p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div class="tab-pane" id="temporalidad">
                            <p class="lead">¿Donde se manifiesta?</p>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>

        </div>

        <div class="x_panel">

            <div class="x_title">
                <h2>Determinemos el enunciado holopráxico</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/investigacion/store">
                @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Ingrese aquí el <b>enunciado holopráxico</b> de la investigación:</h4>
                                <textarea id="eh" required="required" class="form-control" name="eh" data-parsley-trigger="keyup"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12" style="float:left; width: 50%">
                                <label>Contexto</label>
                                <input type="text" id="contexto" class="form-control" name="contexto" required />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" style="float:left; width: 50%">
                                <label>Evento</label>
                                <input type="text" id="evento" class="form-control" name="evento" required />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" style="float:left; width: 50%">
                                <label>Temporalidad</label>
                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="input-prepend input-group">
                                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                <input type="date" name="temp_inicio" id="temp_inicio" class="form-control" style="width: 50%"/>
                                                <input type="date" name="temp_fin" id="temp_fin" class="form-control" style="width: 50%"/>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12" style="float:left; width: 50%">
                                <label>Unidad de estudio</label>
                                <input type="text" id="unidad_estudio" class="form-control" name="unidad_estudio" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="ln_solid"></div>
                                <h4>Especifique las <b>preguntas secundarias</b>:</h4>
                                <div class="row">
                                    <div class="col-md-11 col-sm-11 col-xs-12">
                                        <textarea id="ps" class="form-control" name="ps" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <button type="button" id="agregar-ps" class="btn btn-round btn-lg btn-info">+</button>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion" id="ps-list" role="tablist" aria-multiselectable="true">

                                <!-- Aqui se anexan las preguntas secundarias-->

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
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

<!-- bootstrap-daterangepicker -->
<script src="{{asset('moment/min/moment.min.js')}}"></script>
<script src="{{asset('bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{asset('bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>


<!-- Script Pregunta Secundaria -->
<script type="text/javascript">
    count_pregunta = 0;
    // all done btn
    $("#agregar-ps").click(function() {
        var ps = $("#ps").val();
        createps(ps);
    });

    //create task
    function createps(pregunta) {
        count_pregunta = count_pregunta + 1;
        var markup = '<div class="panel">' +
            '<a class="panel-heading" role="tab" id="pregunta' + count_pregunta + '" data-toggle="collapse" data-parent="#ps-list" href="#collapse' + count_pregunta + '" aria-expanded="false" aria-controls="collapse' + count_pregunta + '">' +
            '<h4 class="panel-title">' + pregunta + '<i class="borrar-pregunta fas fa-times pull-right"></i></h4>' +
            '</a>' +
            '<div id="collapse' + count_pregunta + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pregunta' + count_pregunta + '">' +
            '<div class="panel-body">' +
            '<div class="row">' +
            '<div class="form-group">' +
                '<div class="col-md-3 col-sm-3 col-xs-12" style="width: 50%">' +
                    '<label>Contexto</label>' +
                    '<input type="text" id="contexto' + count_pregunta + '" class="form-control" name="contexto' + count_pregunta + '" required />' +
                '</div>' +
                '<div class="col-md-3 col-sm-3 col-xs-12" style="width: 50%">' +
                    '<label>Evento</label>' +
                    '<input type="text" id="evento' + count_pregunta + '" class="form-control" name="evento' + count_pregunta + '" required />' +
                '</div>' +
                '<div class="col-md-3 col-sm-3 col-xs-12" style="width: 50%">' +
                    '<label>Temporalidad</label>' +
                    '<fieldset>' +
                        '<div class="control-group">' +
                            '<div class="controls">' +
                                '<div class="input-prepend input-group">' +
                                    '<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>' +
                                    '<input type="date" name="temp_inicio' + count_pregunta + '" id="temp_inicio' + count_pregunta + '" class="form-control" style="width: 50%" />' +
                                    '<input type="date" name="temp_fin' + count_pregunta + '" id="temp_fin' + count_pregunta + '" class="form-control" style="width: 50%" />' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</fieldset>' +
                '</div>' +

                '<div class="col-md-3 col-sm-3 col-xs-12" style="width: 50%">' +
                    '<label>Unidad de estudio</label>' +
                    '<input type="text" id="unidad_estudio' + count_pregunta + '" class="form-control" name="unidad_estudio' + count_pregunta + '" required />' +
                '</div>' +
            '</div>' +

            '</div>' +
            '<br>' +
            '</div>' +
            '</div>' +
            '</div>';
        $('#ps-list').append(markup);
        $('#ps').val('');
    }

    //delete done task from "already done"
    $('#ps-list').on('click', '.borrar-pregunta', function() {
        removeItem(this);
    });

    //remove done task from list
    function removeItem(element) {
        $(element).parent().parent().parent().remove();
    }
</script>

@endpush()