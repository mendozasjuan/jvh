@extends('layouts.index')

@section('titulo', 'JVH - Productos')

@section('estilos')
	<style>
		.hero-img{
			height: 300px;
			width: 100%;
			background: url("{{ asset('img/wagyu-de-kobe-y-black-angus-las-mejores-carnes-del-mundo.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}

    </style>
@endsection

@section('header')
	@include('layouts.header',['text' => false,'titulo'=>$inicio->texto_encabezado ?? ''])
@endsection

@section('secciones')
	<div id="pd-seccion" style="padding-top:48px;margin-bottom: 45px;height: 700px;padding-left: 38px;">
		<div class="row">
			<div class="col-2">adsasd</div>
			<div class="col-8">
				<div class="row">
					<div class="col-3">
						sdf
					</div>
					<div class="col-5">
						sdf
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						sdf
					</div>
					<div class="col-5">
						sdf
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection