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

		.boton{
			background-color:#E51D2A;
			color:#fff;
			width:168px;
			font-size:16px;
		}

		.caja{
			padding-left:38px;
			padding-top:30px;
			padding-bottom:30px;
		}

		.datos_blanco, .datos_blanco p{
			color:#fff;
		}

		#descripcion_contacto p{
			color:#6E6F71; 
			margin-bottom:30px;"
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
			<div class="col-12 pr-0 mb-3 col-md-6" >
				<div style="width: 100%">

						<img style="width: inherit;height: 382px" src="{{ asset('img/lomasdelmirador.png')}}" alt="">

				</div>
				<div  class="caja" style="background: #ccc 0% 0% no-repeat padding-box; ">
						<h3 style="font: normal normal 600 23px Raleway;font-weight:bold;">{!! $contacto->ciudad1!!}<!--Lomas del Mirador--></h3>
							

					<div class="row" style="font-size:14px;color:#060505">

						<div class="col" >
							<i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i>
							<span style="font-weight: bold; color:#E51D2A;">Dirección</span> 
							{!! $contacto->direccion1!!}
							<!--Paso 3030 (1752) Lomas del Mirador Buenos Aires-->
						</div>

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i>
							<span style="font-weight: bold; color:#E51D2A">Llámenos al</span> 
							<!--+54 (11)) 4699-4424 +54 (11)) 4699-2882-->
							<p>{!! $contacto->telefonos1!!}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" style="padding-right: 0px;">
				<div style="width: 100%">
						<img style="width: inherit;height: 382px" src="{{ asset('img/bernasconi.png')}}" alt="">

				</div>
				<div class="caja" style="background: #060505 0% 0% no-repeat padding-box" >
							<h3 style="color:#E51D2A">{!! $contacto->ciudad2!!}<!--Bernasconi--></h3>
					<div class="row" style="font-size:14px;color:#fff">

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i>
							<span style="color:#E51D2A"><strong>Dirección</strong></span>
							<div class="datos_blanco" style="color:#fff">
								{!! $contacto->direccion2!!}
							</div>
							
							<!--<br>Ruta 35, Km 165 (8204) Bernasconi - La Pampa-->
						</div>

						<div class="col">
							<i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i>
							<span style="color:#E51D2A"><strong>Llámenos al</strong></span> 
							<p class="datos_blanco">{!! $contacto->telefonos2!!}</p>
							<!--<br>+54 (11)) 4699-4424 / +54 (11)) 4699-2882-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center" style="margin-top: 58px;margin-left:38px;">
			<div class="col-12 col-lg-6" style="font-size:14px;">
				<span style="font-size:23px;font-weight:bold;margin-bottom:10px;">{!! $contacto->contacto_titulo !!}<!--Contacto--></span>
				<div id="descripcion_contacto">
					{!! $contacto->contacto_descripcion !!}
				</div>
				
				<!--<p style="color:#6E6F71; margin-bottom:30px;">Para mayor información, no dude en contactarse mediante el siguiente formulario, o a través de nuestras vías de comunicación</p>-->

				<div class="row" style="color:#000; margin-bottom:22px;margin-left:1px;">
					<div style="font-weight: bold;color:#E51D2A">
						<i  class="far fa-envelope " aria-hidden="true"></i>
					</div>
					<div style="margin-left:5px;">
						<span style="font-weight: bold;color:#E51D2A;">Comercio Exterior</span>
					 	<br>{!! $contacto->comercio_exterior !!}<!--Jescudero@frigorificohv.com.ar-->
					</div>
				</div>

				<div class="row" style="color:#000; margin-bottom:22px;margin-left:1px;">
					<div style="font-weight: bold;color:#E51D2A">
						<i  class="far fa-envelope " aria-hidden="true"></i>
					</div>
					<div style="margin-left:5px;">
						<span style="font-weight: bold;color:#E51D2A;">Área Comercial</span>
					 	<br>{!! $contacto->area_comercial !!}<!--dvigna@frigorificohv.com.ar-->
					</div>
				</div>
			</div>
			<div class="col">
				<form action="contacto_submit" method="get" accept-charset="utf-8">
					<div class="form-row mb-3">
						<div class="form-group col mr-3">
					      <input type="text" name="nombre" class="rounded-sm form-control" id="nombre" placeholder="Nombre">
					    </div>
					    <div class="form-group col">
					      <input type="text" name="apellido" class="rounded-sm form-control" id="apellido" placeholder="Apellido">
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col mr-3">
					      <input type="email" name="email" class="rounded-sm form-control" id="email" placeholder="Correo Electronico">
					    </div>
					    <div class="form-group col">
					      <input type="text" name="telefono" class="rounded-sm form-control" id="telefono" placeholder="Teléfono">
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col">
					      <textarea name="mensaje" class="rounded-sm form-control">Mensaje</textarea>
					    </div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<button class="btn boton float-right rounded-pill" type="submit">Enviar           <strong>></strong></button>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection