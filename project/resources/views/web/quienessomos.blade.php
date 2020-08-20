@extends('layouts.index')

@section('titulo', 'JVH - Quienes Somos')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset('img/09.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => false,
		'activeLink' => 'quienessomos'
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="qs-seccion1" >
				<div class="negro">

				</div>
				<div style="height: 100%" class="row align-items-center">
					<div class="col-12 col-md-3 text-center">{!! $quienessomos->seccio1_parrafo1 !!}<!--Frigorífico vh cuenta con una Planta 35.000 M2--></div>
					<div class="col-12 col-md-3 text-center">{!! $quienessomos->seccio1_parrafo2 !!}<!--Frigorífico vh cuenta con Corrales 1200 M2--></div>
					<div class="col-12 col-md-3 text-center">{!! $quienessomos->seccio1_parrafo3 !!}<!--Capacidad de faena por día 700 animales</p>--></div>
					<div class="col-12 col-md-3 text-center">{!! $quienessomos->seccio1_parrafo4 !!}<!--Capacidad de almacenaje enfriado y congelado 300 tons</p>--></div>
				</div>
			</div>
			<div  id="h-seccion3" >
				<div class="negro">

				</div>
				<div style="height: 100%" class="row justify-content-end align-items-center">
						<div class="col-11 col-sm-8 col-md-7 col-lg-5 col-xl-3">
							<h2 class="text-right">{!! $quienessomos->seccion2_titulo !!}<!--"Última generación en la producción de carnes"--></h2>
							{!! $quienessomos->seccion2_parrafo !!}
							<!--<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío</p>-->
						</div>
					</div>
			</div>
			<div id="qs-seccion2">
				<div class="row">
					<div class="col-12 col-sm-6">
						{!! $quienessomos->seccion3_parrafo1 !!}
						<!--<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>-->
					</div>
					<div class="col-12 col-sm-6">
						{!! $quienessomos->seccion3_parrafo2 !!}
						<!--<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>-->
					</div>
				</div>

			</div>


			<div id="qs-seccion4">
				<div class="negro"></div>
				<div style="height: 100%" class="row align-items-center">
					<div class="col-12 col-md-3 text-center">
						{!! $quienessomos->seccion4_parrafo1 !!}
						<!--<p style="font-size: 16px">Visión</p>
						<p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo</p>-->
					</div>
					<div class="col-12 col-md-3 text-center">
						{!! $quienessomos->seccion4_parrafo2 !!}
						<!--<p style="font-size: 16px">Misión</p>
						<p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>-->
					</div>
					<div class="col-12 col-md-3 text-center">
						{!! $quienessomos->seccion4_parrafo3 !!}
						<!--<p style="font-size: 16px">Nuestro Compromiso</p>
						<p>Honestidad, integridad, respeto, responsabilidad y dedicación a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos</p>-->
					</div>
					<div class="col-12 col-md-3 text-center">
						{!! $quienessomos->seccion4_parrafo4 !!}
						<!--<p style="font-size: 16px">Recursos Humanos</p>
						<p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>-->
					</div>
				</div>
				</div>
			</div>
@endsection