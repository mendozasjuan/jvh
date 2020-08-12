<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


	<!-- Bootstrap -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	@yield('estilos')

</head>
<body>
	<div class="container-fluid">
		<header class="hero-img">
			@yield('header')
		</header>
		
		@yield('secciones')
		<!--</section>-->
		@section('footer')
			<footer>
				<div class="row align-items-center" style="margin-right: auto;">
					<div class="col-md-3 col-12">
						<div class="row">
							<img src="img/Capa_1.svg" alt="">
						</div>
						<div class="row redes-sociales" style=";font-weight: 500;font-size: 16px;color: #fff">
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col align-items-center">
							<div class="row" style="margin-bottom: 30px;font-weight: 500;font-size: 16px;" >
								<div class="col-3">L. DEL MIRADOR - BUENOS AIRES</div>
								<div class="col-3">BERNASCONI - LA PAMPA</div>
								<div class="col-3">CONTACTO</div>
							</div>
							<div class="row" style="margin-bottom: 15px;font-size: 13px;font-weight: 400;">
								<i class="fa fa-map-marker fa-2x"  aria-hidden="true"></i>
								<div class="col-3">
									<span style="font-weight: bold;">Dirección</span> <br><span style="color:#fff">Paso 3030 (1752) Lomas del Mirador Buenos Aires Argentina</span>
								</div>
								<i class="fa fa-map-marker fa-2x"  aria-hidden="true"></i>
								<div class="col-3"><span style="font-weight: bold;">Dirección</span> <br><span style="color:#fff">Ruta 35, Km 165 (8204) Bernasconi La Pampa - Argentina</span></div>
								<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
								<div class="col-3"><span style="font-weight: bold;">Comercio Exterior</span> <br><span style="color:#fff">Jescudero@frigorificohv.com.ar</span></div>
							</div>
							<div class="row" style="font-size: 13px;font-weight: 400;">
								<i class="fa fa-phone fa-lg" aria-hidden="true"></i>
								<div class="col-3">

									<span style="font-weight: bold;">Llámenos al</span> <br><span style="color:#fff">+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882</span></div>
								<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
								<div class="col-3"><span style="font-weight: bold;">Llámenos al</span> <br><span style="color:#fff">+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882</span></div>

								<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
								<div class="col-3"><span style="font-weight: bold;">Área Comercial</span> <br><span style="color:#fff">dvigna@frigorificohv.com.ar</span></div>
							</div>
					</div>
				</div>
			</footer>
		@show
	</div>





	<!-- Jquery -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<!-- Popper -->
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>