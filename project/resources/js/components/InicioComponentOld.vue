
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina de Inicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="editMode ? updateInicio() : createInicio()" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="encabezado_imagen_fondo" v-on:change="onUploadImage">

                        <label class="custom-file-label" for="encabezado_imagen_fondo">Choose file</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? 'storage/'+form.encabezado_imagen_fondo : ''"/>
                    </figure>
                    
                  </div>
                  <div class="form-group">
                    <label for="logo_1_encabezado">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_1_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_1_encabezado">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.logo_1_encabezado"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="logo_2_encabezado">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_2_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_2_encabezado">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.logo_2_encabezado"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto (Español)</label>
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <input v-model="form.texto_encabezado" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }">
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Chino)</label>
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <input v-model="form.texto_encabezado_zh" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado_zh') }">
                        <has-error :form="form" field="texto_encabezado_zh"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" id="exampleCheck1" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion1_titulo_zh" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_titulo_zh') }">
                        <has-error :form="form" field="seccion1_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion_1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion_1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion_1_parrafo') }" tag-name="textarea" name="seccion_1_parrafo.es" :editor="editor" v-model="form.seccion_1_parrafo.es" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion_1_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion_1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion_1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion_1_parrafo_zh') }" tag-name="textarea" name="seccion_1_parrafo_zh" :editor="editor" v-model="form.seccion_1_parrafo_zh.zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion_1_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo1">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo1" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo1">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo1"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo2">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo2" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo2">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo2"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo3">Logo 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo3" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo3">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo3"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccio2_titulo" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio2_titulo') }">
                        <has-error :form="form" field="seccio2_titulo"></has-error>
                  </div>
                   <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccio2_titulo_zh" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio2_titulo_zh') }">
                        <has-error :form="form" field="seccio2_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion_2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion_2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion_2_parrafo') }" tag-name="textarea" name="seccion_2_parrafo" :editor="editor" v-model="form.seccion_2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion_2_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion_2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion_2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion_2_parrafo_zh') }" tag-name="textarea" name="seccion_2_parrafo_zh" :editor="editor" v-model="form.seccion_2_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion_2_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion2_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion2_imagen_fondo">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion2_imagen_fondo"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 3</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion3_titulo" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_titulo') }">
                        <has-error :form="form" field="seccion3_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion3_titulo_zh" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_titulo_zh') }">
                        <has-error :form="form" field="seccion3_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" tag-name="textarea" name="seccion3_parrafo" :editor="editor" v-model="form.seccion3_parrafo.es" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo_zh') }" tag-name="textarea" name="seccion3_parrafo_zh" :editor="editor" v-model="form.seccion3_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion3_imagen">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion3_imagen" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion3_imagen">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion3_imagen"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion4_titulo" :class="{ 'is-invalid': form.errors.has('seccion4_titulo') }" type="text" class="form-control" placeholder="Enter ...">
                        <has-error :form="form" field="seccion4_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion4_titulo_zh" :class="{ 'is-invalid': form.errors.has('seccion4_titulo_zh') }" type="text" class="form-control" placeholder="Enter ...">
                        <has-error :form="form" field="seccion4_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion4_imagen_fondo">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion4_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion4_imagen_fondo">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion4_imagen_fondo"/>
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
    </div>

</template>

<script>
  import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    export default {
        data() {
            return {
                editMode: false,
                picFile:'',
                idElement:'',
                inicio: '',
                imagenMiniatura:'',
                editor: ClassicEditor,
                editorData: '',
                editorConfig:{
                },
                form: new Form({
                    id: '',
                    encabezado_imagen_fondo : '',
                    logo_1_encabezado: '',
                    logo_2_encabezado: '',
                    texto_encabezado:'',
                    texto_encabezado_zh:'',
                    texto_encabezado_habilitado: false,
                    seccion1_titulo: '',
                    seccion1_titulo_zh: '',
                    seccion_1_parrafo:'',
                    seccion_1_parrafo_zh: '',
                    seccion1_logo1: '',
                    seccion1_logo2: '',
                    seccion1_logo3: '',
                    seccion2_imagen_fondo:'',
                    seccio2_titulo:'',
                    seccio2_titulo_zh:'',
                    seccion_2_parrafo: '',
                    seccion_2_parrafo_zh: '',
                    seccion3_titulo: '',
                    seccion3_titulo_zh:'',
                    seccion3_parrafo: '',
                    seccion3_parrafo_zh:'',
                    seccion3_imagen: '',
                    seccion4_titulo:{es:'',zh:''},
                    seccion4_titulo_zh:'',
                    seccion4_imagen_fondo:'',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(inicio){
          if(inicio){
           this.form.clear();
           this.editMode = true
           this.form.reset();
           this.form.fill(inicio)
          }
          console.log(this.editMode);
        },
        loadInicio() {

          axios.get("api/inicio").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateInicio(){
           this.$Progress.start()
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/inicio',this.form,{

                // Transform form data to FormData
                transformRequest: [function (data, headers) {
                    return objectToFormData(data)
                }]})
               .then(()=>{
                  Fire.$emit('AfterCreatedInicioLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Corte Actualizado con Exito'
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

              if(this.idElement.id == 'seccion1_logo1'){
                this.form.seccion1_logo1 = this.picFile
                console.log(this.form.seccion1_logo1);
              }

              if(this.idElement.id == 'seccion1_logo2'){
                this.form.seccion1_logo2 = this.picFile
                console.log(this.form.seccion1_logo2);
              }
              
              if(this.idElement.id == 'seccion1_logo3'){
                this.form.seccion1_logo3 = this.picFile
                console.log(this.form.seccion1_logo3);
              }

              if(this.idElement.id == 'seccion2_imagen_fondo'){
                this.form.seccion2_imagen_fondo = this.picFile
                console.log(this.form.seccion2_imagen_fondo);
              }

              if(this.idElement.id == 'seccion3_imagen'){
                this.form.seccion3_imagen = this.picFile
                console.log(this.form.seccion3_imagen);
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

        createInicio(){

            this.$Progress.start()
            console.log(this.form);
           this.form.submit('post','api/inicio',{
                // Transform form data to FormData
                transformRequest: [function (data, headers) {
                    return objectToFormData(data)
                }]
            })
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
          
        },

        created() { 
            this.loadInicio();
            Fire.$on('AfterCreatedInicioLoadIt',()=>{ //custom events fire on
                this.loadInicio();
                
            });
        }
    }
</script> 