@extends('layouts.index')

@section('titulo', 'JVH - Recursos Humanos')

@section('estilos')
	<style>
		.hero-img{
			height: 300px;
			width: 100%;
			background: url("{{ asset('img/bg-black_angus-001-JAndrewPatronik.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false,
			'activeLink' => 'recursoshumanos'
	])
@endsection

@section('secciones')
		<!--https://xd.adobe.com/view/b80272e1-7ec5-4d6b-4e6d-03fc5611e154-ce33/screen/833932a6-8014-4052-b8bb-ddff864ec9f2/-->
	<div id="rh-seccion" class="row" style="margin-top: 50px;margin-bottom: 30px;">
		<div class="col-3" style="margin-left: 80px; border-left: 3px solid #2B1C17;padding-left: 20px;">
			<h2>Recursos Humanos</h2>
			<p style="color:#6E6F71">
				Trabajá con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.
			</p>
		</div>
		<div class="col">
			<div class="row">
				<div class="col-3">
					<span style="font-weight: bold;color:#E51D2A;">DATOS PERSONALES</span>
					<p style="color:#6E6F71">Foto</p>
					<div style="width: 150px;height: 150px;border: 1px solid #ccc;" class="d-flex">
						<div >
							<p style="color:#E51D2A;font-size: 10px; width: 100%;height:100%;padding: 10px;background-color: #ccc;margin: 5px;">
								TAMAÑO MAXIMO: 5MB<br>
							FORMATO: JPG O PNG
							</p>
							
						</div>

					</div>
					
				</div>
				<div class="col">
					
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					
				</div>
				<div class="col">
					
				</div>
			</div>
		</div>
	</div>
		
@endsection