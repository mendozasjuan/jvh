@extends('layouts.index')

@section('titulo', 'JVH - Productos')

@section('estilos')
	<style>
		.hero-img{
			height: 300px;
			width: 100%;
			background: url("{{ asset($img_fondo) }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}

		.miacordion {
		  max-width: 500px;
		  border: none;
		}

		.miacordion .card,
		.miacordion .card:last-child .card-header {
		  border: none;
		  box-shadow: none;
		}

		.miacordion .collapsed-acordion{
			background: #E51D2A 0% 0% no-repeat padding-box;
			  font-size: 13px;
			  border-radius:revert;
		}

		.collapsed-acordion a {
		  text-decoration: none;
		  color:#fff;
		  letter-spacing: 3px;
		}

		.miacordion .nocollapsed-acordion{
			background: #FFF 0% 0% no-repeat padding-box;
			  font-size: 13px;
			  border-radius:revert;
			  border-bottom: 1px solid #000 !important;
		}

		.nocollapsed-acordion a {
		  text-decoration: none;
		  color:#000;
		  letter-spacing: 3px;
		}

		.miacordion .card-body{
			padding: 0px;
			border:none;
		}

		.miacordion .card-body li{
			border:none;
		}

		.miacordion .card-body .list-group-item{
			padding: 0px;
			padding-left: 30px;
			padding-top: 15px;
			font-size: 16px;
			border:none;
		}

		.miacordion .btn-link:hover,
		.miacordion .btn-link:focus {
		  text-decoration: none;
		}

		.miacordion li + li {
		  margin-top: 10px;
		  border:none;
		}

		.miacordion .card-body a {
		  text-decoration: none;
		  color:#000;
		}

		.miacordion .card-body a:hover {
		  color:#E51D2A;
		}


		.product-img{
			width: 300px;
			border: 1px solid #CCCCCC;
		}

		.prev, .next{
			cursor: pointer;
		}

		#descripcion_producto p {
			color: #6E6F71;
		}

    </style>
@endsection

@section('header')
	@include('layouts.header',['text' => false,'titulo'=>$inicio->texto_encabezado ?? '','logotipo' => $logo,])
@endsection

@section('secciones')
	<div id="pd-seccion" style="padding-top:48px;margin-bottom: 45px;height: 100%;padding-left: 38px;">
		<div class="row">
			<div class="col-12 col-md-3">
				<div class="miacordion" id="accordionExample">
					@foreach ($categorias as $categoria)
						<div class="card box-shadow-0">
							<div class="card-header {{ $loop->first ? 'collapsed-acordion' : 'nocollapsed-acordion' }}" id="heading{{$categoria->id}}">
						        <a class="text-left" href="#" data-toggle="collapse" data-target="#collapse{{$categoria->id}}" aria-expanded="true" aria-controls="collapse{{$categoria->id}}">
						          	{{ $categoria->categoria }}<!--CUARTO TRASERO-->
						        </a>
							      
							    </div>
							    <div id="collapse{{$categoria->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							      <div class="card-body">
							        <ul class="list-group list-group-flush">
									@foreach ($categoria->cortes as $corte)
										<li class="list-group-item"><a href="{{route('productosdetalle',['id' => $corte->id])}}">{{ $corte->nombre }}</a></li>
									@endforeach
									</ul>
						      </div>
						    </div>
						  </div>
							
					@endforeach
				  <!--<div class="card box-shadow-0">
				    <div class="card-header collapsed-acordion" id="headingOne">
				      
				        <a class="text-left" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          	CUARTO TRASERO
				        </a>
				      
				    </div> 

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush">
					      <li class="list-group-item"><a href="#">Bife angosto</a></li>
					      <li class="list-group-item"><a href="#">Lomo</a></li>
					      <li class="list-group-item"><a href="#">Tapa de cuadril/ picaña</a></li>
					      <li class="list-group-item"><a href="#">Corazon de cuadril</a></li>
					      <li class="list-group-item"><a href="#">Peceto</a></li>
					      <li class="list-group-item"><a href="#">Cuadradal</a></li>
					      <li class="list-group-item"><a href="#">Nalga</a></li>
					      <li class="list-group-item"><a href="#">Tortuguita</a></li>
					      <li class="list-group-item"><a href="#">Bola de lomo</a></li>
					      <li class="list-group-item"><a href="#">Garron Vacio</a></li>
					    </ul>
				      </div>
				    </div>
				  </div>-->

				  <!--<div class="card">
				    <div class="card-header nocollapsed-acordion" id="headingTwo">
				      <a class="text-left" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
				          	CUARTO DELANTERO
				        </a>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				      	<ul class="list-group list-group-flush">
					      <li class="list-group-item"><a href="#">Bife angosto</a></li>
					      <li class="list-group-item"><a href="#">Lomo</a></li>
					      <li class="list-group-item"><a href="#">Tapa de cuadril/ picaña</a></li>
					      <li class="list-group-item"><a href="#">Corazon de cuadril</a></li>
					      <li class="list-group-item"><a href="#">Peceto</a></li>
					      <li class="list-group-item"><a href="#">Cuadradal</a></li>
					      <li class="list-group-item"><a href="#">Nalga</a></li>
					      <li class="list-group-item"><a href="#">Tortuguita</a></li>
					      <li class="list-group-item"><a href="#">Bola de lomo</a></li>
					      <li class="list-group-item"><a href="#">Garron Vacio</a></li>
					    </ul>
				      </div>
				    </div>
				  </div>-->
				
				</div>
			</div>
			<div class="col">
				<div class="row ">
					<div class="col align-self-center" style="margin-right: 36px; width: 100%;">
						

							
								<div class="row justify-content-center align-items-center mb-4">
									<div class="slider">
										<ul class="slides">
											@if($producto->imagenes)
												@foreach($producto->imagenes as $imagen)
													<li><img class="product-img" src="{{ asset($imagen->imagen) }}"></li>
													<!--<li><img class="product-img" src="{{ asset('img/02.png') }}"></li>
													<li><img class="product-img" src="{{ asset('img/04.png') }}"></li>
													<li><img class="product-img" src="{{ asset('img/05.png') }}"></li>
													<li><img class="product-img" src="{{ asset('img/06.png') }}"></li>
													<li><img class="product-img" src="{{ asset('img/07.png') }}"></li>-->
												@endforeach
											@endif
										</ul>
									</div>
									
								</div>
								<div class="row justify-content-between align-items-center">
									<div class="prev">
										<i class="far fa-arrow-alt-circle-left"></i>
									</div>
									<div style="width: 260px; height:60px;overflow: hidden;">
										<img style="width: 60px;height: 60px;" class="product-img" src="{{ asset('img/02.png') }}">
										<img style="width: 60px;height: 60px;" class="product-img" src="{{ asset('img/03.png') }}">
										<img style="width: 60px;height: 60px;" class="product-img" src="{{ asset('img/04.png') }}">
										<img style="width: 60px;height: 60px;" class="product-img" src="{{ asset('img/05.png') }}">
										<img style="width: 60px;height: 60px;" class="product-img" src="{{ asset('img/06.png') }}">
									</div>
									<div class="next">
										<i class="far fa-arrow-alt-circle-right"></i>
									</div>
								
							</div>
						
					</div>
					<div class="col" id="descripcion_producto">
						<h2>{{$producto->nombre}}<!--Corazon de Cuadril--></h2>
						{!!$producto->descripcion!!}<!--Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.-->

						<table class="table" >
						  <thead>
						    <tr>
						      <th colspan="2" style="border-top: none;">Especificaciones</th>
						    </tr>
						  </thead>
						  <tbody style="color:#6E6F71; font-size: 14px;">
						    <tr>
						      <td>TAMAÑO DE CAJA </td>
						      <td>{{$producto->tamano_caja}}</td>
						    </tr>
						    <tr>
						      <td>MEDIDAS</td>
						      <td>{{$producto->medidas}}</td>
						    </tr>
						    <tr>
						      <td>ENVASADO</td>
						      <td>{{$producto->envasado}}</td>
						    </tr>
						    <tr>
						      <td>PIEZAS POR CAJA</td>
						      <td>{{$producto->piezas_por_caja}}</td>
						    </tr>
						    <!--<tr>
						      <td>PESO CAJA</td>
						      <td>{{$producto->descripcion}}</td>
						    </tr>-->
						    <tr>
						      <td>CONDIONES TERMICAS</td>
						      <td>{{$producto->condiciones_termicas}}</td>
						    </tr>
						    <tr>
						      <td>ESPECIFICACIONES</td>
						      <td>{{$producto->especificaciones}}</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
				<div class="row" >
					<div class="col" style="margin-right: 36px; width: 100%;">
						<strong style="font-size: 17px;">Packaging</strong>
						<hr style="margin-top: 12px;">
						@foreach ($producto->etiquetados as $etiquetado)
								<img style="width:200px" src="{{ asset($etiquetado->etiquetado)}}" alt="">
						@endforeach
						
					</div>
					<div class="col">
						<strong style="font-size: 17px;">Etiquetado</strong>
						<hr style="margin-top: 12px;">
						@foreach ($producto->packagings as $packaging)
								<img style="margin-right:12px; width: 200px;" src="{{ asset($packaging->packaging)}}" alt="">
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('.collapse').on('hidden.bs.collapse', function () {
			$(this).parent().find('.card-header').removeClass('collapsed-acordion').addClass('nocollapsed-acordion');
		})

		$('.collapse').on('shown.bs.collapse', function () {
			$(this).parent().find('.card-header').removeClass('nocollapsed-acordion').addClass('collapsed-acordion');
		})
	});

	window.addEventListener('load', () => {


	    // initial slide
	    let slide = 1;

	    // total slides
	    let slides = document.querySelectorAll(".slider ul li");
	    total = slides.length;

	    // show first side
	    showSlide(1);

	    next = document.querySelector(".next");
	    prev = document.querySelector(".prev")

	    /**
	     * event next button
	     */
	    next.addEventListener('click', (evt) => {
	        evt.preventDefault();
	        slide++;
	        if (slide > total) { slide = 1; }
	        showSlide(slide);
	    })

	    /** 
	     * event prev button
	     */
	    prev.addEventListener("click", (evt) => {
	        evt.preventDefault();
	        slide--;
	        if (slide < 1) { slide = total; }
	        showSlide(slide);
	    })

	    /**
	     * show slides
	     * 
	     * @param {number} n 
	     * @return {null}
	     * 
	     */
	    function showSlide(n) {
	        n--; // decrement 1
	        for (i = 0; i < slides.length; i++) {
	            (i == n) ? slides[n].style.display = "block" : slides[i].style.display = "none";
	        }
	    }

	})
</script>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection