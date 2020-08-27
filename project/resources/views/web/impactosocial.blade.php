@extends('layouts.index')

@section('titulo', 'JVH - Impacto Social')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			/*background: url("{{ asset($impactosocial->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;*/
			position: relative;
			margin-bottom: 29px;
		}
		#i-seccion5 {
			height: 100%;
			background: transparent url("{{ asset($impactosocial->seccion2_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			opacity:1;
			position: relative;
		}

		#i-seccion5 h2{
			margin-left: 38px;
			margin-top: 75px;
			margin-bottom: 204px;
			color:#fff;
			font-size: 40px;
		}

		#p-seccion2 p{
			color:#6E6F71;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
		'text' => $impactosocial->texto_encabezado_habilitado,
		'titulo' => $impactosocial->texto_encabezado,
		'activeLink' => 'impactosocial',
		'logo1'=> $impactosocial->logo_1_encabezado,
		'logo2' => $impactosocial->logo_2_encabezado,
		'logotipo' => $logo,
		'carousel' => $carousel
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="p-seccion2">
				<div class="row">
					<div style="height: 100%; padding-top: 47px; padding-bottom: 47px;" class="row align-items-center" >
						<div class="col-8 col-sm-5 col-md-8 col-lg-5" style="margin-left: 80px; border-left: 3px solid #2B1C17;padding-left: 40px;">
							<h2>{!! $impactosocial->seccion1_titulo !!}<!--Nuestro compromiso--></h2>
							{!! $impactosocial->seccion1_parrafo1 !!}
							<!--<p style="color:#6E6F71">
								Somos conscientes que el factor humano es la fuerza que mueve frigorifico hv sa, y nos empeñamos en cuidarlo. Aparte de preocuparnos por la capacitacion y el bienestar de nuestros empleados, nos sentimos orgullosos de contribuir al desarrollo social de la comunidad donde trabajamos. Con nuestra empresa creamos empleo y desarrollo, generando ingresos que ayudan a mejorar la calidad de vida de la comunidad de nuestra ciudad.
							</p>-->
						</div>
						<div class="col-8 col-sm-5" style="margin-left: 80px; padding-left: 40px;">
							{!! $impactosocial->seccion1_parrafo2 !!}
							<!--<p style="color:#6E6F71">
								Nuestra gente es el mayor capital y el bien más preciado. Nos sentimos muy orgullosos de contar con un equipo homogéneo, talentoso e innovador. Contamos con hombres y mujeres que trabajan arduamente e integran un proyecto en común.
							</p>-->
						</div>
					</div>
				</div>

			</div>

	<div  id="i-seccion5">
		<div class="negro">

		</div>
		<div class="row" style="margin-right: auto;">
			<div class="col-12 col-xl-3">
				<h2>{!! $impactosocial->seccion2_titulo !!}<!--"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y económico en las comunidades donde trabajamos"--></h2>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection