@extends('layouts.index')

@section('titulo', 'JVH - Calidad')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset($calidad->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			position: relative;
			margin-bottom: 29px;
		}

		#c-seccion3{
			height: 450px;
			background: transparent url("{{ asset($calidad->seccion2_imagen_fondo) }}") no-repeat center center;
			opacity:1;
			color:#fff;
			padding-right: 38px;
			background-size: cover;
			margin-right: auto;
			position: relative;
			width: 100%;
		}

		#h-seccion2 p,#h-seccion2 ul{
			color: #6E6F71;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => $calidad->texto_encabezado_habilitado,
		'titulo' => $calidad->texto_encabezado,
		'activeLink' => 'calidad',
		'logo1'=> $calidad->logo_1_encabezado,
		'logo2' => $calidad->logo_2_encabezado
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="h-seccion2" class="row">
		<div class="col-12 col-md-5 col-lg-7 col-xl-6 ">
			<h2>{!! $calidad->seccion1_titulo !!}<!--Carne de Calidad--></h2>
			{!! $calidad->seccion1_parrafo !!}
			
			<!--<p style="font-size: 14px;color: #6E6F71;">
				Contamos con: 
				<ul style="font-size: 14px;color: #6E6F71;">
					<li>procedimientos operativos estandarizados de sanitizacion (ssop)</li>
					<li>sistema de analisis de peligros y control de puntos críticos (haccp)</li>
					<li>buenas prácticas de manufactura (gmp)</li>
					<li>procedimientos operativos estandarizadis (sop)</li>
					<li>cumplimos con las normas de bienestar animal para garantizar el más alto nivel de seguridad alimentaria en la industria</li>
				</ul>
			</p>-->
		</div>
		<div class="col">
			<div class="row align-items-center" style="width: 100%;height: 100%">
				<!--<img src="img/kisspng-iso-9-1-oktan-ltd-marine-agency-and-survey-se-5b7584e7c3a0c4.8268044015344283918013.png" alt="">
				<img src="img/d76bb86cf9ff6e5e3fc21966da72fce1.png" alt="">
				<img src="img/WhatsApp Image 2020-06-19 at 12.35.34 PM.png" alt="">
				<img src="img/Certificaciones de calidad e inocuidad + BPM.png" alt="">
				<img style="width: 100px; height: 119px; margin-right: 33px;" src="img/logo-3.png">
				<img style="width: 87px; height: 87px; margin-right: 43px;" src="img/27201_sello islamic center halal argentina_big.png">
				<img style="width: 94px; height: 94px;" src="img/qué-es-kosher@2x.png">-->
				<img src="{{ asset($calidad->seccion1_logo1) }}" alt="">
				<img src="{{ asset($calidad->seccion1_logo2) }}" alt="">
				<img src="{{ asset($calidad->seccion1_logo3) }}" alt="">
				<img src="{{ asset($calidad->seccion1_logo4) }}" alt="">
				<img style="width: 100px; height: 119px; margin-right: 33px;" src="{{ asset($calidad->seccion1_logo5) }}">
				<img style="width: 87px; height: 87px; margin-right: 43px;" src="{{ asset($calidad->seccion1_logo6) }}">
				<img style="width: 94px; height: 94px;" src="{{ asset($calidad->seccion1_logo7) }}">
			</div>
		</div>

	</div>

	<div  id="c-seccion3" >
		<div class="negro">

		</div>
		<div style="height: 100%" class="row justify-content-end align-items-center">
				
		</div>
	</div>
@endsection