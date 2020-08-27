
<template>
    <div class="container">
      <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
                <h3 class="card-tools"><button type="button" class="btn btn-success" @click="openModalWindow">Agregar</button></h3>
              </div>

                <div class="card-body">
                  <table class="table table-hover">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <!--<th>Titulo</th>
                            <th>Texto</th>
                            <th>Orden</th>-->
                            <th style="width: 13%">Accion</th>
                        </tr> 
                      </thead>
                  <paginate name="sliders" :list="sliders" :per="5" tag="tbody">
                      <tr v-for="slider in paginated('sliders')" :key="slider.id" >
                          <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                            <td>{{ slider.id }}</td>
                            <td><img width="150" :src="slider.imagen"></td>
                            <!--<td>{{ slider.titulo.es }}</td>
                            <td>{{ slider.texto.es | strippedContent }}</td>
                            <td>{{ slider.orden }}</td>-->

                            <td>
                                <a href="#" data-id="corte.id" @click="editModalWindow(slider)" title="Editar Slider">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                |
                                <a href="#" @click="deleteSlider(slider.id)" title="Eliminar Slider">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          <!--</tr>-->
                      </tr>
                  </paginate>
                </table>
                <paginate-links for="sliders" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>
                </div>

            </div>

          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Contacto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updatePaginaContacto" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <!--<h3>Encabezado</h3>
                    <div class="form-group">
                      <label for="encabezado_imagen_fondo">Imagen de Encabezado</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="encabezado_imagen_fondo" name="encabezado_imagen_fondo" v-on:change="onUploadImage">

                          <label class="custom-file-label" for="encabezado_imagen_fondo">Seleccione un Archivo</label>
                          
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                      <figure>
                        <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? form.encabezado_imagen_fondo : ''"/>
                      </figure>

                  </div>-->

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Ciudad 1 (Español)</label>
                        <input v-model="form.ciudad1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad1" :class="{ 'is-invalid': form.errors.has('ciudad1') }">
                        <has-error :form="form" field="ciudad1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Ciudad 1 (Chino)</label>
                        <input v-model="form.ciudad1_zh" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad1_zh" :class="{ 'is-invalid': form.errors.has('ciudad1_zh') }">
                        <has-error :form="form" field="ciudad1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Ciudad 1 (Ingles)</label>
                        <input v-model="form.ciudad1_en" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad1_en" :class="{ 'is-invalid': form.errors.has('ciudad1_en') }">
                        <has-error :form="form" field="ciudad1_en"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Direccion 1 (Español)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion1') }" tag-name="textarea"  :editor="editor" v-model="form.direccion1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Direccion 1 (Chino)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion1_zh') }" tag-name="textarea"  :editor="editor" v-model="form.direccion1_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Direccion 1 (Ingles)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion1_en') }" tag-name="textarea"  :editor="editor" v-model="form.direccion1_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion1_en"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Telefono 1</label>
                        <input v-model="form.telefonos1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos1" :class="{ 'is-invalid': form.errors.has('telefonos1') }">
                        <has-error :form="form" field="telefonos1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Google Maps 1</label>
                        <textarea v-model="form.googlemaps1" class="form-control" name="coordenadas1" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('googlemaps1') }"></textarea>
                        <has-error :form="form" field="googlemaps1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Ciudad 2 (Español)</label>
                        <input v-model="form.ciudad2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad2" :class="{ 'is-invalid': form.errors.has('ciudad2') }">
                        <has-error :form="form" field="ciudad2"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Ciudad 2 (Chino)</label>
                        <input v-model="form.ciudad2_zh" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad2_zh" :class="{ 'is-invalid': form.errors.has('ciudad2_zh') }">
                        <has-error :form="form" field="ciudad2_zh"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Ciudad 2 (Ingles)</label>
                        <input v-model="form.ciudad2_en" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad2_en" :class="{ 'is-invalid': form.errors.has('ciudad2_en') }">
                        <has-error :form="form" field="ciudad2_en"></has-error>
                  </div>


                  <div class="form-group">
                        <label>Direccion 2 (Español)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion2') }" tag-name="textarea"  :editor="editor" v-model="form.direccion2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion2"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Direccion 2 (Chino)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion2_zh') }" tag-name="textarea"  :editor="editor" v-model="form.direccion2_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion2_zh"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Direccion 2 (Ingles)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion2_en') }" tag-name="textarea"  :editor="editor" v-model="form.direccion2_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion2_en"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Telefono 2</label>
                        <input v-model="form.telefonos2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos2" :class="{ 'is-invalid': form.errors.has('telefonos2') }">
                        <has-error :form="form" field="telefonos2"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Google Maps 2</label>
                        <textarea v-model="form.googlemaps2" class="form-control" name="coordenadas2" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('googlemaps2') }"></textarea>
                        <!--<input v-model="form.coordenadas2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="coordenadas2" :class="{ 'is-invalid': form.errors.has('coordenadas2') }">-->
                        <has-error :form="form" field="coordenadas2"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Contacto Titulo (Español)</label>
                        <input v-model="form.contacto_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="contacto_titulo" :class="{ 'is-invalid': form.errors.has('contacto_titulo') }">
                        <has-error :form="form" field="contacto_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Contacto Titulo (Chino)</label>
                        <input v-model="form.contacto_titulo_zh" type="text" class="form-control" placeholder="Ingrese el Titulo" name="contacto_titulo_zh" :class="{ 'is-invalid': form.errors.has('contacto_titulo_zh') }">
                        <has-error :form="form" field="contacto_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Contacto Titulo (Ingles)</label>
                        <input v-model="form.contacto_titulo_en" type="text" class="form-control" placeholder="Ingrese el Titulo" name="contacto_titulo_en" :class="{ 'is-invalid': form.errors.has('contacto_titulo_en') }">
                        <has-error :form="form" field="contacto_titulo_en"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Contacto Descripcion (Español)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('contacto_descripcion') }" tag-name="textarea"  :editor="editor" v-model="form.contacto_descripcion" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="contacto_descripcion"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Contacto Descripcion (Chino)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('contacto_descripcion_zh') }" tag-name="textarea"  :editor="editor" v-model="form.contacto_descripcion_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="contacto_descripcion_zh"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Contacto Descripcion (Ingles)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('contacto_descripcion_en') }" tag-name="textarea"  :editor="editor" v-model="form.contacto_descripcion_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="contacto_descripcion_en"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Comercio Exterior</label>
                        <input v-model="form.comercio_exterior" type="text" class="form-control" placeholder="Ingrese el Titulo" name="comercio_exterior" :class="{ 'is-invalid': form.errors.has('comercio_exterior') }">
                        <has-error :form="form" field="comercio_exterior"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Area Comercial</label>
                        <input v-model="form.area_comercial" type="text" class="form-control" placeholder="Ingrese el Titulo" name="area_comercial" :class="{ 'is-invalid': form.errors.has('area_comercial') }">
                        <has-error :form="form" field="area_comercial"></has-error>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>

          </div>
        </div>

        <!--Modal Slider-->

            <div class="modal fade" id="addNewSlider" tabindex="-1" role="dialog" aria-labelledby="addSliderLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="addSliderLabel"></h5>
                         <h5 v-show="!editSliderMode" class="modal-title" id="addNewLabel">Nuevo Slider</h5>
                          <h5 v-show="editSliderMode" class="modal-title" id="addNewLabel">Actualizar Slider</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createSlider" enctype="multipart/form-data" id='formulario'>

                      <div class="modal-body">
                        <div class="form-group">
                          <label for="imagen">Imagen del Slider</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="imagen" name="imagen" v-on:change="onUploadImage" lang="es">

                              <label class="custom-file-label" id="imgLabel" for="imagen">Seleccione un Archivo</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Subir</span>
                            </div>
                          </div>
                          <figure>
                            <img class="miniatura img-fluid" :src="slider.imagen ? slider.imagen : '' "/>
                          </figure>
                        </div>
                        <!--<div class="form-group">
                              <label>Titulo (Español)</label>
                              <input v-model="slider.titulo" :class="{ 'is-invalid': '' }" type="text" name="titulo" class="form-control" placeholder="Ingrese Titulo">
                              <has-error :form="slider" field="titulo"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Titulo (Chino)</label>
                            <input v-model="slider.titulo_zh" :class="{ 'is-invalid': '' }" type="text" name="titulo_zh" class="form-control" placeholder="Ingrese Titulo">
                            <has-error :form="slider" field="titulo_zh"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Titulo (Ingles)</label>
                            <input v-model="slider.titulo_en" :class="{ 'is-invalid': '' }" type="text" name="titulo_en" class="form-control" placeholder="Ingrese Titulo">
                            <has-error :form="slider" field="titulo_en"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Texto (Español)</label>
                            <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="slider.texto" :config="editorConfig"></ckeditor>
                            <has-error :form="slider" field="texto"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Texto (Chino)</label>
                            <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="slider.texto_zh" :config="editorConfig"></ckeditor>
                            <has-error :form="slider" field="texto_zh"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Texto (Ingles)</label>
                            <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="slider.texto_en" :config="editorConfig"></ckeditor>
                            <has-error :form="slider" field="texto_en"></has-error>
                          </div>
                          <div class="form-group">
                            <label>Orden</label>
                            <input v-model="slider.orden" :class="{ 'is-invalid': '' }" type="text" name="orden" class="form-control" placeholder="Ingrese Titulo">
                            <has-error :form="slider" field="orden"></has-error>
                          </div>-->
                        <input type="hidden" v-model="form.id" name="pagina_contacto_id">
                      </div>

                      <div class="modal-footer">
                        <button v-show="editSliderMode" type="submit" class="btn btn-primary">Editar</button>
                        <button v-show="!editSliderMode" type="submit" class="btn btn-primary">Crear</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

                      </div>
                    </form>

                  </div>
              </div>
            </div>
    </div>

</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    export default {
        data() {
            return {
                editMode: false,
                editSliderMode: false,
                picFile:'',
                idElement:'',
                inicio: '',
                imagenMiniatura:'',
                sliders: [],
                paginate: ['sliders'],
                editor: ClassicEditor,
                editorData: '',
                editorConfig:{
                },
                form: new Form({
                    id: '',
                    encabezado_imagen_fondo : '',
                    'ciudad1' : '',
                    'direccion1' : '',
                    'ciudad1_zh' : '',
                    'direccion1_zh' : '',
                    'ciudad1_en' : '',
                    'direccion1_en' : '',
                    'telefonos1' : '',
                    'ciudad2' : '',
                    'direccion2' : '',
                    'ciudad2_zh' : '',
                    'direccion2_zh' : '',
                    'ciudad2_en' : '',
                    'direccion2_en' : '',
                    'telefonos2' : '',
                    'contacto_titulo' : '',
                    'contacto_descripcion' : '',
                    'contacto_titulo_zh' : '',
                    'contacto_descripcion_zh' : '',
                    'contacto_titulo_en' : '',
                    'contacto_descripcion_en' : '',
                    'comercio_exterior' : '',
                    'area_comercial' : '',
                    'googlemaps1' : '',
                    'googlemaps2' : '',

                    _method:'',

                }),
                slider:new Form({
                    id:'',
                    imagen:'',
                    titulo:'',
                    texto:'',
                    titulo_zh:'',
                    titulo_en:'',
                    texto_zh:'',
                    texto_en:'',
                    orden:'',
                    pagina_inicio_id:'',
                })
            }
        },
        methods: {
        
        editWindow(paginacontacto){
        	if(paginacontacto){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= paginacontacto.id;
    				this.form.encabezado_imagen_fondo = paginacontacto.encabezado_imagen_fondo;

    				this.form.ciudad1= typeof paginacontacto.ciudad1 === 'object' ? paginacontacto.ciudad1.es : '';
    				this.form.direccion1= typeof paginacontacto.direccion1 === 'object' ? paginacontacto.direccion1.es : '';
            this.form.ciudad1_zh= typeof paginacontacto.ciudad1 === 'object' ? paginacontacto.ciudad1.zh : '';
            this.form.direccion1_zh= typeof paginacontacto.direccion1 === 'object' ? paginacontacto.direccion1.zh : '';
            this.form.ciudad1_en= typeof paginacontacto.ciudad1 === 'object' ? paginacontacto.ciudad1.en : '';
            this.form.direccion1_en= typeof paginacontacto.direccion1 === 'object' ? paginacontacto.direccion1.en : '';

            this.form.ciudad2= typeof paginacontacto.ciudad2 === 'object' ? paginacontacto.ciudad2.es : '';
            this.form.direccion2= typeof paginacontacto.direccion2 === 'object' ? paginacontacto.direccion2.es : '';
            this.form.ciudad2_zh= typeof paginacontacto.ciudad2 === 'object' ? paginacontacto.ciudad2.zh : '';
            this.form.direccion2_zh= typeof paginacontacto.direccion2 === 'object' ? paginacontacto.direccion2.zh : '';
            this.form.ciudad2_en= typeof paginacontacto.ciudad2 === 'object' ? paginacontacto.ciudad2.en : '';
            this.form.direccion2_en= typeof paginacontacto.direccion2 === 'object' ? paginacontacto.direccion2.en : '';

            this.form.contacto_titulo= typeof paginacontacto.contacto_titulo === 'object' ? paginacontacto.contacto_titulo.es : '';
            this.form.contacto_descripcion= typeof paginacontacto.contacto_descripcion === 'object' ? paginacontacto.contacto_descripcion.es : '';
            this.form.contacto_titulo_zh= typeof paginacontacto.contacto_titulo === 'object' ? paginacontacto.contacto_titulo.zh : '';
            this.form.contacto_descripcion_zh= typeof paginacontacto.contacto_descripcion === 'object' ? paginacontacto.contacto_descripcion.zh : '';
            this.form.contacto_titulo_en= typeof paginacontacto.contacto_titulo === 'object' ? paginacontacto.contacto_titulo.en : '';
            this.form.contacto_descripcion_en= typeof paginacontacto.contacto_descripcion === 'object' ? paginacontacto.contacto_descripcion.en : '';

            this.form.telefonos1 = paginacontacto.telefonos1;
            this.form.telefonos2 = paginacontacto.telefonos2;
            this.form.comercio_exterior = paginacontacto.comercio_exterior;
            this.form.area_comercial = paginacontacto.area_comercial;
            this.form.googlemaps1 = paginacontacto.coordenadas1;
            this.form.googlemaps2 = paginacontacto.coordenadas2;

            this.sliders = paginacontacto.sliders;


        	}

        },
        openModalWindow(){
           this.editSliderMode = false
           this.slider.clear();
           this.slider.reset();
           $("#addNewSlider .miniatura").attr("src","");
           $("#imgLabel").html("Seleccione un Archivo")
           $('#addNewSlider').modal('show');
        },
        editModalWindow(slider){
          console.log(slider);
           this.slider.clear();
           this.editSliderMode = true
           this.slider.reset();
            this.slider.id = slider.id;
            this.slider.imagen = slider.imagen;
            this.slider.titulo=  typeof slider.titulo === 'object' ? slider.titulo.es : '';
            this.slider.titulo_zh= typeof slider.titulo === 'object' ? slider.titulo.zh : '';
            this.slider.titulo_en= typeof slider.titulo === 'object' ? slider.titulo.en : '';
            this.slider.texto=  typeof slider.texto === 'object' ? slider.texto.es : '';
            this.slider.texto_zh= typeof slider.texto === 'object' ? slider.texto.zh : '';
            this.slider.texto_en= typeof slider.texto === 'object' ? slider.texto.en : '';
            this.slider.orden = slider.orden;
           $('#addNewSlider').modal('show');
        },
        loadPaginaContacto() {

          axios.get("api/paginacontacto").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updatePaginaContacto(event){
        	if(!this.editMode)
	        	return this.createPaginaContacto(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
           formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion1_en',this.form.direccion1_en);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('direccion2_en',this.form.direccion2_en);
            formData.append('contacto_descripcion',this.form.contacto_descripcion);
            formData.append('contacto_descripcion_zh',this.form.contacto_descripcion_zh);
            formData.append('contacto_descripcion_en',this.form.contacto_descripcion_en);

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/paginacontacto/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedPaginaContactoLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Contacto Actualizada con Exito'
                    })

                    this.$Progress.finish()
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },
        onUploadImage: function (event){
          if (event) {
            this.idElement = event.target
            this.picFile = this.idElement.files[0];
            $(this.idElement).next('.custom-file-label').html(this.picFile.name);
            this.cargarMiniatura(this.idElement,this.picFile);
            
          }
            if (this.picFile) {
              if(this.idElement.id == 'encabezado_imagen_fondo'){
                this.form.encabezado_imagen_fondo = this.picFile
                console.log(this.form.encabezado_imagen_fondo);
              }

            }
        },
        cargarMiniatura(object,file){
          let reader = new FileReader();
          reader.onload = (e) => {
            $(this.idElement).parents('.input-group').next().find('.miniatura')[0].src = e.target.result;
            //return this.imagenMiniatura = e.target.result;
          }
          reader.readAsDataURL(file);
        },

        createPaginaContacto(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
            formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion1_en',this.form.direccion1_en);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('direccion2_en',this.form.direccion2_en);
            formData.append('contacto_descripcion',this.form.contacto_descripcion);
            formData.append('contacto_descripcion_zh',this.form.contacto_descripcion_zh);
            formData.append('contacto_descripcion_en',this.form.contacto_descripcion_en);

            axios.post('api/paginacontacto',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedPaginaContactoLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Contacto Actualizada con Exito'
                        })

                        this.$Progress.finish()

                })
                .catch(() => {
                   console.log("Error......")
                })

     

            //this.loadUsers();
          },
          createSlider(event){
            if(this.editSliderMode)
              return this.updateSlider(event);

            console.log(event.target)
            var formulario = event.target;
            this.$Progress.start()
            let formData =  new FormData(formulario)
            formData.append('texto',this.slider.texto);
            formData.append('texto_zh',this.slider.texto_zh);
            formData.append('texto_en',this.slider.texto_en);


            axios.post('api/slidercontacto',formData)
            .then((data) => {
              console.log(data);
              Toast.fire({
                icon: 'success',
                title: 'Slider Guardado con Exito'
              })

              this.$Progress.finish()
              this.loadSliders();
              $('#addNewSlider').modal('hide');
            

          })
          .catch(($errors) => {
            console.log($errors);
            console.log("Error......")
          })

            $("#miniaturaImagenProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formImagenProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        updateSlider(event){
          if(!this.editSliderMode)
            return this.createSlider(event);

           this.$Progress.start()
           let formData =  new FormData(event.target)
            formData.append('texto',this.slider.texto);
            formData.append('texto_zh',this.slider.texto_zh);
            formData.append('texto_en',this.slider.texto_en);
             formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/slidercontacto/'+this.slider.id,formData)
               .then(()=>{
                  this.loadSliders();

                   Toast.fire({
                      icon: 'success',
                      title: 'Slider Actualizado con Exito'
                    })

                    this.$Progress.finish()
                    $('#addNewSlider').modal('hide');
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },
        loadSliders() {

          axios.get("api/allslidercontacto/"+this.form.id).then( (data) => {
            console.log(data);
            this.sliders = Array.from(data.data)
          });
        
          //pick data from controller and push it into users object

        },
        deleteSlider(sliderid){
          Swal.fire({
              title: 'Estas segur@?',
              text: "Esta accion no se puede deshacer!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {

              if (result.value) {
                this.$Progress.start()
                 axios.delete('api/slidercontacto/'+sliderid)
                .then((data) => {
                  console.log(data);
                  Toast.fire({
                    icon: 'success',
                    title: 'Slider Eliminado con Exito'
                  })

                  this.$Progress.finish()
                  this.loadSliders();

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
        }
          
        },

        created() { 
            this.loadPaginaContacto();
            Fire.$on('AfterCreatedPaginaContactoLoadIt',()=>{ //custom events fire on
                this.loadPaginaContacto();
                
            });
        }
    }
</script> 