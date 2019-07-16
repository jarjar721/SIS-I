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
                <h2>Evento <b>{{$evento->contexto}}</b> de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/evento/edit">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <input type="hidden" name="id" value="{{old('id', $evento->id)}}">
                        <div class="form-group">
                            <h4>Agregue un <b>evento</b> a la investigación:</h4>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" placeholder="Nombre" name="nombreEvento" value="{{old('nombreEvento', $evento->nombre)}}" id="evento-nombre" class="form-control col-md-7 col-xs-12" required>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <select id="claseEvento" class="form-control" name="claseEvento" required>
                                <option value="" disabled selected hidden>Clase</option>
                                <option value="Evento a Modificar" @if (old('claseEvento', $evento->clase) == "Evento a Modificar") selected @endif>Evento a Modificar</option>
                                <option value="Evento Causal" @if (old('claseEvento', $evento->clase) == "Evento Causal") selected @endif>Evento Causal</option>
                              </select>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                              <select id="tipoEvento" class="form-control" name="tipoEvento" required>
                                <option value="" disabled selected hidden>Tipo</option>
                                <option value="Proceso" @if (old('tipoEvento', $evento->tipo) == "Proceso") selected @endif>Proceso</option>
                                <option value="Característica" @if (old('tipoEvento', $evento->tipo) == "Característica") selected @endif>Característica</option>
                                <option value="Comportamiento" @if (old('tipoEvento', $evento->tipo) == "Comportamiento") selected @endif>Comportamiento</option>
                                <option value="Viviencia" @if (old('tipoEvento', $evento->tipo) == "Viviencia") selected @endif>Viviencia</option>
                                <option value="Situación" @if (old('tipoEvento', $evento->tipo) == "Situación") selected @endif>Situación</option>
                                <option value="Hecho" @if (old('tipoEvento', $evento->tipo) == "Hecho") selected @endif>Hecho</option>
                              </select>
                            </div>
                          </div>
                
                          <br>
                
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="ln_solid"></div>
                              <button type="submit" class="btn btn-success pull-right">Modificar</button>
                            </div>
                          </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection