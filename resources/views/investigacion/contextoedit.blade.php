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
                <h2>Contexto <b>{{$contexto->contexto}}</b> de la investigación</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/contexto/edit">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <input type="hidden" name="id" value="{{old('id', $contexto->id)}}">
                        <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Modifique los <b>contextos</b> a la investigación:</h4>
                                <input type="text" id="contexto" class="form-control" name="contexto" value="{{old('InvID', $contexto->contexto)}}">
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