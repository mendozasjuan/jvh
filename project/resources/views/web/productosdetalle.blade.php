@extends('layouts.index')

@section('titulo', 'JVH - Productos')

@section('estilos')
	<style>
		.hero-img{
			height: 300px;
			width: 100%;
			/*background: url("{{ asset($img_fondo) }}") no-repeat center center;
			background-size: cover;*/
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
			border: 1px solid #cccccc70;
			margin-left: 7.5px;
			cursor: pointer;
		}

		.imageCarrousel{
			border: 1px solid #cccccc70;

		}

		.prev, .next{
			cursor: pointer;
		}

		#descripcion_producto p {
			color: #6E6F71;
		}

		 .linkactive a{
			color:#E51D2A !important;
		}


		.carousel-control-prev .detalle, .carousel-control-next .detalle{
			position:relative!important;
			width: fit-content!important;
			color:#000!important;

		}

		.fa-arrow-alt-circle-left:before .detalle{
			float: left;
		}

		.carousel-control-next:before .detalle{
			float: right;
		}

		.carousel-inner .detalle{
			width: 30rem;
    		height: 30rem;
    		cursor: pointer;
		}

		.carousel-item .detalle{
			width: 100%;
    		height: 100%;
		}

		.contenedorImageIndicators{
			width: 30rem;
		}
		@media (max-width: 505px) {
			.carousel-inner{
				width: 20rem;
	    		height: 20rem;
			}
			.contenedorImageIndicators{
				width: 20rem;
			}
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',['text' => false,'titulo'=>$inicio->texto_encabezado ?? '','logotipo' => $logo,'carousel' => $carousel])
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
									@foreach ($categoria->cortes->sortBy('nombre') as $corte)
										<li class="list-group-item {{$producto->id == $corte->id ? 'linkactive' : ''}}"><a href="{{route('productosdetalle',['id' => $corte->id])}}">{{ $corte->nombre }}</a></li>
									@endforeach
									</ul>
						      </div>
						    </div>
						  </div>
							
					@endforeach

				</div>
			</div>
			<div class="col">
				<div class="row ">
					<div class="col" style="width: 100%;">
						<div id="carouselProducto" class="carousel slide d-flex justify-content-center" data-ride="carousel" style="width: 100%;">

							<div class="contenedorImageIndicators">
								<div class="carousel-inner detalle">
									@if($producto->imagenes)
										@foreach($producto->imagenes as $imagen)
											<div class="carousel-item detalle {{ $loop->first ? 'active' : ''}}">
												<img class="d-block imageCarrousel w-100 h-100" src="{{ asset($imagen->imagen) }}">
											</div>
										@endforeach
									@endif
									<!--<div class="carousel-item active ">
										<img class="d-block imageCarrousel w-100 h-100" src="{{ asset('img/etiquetado/7C7r80vg9gFWibHrqqb7a8ce7eFSf3eIqFuXHOv6.png') }}">
									</div>
									<div class="carousel-item ">
										<img  class="d-block imageCarrousel w-100 h-100" src="{{ asset('img/etiquetado/n40xhvvwGADCmNvnVI4Qeui7wVIaDfABnUAsoIfs.png') }}">
									</div>
									<div class="carousel-item ">
										<img   class="d-block imageCarrousel w-100 h-100" src="{{ asset('img/etiquetado/nyNKZlKsMOxFumXpSoChj7Gxq483QOB8KUFZ54Hx.png') }}">
									</div>
									<div class="carousel-item ">
										<img class="d-block imageCarrousel w-100 h-100" src="{{ asset('img/03.png') }}">
									</div>-->
							  </div>
							  <div class="d-flex justify-content-between align-items-center mt-3 " style="position:relative;">
								  	<a class="carousel-control-prev detalle d-block far fa-arrow-alt-circle-left" href="#carouselProducto" style="color:#000;width: fit-content;position: relative;" role="button" data-slide="prev">
									</a>
									<!--<i class="far fa-arrow-alt-circle-left carousel-control-prev d-block" ></i>-->
									<div style="width: 100%;text-align: center;">
										@if($producto->imagenes)
												@foreach($producto->imagenes as $imagen)
													<img style="width: 60px;height: 60px;" data-target="#carouselProducto" data-slide-to="{{$loop->index}}" class="product-img"src="{{ asset($imagen->imagen) }}">
												@endforeach
											@endif
										<!--<img style="width: 60px;height: 60px;" data-target="#carouselProducto" data-slide-to="0" class="product-img" src="{{ asset('img/03.png') }}">

										<img style="width: 60px;height: 60px;" data-target="#carouselProducto" data-slide-to="1" class="product-img" src="{{ asset('img/05.png') }}">

										<img style="width: 60px;height: 60px;" data-target="#carouselProducto" data-slide-to="2" class="product-img" src="{{ asset('img/06.png') }}">

										<img style="width: 60px;height: 60px;" data-target="#carouselProducto" data-slide-to="3" class="product-img" src="{{ asset('img/07.png') }}">-->

									</div>

									
								  <a class="carousel-control-next d-block far fa-arrow-alt-circle-right detalle" href="#carouselProducto" style="color:#000;width: fit-content;position: relative;" role="button" data-slide="next">
										<i class="" data-slide="next" role="button"></i>
								  </a>
						  	</div>
							</div>
						</div>
					</div>
					<div class="col" id="descripcion_producto">
						<strong style="font-size: 27px;">{{$producto->nombre}}</strong><!--Corazon de Cuadril-->
						{{--$producto->descripcion --}}

						<table class="table" >
						  <thead>
						    <tr>
						      <th colspan="2" style="border-top: none; font-size:17px;">Especificaciones</th>
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


	<div class="modal fade" id="vistaPrevia" tabindex="-1" role="dialog" aria-labelledby="vistaPreviaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="vistaPrevia">Vista Previa</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

             
                <div class="modal-body">
                	 <div class="d-flex justify-content-center">
                	 	<img src="" id="imagepreview" style="width: 400px; height: 400px;" >
                	 </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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

		$('.carousel').carousel({
		  interval: false
		});

		$(".imageCarrousel").on("click", function() {
		   $('#imagepreview').attr('src', $(this).attr('src'));
		   $('#vistaPrevia').modal('show');
		});
	});
	$('.list-group-item a').on()

	
</script>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection