@extends('layouts.index')

@section('titulo', 'JVH - Recursos Humanos')

@section('estilos')
	<style>
		.hero-img{
			height: 400px;
			width: 100%;
			background: url("{{ asset($recursoshumanos->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}

		.boton{
			background: #E51D2A 0% 0% no-repeat padding-box;
			font-weight: normal !important;
			color:#fff;
			width: 200px;
			box-shadow: 3px 3px 3px rgba(255, 0, 0, 0.15);
		}

		.etiqueta{
			font-weight: normal !important;
			color:#6E6F71;
			font-size: 17px;
		}

		sub {
		  color:#E51D2A;
		  font-size: x-large;
		}

		.form-control:focus {
		  border-color: #E51D2A;
		  box-shadow: 3px 3px 3px rgba(255, 0, 0, 0.15);
		}

		#rh-seccion p{
			color:#6E6F71;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false,
			'activeLink' => 'recursoshumanos'
	])
@endsection

@section('secciones')
		<!--https://xd.adobe.com/view/b80272e1-7ec5-4d6b-4e6d-03fc5611e154-ce33/screen/833932a6-8014-4052-b8bb-ddff864ec9f2/-->
	<div id="rh-seccion" class="row" style="margin-top: 50px;margin-bottom: 30px;">
		<div class="col col-sm-10 col-md-3" style="margin-left: 80px; padding-top: 20px;margin-bottom: 20px;">
			<div style="border-left: 3px solid #2B1C17;padding-left: 20px;">
				<h2>{!! $recursoshumanos->seccion1_titulo !!}<!--Recursos Humanos--></h2>
				{!! $recursoshumanos->seccion1_parrafo !!}
				<!--<p style="color:#6E6F71">
					Trabajá con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.
				</p>-->
			</div>
			
		</div>
		<div class="col" style="margin-left: 40px;">
			<form action="recursoshumanos_submit" method="get" enctype="multipart/form-data">
			<div class="row" style="border-top: 2px solid #ccc;border-bottom: 2px solid #ccc;padding-top: 20px;padding-bottom: 50px;">
				<div class="col-sm-10 col-lg-4">
					<span style="font-weight: bold;color:#E51D2A;font-size: 17px;">DATOS PERSONALES</span>
					<p style="color:#6E6F71;margin-top: 30px;margin-bottom:10px;font-size: 17px;">Foto</p>
					<div class="" style="border: 1px solid #000; width: fit-content;margin-bottom: 20px;">
						<div style="background-color: #ccc;margin: 5px;width: 200px;height: 200px;" class="d-flex align-items-center justify content-center">
							<p class="text-center" style="color:#E51D2A;font-size: 16px;">
								TAMAÑO MAXIMO: 5MB FORMATO: JPG O PNG
							</p>
						</div>
					</div>
				
					<label class="btn boton" for="foto">Seleccionar Archivo</label>
					<input type="file" name="foto" style="display:none;" id="foto">

					</div>
				<div class="col" >
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="nombre" class='etiqueta'>Nombre<sub>*</sub></label>
						      <input type="text" name="nombre" class="h-75 rounded-sm form-control form-control-lg" id="nombre" placeholder="Ingresar nombre">
						    </div>
						    <div class="form-group col-md-5">
						      <label for="apellido" class='etiqueta'>Apellido<sub>*</sub></label>
						      <input type="text" name="apellido" class="h-75 rounded-sm form-control form-control-lg" id="apellido" placeholder="Ingresar apellido">
						    </div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="telefono" class='etiqueta'>Teléfono<sub>*</sub></label>
						      <input type="text" name="telefono" class="h-75 rounded-sm form-control form-control-lg" id="telefono" placeholder="Ingresar teléfono">
						    </div>
						    <div class="form-group col-md-5 mr-3">
						      <label for="email" class='etiqueta'>Email<sub>*</sub></label>
						      <input type="email" name="email" class="h-75 rounded-sm form-control form-control-lg" id="email" placeholder="Ingresar email">
						    </div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="pais" class='etiqueta'>País de Residencia<sub>*</sub></label>
						      <input type="text" name="pais" class="h-75 rounded-sm form-control form-control-lg" id="pais" placeholder="Seleccione Pais">
						    </div>
						    <div class="form-group col-md-5 mr-3">
						      <label for="nacionalidad" class='etiqueta'>Nacionalidad<sub>*</sub></label>
						      <input type="text" name="nacionalidad" class="h-75 rounded-sm form-control form-control-lg" id="nacionalidad" placeholder="Seleccione Pais">
						    </div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5">
						      <label for="dni" class='etiqueta'>(DNI) Documento de Identidad<sub>*</sub></label>
						      <input type="text" name="dni" class="h-75 rounded-sm form-control form-control-lg" id="dni" placeholder="xxxxxxxx">
						    </div>
						</div>
						<div class="form-row">
							<label for="inputEmail4" class='etiqueta'>Fecha de Nacimiento<sub>*</sub></label>
						</div>
						<div class="form-row">
							<div class="col">
								<input type="text" name="dia" class="h-75 rounded-sm form-control form-control-lg" id="dia" placeholder="Día">
							</div>
							<div class="col">
								<input type="text" name="mes" class="h-75 rounded-sm form-control form-control-lg" id="mes" placeholder="Mes">
							</div>
							<div class="col">
								<input type="text" name="ano" class="h-75 rounded-sm form-control form-control-lg" id="ano" placeholder="Año">
							</div>

						</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-sm-10 col-lg-4">
					<span style="font-weight: bold;color:#E51D2A;font-size: 17px;">CURRICULUM</span>
				</div>
				<div class="col" >
					<p style="color:#6E6F71;font-size: 17px;">Curriculum</p>
					<input type="file" name="curriculum">

					<input class="btn boton float-right" type="submit" name="submit">
				</div>
			</div>
			</form>
		</div>
	</div>
		
@endsection