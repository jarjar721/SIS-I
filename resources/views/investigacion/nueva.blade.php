@extends('layouts.gentemplate')
@section('Content')
<!-- internal content -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Investigación</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Nueva <small>Defina temática de la investigación</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Smart Wizard -->
            <p>Responda las siguientes preguntas para identificar una condición temática y definir el problema:</p>
            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps">
                <li>
                  <a id="btn-step-1" style="cursor:pointer">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                                      Paso 1<br />
                                      <small>Idea</small>
                                  </span>
                  </a>
                </li>
                <li>
                  <a id="btn-step-2" style="cursor:pointer">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                                      Paso 2<br />
                                      <small>Step 2 description</small>
                                  </span>
                  </a>
                </li>
                <li>
                  <a id="btn-step-3" style="cursor:pointer">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                                      Paso 3<br />
                                      <small>Step 3 description</small>
                                  </span>
                  </a>
                </li>
                <li>
                  <a id="btn-step-4" style="cursor:pointer">
                    <span class="step_no">4</span>
                    <span class="step_descr">
                                      Paso 4<br />
                                      <small>Step 4 description</small>
                                  </span>
                  </a>
                </li>
              </ul>
              <div class="" id="step-1">
                <h2 class="StepTitle">Identifiquemos las condiciones</h2>
                <form class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué sucede?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuándo sucede?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo sucede?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles son las consecuencias de lo que sucede?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hay antecedentes?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Quiénes son los involucrados?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se espera como resultado?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Contexto académico de investigación:</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="select2_group form-control">
                            <optgroup label="Bachillerato">
                                <option value="PFBA">Programa de Formación</option>
                                <option value="TIBA">Trabajo de Investigación</option>
                                <option value="TGBA">Tesis de Grado/Bachiller</option>
                            </optgroup>
                            <optgroup label="Universitario (Pregrado)">
                                <option value="PFPR">Programa de Formación</option>
                                <option value="TIPR">Trabajo de Investigación</option>
                                <option value="TGPR">Tesis de Grado</option>
                            </optgroup>
                            <optgroup label="Universitario (Posgrado)">
                                <option value="PFPO">Programa de Formación</option>
                                <option value="TIPO">Trabajo de Investigación</option>
                                <option value="TGPO">Tesis de Grado</option>
                            </optgroup>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo se relaciona la problematica con el contexto académico de investigación?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>

                </form>

              </div>
              <div class="" id="step-2" hidden>
                <form class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué me inquieta como investigador de la situación planteada?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles son las contradicciones evidentes de la situación planteada?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se ha estudiado anteriormente acerca de esto?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué aspectos no se han estudiado y/o aún no se tiene respuesta?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles temáticas del contexto académico, industrial y/o organizacional se asocian a esta situación?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿A cuál contexto pertenece este tema?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>

                </form>
              </div>
              <div class="" id="step-3" hidden>
                <form class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué aspectos de este tema sobresalen en relación con la situación preocupante?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo se relacionan estos aspectos entre sí?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hay algún aspecto en particular que me interese más?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hasta dónde se pueden investigar esos aspectos?</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                    </div>

                </form>                        
              </div>
              <div class="" id="step-4" hidden>
                <h2 class="StepTitle">Elementos básicos del problema de investigación</h2>
                <form class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se quiere hacer?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Sobre qué se quiere hacer?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué o quién manifiesta el evento?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuándo se manifiesta?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Donde se manifiesta?</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                        data-parsley-validation-threshold="10"></textarea>
                    </div>
                  </div>

                </form>
              </div>

            </div>
            <!-- End SmartWizard Content -->

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /page content -->
@endsection

@push('scripts')
    <script>
        $("#btn-step-1").click(function() {
          $("#step-1").fadeIn(800);
          $("#step-2").hide();
          $("#step-3").hide();
          $("#step-4").hide();
        });
        $("#btn-step-2").click(function() {
          $("#step-1").hide();
          $("#step-2").fadeIn(800);
          $("#step-3").hide();
          $("#step-4").hide();
        });
        $("#btn-step-3").click(function() {
          $("#step-1").hide();
          $("#step-2").hide();
          $("#step-3").fadeIn(800);
          $("#step-4").hide();
        });
        $("#btn-step-4").click(function() {
          $("#step-1").hide();
          $("#step-2").hide();
          $("#step-3").hide();
          $("#step-4").fadeIn(800);
        });
    </script>
@endpush