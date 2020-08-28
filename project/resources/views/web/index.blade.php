@extends('layouts.index')

@section('titulo', 'JVH - Inicio')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			/*background: url("{{ asset('img/bg-black_angus-001-JAndrewPatronik.png') }}") no-repeat center center;
			background: url("{{ asset($inicio->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;*/
			position: relative;
			margin-bottom: 29px;
		}

		#h-seccion4 p{
			color:#6E6F71;
		}

		#h-seccion3{
			height: 100%;
			/*background: transparent url("{{ asset($inicio->seccion2_imagen_fondo) }}") no-repeat center center;*/
			opacity:1;
			color:#fff;
			padding-right: 38px;
			/*background-size: cover;*/
			margin-right: auto;
			position: relative;
			width: 100%;
		}

		#h-seccion5 {
			height: 100%;
			background: transparent url("{{ asset($inicio->seccion4_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			opacity:1;
			position: relative;
		}

		#myVideo {

  /*padding-bottom: 56.25%; /* 16:9 */

	width: 100%;
  	height: 100%;
	position: absolute;
	 object-fit: cover;
	top:0;
}

.img-mapa{
			position: absolute;
		    right: 0;
		}

		@media (max-width: 768px) {
			.img-mapa{
				display: none;
			}
		}

		
		@media screen and (min-width: 769px) and (max-width: 1000px) { 
			.img-mapa{
				display: block;
				width: 150%;
				top:20%; 
			}
		}

		@media (min-width: 1001px) {
			.img-mapa{
				display: block;
				width: 130%;
				top:10%; 
			}
		}

    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => $inicio->texto_encabezado_habilitado,
		'titulo'=> $inicio->texto_encabezado,
		'logo1'=> $inicio->logo_1_encabezado,
		'logo2' => $inicio->logo_2_encabezado,
		'logotipo' => $logo,
		'carousel' => $carousel
		])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="h-seccion2" class="row">
		<div class="col-12 col-md-5 col-lg-7 col-xl-6 ">
			<h2>{{$inicio->seccion1_titulo}}<!--Nuestra Carne--></h2>
			
				{!! $inicio->seccion_1_parrafo !!}
				<!--La calidad de la carne, en términos alimenticios, depende de la conjunción de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercialización. La pampa húmeda argentina es uno de los lugares en el mundo en el que la cría de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la polución industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, además, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibióticos. Por estas razones, su estado resulta optimo para el consumo.-->
			
		</div>
		<div class="col">
			<div class="row align-items-center" style="width: 100%;height: 100%">
				<!--<img style="width: 100px; height: 119px; margin-right: 33px;" src="img/logo-3.png">
				<img style="width: 87px; height: 87px; margin-right: 43px;" src="img/27201_sello islamic center halal argentina_big.png">
				<img style="width: 94px; height: 94px;" src="img/qué-es-kosher@2x.png">-->
				<img style="width: 100px; height: 119px; margin-right: 33px;" src="{{ asset($inicio->seccion1_logo1) }}">
				<img style="width: 87px; height: 87px; margin-right: 43px;" src="{{ asset($inicio->seccion1_logo2) }}">
				<img style="width: 94px; height: 94px;" src="{{ asset($inicio->seccion1_logo3) }}">
			</div>
		</div>

	</div>

	<div  id="h-seccion3" >
		<video id="myVideo" autoplay muted loop>
						  <source src="img/videopromohome.mp4" type="video/mp4">
						</video>
		<div class="negro">

		</div>
		<div style="height: 100%" class="row justify-content-end align-items-center">
				<div class="col-11 col-sm-8 col-md-7 col-lg-5 col-xl-3">
					<h2 class="text-right">{{$inicio->seccio2_titulo}}<!--"Última generación en la producción de carnes"--></h2>
					{!! $inicio->seccion_2_parrafo !!}<!--Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío-->
				</div>
			</div>
	</div>
	<div id="h-seccion4" class="row" style="min-height: 428px;" style="z-index: 1;">
		<div class="col-10 col-md-5 col-lg-4 col-xl-3">
			<div class="lineavertical">
				<h2>{{$inicio->seccion3_titulo}}<!--Mercados en el Mundo--></h2>
					{!! $inicio->seccion3_parrafo !!}
					<!--Cuenta con todos los permisos y certificaciones necesarios para exportar a la unión europea, israel, suiza, rusia, hong kong, brasil y sudáfrica entre otros.-->
			</div>
		</div>
		<div class="col" style="overflow: hidden;">
			<!--<img class="float-right" src="img/map.svg">-->
			<!--<img class="float-right" src="{{ asset($inicio->seccion3_imagen) }}">-->
			<img class="float-right img-mapa" src="{{ asset($inicio->seccion3_imagen) }}" >
		</div>

	</div>

	<div  id="h-seccion5">
		<div class="negro">

		</div>
		<div class="row" style="margin-right: auto;">
			<div class="col-12 col-xl-3">
				<h2>
					{{$inicio->seccion4_titulo}}
					<!--"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor"-->
						
					</h2>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo])
@endsection