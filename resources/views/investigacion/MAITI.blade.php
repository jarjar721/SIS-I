@extends('layouts.gentemplate')

@section('Content')

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
      <h4>{{ $investigacion->tema }}</h4>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel">
      <div class="x_title">
        <h2>Matriz para el Análisis Integral de Trabajos de Investigación</h2>
        <div class="pull-right">
          <h4>Porcentaje de Calidad: <b>{{ $porcentaje_calidad }}%</b></h4>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">

        <!-- Aquí se muestran los requerimientos-->
        @foreach ($categoria_calidad as $categoria)
        <div class="row">
          <h2><b>{{ $categoria->nombre }}</b></h2>
          <div class="col-md-10">
            <h4><b>Requerimiento</b></h4>
          </div>
          <div class="col-md-2">
            <h4><b>Cumplido</b></h4>
          </div>
          @foreach ($pregunta_calidad as $pregunta)
          @if ($pregunta->fk_categoria_calidad === $categoria->id)
          <div class="col-md-10">
            <h4>{{ $pregunta->pregunta }}</h4>
          </div>
          @foreach ($calidad_item as $respuesta)
          @if ($respuesta->fk_calidad_pregunta === $pregunta->id)
          <div class="col-md-2">
            <div class="">
              <label>
                @if ($respuesta->respuesta === true)
                <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" />
                @else
                <input type="checkbox" class="js-switch" disabled="disabled" />
                @endif
              </label>
            </div>
          </div>
          @endif
          @endforeach
          @endif
          @endforeach
        </div>
        @endforeach


      </div>
    </div>

  </div>
</div>

@endsection

@push('js')


@endpush