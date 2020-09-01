<div id="carouselEncabezado" class="carousel slide" data-ride="carousel" >
	<ol class="carousel-indicators">
		@foreach($carousel['imagenes'] as $imagen)
			<li data-target="#carouselEncabezado" data-slide-to="{{$loop->index}}" class="{{ $loop->first ? 'active' : ''}}"></li>
    	@endforeach
  </ol>
  <div class="carousel-inner">
  	<a class="carousel-control-prev" href="#carouselEncabezado" role="button" data-slide="prev" style="width: 50px;">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Anterior</span>
  	</a>
  	@foreach($carousel['imagenes'] as $imagen)
	    <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
	    	
	      <img class="d-block w-100" alt="..." style="height: {{$carousel['alto'] ? $carousel['alto']  : '600px'}}; width: 100%;background: url({{ asset($imagen) }}) no-repeat center center;background-size: cover;position: relative;">
	    </div>

    @endforeach
    <!--<div class="carousel-item">
      <img src="{{ asset('img/WpZ0Rl0cyC94ykIMCyAKDOhUtCksksrIFFOUkOMm.png') }}" class="d-block w-100" alt="...">
    </div>-->
    <a class="carousel-control-next" href="#carouselEncabezado" role="button" data-slide="next" style="width: 50px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  </div>
 
  	
  

  
</div>


<div class="degradado">
	<section id="nav">
		<div class="row justify-content-center topnavbar-desktop__row">
			<div class="col-12 col-sm-2">
				<a href="{{ url('/') }}"><img src="{{ asset($logotipo->logo) }}"></a>
			</div>
			<div class="col col-sm-10">
				<div class="row contacto justify-content-center justify-content-sm-end mr-3">
					<a href="{{ url('contacto') }}">@lang('textos.contacto')</a>
					<a class="{{ App::isLocale('es') ? 'localeActive' : ''}}" href="{{ url('lang', ['es']) }}">Es</a>
					<a class="{{ App::isLocale('en') ? 'localeActive' : ''}}" href="{{ url('lang', ['en']) }}">En</a>
					<a class="{{ App::isLocale('zh') ? 'localeActive' :''}}" href="{{ url('lang', ['zh']) }}">独</a>
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
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'quienessomos' ? 'linkActivo' : ''}}" href="{{ url('quienessomos') }}">
										@lang('textos.quienessomos')
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'produccion' ? 'linkActivo' : ''}}" href="{{ url('produccion') }}">
											@lang('textos.produccion')
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'exportacion' ? 'linkActivo' : ''}}" href="{{ url('exportacion') }}">
											@lang('textos.exportacion')
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'productos' ? 'linkActivo' : ''}}" href="{{ url('productos') }}">
											@lang('textos.productos')
										</a>
										
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'calidad' ? 'linkActivo' : ''}}" href="{{ url('calidad') }}">
											@lang('textos.calidad')
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'impactosocial' ? 'linkActivo' : ''}}" href="{{ url('impactosocial') }}">
											@lang('textos.impactosocial')
											<span class="linea "></span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ isset($activeLink) && $activeLink == 'recursoshumanos' ? 'linkActivo' :''}}" href="{{ url('recursoshumanos') }}">
											@lang('textos.recursoshumanos')
										</a>
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
			<div class="col-12 col-md-4 col-lg-3 text-center">
				<img  src="{{ asset($logo1) }}">
				<img  src="{{ asset($logo2) }}">
			</div>
			<div class="col-12 col-md-7 col-xl-3 col-lg-3">
				<h2>
					{!! $titulo !!}
				</h2>
			</div>
		</div>
	@endif
</div>
<div class="topnavbar-mobile">
	<div class="topnavbar-mobile__button" data-toggle="collapse" href="#collapseLang" role="button" aria-expanded="false" aria-controls="collapseLang">
		<div class="{{ !App::isLocale('es') ? 'd-none' :'d-block'}}">{{ strtoupper('es') }}</div>
		<div class="{{ !App::isLocale('en') ? 'd-none' :'d-block'}}">{{ strtoupper('en') }}</div>
		<div class="{{ !App::isLocale('zh') ? 'd-none' :'d-block'}}">独</div>
		 <i class="fas fa-caret-down"></i>
	</div>
	<a class="topnavbar-mobile__logo" href="{{ url('/') }}">
		<img src="{{ asset($logotipo->logo) }}">
	</a>
	<div class="topnavbar-mobile__button" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu">
		<i class="fas fa-bars" style="font-size: 2em;"></i>
	</div>
	<div class="topnavbar-mobile__collapse" id="accordionMobileNavbar">
		<div class="collapse" id="collapseLang" data-parent="#accordionMobileNavbar">
			<div class="topnavbar-mobile__card">
				<a href="{{ url('lang', ['es']) }}">ES</a>
				<a href="{{ url('lang', ['en']) }}">EN</a>
				<a class="{{ App::isLocale('zh') ? 'active' :''}}" href="{{url('lang', ['zh']) }}">独</a>
			</div>
		</div>
		<div class="collapse" id="collapseMenu" data-parent="#accordionMobileNavbar">
			<div class="topnavbar-mobile__card">
				<a href="{{ url('quienessomos') }}">@lang('textos.quienessomos')</a>
				<a href="{{ url('produccion') }}">@lang('textos.produccion')</a>
				<a href="{{ url('exportacion') }}">@lang('textos.exportacion')</a>
				<a href="{{ url('productos') }}">@lang('textos.productos')</a>
				<a href="{{ url('calidad') }}">@lang('textos.calidad')</a>
				<a href="{{ url('impactosocial') }}">@lang('textos.impactosocial')</a>
				<a href="{{ url('recursoshumanos') }}">@lang('textos.recursoshumanos')</a>
			</div>
		</div>
	</div>
</div>
