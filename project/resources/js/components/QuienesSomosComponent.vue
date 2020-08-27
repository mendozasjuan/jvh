
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
                  <paginate ref="paginator" name="sliders" :list="sliders" :per="5" tag="tbody">
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
                <h3 class="card-title">Pagina Quienes Somos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateQuienesSomos" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <!--<div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="encabezado_imagen_fondo" name="encabezado_imagen_fondo" v-on:change="onUploadImage" >

                        <label class="custom-file-label" for="encabezado_imagen_fondo">Choose file</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? form.encabezado_imagen_fondo : ''"/>
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
                      <img class="miniatura img-fluid" lang="es" :src="form.logo_1_encabezado ? form.logo_1_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="logo_2_encabezado">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" lang="es" id="logo_2_encabezado" name="logo_2_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_2_encabezado">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.logo_2_encabezado ? form.logo_2_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto (Español)</label>
                        <input v-model="form.texto_encabezado" type="text" class="form-control" name="texto_encabezado" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }">

                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Chino)</label>
                        <input v-model="form.texto_encabezado_zh" type="text" class="form-control" name="texto_encabezado_zh" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado_zh') }">

                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <has-error :form="form" field="texto_encabezado_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Ingles)</label>
                        <input v-model="form.texto_encabezado_en" type="text" class="form-control" name="texto_encabezado_en" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado_en') }">

                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <has-error :form="form" field="texto_encabezado_en"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" name="texto_encabezado_habilitado" id="exampleCheck1" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Parrafo 1 (Español)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo1" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Chino)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo1_zh" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Ingles)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo1_en" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo1_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Español)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo2" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Chino)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo2_zh" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo2_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Ingles)</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo2_en" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo2_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 3 (Español)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo3" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 3 (Chino)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo3_zh" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo3_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 3 (Ingles)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo3_en" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo3_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 4 (Español)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo4" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo4"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 4 (Chino)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo4_zh" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo4_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 4 (Ingles)</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo4_en" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo4_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" lang="es" id="seccion1_imagen_fondo" name="seccion1_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion1_imagen_fondo ? form.seccion1_imagen_fondo : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion2_titulo" type="text" class="form-control" name="seccion2_titulo" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_titulo') }">
                        <has-error :form="form" field="seccion2_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion2_titulo_zh" type="text" class="form-control" name="seccion2_titulo_zh" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_titulo_zh') }">
                        <has-error :form="form" field="seccion2_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Ingles)</label>
                        <input v-model="form.seccion2_titulo_en" type="text" class="form-control" name="seccion2_titulo_en" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_titulo_en') }">
                        <has-error :form="form" field="seccion2_titulo_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Ingles)</label>
                        <!--<textarea v-model="form.seccion2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" lang="es" id="seccion2_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion2_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion2_imagen_fondo ? form.seccion2_imagen_fondo : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 3</h3>

                  <div class="form-group">
                        <label>Parrafo 1 (Español)</label>
                        <!--<textarea v-model="form.seccion3_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Chino)</label>
                        <!--<textarea v-model="form.seccion3_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo1_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Ingles)</label>
                        <!--<textarea v-model="form.seccion3_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo1_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo1_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Español)</label>
                        <!--<textarea v-model="form.seccion3_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Chino)</label>
                        <!--<textarea v-model="form.seccion3_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo2_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo2_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Ingles)</label>
                        <!--<textarea v-model="form.seccion3_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo2_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo2_en"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Parrafo 1 (Español)</label>
                        <!--<textarea v-model="form.seccion4_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Chino)</label>
                        <!--<textarea v-model="form.seccion4_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo1_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Ingles)</label>
                        <!--<textarea v-model="form.seccion4_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo1_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo1_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Español)</label>
                        <!--<textarea v-model="form.seccion4_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Chino)</label>
                        <!--<textarea v-model="form.seccion4_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo2_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo2_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Ingles)</label>
                        <!--<textarea v-model="form.seccion4_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo2_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo2_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 3 (Español)</label>
                        <!--<textarea v-model="form.seccion4_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo3" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 3 (Chino)</label>
                        <!--<textarea v-model="form.seccion4_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo3_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo3_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 3 (Ingles)</label>
                        <!--<textarea v-model="form.seccion4_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3_en') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo3_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo3_en"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 4 (Español)</label>
                        <!--<textarea v-model="form.seccion4_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }" tag-name="textarea" :editor="editor" v-model="form.seccion4_parrafo4" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo4"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 4 (Chino)</label>
                        <!--<textarea v-model="form.seccion4_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4_zh') }" tag-name="textarea" :editor="editor" v-model="form.seccion4_parrafo4_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo4_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 4 (Ingles)</label>
                        <!--<textarea v-model="form.seccion4_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4_en') }" tag-name="textarea" :editor="editor" v-model="form.seccion4_parrafo4_en" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo4_en"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion4_imagen_fondo">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" lang="es" id="seccion4_imagen_fondo" name="seccion4_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion4_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Subir</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion4_imagen_fondo ? form.seccion4_imagen_fondo : ''"/>
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
                        <input type="hidden" v-model="form.id" name="quienes_somos_id">
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
                    logo_1_encabezado: '',
                    logo_2_encabezado: '',
                    texto_encabezado: '',
                    texto_encabezado_zh: '',
                    texto_encabezado_en: '',
                    texto_encabezado_habilitado: '',
                    seccio1_parrafo1: '',
                    seccio1_parrafo2: '',
                    seccio1_parrafo3: '',
                    seccio1_parrafo4: '',
                    seccio1_parrafo1_zh: '',
                    seccio1_parrafo2_zh: '',
                    seccio1_parrafo3_zh: '',
                    seccio1_parrafo4_zh: '',
                    seccio1_parrafo1_en: '',
                    seccio1_parrafo2_en: '',
                    seccio1_parrafo3_en: '',
                    seccio1_parrafo4_en: '',
                    seccion1_imagen_fondo: '',
                    seccion2_titulo:'',
                    seccion2_parrafo:'',
                    seccion2_titulo_zh:'',
                    seccion2_parrafo_zh:'',
                    seccion2_titulo_en:'',
                    seccion2_parrafo_en:'',
                    seccion2_imagen_fondo: '',
                    seccion3_parrafo1: '',
                    seccion3_parrafo2: '',
                    seccion3_parrafo1_zh: '',
                    seccion3_parrafo2_zh: '',
                    seccion3_parrafo1_en: '',
                    seccion3_parrafo2_en: '',
                    seccion4_parrafo1: '',
                    seccion4_parrafo2:'',
                    seccion4_parrafo3:'',
                    seccion4_parrafo4:'',
                    seccion4_parrafo1_zh: '',
                    seccion4_parrafo2_zh:'',
                    seccion4_parrafo3_zh:'',
                    seccion4_parrafo4_zh:'',
                    seccion4_parrafo1_en: '',
                    seccion4_parrafo2_en:'',
                    seccion4_parrafo3_en:'',
                    seccion4_parrafo4_en:'',
                    seccion4_imagen_fondo:'',

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
        
        editWindow(quienessomos){
        	console.log(quienessomos);
        	if(quienessomos){
        		this.editMode = true
        		this.form.clear();
            	this.form.reset();

            	this.form.id= quienessomos.id;
                this.form.encabezado_imagen_fondo = quienessomos.encabezado_imagen_fondo;
                this.form.logo_1_encabezado= quienessomos.logo_1_encabezado;
                this.form.logo_2_encabezado= quienessomos.logo_2_encabezado;

                this.form.texto_encabezado= typeof quienessomos.texto_encabezado === 'object' ? quienessomos.texto_encabezado.es : '';
                this.form.texto_encabezado_zh= typeof quienessomos.texto_encabezado === 'object' ? quienessomos.texto_encabezado.zh : '';
                this.form.texto_encabezado_en= typeof quienessomos.texto_encabezado === 'object' ? quienessomos.texto_encabezado.en : '';

                this.form.texto_encabezado_habilitado= quienessomos.texto_encabezado_habilitado;

                this.form.seccio1_parrafo1= typeof quienessomos.seccio1_parrafo1 === 'object' ? quienessomos.seccio1_parrafo1.es : '';
                this.form.seccio1_parrafo2= typeof quienessomos.seccio1_parrafo2 === 'object' ? quienessomos.seccio1_parrafo2.es : '';
                this.form.seccio1_parrafo3= typeof quienessomos.seccio1_parrafo3 === 'object' ? quienessomos.seccio1_parrafo3.es : '';
                this.form.seccio1_parrafo4= typeof quienessomos.seccio1_parrafo4 === 'object' ? quienessomos.seccio1_parrafo4.es : '';
                this.form.seccio1_parrafo1_zh= typeof quienessomos.seccio1_parrafo1 === 'object' ? quienessomos.seccio1_parrafo1.zh : '';
                this.form.seccio1_parrafo2_zh= typeof quienessomos.seccio1_parrafo2 === 'object' ? quienessomos.seccio1_parrafo2.zh : '';
                this.form.seccio1_parrafo3_zh= typeof quienessomos.seccio1_parrafo3 === 'object' ? quienessomos.seccio1_parrafo3.zh : '';
                this.form.seccio1_parrafo4_zh= typeof quienessomos.seccio1_parrafo4 === 'object' ? quienessomos.seccio1_parrafo4.zh : '';
                this.form.seccio1_parrafo1_en= typeof quienessomos.seccio1_parrafo1 === 'object' ? quienessomos.seccio1_parrafo1.en : '';
                this.form.seccio1_parrafo2_en= typeof quienessomos.seccio1_parrafo2 === 'object' ? quienessomos.seccio1_parrafo2.en : '';
                this.form.seccio1_parrafo3_en= typeof quienessomos.seccio1_parrafo3 === 'object' ? quienessomos.seccio1_parrafo3.en : '';
                this.form.seccio1_parrafo4_en= typeof quienessomos.seccio1_parrafo4 === 'object' ? quienessomos.seccio1_parrafo4.en : '';

                this.form.seccion1_imagen_fondo= quienessomos.seccion1_imagen_fondo;

                this.form.seccion2_titulo=typeof quienessomos.seccion2_titulo === 'object' ? quienessomos.seccion2_titulo.es : '';
                this.form.seccion2_parrafo=typeof quienessomos.seccion2_parrafo === 'object' ? quienessomos.seccion2_parrafo.es : '';
                this.form.seccion2_titulo_zh=typeof quienessomos.seccion2_titulo === 'object' ? quienessomos.seccion2_titulo.zh : '';
                this.form.seccion2_parrafo_zh=typeof quienessomos.seccion2_parrafo === 'object' ? quienessomos.seccion2_parrafo.zh : '';
                this.form.seccion2_titulo_en=typeof quienessomos.seccion2_titulo === 'object' ? quienessomos.seccion2_titulo.en : '';
                this.form.seccion2_parrafo_en=typeof quienessomos.seccion2_parrafo === 'object' ? quienessomos.seccion2_parrafo.en : '';

                this.form.seccion2_imagen_fondo= quienessomos.seccion2_imagen_fondo;

                this.form.seccion3_parrafo1= typeof quienessomos.seccion3_parrafo1 === 'object' ? quienessomos.seccion3_parrafo1.es : '';
                this.form.seccion3_parrafo2= typeof quienessomos.seccion3_parrafo2 === 'object' ? quienessomos.seccion3_parrafo2.es : '';
                this.form.seccion3_parrafo1_zh= typeof quienessomos.seccion3_parrafo1 === 'object' ? quienessomos.seccion3_parrafo1.zh : '';
                this.form.seccion3_parrafo2_zh= typeof quienessomos.seccion3_parrafo2 === 'object' ? quienessomos.seccion3_parrafo2.zh : '';
                this.form.seccion3_parrafo1_en= typeof quienessomos.seccion3_parrafo1 === 'object' ? quienessomos.seccion3_parrafo1.en : '';
                this.form.seccion3_parrafo2_en= typeof quienessomos.seccion3_parrafo2 === 'object' ? quienessomos.seccion3_parrafo2.en : '';


                this.form.seccion4_parrafo1= typeof quienessomos.seccion4_parrafo1 === 'object' ? quienessomos.seccion4_parrafo1.es : '';
                this.form.seccion4_parrafo2=typeof quienessomos.seccion4_parrafo2 === 'object' ? quienessomos.seccion4_parrafo2.es : '';
                this.form.seccion4_parrafo3=typeof quienessomos.seccion4_parrafo3 === 'object' ? quienessomos.seccion4_parrafo3.es : '';
                this.form.seccion4_parrafo4=typeof quienessomos.seccion4_parrafo4 === 'object' ? quienessomos.seccion4_parrafo4.es : '';
                this.form.seccion4_parrafo1_zh= typeof quienessomos.seccion4_parrafo1 === 'object' ? quienessomos.seccion4_parrafo1.zh : '';
                this.form.seccion4_parrafo2_zh=typeof quienessomos.seccion4_parrafo2 === 'object' ? quienessomos.seccion4_parrafo2.zh : '';
                this.form.seccion4_parrafo3_zh=typeof quienessomos.seccion4_parrafo3 === 'object' ? quienessomos.seccion4_parrafo3.zh : '';
                this.form.seccion4_parrafo4_zh=typeof quienessomos.seccion4_parrafo4 === 'object' ? quienessomos.seccion4_parrafo4.zh : '';
                this.form.seccion4_parrafo1_en= typeof quienessomos.seccion4_parrafo1 === 'object' ? quienessomos.seccion4_parrafo1.en : '';
                this.form.seccion4_parrafo2_en=typeof quienessomos.seccion4_parrafo2 === 'object' ? quienessomos.seccion4_parrafo2.en : '';
                this.form.seccion4_parrafo3_en=typeof quienessomos.seccion4_parrafo3 === 'object' ? quienessomos.seccion4_parrafo3.en : '';
                this.form.seccion4_parrafo4_en=typeof quienessomos.seccion4_parrafo4 === 'object' ? quienessomos.seccion4_parrafo4.en : '';

                this.form.seccion4_imagen_fondo=quienessomos.seccion4_imagen_fondo;
                this.sliders = quienessomos.sliders;
        	}
        },
        loadDataSliders(sliders){
          this.sliders = sliders.data
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
        loadQuienesSomos() {

          axios.get("api/quienessomos").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateQuienesSomos(event){
	    	if(!this.editMode)
	        	return this.createQuienesSomos(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
      			formData.append('texto_encabezado',this.form.texto_encabezado);
      			formData.append('texto_encabezado_zh',this.form.texto_encabezado_zh);
            formData.append('texto_encabezado_en',this.form.texto_encabezado_en);
      			
      			formData.append('seccio1_parrafo1',this.form.seccio1_parrafo1);
      			formData.append('seccio1_parrafo2',this.form.seccio1_parrafo2);
      			formData.append('seccio1_parrafo3',this.form.seccio1_parrafo3);
      			formData.append('seccio1_parrafo4',this.form.seccio1_parrafo4);
      			formData.append('seccio1_parrafo1_zh',this.form.seccio1_parrafo1_zh);
      			formData.append('seccio1_parrafo2_zh',this.form.seccio1_parrafo2_zh);
      			formData.append('seccio1_parrafo3_zh',this.form.seccio1_parrafo3_zh);
      			formData.append('seccio1_parrafo4_zh',this.form.seccio1_parrafo4_zh);
            formData.append('seccio1_parrafo1_en',this.form.seccio1_parrafo1_en);
            formData.append('seccio1_parrafo2_en',this.form.seccio1_parrafo2_en);
            formData.append('seccio1_parrafo3_en',this.form.seccio1_parrafo3_en);
            formData.append('seccio1_parrafo4_en',this.form.seccio1_parrafo4_en);

      			formData.append('seccion2_titulo',this.form.seccion2_titulo);
      			formData.append('seccion2_parrafo',this.form.seccion2_parrafo);
      			formData.append('seccion2_titulo_zh',this.form.seccion2_titulo_zh);
      			formData.append('seccion2_parrafo_zh',this.form.seccion2_parrafo_zh);
            formData.append('seccion2_titulo_en',this.form.seccion2_titulo_en);
            formData.append('seccion2_parrafo_en',this.form.seccion2_parrafo_en);



      			formData.append('seccion3_parrafo1',this.form.seccion3_parrafo1);
      			formData.append('seccion3_parrafo2',this.form.seccion3_parrafo2);
      			formData.append('seccion3_parrafo1_zh',this.form.seccion3_parrafo1_zh);
      			formData.append('seccion3_parrafo2_zh',this.form.seccion3_parrafo2_zh);
            formData.append('seccion3_parrafo1_en',this.form.seccion3_parrafo1_en);
            formData.append('seccion3_parrafo2_en',this.form.seccion3_parrafo2_en);


      			formData.append('seccion4_parrafo1',this.form.seccion4_parrafo1);
      			formData.append('seccion4_parrafo2',this.form.seccion4_parrafo2);
      			formData.append('seccion4_parrafo3',this.form.seccion4_parrafo3);
      			formData.append('seccion4_parrafo4',this.form.seccion4_parrafo4);
      			formData.append('seccion4_parrafo1_zh',this.form.seccion4_parrafo1_zh);
      			formData.append('seccion4_parrafo2_zh',this.form.seccion4_parrafo2_zh);
      			formData.append('seccion4_parrafo3_zh',this.form.seccion4_parrafo3_zh);
      			formData.append('seccion4_parrafo4_zh',this.form.seccion4_parrafo4_zh);
            formData.append('seccion4_parrafo1_en',this.form.seccion4_parrafo1_en);
            formData.append('seccion4_parrafo2_en',this.form.seccion4_parrafo2_en);
            formData.append('seccion4_parrafo3_en',this.form.seccion4_parrafo3_en);
            formData.append('seccion4_parrafo4_en',this.form.seccion4_parrafo4_en);


             formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/quienessomos/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedQuienesSomosLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Quienes Somos Actualizado con Exito'
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

              if(this.idElement.id == 'logo_1_encabezado'){
                this.form.logo_1_encabezado = this.picFile
                console.log(this.form.logo_1_encabezado);
              }
              
              if(this.idElement.id == 'logo_2_encabezado'){
                this.form.logo_2_encabezado = this.picFile
                console.log(this.form.logo_2_encabezado);
              }

              if(this.idElement.id == 'seccion1_imagen_fondo'){
                this.form.seccion1_imagen_fondo = this.picFile
                console.log(this.form.seccion1_imagen_fondo);
              }

              if(this.idElement.id == 'seccion2_imagen_fondo'){
                this.form.seccion2_imagen_fondo = this.picFile
                console.log(this.form.seccion2_imagen_fondo);
              }
              
              if(this.idElement.id == 'seccion4_imagen_fondo'){
                this.form.seccion4_imagen_fondo = this.picFile
                console.log(this.form.seccion4_imagen_fondo);
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

        createQuienesSomos(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
      			formData.append('texto_encabezado',this.form.texto_encabezado);
      			formData.append('texto_encabezado_zh',this.form.texto_encabezado_zh);
            formData.append('texto_encabezado_en',this.form.texto_encabezado_en);
      			
      			formData.append('seccio1_parrafo1',this.form.seccio1_parrafo1);
      			formData.append('seccio1_parrafo2',this.form.seccio1_parrafo2);
      			formData.append('seccio1_parrafo3',this.form.seccio1_parrafo3);
      			formData.append('seccio1_parrafo4',this.form.seccio1_parrafo4);
      			formData.append('seccio1_parrafo1_zh',this.form.seccio1_parrafo1_zh);
      			formData.append('seccio1_parrafo2_zh',this.form.seccio1_parrafo2_zh);
      			formData.append('seccio1_parrafo3_zh',this.form.seccio1_parrafo3_zh);
      			formData.append('seccio1_parrafo4_zh',this.form.seccio1_parrafo4_zh);
            formData.append('seccio1_parrafo1_en',this.form.seccio1_parrafo1_en);
            formData.append('seccio1_parrafo2_en',this.form.seccio1_parrafo2_en);
            formData.append('seccio1_parrafo3_en',this.form.seccio1_parrafo3_en);
            formData.append('seccio1_parrafo4_en',this.form.seccio1_parrafo4_en);

      			formData.append('seccion2_titulo',this.form.seccion2_titulo);
      			formData.append('seccion2_parrafo',this.form.seccion2_parrafo);
      			formData.append('seccion2_titulo_zh',this.form.seccion2_titulo_zh);
      			formData.append('seccion2_parrafo_zh',this.form.seccion2_parrafo_zh);
            formData.append('seccion2_titulo_en',this.form.seccion2_titulo_en);
            formData.append('seccion2_parrafo_en',this.form.seccion2_parrafo_en);


      			formData.append('seccion3_parrafo1',this.form.seccion3_parrafo1);
      			formData.append('seccion3_parrafo2',this.form.seccion3_parrafo2);
      			formData.append('seccion3_parrafo1_zh',this.form.seccion3_parrafo1_zh);
      			formData.append('seccion3_parrafo2_zh',this.form.seccion3_parrafo2_zh);
            formData.append('seccion3_parrafo1_en',this.form.seccion3_parrafo1_en);
            formData.append('seccion3_parrafo2_en',this.form.seccion3_parrafo2_en);


      			formData.append('seccion4_parrafo1',this.form.seccion4_parrafo1);
      			formData.append('seccion4_parrafo2',this.form.seccion4_parrafo2);
      			formData.append('seccion4_parrafo3',this.form.seccion4_parrafo3);
      			formData.append('seccion4_parrafo4',this.form.seccion4_parrafo4);
      			formData.append('seccion4_parrafo1_zh',this.form.seccion4_parrafo1_zh);
      			formData.append('seccion4_parrafo2_zh',this.form.seccion4_parrafo2_zh);
      			formData.append('seccion4_parrafo3_zh',this.form.seccion4_parrafo3_zh);
      			formData.append('seccion4_parrafo4_zh',this.form.seccion4_parrafo4_zh);
            formData.append('seccion4_parrafo1_en',this.form.seccion4_parrafo1_en);
            formData.append('seccion4_parrafo2_en',this.form.seccion4_parrafo2_en);
            formData.append('seccion4_parrafo3_en',this.form.seccion4_parrafo3_en);
            formData.append('seccion4_parrafo4_en',this.form.seccion4_parrafo4_en);

            axios.post('api/quienessomos',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedQuienesSomosLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Quienes Somos Actualizada con Exito'
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


          axios.post('api/sliderquienessomos',formData)
          .then((data) => {

            Fire.$emit('AfterCreatedSliderLoadIt');
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Slider Guardado con Exito'
            })

            this.$Progress.finish()
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
              axios.post('api/sliderquienessomos/'+this.slider.id,formData)
               .then(()=>{

                  Fire.$emit('AfterCreatedSliderLoadIt');
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
          axios.get("api/allsliderquienessomos/"+this.form.id).then( data => (this.loadDataSliders(data)));
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

                axios.delete('api/sliderquienessomos/'+sliderid)
                .then((data) => {
                  console.log(data);

                  Toast.fire({
                    icon: 'success',
                    title: 'Slider Eliminado con Exito'
                  })

                  Fire.$emit('AfterCreatedSliderLoadIt');
                  this.$Progress.finish()

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
        }
          
        },

        created() { 
            this.loadQuienesSomos();
            Fire.$on('AfterCreatedQuienesSomosLoadIt',()=>{ //custom events fire on
                this.loadQuienesSomos();
                
            });
             Fire.$on('AfterCreatedSliderLoadIt',()=>{ //custom events fire on
                this.loadSliders();
                
            });
        }
    }
</script> 