@extends('layouts.index')

@section('titulo', 'JVH - Exportación')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset('img/msc-rifaya-container-ships-cap-san-nicolas-evening-seaport.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
			margin-bottom: 29px;
		}

		#p-seccion5 {
			height: 100%;
			background: transparent url("{{ asset('img/DSC_0611-Copiar.png') }}") no-repeat center center;
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
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false,
			'activeLink' => 'exportacion'
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="h-seccion4" class="row">
		<div class="col-7 col-lg-4 col-xl-2">
			<div class="lineavertical">
				<h2>Mercados en el Mundo</h2>
				<p style="color:#6E6F71">
					Cuenta con todos los permisos y certificaciones necesarios para exportar a la unión europea, israel, suiza, rusia, hong kong, brasil y sudáfrica entre otros.
				</p>
			</div>
		</div>
		<div class="col">
			<img class="float-right" src="img/map.svg">
		</div>

	</div>	

	<div id="p-seccion1" >
		<div class="negro">

		</div>
		<div style="height: 100%; padding-top: 76px; padding-bottom: 70px;" class="row align-items-center" >
			<div class="col">
				<div class="row">
					<div class="col">Paises a los que Exportamos</div>
				</div>
				<div class="row">
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
				</div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col">Paises Habilitados para Exportar</div>
				</div>
				<div class="row">
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
				</div>
			</div>
		</div>
	</div>
	

	<div  id="p-seccion5">
		<div class="negro">

		</div>
		<div class="row" style="margin-right: auto;">
			<div class="col-12 col-md-8 col-xl-6">
				<h2>"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y económico en las comunidades donde trabajamos"</h2>
			</div>
		</div>
	</div>
@endsection