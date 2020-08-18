@extends('layouts.index')

@section('titulo', 'JVH - Inicio')

@section('estilos')
	<style>
		.hero-img{
			height: 300px;
			width: 100%;
			background: url("{{ asset('img/wagyu-de-kobe-y-black-angus-las-mejores-carnes-del-mundo.png') }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}

		#p-seccion1{
			width: 100%;
			height: 376px;
			background: transparent url("{{ asset('img/10.png') }}") 0% 0% no-repeat padding-box;
			opacity: 1;
			position: relative;
			background-size: cover;
		}
		.item-product{
			height: 100%;
			margin: auto;
			width: 300px;
			position: relative;
		}

		.product-img{
			width: 300px;
			border: 1px solid #CCCCCC;
		}

		.product-title-img{
			padding-top: 13px;
			font-size: 16px;
		}

		.fondo {
			width: 100%;
			height: 100%;
	       background: #E51D2A;
	       opacity: 0;
	       position: absolute;
		}

		.item-product:hover .fondo { opacity:0.4; }

		.item-product:hover .product-title-img {
			color:white;
			opacity:0.9;
			padding-bottom: 20px;
			padding-left: 20px;
		}

		.item-product:hover img { border: 0px; }

    </style>
@endsection

@section('header')
	@include('layouts.header',['text' => false,'titulo'=>$inicio->texto_encabezado ?? ''])
@endsection

@section('secciones')
	<div id="p-seccion1">
					<div class="negro"></div>
					<div style="height: 100%; padding-top: 38px;" class="row" >
						<div class="col-12 col-md-4 text-center" >
							<h2 style="margin-left: 170px; padding-left: 20px; border-left: 3px solid #fff;">Catálogo de cortes</h2>
							<img src="{{ asset('img/vaca-1.png') }}" alt="">
						</div>
						<div class="col-12 col-md-4 text-center">
							<p style="font-size: 16px;letter-spacing: 1.5px;font-weight: 600;">CUARTO TRASERO</p>
							<p>Bife angosto<br/> Lomo Tapa de cuadril/ picaña<br/> Corazon de cuadril<br/> Colita de cuadril<br/> Peceto<br/> Cuadrada<br/> Nalga<br/> Tortuguita<br/> Bola de lomo<br/> Garron<br/> Vacio</p>
						</div>
						<div class="col-12 col-md-4 text-center">
							<p style="font-size: 16px;letter-spacing: 1.5px;font-weight: 600;">CUARTO DELANTERO</p>
							<p>Cogote<br/> Aguja<br/> Bife ancho<br/> Matambre<br/> Falda<br/> Asado<br/> Brazuelo<br/> Pecho<br/> Corazon de paleta<br/> Maricha<br/> Chingolo</p>
						</div>
					</div>
	</div>
	<div id="p-seccion2" style="margin-bottom: 45px;">
		<div class="row alig-items-center">
			<div class="col-12" style="margin-top: 34px;">
				<p class="text-center" style="font-size: 16px;letter-spacing: 1.5px;font-weight: 600;margin-bottom: 9px;">CUARTO TRASERO</p>
				<div class="text-center" style="margin: auto;width: 50px; border: 3px solid #E51D2A; opacity: 0.5;"></div>
			</div>
		</div>
		<div class="row alig-items-center" style="margin-top: 34px;">
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Corazon de Cuadril</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Cuadrada</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Paleta</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Bife Ancho con Hueso</p>
				</div>
			</div>
		</div>
		<div class="row alig-items-center">
			<div class='item-product' >
				<p class="text-center" style="font-size: 16px;letter-spacing: 1.5px;font-weight: 600;margin-bottom: 9px;">CUARTO DELANTERO</p>
				<div class="text-center" style="margin: auto;width: 50px; border: 3px solid #E51D2A; opacity: 0.5;"></div>
			</div>
		</div>
		<div class="row alig-items-center" style="margin-top: 34px;">
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Corazon de Cuadril</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Cuadrada</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Paleta</p>
				</div>
			</div>
			<div class="col-3">
				<div class='item-product' >
					<div class="fondo"></div>
					<img class="product-img" src="{{ asset('img/03.png') }}" alt="">
					<p class="product-title-img">Bife Ancho con Hueso</p>
				</div>
			</div>
		</div>
	</div>
@endsection