
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Quienes Somos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="editMode ? updateQuienesSomos() : createQuienesSomos()" enctype="multipart/form-data" id='form'>
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
                        <label>Texto</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea" name="texto_encabezado" :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" id="exampleCheck1" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Parrafo 1</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }" tag-name="textarea" name="seccio1_parrafo1" :editor="editor" v-model="form.seccio1_parrafo1" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }" tag-name="textarea" name="seccio1_parrafo2" :editor="editor" v-model="form.seccio1_parrafo2" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 3</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }" tag-name="textarea" name="seccio1_parrafo3" :editor="editor" v-model="form.seccio1_parrafo3" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 4</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }" tag-name="textarea" name="seccio1_parrafo4" :editor="editor" v-model="form.seccio1_parrafo4" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo4"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_imagen_fondo">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_imagen_fondo"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="form.seccion2_titulo" type="text" class="form-control" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_titulo') }">
                        <has-error :form="form" field="seccion2_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <!--<textarea v-model="form.seccion2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }" tag-name="textarea" name="seccion2_parrafo" :editor="editor" v-model="form.seccion2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo"></has-error>
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
                        <label>Parrafo 1</label>
                        <!--<textarea v-model="form.seccion3_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }" tag-name="textarea" name="seccion3_parrafo1" :editor="editor" v-model="form.seccion3_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <!--<textarea v-model="form.seccion3_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }" tag-name="textarea" name="seccion3_parrafo2" :editor="editor" v-model="form.seccion3_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo2"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Parrafo 1</label>
                        <!--<textarea v-model="form.seccion4_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }" tag-name="textarea" name="seccion4_parrafo1" :editor="editor" v-model="form.seccion4_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <!--<textarea v-model="form.seccion4_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }" tag-name="textarea" name="seccion4_parrafo2" :editor="editor" v-model="form.seccion4_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 3</label>
                        <!--<textarea v-model="form.seccion4_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }" tag-name="textarea" name="seccion4_parrafo3" :editor="editor" v-model="form.seccion4_parrafo3" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 4</label>
                        <!--<textarea v-model="form.seccion4_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }" tag-name="textarea" name="seccion4_parrafo4" :editor="editor" v-model="form.seccion4_parrafo4" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo4"></has-error>
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
                    texto_encabezado: '',
                    texto_encabezado_habilitado: '',
                    seccio1_parrafo1: '',
                    seccio1_parrafo2: '',
                    seccio1_parrafo3: '',
                    seccio1_parrafo4: '',
                    seccion1_imagen_fondo: '',
                    seccion2_titulo:'',
                    seccion2_parrafo:'',
                    seccion2_imagen_fondo: '',
                    seccion3_parrafo1: '',
                    seccion3_parrafo2: '',
                    seccion4_parrafo1: '',
                    seccion4_parrafo2:'',
                    seccion4_parrafo3:'',
                    seccion4_parrafo4:'',
                    seccion4_imagen_fondo:'',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(quienessomos){
           this.form.clear();
           this.editMode = true
           this.form.reset();
           this.form.fill(quienessomos)
        },
        loadQuienesSomos() {

          axios.get("api/quienessomos").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateQuienesSomos(){
           this.$Progress.start()
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/quienessomos',this.form,{

                // Transform form data to FormData
                transformRequest: [function (data, headers) {
                    return objectToFormData(data)
                }]})
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

        createQuienesSomos(){

            this.$Progress.start()

            this.form.submit('post','api/quienessomos',{

                // Transform form data to FormData
                transformRequest: [function (data, headers) {
                    return objectToFormData(data)
                }]
            })
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
          
        },

        created() { 
            this.loadQuienesSomos();
            Fire.$on('AfterCreatedQuienesSomosLoadIt',()=>{ //custom events fire on
                this.loadQuienesSomos();
                
            });
        }
    }
</script> 