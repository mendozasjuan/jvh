@extends('layouts.index')

@section('titulo', 'JVH - Contacto')

@section('estilos')
	<style>
		.hero-img{
			height: 600px;
			width: 100%;
			background: url("{{ asset('img/WhatsApp Image 2020-06-18 at 12.17.53 PM (1).png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
			margin-bottom: 29px;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false
	])
@endsection

@section('secciones')
		<!--<section>-->
	<div id="c-seccion" class="row">
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col"></div>
			<div class="col"></div>
		</div>
	</div>
@endsection