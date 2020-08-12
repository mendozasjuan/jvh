@extends('layouts.index')

@section('titulo', 'JVH - Producción')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset('img/188687997.jpg.gallery.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => false,
		'activeLink' => 'produccion'
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="qs-seccion1" >
				<div class="negro">

				</div>
				<div style="height: 100%" class="row align-items-center">
					<div class="col-5">
						<h2>Nuestra Carne</h2>
						<p>
							La calidad de la carne, en términos alimenticios, depende de la conjunción de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercialización. La pampa húmeda argentina es uno de los lugares en el mundo en el que la cría de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la polución industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, además, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibióticos. Por estas razones, su estado resulta optimo para el consumo.
						</p>
					</div>
					<div class="col-5 ">
						<div class="row align-items-center" style="width: 100%;height: 100%">
							<img style="width: 100px; height: 119px; margin-right: 33px;" src="img/logo-3.png">
							<img style="width: 87px; height: 87px; margin-right: 43px;" src="img/27201_sello islamic center halal argentina_big.png">
							<img style="width: 94px; height: 94px;" src="img/qué-es-kosher@2x.png">
						</div>
					</div>
				</div>
			</div>
			<div id="qs-seccion2">
				<div class="row">
					<div class="col-6">
						<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>
					</div>
					<div class="col-6">
						<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>
					</div>
				</div>

			</div>
			<div  id="h-seccion3" >
				<div class="negro">

				</div>
				<div style="height: 100%" class="row justify-content-end align-items-center">
						<div class="col-11 col-sm-8 col-md-7 col-lg-5 col-xl-3">
							<h2 class="text-right">"Última generación en la producción de carnes"</h2>
							<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío</p>
						</div>
					</div>
			</div>
@endsection