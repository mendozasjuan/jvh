@extends('layouts.index')

@section('titulo', 'JVH - Contacto')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset('img/WhatsApp Image 2020-06-18 at 12.17.53 PM (1).png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
			margin-bottom: 29px;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="c-seccion">
		<div class="row">
			<div class="col" >
				<div style="width: 100%">

						<img style="width: inherit;height: 382px" src="{{ asset('img/lomasdelmirador.png')}}" alt="">

				</div>
				<div style="background: #ccc 0% 0% no-repeat padding-box">

							<h3>Lomas del Mirador</h3>

					<div class="row">

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i>
							<span style="font-weight: bold; color:#E51D2A">Dirección</span> <br>Paso 3030 (1752) Lomas del Mirador Buenos Aires
						</div>

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i>
							<span style="font-weight: bold; color:#E51D2A">Llámenos al</span> <br>+54 (11)) 4699-4424 +54 (11)) 4699-2882
						</div>
					</div>
				</div>
			</div>
			<div class="col" style="padding-right: 0px;">
				<div style="width: 100%">
						<img style="width: inherit;height: 382px" src="{{ asset('img/bernasconi.png')}}" alt="">

				</div>
				<div style="background: #060505 0% 0% no-repeat padding-box" >
							<h3 style="color:#E51D2A">Bernasconi</h3>
					<div class="row">

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i>
							<span style="color:#E51D2A"><strong>Dirección</strong> <br>Ruta 35, Km 165 (8204) Bernasconi - La Pampa</span>
						</div>

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i>
							<span style="color:#E51D2A"><strong>Llámenos al</strong> <br>+54 (11)) 4699-4424 / +54 (11)) 4699-2882</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center" style="margin-top: 58px;">
			<div class="col-4">
				<h3>Contacto</h3>
				<p>Para mayor información, no dude en contactarse mediante el siguiente formulario, o a través de nuestras vías de comunicación</p>
				<p>
					<span style="font-weight: bold;color:#E51D2A">
						<i class="far fa-envelope " aria-hidden="true"></i>Comercio Exterior
					</span> <br>Jescudero@frigorificohv.com.ar
				</p>
				<p>
					<span style="font-weight: bold;color:#E51D2A">
						<i class="far fa-envelope " aria-hidden="true"></i>Área Comercial
					</span> <br>dvigna@frigorificohv.com.ar
				</p>
			</div>
			<div class="col">
				<form action="contacto_submit" method="get" accept-charset="utf-8">
					<div class="form-row mb-3">
						<div class="form-group col-md-5 mr-3">
					      <input type="text" name="nombre" class="rounded-sm form-control" id="nombre" placeholder="Nombre">
					    </div>
					    <div class="form-group col-md-5">
					      <input type="text" name="apellido" class="rounded-sm form-control" id="apellido" placeholder="Apellido">
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col-md-5 mr-3">
					      <input type="email" name="email" class="rounded-sm form-control" id="email" placeholder="Correo Electronico">
					    </div>
					    <div class="form-group col-md-5 mr-3">
					      <input type="text" name="telefono" class="rounded-sm form-control" id="telefono" placeholder="Teléfono">
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col-md-10 mr-3">
					      <textarea name="mensaje" class="rounded-sm form-control">Mensaje</textarea>
					    </div>
					</div>
					<div class="form-row">
						<input class="btn boton float-right" type="submit" name="submit">
					</div>
				</form>
			</div>
		</div>
@endsection