<footer>
				<div class="row align-items-center" style="margin-right: auto;">
					<div class="col">
						<div class="row justify-content-sm-center">

								<img src="{{ asset($logo->logo) }}" alt="">


						</div>
						<div class="row redes-sociales justify-content-sm-center">

								<a href="{{ $redessociales->linkedin }}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
								<a href="{{ $redessociales->instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								<a href="{{ $redessociales->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
								<a href="{{ $redessociales->youtube }}"><i class="fab fa-youtube" aria-hidden="true"></i></a>

						</div>
					</div>
					<div class="col-lg-9 d-none d-md-block">
					<div class="row justify-content-sm-center" style="margin-bottom: 30px;font-weight: 500;font-size: 16px;" >
							<div class="col">{!! $footer->ciudad1 !!}<!--L. DEL MIRADOR - BUENOS AIRES--></div>
							<div class="col">{!! $footer->ciudad2 !!}<!--BERNASCONI - LA PAMPA--></div>
							<div class="col">{!! $footer->contacto_titulo !!}<!--CONTACTO--></div>
						</div>
						<div class="row" style="margin-bottom: 15px;font-size: 13px;font-weight: 400;">
							<div class="col">
								<div class="row">
									<div class="col-1">
										<i class="fa fa-map-marker-alt "  aria-hidden="true"></i>
									</div>
									<div class="col">
										<span style="font-weight: bold;">@lang('textos.direccion')</span><span style="color:#fff">
										{!! $footer->direccion1 !!}<!--Paso 3030 (1752) Lomas del Mirador Buenos Aires Argentina--></span>

									</div>
								</div>



							</div>
							<div class="col">
								<div class="row">

									<div class="col-1">
										<i class="fas fa-map-marker-alt "  aria-hidden="true"></i>
									</div>
									<div class="col">
										<span style="font-weight: bold;">@lang('textos.direccion')</span> <span style="color:#fff">
										{!! $footer->direccion2 !!}<!--Ruta 35, Km 165 (8204) Bernasconi La Pampa - Argentina--></span>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="row">
									
										<div class="col-1">
										<i class="far fa-envelope " aria-hidden="true"></i>
									</div>
									<div class="col">
										<span style="font-weight: bold;">@lang('textos.comercioexterior')</span><p><span style="color:#fff"><a style="color:#fff" href="mailto:{!! $footer->comercio_exterior !!}">{!! $footer->comercio_exterior !!}</a></span><!--Jescudero@frigorificohv.com.ar--></p>

									</div>

								</div>

							</div>
						</div>
						<div class="row" style="font-size: 13px;font-weight: 400;">
							<div class="col">

								<div class="row">
									<div class="col-1">
										<i class="fas fa-phone-alt " aria-hidden="true"></i>
									</div>
									<div class="col">
										<span style="font-weight: bold;">@lang('textos.llamenosal')</span><span class="numeroTelefono" style="color:#fff">
										{!! $footer->telefonos1 !!}<!--+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882--></span>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="row">
									<div class="col-1">
										<i class="fas fa-phone-alt " aria-hidden="true"></i>
									</div>
									<div class="col">
										<span  style="font-weight: bold;">@lang('textos.llamenosal')</span><span class="numeroTelefono" style="color:#fff">
									{!! $footer->telefonos2 !!}<!--+54 (11)) 4699-4424 <br>+54 (11)) 4699-2882--></span>
									</div>
								</div>

							</div>
							<div class="col">
								<div class="row">
									<div class="col-1">
										<i class="far fa-envelope " aria-hidden="true"></i>
									</div>
									<div class="col">
										<span style="font-weight: bold;">@lang('textos.areacomercial')</span><p>
											<span style="color:#fff">
										<a style="color:#fff" href="mailto:{!! $footer->area_comercial !!}">{!! $footer->area_comercial !!}</a><!--dvigna@frigorificohv.com.ar--></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>