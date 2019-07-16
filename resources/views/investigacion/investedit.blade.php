@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|VarelaRound|OpenSans">

@endsection

@section('Content')

<div class="page-title">
    <div class="title_left">
        <h3>Investigación: {{$investigacion->tema}}</h3>
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
                <form method="POST" action="/investigacion/edit">
                @csrf
                    <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                    <input type="hidden" name="PID" value="{{old('PID', $pregunta->id)}}">
                    <input type="hidden" name="TID" value="{{old('TID', $temp->id)}}">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Ingrese aquí el <b>tema</b> del proyecto de investigación:</h4>
                                <input type="text" id="tema" required="required" class="form-control" name="tema" value="{{old('tema', $investigacion->tema)}}"/>
                            </div>
                        </div>
                        <br />
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion" id="lista-preguntas" role="tablist" aria-multiselectable="true">

                                <div id="collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pregunta"> 
                                    <div class="panel-body"> 
                                        <div class="row"> 
                                            <div class="form-group"> 
                                                <h4>Modifique la <b>pregunta</b> de la investigación.</h4>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px">
                                                        <textarea id="pregunta" class="form-control" name="pregunta" value="{{old('pregunta', $pregunta->pregunta)}}"></textarea>
                                                    </div>
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%;  margin-bottom: 20px;"> 
                                                    <label>Disciplina</label> 
                                                    <input type="text" id="disciplina" class="form-control" placeholder="Introduzca disciplina" name="disciplina" value="{{old('disciplina', $investigacion->disciplina)}}" required/> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12" style="width: 50%;  margin-bottom: 20px;"> 
                                                    <label>Tipo de investigación</label> 
                                                    <select id="tipoInvestigacion" class="form-control" name="tipoInvestigacion" required> 
                                                        <option value="" disabled selected hidden>Seleccione <b>tipo</b> de investigación</option> 
                                                        <option value="3" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "3") selected @endif>Analítica</option> 
                                                        <option value="4" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "4") selected @endif>Comparativa</option> 
                                                        <option value="9" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "9") selected @endif>Confirmatoria</option> 
                                                        <option value="2" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "2") selected @endif>Descriptiva</option> 
                                                        <option value="5" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "5") selected @endif>Explicativa</option> 
                                                        <option value="1" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "1") selected @endif>Exploratoria</option> 
                                                        <option value="10" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "10") selected @endif>Evaluativa</option> 
                                                        <option value="8" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "8") selected @endif>Interactiva</option> 
                                                        <option value="6" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "6") selected @endif>Predictiva</option> 
                                                        <option value="7" @if (old('tipoInvestigacion', $pregunta->fk_tipo_investigacion) == "7") selected @endif>Proyectiva</option> 
                                                    </select> 
                                                </div> 
                                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                                    <label>Temporalidad (inicio)</label> 
                                                    <fieldset> 
                                                        <div class="control-group"> 
                                                            <div class="controls"> 
                                                                <div class="input-prepend input-group"> 
                                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> 
                                                                    <input type="date" name="temp_inicio" value="{{old('temp_inicio', $temp->fecha_inicio)}}" data-placeholder="Fecha inicio" id="temp_inicio" class="form-control" required/> 
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
                                                                    <input type="date" name="temp_fin" value="{{old('temp_fin', $temp->fecha_fin)}}" data-placeholder="Fecha culminación" id="temp_fin" class="form-control" required/> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                    </fieldset> 
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