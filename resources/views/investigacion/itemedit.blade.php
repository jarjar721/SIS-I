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
                <h2>Item <b>{{$item->numero}}</b> del indicio {{$indicio->nombre}}</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/item/edit">
                    @csrf
                        <input type="hidden" name="InvID" value="{{old('InvID', $investigacion->id)}}">
                        <input type="hidden" name="EveID" value="{{old('EveID', $evento->id)}}">
                        <input type="hidden" name="SinID" value="{{old('SinID', $sinergia->id)}}">
                        <input type="hidden" name="IndID" value="{{old('IndID', $indicio->id)}}">
                        <input type="hidden" name="id" value="{{old('id', $item->id)}}">
                        <input type="hidden" name="numero" value="{{old('id', $item->numero)}}">
                        <div class="form-group">
                            <h4>Modifique el <b>item</b> al instrumento de recolección:</h4>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input type="text" placeholder="Item" name="item" value="{{old('item', $item->descripcion)}}" id="item-descripcion" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-3 col-xs-12">
                              <input type="text" placeholder="Parámetro" name="parametro" value="{{old('parametro', $item->id)}}" id="item-parametro" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-3 col-xs-12">
                              <input type="text" placeholder="Nivel" name="itemNivel" value="{{old('itemNivel', $item->id)}}" id="item-nivel" class="form-control col-md-7 col-xs-12">
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