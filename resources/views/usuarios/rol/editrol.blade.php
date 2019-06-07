@extends('layouts.gentemplate')
@section('Content')
<!-- internal content -->
	<div class="">
		<div class="page-title">
		<div class="title_left">
			<h3>Roles</h3>
		</div>
		</div>
		<div class="clearfix"></div>

		<div class="x_panel">
			<div class="x_title">
				<h2>Modificar {{$userol->nombre}} <small>Cambia los privilegios del rol</small></h2>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="x_panel">
			<div class="x_content">

				<form method="POST" action="/rol/update">
				@csrf
					<input type="number" name="code" value="{{$validated->code}}" hidden>

					<div class="form-group" style="width:100%">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" value="{{$validated->nombre}}" class="form-control" id="nombre" placeholder="Introduzca el nombre" required>
					</div>
					<!-- Privilegios -->
					<div class="form-group" style="width:100%; float: left">
						<h4 for="nombre" style="width:100%">Seleccione Privilegios</h4>
						@foreach ($privs as $priv)
							<div style="width:50%; float:left">
								<input class="form-check-input" name="{{$priv->tipo}}" type="checkbox" value="true" 
								@foreach ($pr as $x)
									@if ( $x->codigo_pri==$priv->code ) checked @endif
								@endforeach id="input{{$priv->tipo}}">
								<label for="nombre" style="padding-left:20px">{{$priv->tipo}}</label>
							</div>	
						@endforeach
					</div>
					<!---->
					<div style="width:100%; height: 40px; float: left;">
						<button type="submit" class="btn btn-primary">Modificar</button>
					</div>
				</form>
			</div>
		</div>
	</div>		
@endsection