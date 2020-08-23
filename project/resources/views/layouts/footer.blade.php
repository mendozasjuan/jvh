<footer>
				<div class="row align-items-center" style="margin-right: auto;">
					<div class="col">
						<div class="row">
							<img src="{{ asset($logo->logo) }}" alt="">
						</div>
						<div class="row redes-sociales">
							<a href="{{ $redessociales->linkedin }}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
							<a href="{{ $redessociales->instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
							<a href="{{ $redessociales->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							<a href="{{ $redessociales->youtube }}"><i class="fab fa-youtube" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-md-9 d-none d-md-block align-items-center">
						<div class="row" style="margin-bottom: 30px;font-weight: 500;font-size: 16px;" >
							<div class="col-3">{!! $footer->ciudad1 !!}<!--L. DEL MIRADOR - BUENOS AIRES--></div>
							<div class="col-3">{!! $footer->ciudad2 !!}<!--BERNASCONI - LA PAMPA--></div>
							<div class="col-3">{!! $footer->contacto_titulo !!}<!--CONTACTO--></div>
						</div>
						<div class="row" style="margin-bottom: 15px;font-size: 13px;font-weight: 400;">
							<i class="fa fa-map-marker-alt fa-2x"  aria-hidden="true"></i>
							<div class="col-3">
								<span style="font-weight: bold;">Dirección</span> <br><span style="color:#fff">
									{!! $footer->direccion1 !!}<!--Paso 3030 (1752) Lomas del Mirador Buenos Aires Argentina--></span>
							</div>
							<i class="fas fa-map-marker-alt fa-2x"  aria-hidden="true"></i>
							<div class="col-3"><span style="font-weight: bold;">Dirección</span> <br><span style="color:#fff">
								{!! $footer->direccion2 !!}<!--Ruta 35, Km 165 (8204) Bernasconi La Pampa - Argentina--></span></div>
							<i class="far fa-envelope fa-2x" aria-hidden="true"></i>
							<div class="col-3"><span style="font-weight: bold;">Comercio Exterior</span> <br><span style="color:#fff">{!! $footer->comercio_exterior !!}<!--Jescudero@frigorificohv.com.ar--></span></div>
						</div>
						<div class="row" style="font-size: 13px;font-weight: 400;">
							<i class="fas fa-phone-alt fa-2x" aria-hidden="true"></i>
							<div class="col-3">

								<span style="font-weight: bold;">Llámenos al</span> <br><span style="color:#fff">
									{!! $footer->telefonos1 !!}<!--+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882--></span></div>
							<i class="fas fa-phone-alt fa-2x" aria-hidden="true"></i>
							<div class="col-3"><span style="font-weight: bold;">Llámenos al</span> <br><span style="color:#fff">
								{!! $footer->telefonos2 !!}<!--+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882--></span></div>

							<i class="far fa-envelope fa-2x" aria-hidden="true"></i>
							<div class="col-3"><span style="font-weight: bold;">Área Comercial</span> <br><span style="color:#fff">
								{!! $footer->area_comercial !!}<!--dvigna@frigorificohv.com.ar--></span></div>
						</div>
					</div>
				</div>
			</footer>