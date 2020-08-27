@extends('layouts.index')

@section('titulo', 'JVH - Contacto')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			/*background: url("{{ asset($contacto->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;*/
			position: relative;
			margin-bottom: 29px;
		}

		.boton{
			background-color:#E51D2A;
			color:#fff;
			width:168px;
			font-size:16px;
		}

		.caja{
			padding-left:38px;
			padding-top:30px;
			padding-bottom:30px;
		}

		.datos_blanco, .datos_blanco p{
			color:#fff;
		}

		#descripcion_contacto p{
			color:#6E6F71; 
			margin-bottom:30px;"
		}



		.mapa{
			width: inherit!important;
			height: 382px!important;
		}

		iframe{
			width: 100%;
			height: 100%;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false,
			'logotipo' => $logo,
			'carousel' => $carousel
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="c-seccion">
		<div class="row">
			<div class="col-12 pr-0 mb-3 col-md-6" >
						<div class="mapa">
							{!!$contacto->coordenadas1!!}
							<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.6690732305055!2d-58.52651318418095!3d-34.663059468148596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc8f6b5e34985%3A0xdb70aaf7981ec532!2sFrigor%C3%ADfico%20Hv!5e0!3m2!1ses!2sve!4v1598389817421!5m2!1ses!2sve" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->

						</div>


				<div  class="caja" style="background: #ccc 0% 0% no-repeat padding-box; ">
						<h3 style="font: normal normal 600 23px Raleway;font-weight:bold;">{!! $contacto->ciudad1!!}<!--Lomas del Mirador--></h3>

					<div class="row" style="font-size:14px;color:#060505">

						<div class="col" >
							<div class="row">
								<div class="col-1"><i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i></div>
								<div class="col"><span style="font-weight: bold; color:#E51D2A;">@lang('textos.direccion')</span> 
							{!! $contacto->direccion1!!}
							<!--Paso 3030 (1752) Lomas del Mirador Buenos Aires--></div>
							</div>
							
							
						</div>

						<div class="col">
							<div class="row">
								<div class="col-1"><i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i></div>
								<div class="col">
									<span style="font-weight: bold; color:#E51D2A">@lang('textos.llamenosal')</span> 
							<!--+54 (11)) 4699-4424 +54 (11)) 4699-2882-->
									<p>{!! $contacto->telefonos1!!}</p>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			<div class="col" style="padding-right: 0px;">
				
				<div class="mapa">
					{!! $contacto->coordenadas2 !!}
					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6299.341128860751!2d-63.77794607803259!3d-37.86799802558851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95e8e96d5a2d0a05%3A0x45277c28a55c3022!2sFrigorifico%20HV%20S.A!5e0!3m2!1ses!2sve!4v1598390165255!5m2!1ses!2sve"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
				</div>
				

				<div class="caja" style="background: #060505 0% 0% no-repeat padding-box" >
							<h3 style="color:#E51D2A">{!! $contacto->ciudad2!!}<!--Bernasconi--></h3>
					<div class="row" style="font-size:14px;color:#fff">

						<div class="col">
							<div class="row">
								<div class="col-1"><i style="font-weight: bold; color:#E51D2A" class="fa fa-map-marker-alt "  aria-hidden="true"></i></div>
								<div class="col">
									<span style="color:#E51D2A"><strong>@lang('textos.direccion')</strong></span>
									<div class="datos_blanco" style="color:#fff">
										{!! $contacto->direccion2!!}
									</div>
								</div>
							</div>
							
							
							
							<!--<br>Ruta 35, Km 165 (8204) Bernasconi - La Pampa-->
						</div>

						<div class="col">
							<div class="row">
								<div class="col-1"><i style="font-weight: bold; color:#E51D2A" class="fas fa-phone-alt " aria-hidden="true"></i></div>
								<div class="col">
									<span style="color:#E51D2A"><strong>@lang('textos.llamenosal')</strong></span> 
							<p class="datos_blanco">{!! $contacto->telefonos2!!}</p>
								</div>
							</div>
							
							
							<!--<br>+54 (11)) 4699-4424 / +54 (11)) 4699-2882-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center" style="margin-top: 58px;margin-left:38px;">
			<div class="col-12 col-lg-6" style="font-size:14px;">
				<span style="font-size:23px;font-weight:bold;margin-bottom:10px;">{!! $contacto->contacto_titulo !!}<!--Contacto--></span>
				<div id="descripcion_contacto">
					{!! $contacto->contacto_descripcion !!}
				</div>
				
				<!--<p style="color:#6E6F71; margin-bottom:30px;">Para mayor información, no dude en contactarse mediante el siguiente formulario, o a través de nuestras vías de comunicación</p>-->

				<div class="row" style="color:#000; margin-bottom:22px;margin-left:1px;">
					<div style="font-weight: bold;color:#E51D2A">
						<i  class="far fa-envelope " aria-hidden="true"></i>
					</div>
					<div style="margin-left:5px;">
						<span style="font-weight: bold;color:#E51D2A;">@lang('textos.comercioexterior')</span>
					 	<br>{!! $contacto->comercio_exterior !!}<!--Jescudero@frigorificohv.com.ar-->
					</div>
				</div>

				<div class="row" style="color:#000; margin-bottom:22px;margin-left:1px;">
					<div style="font-weight: bold;color:#E51D2A">
						<i  class="far fa-envelope " aria-hidden="true"></i>
					</div>
					<div style="margin-left:5px;">
						<span style="font-weight: bold;color:#E51D2A;">@lang('textos.areacomercial')</span>
					 	<br>{!! $contacto->area_comercial !!}<!--dvigna@frigorificohv.com.ar-->
					</div>
				</div>
			</div>
			<div class="col">
				<form action="{{route('contactoform')}}" method="post" accept-charset="utf-8">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-row mb-3">
						<div class="form-group col mr-3">
					      <input type="text" name="nombre" class="rounded-sm form-control" id="nombre" placeholder="@lang('textos.nombre')" value="{{old('nombre')}}">
					      <small  class="form-text text-danger">{{ $errors->first('nombre',':message') }}</small>
					    </div>
					    <div class="form-group col">
					      <input type="text" name="apellido" class="rounded-sm form-control" id="apellido" placeholder="@lang('textos.apellido')" value="{{old('apellido')}}">
					      <small  class="form-text text-danger">{{ $errors->first('apellido',':message') }}</small>
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col mr-3">
					      <input type="email" name="correo" class="rounded-sm form-control" id="correo" placeholder="@lang('textos.correoelectronico')" value="{{old('correo')}}">
					      <small  class="form-text text-danger">{{ $errors->first('correo',':message') }}</small>
					    </div>
					    <div class="form-group col">
					      <input type="text" name="telefono" class="rounded-sm form-control" id="telefono" placeholder="@lang('textos.telefono')" value="{{old('telefono')}}">
					      <small  class="form-text text-danger">{{ $errors->first('telefono',':message') }}</small>
					    </div>
					</div>
					<div class="form-row mb-3">
					    <div class="form-group col">
					      <textarea name="mensaje" class="rounded-sm form-control">{{old('mensaje') ? old('mensaje') : __('textos.mensaje') }}</textarea>
					      <small  class="form-text text-danger">{{ $errors->first('mensaje',':message') }}</small>
					    </div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<button class="btn boton float-right rounded-pill" type="submit">@lang('textos.enviar')           <strong>></strong></button>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection