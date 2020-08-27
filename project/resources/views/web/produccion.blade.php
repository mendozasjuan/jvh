@extends('layouts.index')

@section('titulo', 'JVH - Producción')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			/*background: url("{{ asset($produccion->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;*/
			position: relative;
		}

		#p-seccion2 p{
			color:#6E6F71;
		}

		#h-seccion3{
			height: 100%;
			background: transparent url("{{ asset($produccion->seccion3_imagen_fondo) }}") no-repeat center center;
			opacity:1;
			color:#fff;
			padding-right: 38px;
			background-size: cover;
			margin-right: auto;
			position: relative;
			width: 100%;
		}

		#p-seccion1{
			width: 100%;
			background: transparent url('{{ asset($produccion->seccion1_imagen_fondo) }}') 0% 0% no-repeat padding-box;
			opacity: 1;
			position: relative;
			background-size: cover;
			color:#fff;
		}

		/*.video-foreground,
		.video-background iframe {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  pointer-events: none;
		}*/

    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => $produccion->texto_encabezado_habilitado,
		'titulo' => $produccion->texto_encabezado,
		'activeLink' => 'produccion',
		'logo1'=> $produccion->logo_1_encabezado,
		'logo2' => $produccion->logo_2_encabezado,
		'logotipo' => $logo,
		'carousel' => $carousel
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="p-seccion1" >
				<div class="negro">

				</div>
				<div style="height: 100%; padding-top: 76px; padding-bottom: 70px;" class="row align-items-center" >
					<div class="col-8 col-sm-7 col-md-8 col-lg-5" style="margin-left: 60px; border-left: 3px solid #fff;">
						<h2>{!! $produccion->seccion1_titulo !!}</h2>
						<!--Faena / Despostada-->
						{!! $produccion->seccion1_parrafo !!}
						<!--<p>
							Nuestra linea de despostada es moderna y eficaz. Utilizamos sistemas de trazabilidad individual de corte desde su nacimiento hasta su consumo. Nuestro personal de produccion está altamente capacitado para garantizar la inocuidad y sanidad de nuestros productos.
						</p>-->
					</div>
					<div class="col">
						<!--<img width="120" height="120" style="margin-right: 33px;" src="img/Object-5209.svg">-->
						<!--<img width="120" height="120" src="img/Object-1237.svg">-->
						<img width="120" height="120" style="margin-right: 33px;" src="{{ asset($produccion->seccion1_logo1) }}">
						<img width="120" height="120" src="{{ asset($produccion->seccion1_logo2) }}">
					</div>
				</div>
			</div>
			<div id="p-seccion2">
				<div class="row">
					<div style="height: 100%; padding-top: 47px; padding-bottom: 47px;" class="row align-items-center" >
						<div class="col-8 col-sm-5 col-md-8 col-lg-5" style="margin-left: 80px; border-left: 3px solid #2B1C17;padding-left: 40px;">
							<h2>{!! $produccion->seccion2_titulo !!}<!--Nuestro compromiso--></h2>
							<div style="color:#6E6F71">
								{!! $produccion->seccion2_parrafo1 !!}
								<!--Frigorifico hv produce cortes de carne, menudencias y subproductos de origen bovino para mercados internacionales y locales. Nuestras planta están ubicada en el centro de la provincia de buenos aires y en el corazón de la región ganadera argentina.Tenemos una moderna planta de procesamiento que cuenta con tecnología de punta y sistemas innovadores que permiten automatizar los procesos de producción y logística. Utilizamos equipos, métodos y tecnología de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria.-->
							</div>
						</div>
						<div class="col-8 col-sm-5" style="margin-left: 80px; padding-left: 40px;">
							<div style="color:#6E6F71">
								{!! $produccion->seccion2_parrafo2 !!}
								<!--Utilizamos equipos, métodos y tecnología de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria-->
							</div>
						</div>
					</div>
				</div>

			</div>
			<div  id="h-seccion3">
				<!--<div class="video-background">
				    <div class="video-foreground">
				     
				    </div>
				</div>-->
				<div class="negro">

				</div>
				<div style="height: 100%" class="row justify-content-end align-items-center">
						<div class="col-11 col-sm-8 col-md-7 col-lg-5 col-xl-3">
							<h2 class="text-right">{!! $produccion->seccion3_titulo !!}<!--"Última generación en la producción de carnes"--></h2>
							{!! $produccion->seccion3_parrafo !!}
							<!--<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío</p>-->
						</div>
					</div>
			</div>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo])
@endsection