
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
                                <a href="#" @click="deleteSliderInicio(slider.id)" title="Eliminar Slider">
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
                <h3 class="card-title">Pagina de Inicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateInicio" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <!--<div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="encabezado_imagen_fondo" name="encabezado_imagen_fondo" v-on:change="onUploadImage">

                        <label class="custom-file-label" for="encabezado_imagen_fondo">Seleccione un Archivo</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.encabezado_imagen_fondo ? data.encabezado_imagen_fondo : '' "/>
                    </figure>
                    
                  </div>-->
                  <div class="form-group">
                    <label for="logo_1_encabezado">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="logo_1_encabezado" name="logo_1_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_1_encabezado">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.logo_1_encabezado ? data.logo_1_encabezado :''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="logo_2_encabezado">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="logo_2_encabezado" name="logo_2_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_2_encabezado">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.logo_2_encabezado ? data.logo_2_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto (Español)</label>
                        <input v-model="data.texto_encabezado" type="text" name="texto_encabezado" class="form-control" placeholder="Ingrese el Texto" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Chino)</label>
                        <input v-model="data.texto_encabezado_zh" type="text" name="texto_encabezado_zh" class="form-control" placeholder="Ingrese el Texto" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="texto_encabezado_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Ingles)</label>
                        <input v-model="data.texto_encabezado_en" type="text" name="texto_encabezado_en" class="form-control" placeholder="Ingrese el Texto" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="texto_encabezado_en"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="data.texto_encabezado_habilitado" type="checkbox" class="form-check-input" name="texto_encabezado_habilitado" id="exampleCheck1" :class="{ 'is-invalid': '' }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="data" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="data.seccion1_titulo" type="text"  class="form-control" name="seccion1_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': ''}">
                        <has-error :form="data" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="data.seccion1_titulo_zh" type="text"  class="form-control" name="seccion1_titulo_zh" placeholder="Ingrese Titulo" :class="{ 'is-invalid': ''}">
                        <has-error :form="data" field="seccion1_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Ingles)</label>
                        <input v-model="data.seccion1_titulo_en" type="text"  class="form-control" name="seccion1_titulo_en" placeholder="Ingrese Titulo" :class="{ 'is-invalid': ''}">
                        <has-error :form="data" field="seccion1_titulo_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="data.seccion_1_parrafo" style="display:none" class="form-control" rows="3" placeholder="Enter ..." ></textarea>-->

                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': data.errors.has('seccion_1_parrafo') }" tag-name="textarea"  :editor="editor" v-model="data.seccion_1_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_1_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="data.seccion_1_parrafo" style="display:none" class="form-control" rows="3" placeholder="Enter ..." ></textarea>-->

                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': data.errors.has('seccion_1_parrafo_zh') }" tag-name="textarea"  :editor="editor" v-model="data.seccion_1_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_1_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Ingles)</label>
                        <!--<textarea v-model="data.seccion_1_parrafo" style="display:none" class="form-control" rows="3" placeholder="Enter ..." ></textarea>-->

                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': data.errors.has('seccion_1_parrafo_en') }" tag-name="textarea"  :editor="editor" v-model="data.seccion_1_parrafo_en" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_1_parrafo_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo1">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion1_logo1" name="seccion1_logo1" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo1">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion1_logo1 ? data.seccion1_logo1 : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo2">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion1_logo2" name="seccion1_logo2" v-on:change="onUploadImage" >
                        <label class="custom-file-label" for="seccion1_logo2">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion1_logo2 ? data.seccion1_logo2 : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo3">Logo 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion1_logo3" name="seccion1_logo3" v-on:change="onUploadImage" >
                        <label class="custom-file-label" for="seccion1_logo3">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion1_logo3 ? data.seccion1_logo3 : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="data.seccio2_titulo" type="text" class="form-control" name="seccio2_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="seccio2_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="data.seccio2_titulo_zh" type="text" class="form-control" name="seccio2_titulo_zh" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="seccio2_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Ingles)</label>
                        <input v-model="data.seccio2_titulo_en" type="text" class="form-control" name="seccio2_titulo_en" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="seccio2_titulo_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <ckeditor class="col-md-10 form-control"  :class="{ 'is-invalid': '' }" tag-name="textarea"  :editor="editor" v-model="data.seccion_2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_2_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <ckeditor class="col-md-10 form-control"  :class="{ 'is-invalid': '' }" tag-name="textarea"  :editor="editor" v-model="data.seccion_2_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_2_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Ingles)</label>
                        <ckeditor class="col-md-10 form-control"  :class="{ 'is-invalid': '' }" tag-name="textarea"  :editor="editor" v-model="data.seccion_2_parrafo_en" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_2_parrafo_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion2_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion2_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion2_imagen_fondo ? data.seccion2_imagen_fondo : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 3</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="data.seccion3_titulo" type="text" class="form-control" name="seccion3_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                       <has-error :form="data" field="seccion3_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="data.seccion3_titulo_zh" type="text" class="form-control" name="seccion3_titulo_zh" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                       <has-error :form="data" field="seccion3_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Ingles)</label>
                        <input v-model="data.seccion3_titulo_en" type="text" class="form-control" name="seccion3_titulo_en" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                       <has-error :form="data" field="seccion3_titulo_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="data.seccion3_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion3_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="data.seccion3_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion3_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Ingles)</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="data.seccion3_parrafo_en" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion3_parrafo_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion3_imagen">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion3_imagen" name="seccion3_imagen" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion3_imagen">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion3_imagen ? data.seccion3_imagen : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="data.seccion4_titulo" :class="{ 'is-invalid': '' }" type="text" name="seccion4_titulo" class="form-control" placeholder="Ingrese Titulo">
                        <has-error :form="data" field="seccion4_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="data.seccion4_titulo_zh" :class="{ 'is-invalid': '' }" type="text" name="seccion4_titulo_zh" class="form-control" placeholder="Ingrese Titulo">
                        <has-error :form="data" field="seccion4_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Ingles)</label>
                        <input v-model="data.seccion4_titulo_en" :class="{ 'is-invalid': '' }" type="text" name="seccion4_titulo_en" class="form-control" placeholder="Ingrese Titulo">
                        <has-error :form="data" field="seccion4_titulo_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion4_imagen_fondo">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" lang="es" class="custom-file-input" id="seccion4_imagen_fondo" name="seccion4_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion4_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion3_imagen ? data.seccion4_imagen_fondo : ''"/>
                    </figure>
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

            <div class="modal fade" id="addNewSliderInicio" tabindex="-1" role="dialog" aria-labelledby="addSliderInicioLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="addSliderInicioLabel"></h5>
                         <h5 v-show="!editSliderMode" class="modal-title" id="addNewLabel">Nuevo Slider</h5>
                          <h5 v-show="editSliderMode" class="modal-title" id="addNewLabel">Actualizar Slider</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createSliderInicio" enctype="multipart/form-data" id='formulario'>

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
                              <has-error :form="slider" field="titulo_en"></has-error>
                            </div>
                            <div class="form-group">
                              <label>Titulo (Ingles)</label>
                              <input v-model="slider.titulo_en" :class="{ 'is-invalid': '' }" type="text" name="titulo_en" class="form-control" placeholder="Ingrese Titulo">
                              <has-error :form="slider" field="titulo_en"></has-error>
                            </div>
                            <div class="form-group">
                              <label>Texto</label>
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
                        <input type="hidden" v-model="data.id" name="pagina_inicio_id">
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
                data:new Form({
                  id: '',
                  encabezado_imagen_fondo : '',
                  texto_encabezado:'',
                  texto_encabezado_zh:'',
                  texto_encabezado_en:'',
                  texto_encabezado_habilitado: '',
                  seccion1_titulo:'',
                  seccion1_titulo_zh:'',
                  seccion1_titulo_en:'',
                  seccion_1_parrafo:'',
                  seccion_1_parrafo_zh:'',
                  seccion_1_parrafo_en:'',
                  seccion1_logo1: '',
                  seccion1_logo2: '',
                  seccion1_logo3: '',
                  seccion2_imagen_fondo:'',
                  seccio2_titulo:'',
                  seccio2_titulo_zh:'',
                   seccio2_titulo_en:'',
                  seccion_2_parrafo:'',
                  seccion_2_parrafo_zh:'',
                  seccion_2_parrafo_en:'',
                  seccion3_titulo:'',
                  seccion3_titulo_zh:'',
                  seccion3_titulo_en:'',
                  seccion3_parrafo:'',
                  seccion3_parrafo_zh:'',
                  seccion3_parrafo_en:'',
                  seccion3_imagen: '',
                  seccion4_titulo:'',
                  seccion4_titulo_zh:'',
                  seccion4_titulo_en:'',
                  seccion4_imagen_fondo:'',


                }),errors:[],
                slider:new Form({
                    id:'',
                    imagen:'',
                    titulo:'',
                    texto:'',
                    titulo_zh:'',
                    texto_zh:'',
                    titulo_en:'',
                    texto_en:'',
                    orden:'',
                    pagina_inicio_id:'',
                })
                /*form: new Form({
                    id: inicio.,
                    encabezado_imagen_fondo : inicio.,
                    logo_1_encabezado: inicio.,
                    logo_2_encabezado: inicio.,
                    texto_encabezado:{es:inicio.,zh:inicio.} ,
                    texto_encabezado_habilitado: inicio.,
                    seccion1_titulo:inicio.,
                    seccion_1_parrafo:inicio. ,
                    seccion1_logo1: inicio.,
                    seccion1_logo2: inicio.,
                    seccion1_logo3: inicio.,
                    seccion2_imagen_fondo:inicio.,
                    seccio2_titulo:inicio.,
                    seccion_2_parrafo:inicio. ,
                    seccion3_titulo:inicio. ,
                    seccion3_parrafo:inicio. ,
                    seccion3_imagen: inicio.,
                    seccion4_titulo:inicio.,
                    seccion4_imagen_fondo:inicio.,
                    _method:inicio.,

                })*/
            }
        },
        methods: {
        
        editWindow(inicio){
          console.log(inicio);
          if(inicio){
            this.editMode = true
            this.data.clear();
            this.data.reset();

            this.data.id = inicio.id;
            this.data.encabezado_imagen_fondo = inicio.encabezado_imagen_fondo;

            this.data.texto_encabezado =  typeof inicio.texto_encabezado === 'object' ? inicio.texto_encabezado.es : '';
            this.data.texto_encabezado_zh=  typeof inicio.texto_encabezado === 'object' ? inicio.texto_encabezado.zh : '';
            this.data.texto_encabezado_en=  typeof inicio.texto_encabezado === 'object' ? inicio.texto_encabezado.en : '';

            this.data.texto_encabezado_habilitado= inicio.texto_encabezado_habilitado;

            this.data.seccion1_titulo=  typeof inicio.seccion1_titulo === 'object' ? inicio.seccion1_titulo.es : '';
            this.data.seccion1_titulo_zh=  typeof inicio.seccion1_titulo === 'object' ? inicio.seccion1_titulo.zh : '';
            this.data.seccion1_titulo_en=  typeof inicio.seccion1_titulo === 'object' ? inicio.seccion1_titulo.en : '';
            this.data.seccion_1_parrafo=  typeof inicio.seccion_1_parrafo === 'object' ? inicio.seccion_1_parrafo.es : '';
            this.data.seccion_1_parrafo_zh=  typeof inicio.seccion_1_parrafo === 'object' ? inicio.seccion_1_parrafo.zh : '';
            this.data.seccion_1_parrafo_en=  typeof inicio.seccion_1_parrafo === 'object' ? inicio.seccion_1_parrafo.en : '';

            this.data.seccion1_logo1= inicio.seccion1_logo1;
            this.data.seccion1_logo2= inicio.seccion1_logo2;
            this.data.seccion1_logo3= inicio.seccion1_logo3;
            this.data.seccion2_imagen_fondo=  inicio.seccion2_imagen_fondo;

            this.data.seccio2_titulo=  typeof inicio.seccio2_titulo === 'object' ? inicio.seccio2_titulo.es : '';
            this.data.seccio2_titulo_zh=  typeof inicio.seccio2_titulo === 'object' ? inicio.seccio2_titulo.zh : '';
            this.data.seccio2_titulo_en=  typeof inicio.seccio2_titulo === 'object' ? inicio.seccio2_titulo.en : '';
            this.data.seccion_2_parrafo=  typeof inicio.seccion_2_parrafo === 'object' ? inicio.seccion_2_parrafo.es : '';
            this.data.seccion_2_parrafo_zh=  typeof inicio.seccion_2_parrafo === 'object' ? inicio.seccion_2_parrafo.zh : '';
             this.data.seccion_2_parrafo_en=  typeof inicio.seccion_2_parrafo === 'object' ? inicio.seccion_2_parrafo.en : '';
            this.data.seccion3_titulo=  typeof inicio.seccion3_titulo === 'object' ? inicio.seccion3_titulo.es : '';
            this.data.seccion3_titulo_zh=  typeof inicio.seccion3_titulo === 'object' ? inicio.seccion3_titulo.zh : '';
            this.data.seccion3_titulo_en=  typeof inicio.seccion3_titulo === 'object' ? inicio.seccion3_titulo.en : '';
            this.data.seccion3_parrafo=  typeof inicio.seccion3_parrafo === 'object' ? inicio.seccion3_parrafo.es : '';
            this.data.seccion3_parrafo_zh=  typeof inicio.seccion3_parrafo === 'object' ? inicio.seccion3_parrafo.zh : '';
            this.data.seccion3_parrafo_en=  typeof inicio.seccion3_parrafo === 'object' ? inicio.seccion3_parrafo.en : '';

            this.data.seccion3_imagen= inicio.seccion3_imagen;

            this.data.seccion4_titulo=  typeof inicio.seccion4_titulo === 'object' ? inicio.seccion4_titulo.es : '';
            this.data.seccion4_titulo_zh= typeof inicio.seccion4_titulo === 'object' ? inicio.seccion4_titulo.zh : '';
            this.data.seccion4_titulo_en= typeof inicio.seccion4_titulo === 'object' ? inicio.seccion4_titulo.en : '';

            this.data.seccion4_imagen_fondo=  inicio.seccion4_imagen_fondo;
            this.sliders = inicio.sliders;
          }
           
        },
        openModalWindow(){
           this.editSliderMode = false
           this.slider.clear();
           this.slider.reset();
           $("#addNewSliderInicio .miniatura").attr("src","");
           $("#imgLabel").html("Seleccione un Archivo")
           $('#addNewSliderInicio').modal('show');
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
           $('#addNewSliderInicio').modal('show');
        },
        loadInicio() {

          axios.get("api/inicio").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateInicio(event){
          if(!this.editMode)
            return this.createInicio(event);

           this.$Progress.start()
           let formData =  new FormData(event.target)
            formData.append('seccion_1_parrafo',this.data.seccion_1_parrafo);
            formData.append('seccion_2_parrafo',this.data.seccion_2_parrafo);
            formData.append('seccion3_parrafo',this.data.seccion3_parrafo);
            formData.append('seccion_1_parrafo_zh',this.data.seccion_1_parrafo_zh);
            formData.append('seccion_2_parrafo_zh',this.data.seccion_2_parrafo_zh);
            formData.append('seccion3_parrafo_zh',this.data.seccion3_parrafo_zh);
            formData.append('seccion_1_parrafo_en',this.data.seccion_1_parrafo_en);
            formData.append('seccion_2_parrafo_en',this.data.seccion_2_parrafo_en);
            formData.append('seccion3_parrafo_en',this.data.seccion3_parrafo_en);
             formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/inicio/'+this.data.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedInicioLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Inicio Actualizada con Exito'
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
                this.data.encabezado_imagen_fondo = this.picFile
                console.log(this.data.encabezado_imagen_fondo);
              }

              if(this.idElement.id == 'logo_1_encabezado'){
                this.data.logo_1_encabezado = this.picFile
                console.log(this.data.logo_1_encabezado);
              }
              
              if(this.idElement.id == 'logo_2_encabezado'){
                this.data.logo_2_encabezado = this.picFile
                console.log(this.data.logo_2_encabezado);
              }

              if(this.idElement.id == 'seccion1_logo1'){
                this.data.seccion1_logo1 = this.picFile
                console.log(this.data.seccion1_logo1);
              }

              if(this.idElement.id == 'seccion1_logo2'){
                this.data.seccion1_logo2 = this.picFile
                console.log(this.data.seccion1_logo2);
              }
              
              if(this.idElement.id == 'seccion1_logo3'){
                this.data.seccion1_logo3 = this.picFile
                console.log(this.data.seccion1_logo3);
              }

              if(this.idElement.id == 'seccion2_imagen_fondo'){
                this.data.seccion2_imagen_fondo = this.picFile
                console.log(this.data.seccion2_imagen_fondo);
              }

              if(this.idElement.id == 'seccion3_imagen'){
                this.data.seccion3_imagen = this.picFile
                console.log(this.data.seccion3_imagen);
              }
              
              if(this.idElement.id == 'seccion4_imagen_fondo'){
                this.data.seccion4_imagen_fondo = this.picFile
                console.log(this.data.seccion4_imagen_fondo);
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

        createInicio(event){
            this.$Progress.start()
            let formData =  new FormData(event.target)
            formData.append('seccion_1_parrafo',this.data.seccion_1_parrafo);
            formData.append('seccion_2_parrafo',this.data.seccion_2_parrafo);
            formData.append('seccion3_parrafo',this.data.seccion3_parrafo);
            formData.append('seccion_1_parrafo_zh',this.data.seccion_1_parrafo_zh);
            formData.append('seccion_2_parrafo_zh',this.data.seccion_2_parrafo_zh);
            formData.append('seccion3_parrafo_zh',this.data.seccion3_parrafo_zh);
            formData.append('seccion_1_parrafo_en',this.data.seccion_1_parrafo_en);
            formData.append('seccion_2_parrafo_en',this.data.seccion_2_parrafo_en);
            formData.append('seccion3_parrafo_en',this.data.seccion3_parrafo_en);

            axios.post('api/inicio',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedInicioLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina de Inicio Actualizada con Exito'
                        })

                        this.$Progress.finish()

                })
                .catch(() => {
                   console.log("Error......")
                })

     

            //this.loadUsers();
          },
          createSliderInicio(event){
          if(this.editSliderMode)
            return this.updateSliderInicio(event);

          console.log(event.target)
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('texto',this.slider.texto);
          formData.append('texto_zh',this.slider.texto_zh);
          formData.append('texto_en',this.slider.texto_en);


          axios.post('api/sliderinicio',formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Slider Guardado con Exito'
            })

            this.$Progress.finish()
            this.loadSlidersInicio();
            $('#addNewSliderInicio').modal('hide');
            

          })
          .catch(($errors) => {
            console.log($errors);
            console.log("Error......")
          })

            $("#miniaturaImagenProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formImagenProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        updateSliderInicio(event){
          if(!this.editSliderMode)
            return this.createInicio(event);

           this.$Progress.start()
           let formData =  new FormData(event.target)
            formData.append('texto',this.slider.texto);
            formData.append('texto_zh',this.slider.texto_zh);
            formData.append('texto_en',this.slider.texto_en);
             formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/sliderinicio/'+this.slider.id,formData)
               .then(()=>{
                  this.loadSlidersInicio();

                   Toast.fire({
                      icon: 'success',
                      title: 'Slider Actualizado con Exito'
                    })

                    this.$Progress.finish()
                    $('#addNewSliderInicio').modal('hide');
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },
        loadSlidersInicio() {

          axios.get("api/allsliderinicio/"+this.data.id).then( (data) => {
            console.log(data);
            this.sliders = Array.from(data.data)
          });
        
          //pick data from controller and push it into users object

        },
        deleteSliderInicio(sliderid){
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
                axios.delete('api/sliderinicio/'+sliderid)
                .then((data) => {
                  console.log(data);
                  Toast.fire({
                    icon: 'success',
                    title: 'Slider Eliminado con Exito'
                  })

                  this.$Progress.finish()
                  this.loadSlidersInicio();

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
        },
          
        },

        created() { 
            this.loadInicio();
            Fire.$on('AfterCreatedInicioLoadIt',()=>{ //custom events fire on
                this.loadInicio();
            });
        },
        
    }
</script> 