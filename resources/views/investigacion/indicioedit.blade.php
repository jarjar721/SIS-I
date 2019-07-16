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
                <h2>Indicio <b>{{$indicio->contexto}}</b> de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/indicio/edit">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <input type="hidden" name="EveID" value="{{old('EveID', $evento->id)}}">
                        <input type="hidden" name="SinID" value="{{old('SinID', $sinergia->id)}}">
                        <input type="hidden" name="id" value="{{old('id', $indicio->id)}}">
                        <div class="form-group">
                            <h4>Modifique el <b>indicio</b> a la sinergia:</h4>
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="text" placeholder="Nombre" name="nombreIndicio" id="indicio-nombre" value="{{old('nombreIndicio', $indicio->nombre)}}" class="form-control col-md-7 col-xs-12">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success pull-right">Agregar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection