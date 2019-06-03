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
				<h2>Crear</h2>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="x_content">
		
						<form action="/rol/store" method="POST">
							@csrf

							<div class="form-group" style="width:49%; float: left">
								<label for="inputNombre" style="color: whitesmoke">Nombre</label>
								<input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Introduzca el nombre" required>
							</div>
							<div class="form-group" style="width:49%; float: right;">
								<label for="inputDeposito" style="color: whitesmoke">Deposito</label>
								<input type="number" name="Tamaño_deposito" class="form-control" id="inputDeposito" placeholder="Introduzca el tamaño del deposito" required>
							</div>
							<div class="form-group" style="width:49%; float: left;">
								<label for="inputVehiculos" style="color: whitesmoke">Vehiculos</label>
								<input type="number" name="Cantidad_vehiculos" class="form-control" id="inputVehiculos"placeholder="Introduzca la cantidad de vehiculos" required>
							</div>
							<div class="form-group" style="width:49%; float: right;">
								<label for="inputEmpleados" style="color: whitesmoke">Empleados</label>
								<input type="number" name="Cantidad_empleados" class="form-control" id="inputEmpleados"placeholder="Introduzca la cantidad de empleados" required>
							</div>
							<!-- REVISAR MEJOR FORMA -->
							<div class="form-group" style="width:49%; float: left;">
								<label for="inputEncargado" style="color: whitesmoke">Encargado</label>
								<input type="text" name="Empleado_cargo" class="form-control" id="inputEncargado" placeholder="Introduzca la capacidad de combustible" required>
							</div>
							<div style="width:100%; height: 40px; float: left;">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
                        </form>
                        <!---->
					</div>
				</div>		
@stop