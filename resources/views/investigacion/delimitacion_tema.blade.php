@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|VarelaRound|OpenSans">

@endsection

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
                <h2>Determinemos el enunciado holopráxico</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/investigacion/store">
                @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Ingrese aquí el <b>tema</b> del proyecto de investigación:</h4>
                                <input type="text" id="tema" required="required" class="form-control" name="tema"/>
                            </div>
                        </div>
                        <br />
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion" id="lista-preguntas" role="tablist" aria-multiselectable="true">

                                <div id="collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pregunta"> 
                                    <div class="panel-body"> 
                                        <div class="row"> 
                                            <div class="form-group"> 
                                                <h4>Agregue la <b>pregunta</b> de la investigación.</h4>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px">
                                                        <textarea id="pregunta" class="form-control" name="pregunta"></textarea>
                                                    </div>
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%;  margin-bottom: 20px;"> 
                                                    <label>Disciplina</label> 
                                                    <input type="text" id="disciplina" class="form-control" placeholder="Introduzca disciplina" name="disciplina" required/> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%;  margin-bottom: 20px;"> 
                                                    <label>Tipo de investigación</label> 
                                                    <select id="tipoInvestigacion" class="form-control" name="tipoInvestigacion" required> 
                                                        <option value="" disabled selected hidden>Seleccione <b>tipo</b> de investigación</option> 
                                                        <option value="3">Analítica</option> 
                                                        <option value="4">Comparativa</option> 
                                                        <option value="9">Confirmatoria</option> 
                                                        <option value="2">Descriptiva</option> 
                                                        <option value="5">Explicativa</option> 
                                                        <option value="1">Exploratoria</option> 
                                                        <option value="10">Evaluativa</option> 
                                                        <option value="8">Interactiva</option> 
                                                        <option value="6">Predictiva</option> 
                                                        <option value="7">Proyectiva</option> 
                                                    </select> 
                                                </div> 
                                                <h4>Datos de la investigación.</h4>
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%"> 
                                                    <label>Contexto</label> 
                                                    <input type="text" id="contexto" class="form-control" placeholder="Introduzca contexto" name="contexto" required /> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%"> 
                                                    <label>Unidad de estudio</label> 
                                                    <input type="text" id="unidad_estudio" class="form-control" placeholder="Introduzca unidad de estudio" name="unidad_estudio" required /> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                                    <label>Temporalidad (inicio)</label> 
                                                    <fieldset> 
                                                        <div class="control-group"> 
                                                            <div class="controls"> 
                                                                <div class="input-prepend input-group"> 
                                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
                                                                    <input type="date" name="temp_inicio" data-placeholder="Fecha inicio" id="temp_inicio" class="form-control" required/> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </fieldset> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                                    <label>Temporalidad (fin)</label> 
                                                    <fieldset> 
                                                        <div class="control-group"> 
                                                            <div class="controls"> 
                                                                <div class="input-prepend input-group"> 
                                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
                                                                    <input type="date" name="temp_fin" data-placeholder="Fecha culminación" id="temp_fin" class="form-control" required/> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </fieldset> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                                    <label>Evento</label> 
                                                    <input type="text" id="evento" class="form-control" placeholder="Introduzca evento" name="evento" required /> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                                    <label>Tipo evento</label> 
                                                    <select id="tipoEvento" class="form-control" name="tipoEvento" required> 
                                                        <option value="" disabled selected hidden>Seleccione tipo de evento</option> 
                                                        <option value="Comportamiento">Comportamiento</option> 
                                                        <option value="Hecho">Hecho</option> 
                                                        <option value="Proceso">Proceso</option> 
                                                        <option value="Situación">Situación</option> 
                                                    </select>
                                                </div> 
                                            </div> 
                                        </div> 
                                        <br> 
                                    </div> 
                                </div> 

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