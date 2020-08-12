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
		<div class="degradado">
				<section id="nav">
					<div class="row justify-content-center">
						<!--<div class="row">-->
							<div class="col-12 col-sm-2">
								<a href="{{ url('/') }}"><img src="img/Capa_1.svg"></a>
							</div>
							<div class="col col-sm-10">
								<div class="row contacto justify-content-center justify-content-sm-end mr-3">
									<a href="#">Contacto</a>
									<a href="#">Es</a>
									<a href="#">独</a>
								</div>
								<div class="row">
									<div class="col ">
										<nav class="nav navbar navbar-expand-lg justify-content-center">

											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon">
												<i class="fa fa-navicon"></i>
											</span>
											</button>

											<div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
												<ul class="navbar-nav ">
													<li class="nav-item">
														<a class="nav-link" href="{{ url('quienessomos') }}">Quienes Somos</a>
														<div class="linea"></div>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="{{ url('produccion') }}">Producción</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#">Exportación</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#">Productos</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#">Calidad</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#">Impacto Social</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#">Recursos Humanos</a>
													</li>
												</ul>
											</div>
										</nav>
									</div>
								</div>
						</div>
					</div>

				</section>
				<!--<div id="h-seccion1" class="row align-items-center">
					<div class="col-12 col-md-4 col-lg-3 col-xl-2 text-center">
						<img  src="img/Object-5209.svg">
						<img  src="img/Object-1237.svg">
					</div>
					<div class="col-7 col-7 col-xl-3 col-lg-3">
						<h2>
							"Carne Argentina de alta calidad para los mercados más exigentes del mundo"
						</h2>
					</div>
				</div>-->

			</div>
@endsection

@section('secciones')
		<!--<section>-->
	<div id="qs-seccion1" >
				<div class="negro">

				</div>
				<div style="height: 100%" class="row align-items-center">
					<div class="col-12 col-md-3 text-center"><p>Frigorífico vh cuenta con una Planta 35.000 M2</p></div>
					<div class="col-12 col-md-3 text-center"><p>Frigorífico vh cuenta con Corrales 1200 M2</p></div>
					<div class="col-12 col-md-3 text-center"><p>Capacidad de faena por día 700 animales</p></div>
					<div class="col-12 col-md-3 text-center"><p>Capacidad de almacenaje enfriado y congelado 300 tons</p></div>
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
			<div id="qs-seccion2">
				<div class="row">
					<div class="col-12 col-sm-6">
						<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>
					</div>
					<div class="col-12 col-sm-6">
						<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>
					</div>
				</div>

			</div>


			<div id="qs-seccion4">
				<div class="negro"></div>
				<div style="height: 100%" class="row align-items-center">
					<div class="col-12 col-md-3 text-center">
						<p style="font-size: 16px">Visión</p>
						<p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo</p>
					</div>
					<div class="col-12 col-md-3 text-center">
						<p style="font-size: 16px">Misión</p>
						<p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>
					</div>
					<div class="col-12 col-md-3 text-center">
						<p style="font-size: 16px">Nuestro Compromiso</p>
						<p>Honestidad, integridad, respeto, responsabilidad y dedicación a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos</p>
					</div>
					<div class="col-12 col-md-3 text-center">
						<p style="font-size: 16px">Recursos Humanos</p>
						<p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>
					</div>
				</div>
				</div>
			</div>
@endsection