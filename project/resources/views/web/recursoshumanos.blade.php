@extends('layouts.index')

@section('titulo', 'JVH - Recursos Humanos')

@section('estilos')
	<style>
		.hero-img{
			height: 400px;
			width: 100%;
			background: url("{{ asset($recursoshumanos->encabezado_imagen_fondo) }}") no-repeat center center;
			background-size: cover;
			position: relative;
		}

		.boton{
			background: #E51D2A 0% 0% no-repeat padding-box;
			font-weight: normal !important;
			color:#fff;
			width: 200px;
			box-shadow: 3px 3px 3px rgba(255, 0, 0, 0.15);
		}

		.etiqueta{
			font-weight: normal !important;
			color:#6E6F71;
			font-size: 17px;
		}

		sub {
		  color:#E51D2A;
		  font-size: x-large;
		}

		.form-control:focus {
		  border-color: #E51D2A;
		  box-shadow: 3px 3px 3px rgba(255, 0, 0, 0.15);
		}

		#rh-seccion p{
			color:#6E6F71;
		}
    </style>
@endsection

@section('header')
	@include('layouts.header',[
			'text' => false,
			'activeLink' => 'recursoshumanos',
			'logotipo' => $logo,
	])
@endsection

@section('secciones')
		<!--https://xd.adobe.com/view/b80272e1-7ec5-4d6b-4e6d-03fc5611e154-ce33/screen/833932a6-8014-4052-b8bb-ddff864ec9f2/-->
	<div id="rh-seccion" class="row" style="margin-top: 50px;margin-bottom: 30px;">
		<div class="col col-sm-10 col-md-3" style="margin-left: 80px; padding-top: 20px;margin-bottom: 20px;">
			<div style="border-left: 3px solid #2B1C17;padding-left: 20px;">
				<h2>{!! $recursoshumanos->seccion1_titulo !!}<!--Recursos Humanos--></h2>
				{!! $recursoshumanos->seccion1_parrafo !!}
				<!--<p style="color:#6E6F71">
					Trabajá con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.
				</p>-->
			</div>
			
		</div>
		<div class="col" style="margin-left: 40px;">
			<form action="{{route('recursoshumanosform')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row" style="border-top: 2px solid #ccc;border-bottom: 2px solid #ccc;padding-top: 20px;padding-bottom: 50px;">
				<div class="col-sm-10 col-lg-4">
					<span style="font-weight: bold;color:#E51D2A;font-size: 17px;">DATOS PERSONALES</span>
					<p style="color:#6E6F71;margin-top: 30px;margin-bottom:10px;font-size: 17px;">Foto</p>
					<div  style="border: 1px solid #000; width: fit-content;margin-bottom: 20px;">
						<div id="divFoto" style="background-color: #ccc;margin: 5px;width: 200px;height: 200px;" class="d-flex align-items-center justify content-center">
							<p class="text-center" style="color:#E51D2A;font-size: 16px;">
								TAMAÑO MAXIMO: 5MB FORMATO: JPG O PNG
							</p>
						</div>
						<img style="border: 1px solid #ccc;margin: 5px;width: 200px;height: 200px;" id="imgFoto" src="" alt="" class="d-none">
					</div>
				
					<label class="btn boton" for="foto">Seleccionar Archivo</label>
					<input type="file" name="foto" style="display:none;" id="foto">
					<small  class="form-text text-danger">{{ $errors->first('foto',':message') }}</small>

					</div>
				<div class="col" >
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="nombre" class='etiqueta'>Nombre<sub>*</sub></label>
						      <input type="text" name="nombre" class="h-75 rounded-sm form-control form-control-lg" id="nombre" placeholder="Ingresar nombre" value="{{old('nombre')}}">
						      <small  class="form-text text-danger">{{ $errors->first('nombre',':message') }}</small>
						    </div>
						    <div class="form-group col-md-5">
						      <label for="apellido" class='etiqueta'>Apellido<sub>*</sub></label>
						      <input type="text" name="apellido" class="h-75 rounded-sm form-control form-control-lg" id="apellido" placeholder="Ingresar apellido" value="{{old('apellido')}}">
						      <small  class="form-text text-danger">{{ $errors->first('apellido',':message') }}</small>
						    </div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="telefono" class='etiqueta'>Teléfono<sub>*</sub></label>
						      <input type="tel" name="telefono" class="h-75 rounded-sm form-control form-control-lg" id="telefono" placeholder="Ingresar teléfono" value="{{old('telefono')}}">
						      <small  class="form-text text-danger">{{ $errors->first('telefono',':message') }}</small>
						    </div>
						    <div class="form-group col-md-5 mr-3">
						      <label for="email" class='etiqueta'>Email<sub>*</sub></label>
						      <input type="email" name="email" class="h-75 rounded-sm form-control form-control-lg" id="email" placeholder="Ingresar email" value="{{old('email')}}">
						      <small  class="form-text text-danger">{{ $errors->first('email',':message') }}</small>
						    </div>
						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5 mr-3">
						      <label for="pais" class='etiqueta'>País de Residencia<sub>*</sub></label>
						      <select id="pais" name="pais" class="h-75 rounded-sm form-control form-control-lg">
						      	<option selected="selected" value="">Seleccione Pais</option>
						      	@foreach ($paises as $pais)
										<option value="{{$pais->id}}" data-url={{route('getnacionalidad',['id' => $pais->id])}}>{{ $pais->pais_nac }}</option>
								@endforeach
						      </select>
						      <small  class="form-text text-danger">{{ $errors->first('pais',':message') }}</small>
						    </div>
						    <div class="form-group col-md-5 mr-3">
						      <label for="nacionalidad" class='etiqueta'>Nacionalidad<sub>*</sub></label>
						      <input type="text" id="nacionalidad" name="nacionalidad" class="h-75 rounded-sm form-control form-control-lg" id="nacionalidad" placeholder="Seleccione Pais" >
						      <small  class="form-text text-danger">{{ $errors->first('nacionalidad',':message') }}</small>
						    </div>

						</div>
						<div class="form-row mb-3">
							<div class="form-group col-md-5">
						      <label for="dni" class='etiqueta'>(DNI) Documento de Identidad<sub>*</sub></label>
						      <input type="text" name="dni" class="h-50 rounded-sm form-control form-control-lg" id="dni" placeholder="xxxxxxxx" value="{{old('dni')}}">
						      <small  class="form-text text-danger">{{ $errors->first('dni',':message') }}</small>
						    </div>
						</div>
						<div class="form-row">
							<label for="inputEmail4" class='etiqueta'>Fecha de Nacimiento<sub>*</sub></label>
						</div>
						<div class="form-row">
							<div class="col">
								<input type="text" name="dia" class="h-75 rounded-sm form-control form-control-lg" id="dia" placeholder="Día" value="{{old('dia')}}">
								<small  class="form-text text-danger">{{ $errors->first('dia',':message') }}</small>
							</div>
							<div class="col">
								<input type="text" name="mes" class="h-75 rounded-sm form-control form-control-lg" id="mes" placeholder="Mes" value="{{old('mes')}}">
								<small  class="form-text text-danger">{{ $errors->first('mes',':message') }}</small>
							</div>
							<div class="col">
								<input type="text" name="ano" class="h-75 rounded-sm form-control form-control-lg" id="ano" placeholder="Año" value="{{old('ano')}}">
								<small  class="form-text text-danger">{{ $errors->first('ano',':message') }}</small>
							</div>

						</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-sm-10 col-lg-4">
					<span style="font-weight: bold;color:#E51D2A;font-size: 17px;">CURRICULUM</span>
				</div>
				<div class="col" >
					<p style="color:#6E6F71;font-size: 17px;">Curriculum</p>
					<input type="file" name="curriculum">
					<small  class="form-text text-danger">{{ $errors->first('curriculum',':message') }}</small>

					<input class="btn boton float-right" type="submit" name="submit">
				</div>
			</div>
			</form>
		</div>
	</div>
		
@endsection

@section('scripts')
<script type="text/javascript">

	$(document).ready(function(){
		$('#pais').on('change',function(){
			var seleccionado = $(this).find('option:selected');
			url = seleccionado.data('url');

			var datos = '';

			axios.get(url)
				.then(data => {
				    datos = data.data;
				    $('#nacionalidad').val(datos.gentilicio_nac)
				})
				.catch(e => {
				    console.log('Error');
				})
				console.log(datos);
			$('#nacionalidad').val(datos.gentilicio_nac)
		})

		$("#foto").on('change',function(event){
			let elemento = event.target;
			let picFile = elemento.files[0]
			console.log(elemento)
			cargarMiniatura(elemento,picFile)
			$("#imgFoto").removeClass('d-none').addClass('d-block')
			$("#divFoto").removeClass('d-flex').addClass('d-none')
		})

        function cargarMiniatura(object,file){
          let reader = new FileReader();
          reader.onload = (e) => {
            $("#imgFoto").attr('src',e.target.result);
            //return this.imagenMiniatura = e.target.result;
          }
          reader.readAsDataURL(file);
        }
	});
</script>
@endsection

@section('footer')
	@include('layouts.footer',['footer'=>$footer,'redessociales' => $redessociales,'logo' => $logo,])
@endsection