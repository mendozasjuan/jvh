@extends('layouts.index')

@section('titulo', 'JVH - Exportación')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			/*background: url("{{ asset($exportacion->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;*/
			position: relative;
			margin-bottom: 29px;
		}

		#h-seccion4 p{
			color:#6E6F71;
		}

		#p-seccion1{
			width: 100%;
			background: transparent url("{{ asset($exportacion->seccion2_imagen_fondo) }}") 0% 0% no-repeat padding-box;
			opacity: 1;
			position: relative;
			background-size: cover;
			color:#fff;
		}

		#p-seccion5 {
			height: 100%;
			background: transparent url("{{ asset($exportacion->seccion3_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			opacity:1;
			position: relative;
		}

		#p-seccion5 h2{
			margin-left: 38px;
			margin-top: 75px;
			margin-bottom: 204px;
			color:#fff;
			font-size: 40px;
		}
		.dividir{
			font-size: 17px;
		}

		.dividir p{
			font-weight: 600;
    		margin-bottom: 30px;		
		}

		.dividir ul {
			list-style: none;
			columns: 2;
		}

		.lineagris{
			border-top: 3px solid #CCC;
			width: 40px;
			position: absolute;
		    margin-top: 25px;
		    margin-left: 40px;
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
		'text' => $exportacion->texto_encabezado_habilitado,
		'titulo' => $exportacion->texto_encabezado,
		'activeLink' => 'exportacion',
		'logo1'=> $exportacion->logo_1_encabezado,
		'logo2' => $exportacion->logo_2_encabezado,
		'logotipo' => $logo,
		'carousel' => $carousel
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="h-seccion4" class="row mb-4" style="min-height: 428px;">
		<div class="col-10 col-md-5 col-lg-4 col-xl-3">
			<div class="lineavertical" style="z-index: 1;">
				<h2>{!! $exportacion->seccion1_titulo !!}<!--Mercados en el Mundo--></h2>
				{!! $exportacion->seccion1_parrafo !!}
				<!--<p style="color:#6E6F71">
					Cuenta con todos los permisos y certificaciones necesarios para exportar a la unión europea, israel, suiza, rusia, hong kong, brasil y sudáfrica entre otros.
				</p>-->
			</div>
		</div>
		<div class="col" style="overflow: hidden;">
			<!--<img class="float-right" src="img/map.svg">-->
			
			<!--<img class="float-right img-mapa" src="{{ asset($exportacion->seccion1_imagen) }}" >-->
			<img class="float-right img-mapa" src="https://osolelaravel.com/jvh/public/img/ZiDGVCyCJ8ytkFcir1xP11bXoIuclFVtftSbldQ8.png" >
		</div>

	</div>	

	<div id="p-seccion1" >
		<div class="negro">

		</div>
		<div style="height: 100%; padding-top: 76px; padding-bottom: 70px;" class="row" >
			<div class="col">
				<div class="row">
					<div class="col dividir">
						<div class="lineagris"></div>
						{!!$exportacion->seccion2_parrafo1!!}
						
						<!--Paises a los que Exportamos-->
					</div>
				</div>
				<!--<div class="row">
					<div class="col">
						<ul>
							<li>Angola</li>
							<li>Antillas Hol.</li>
							<li>Argelia</li>
							<li>Aruba</li>
							<li>Bosnia y Herzegovina</li>
							<li>Brasil</li>
							<li>Bulgaria</li>
							<li>Chile</li>
							<li>Curacao</li>
						</ul>
					</div>
					<div class="col">
						<ul>
							<li>Estados Unidos</li>
							<li>Guinea ecuatorial</li>
							<li>Peru</li>
							<li>Reino Unido</li>
							<li>Rusia</li>
							<li>Suiza</li>
							<li>Ucrania</li>
							<li>Venezuela</li>
							<li>Unión Europea</li>
						</ul>

					</div>
				</div>-->
			</div>
			<div class="col">
				<div class="row">
					<div class="col dividir">
						<div class="lineagris"></div>
						{!! $exportacion->seccion2_parrafo2 !!}
						
						<!--Paises Habilitados para Exportar-->
					</div>
				</div>
				<!--<div class="row">
					<div class="col">
						<ul>
							<li>Angola</li>
							<li>Antillas Hol.</li>
							<li>Argelia</li>
							<li>Aruba</li>
							<li>Bosnia y Herzegovina</li>
							<li>Brasil</li>
							<li>Bulgaria</li>
							<li>Chile</li>
							<li>Curacao</li>
						</ul>
					</div>
					<div class="col">
						<ul>
							<li>Egipto</li>
							<li>Estados Unidos</li>
							<li>Guinea ecuatorial</li>
							<li>Peru</li>
							<li>Rusia</li>
							<li>Suiza</li>
							<li>Ucrania</li>
							<li>Unión Europea</li>
						</ul>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	

	<div  id="p-seccion5">
		<div class="negro">

		</div>
		<div class="row" style="margin-right: auto;">
			<div class="col-12 col-md-8 col-xl-6">
				<h2>
					{!! $exportacion->seccion3_titulo !!}
					<!--"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y económico en las comunidades donde trabajamos"-->
				</h2>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection