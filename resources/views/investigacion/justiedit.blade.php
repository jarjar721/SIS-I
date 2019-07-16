@extends('layouts.gentemplate')

@section('css')

@endsection()

@section('Content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <h4>{{$investigacion->tema}}</h4>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">
            <div class="x_title">
                <h2>Justificación <b>{{$justificacion->argumento}}</b> de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/justificacion/edit">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <input type="hidden" name="id" value="{{old('id', $justificacion->id)}}">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h4>Modifique los <b>argumentos</b> que justificaran la investigación:</h4>
                                        <textarea id="argumento" class="form-control" name="argumento" value="{{old('id', $justificacion->argumento)}}"></textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Tipo de Argumento</label>
                                        <select id="tipo-argumento" name="tipo" class="form-control" required>
                                            <option value="A1" @if (old('tipo', $justificacion->tipo_argumento) == "A1") selected @endif>A1</option>
                                            <option value="A2" @if (old('tipo', $justificacion->tipo_argumento) == "A2") selected @endif>A2</option>
                                            <option value="A3" @if (old('tipo', $justificacion->tipo_argumento) == "A3") selected @endif>A3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Acerca de</label>
                                        <select id="tipo-argumento" name="acerca_de" class="form-control" required>
                                            <option value="Unidad de Estudio" @if (old('acerca_de', $justificacion->acerca_de) == "Unidad de Estudio") selected @endif>Unidad de Estudio</option>
                                            <option value="Contexto" @if (old('acerca_de', $justificacion->acerca_de) == "Contexto") selected @endif>Contexto</option>
                                            <option value="Temporalidad" @if (old('acerca_de', $justificacion->acerca_de) == "Temporalidad") selected @endif>Temporalidad</option>
                                            <option value="Evento" @if (old('acerca_de', $justificacion->acerca_de) == "Evento") selected @endif>Evento</option>
                                            <option value="Criterio Metodológico" @if (old('acerca_de', $justificacion->acerca_de) == "Criterio Metodológico") selected @endif>Criterio Metodológico</option>
                                        </select>
                                    </div>
                                    <div class="ln_solid"></div>
                                </div>
                            </div>
                        </div>
    
                        <br>
    
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success pull-right">Modificar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection