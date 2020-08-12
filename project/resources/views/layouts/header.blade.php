<div class="degradado">
			<section id="nav">
				<div class="row justify-content-center">
					<!--<div class="row">-->
						<div class="col-12 col-sm-2">
							<a href="{{ url('/') }}"><img src="img/Capa_1.svg"></a>
						</div>
						<div class="col col-sm-10">
							<div class="row contacto justify-content-center justify-content-sm-end mr-3">
								<a href="{{ url('contacto') }}">Contacto</a>
								<a href="#">Es</a>
								<a href="#">独</a>
							</div>
							<div class="row">
								<div class="col ">
									<nav class="nav navbar navbar-expand-lg justify-content-center">

										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon">
											<i class="fas fa-bars" style="color: #E51D2A;"></i>
										</span>
										</button>

										<div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
											<ul class="navbar-nav ">
												<li class="nav-item">
													<a class="nav-link" href="{{ url('quienessomos') }}">Quienes Somos</a>
													@if (isset($activeLink) && $activeLink == 'quienessomos')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('produccion') }}">Producción</a>
													@if (isset($activeLink) && $activeLink == 'produccion')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('exportacion') }}">Exportación</a>
													@if (isset($activeLink) && $activeLink == 'exportacion')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('productos') }}">Productos</a>
													@if (isset($activeLink) && $activeLink == 'productos')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('calidad') }}">Calidad</a>
													@if (isset($activeLink) && $activeLink == 'calidad')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('impactosocial') }}">Impacto Social</a>
													@if (isset($activeLink) && $activeLink == 'impactosocial')
														<div class="linea"></div>
													@endif
												</li>
												<li class="nav-item">
													<a class="nav-link" href="{{ url('recursoshumanos') }}">Recursos Humanos</a>
													@if (isset($activeLink) && $activeLink == 'recursoshumanos')
														<div class="linea"></div>
													@endif
												</li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
					</div>
				</div>

			</section>
			@if ($text)
				<div id="h-seccion1" class="row align-items-center">
					<div class="col-12 col-md-4 col-lg-3 col-xl-2 text-center">
						<img  src="img/Object-5209.svg">
						<img  src="img/Object-1237.svg">
					</div>
					<div class="col-7 col-7 col-xl-3 col-lg-3">
						<h2>
							"Carne Argentina de alta calidad para los mercados más exigentes del mundo"
						</h2>
					</div>
				</div>
			@endif

		</div>