
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Exportacion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateExportacion" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="encabezado_imagen_fondo" name="encabezado_imagen_fondo" v-on:change="onUploadImage">

                        <label class="custom-file-label" for="encabezado_imagen_fondo">Seleccione Archivo</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? form.encabezado_imagen_fondo : ''"/>
                    </figure>
                    
                  </div>
                  <div class="form-group">
                    <label for="logo_1_encabezado">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_1_encabezado" name="logo_1_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_1_encabezado">Seleccione Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.logo_1_encabezado ? form.logo_1_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                    <label for="logo_2_encabezado">Logo 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_2_encabezado" name="logo_2_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_2_encabezado">Seleccione Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.logo_2_encabezado ? form.logo_2_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto (Español)</label>
                        <input v-model="form.texto_encabezado" type="text" class="form-control" name="texto_encabezado" placeholder="Ingrese Texto" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }">

                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Texto (Chino)</label>
                        <input v-model="form.texto_encabezado_zh" type="text" class="form-control" name="texto_encabezado_zh" placeholder="Ingrese Texto" :class="{ 'is-invalid': form.errors.has('texto_encabezado_zh') }">

                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <has-error :form="form" field="texto_encabezado_zh"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" id="texto_encabezado_habilitado" name="texto_encabezado_habilitado" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="texto_encabezado_habilitado">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" name="seccion1_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion1_titulo_zh" type="text" class="form-control" name="seccion1_titulo_zh" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo_zh') }">
                        <has-error :form="form" field="seccion1_titulo_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }" tag-name="textarea" :editor="editor" v-model="form.seccion1_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo_zh') }" tag-name="textarea" :editor="editor" v-model="form.seccion1_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_imagen">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_imagen" name="seccion1_imagen" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_imagen">Seleccione Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion1_imagen ? form.seccion1_imagen : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Parrafo 1 (Español)</label>
                        <!--<textarea v-model="form.seccion2_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo1') }" tag-name="textarea" :editor="editor" v-model="form.seccion2_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1 (Chino) </label>
                        <!--<textarea v-model="form.seccion2_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo1_zh') }" tag-name="textarea" :editor="editor" v-model="form.seccion2_parrafo1_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo1_zh"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Español)</label>
                        <!--<textarea v-model="form.seccion2_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2 (Chino)</label>
                        <!--<textarea v-model="form.seccion2_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo2_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo2_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo2_zh"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion2_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion2_imagen_fondo">Seleccione Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion2_imagen_fondo ? form.seccion2_imagen_fondo : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 3</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion3_titulo" type="text" class="form-control" name="seccion3_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion3_titulo') }">
                        <has-error :form="form" field="seccion3_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion3_titulo_zh" type="text" class="form-control" name="seccion3_titulo_zh" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion3_titulo_zh') }">
                        <has-error :form="form" field="seccion3_titulo_zh"></has-error>
                  </div>
                  
                  <div class="form-group">
                    <label for="seccion3_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion3_imagen_fondo" name="seccion3_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion3_imagen_fondo">Seleccione Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.seccion3_imagen_fondo ? form.seccion3_imagen_fondo : ''"/>
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
                    texto_encabezado_zh: '',
                    texto_encabezado_habilitado: '',
                    seccion1_titulo: '',
                    seccion1_parrafo: '',
                    seccion1_titulo_zh: '',
                    seccion1_parrafo_zh: '',
                    seccion1_imagen: '',
                    seccion2_parrafo1: '',
                    seccion2_parrafo2: '',
                    seccion2_parrafo1_zh: '',
                    seccion2_parrafo2_zh: '',
                    seccion2_imagen_fondo: '',
                    seccion3_titulo: '',
                    seccion3_titulo_zh: '',
                    seccion3_imagen_fondo: '',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(exportacion){
        	if(exportacion){
        		this.editMode = true
				this.form.clear();				
				this.form.reset();

				this.form.id= exportacion.id;
				this.form.encabezado_imagen_fondo = exportacion.encabezado_imagen_fondo;
				this.form.logo_1_encabezado= exportacion.logo_1_encabezado;
				this.form.logo_2_encabezado= exportacion.logo_2_encabezado;

				this.form.texto_encabezado= typeof exportacion.texto_encabezado === 'object' ? exportacion.texto_encabezado.es : '';
				this.form.texto_encabezado_zh= typeof exportacion.texto_encabezado === 'object' ? exportacion.texto_encabezado.zh : '';

				this.form.texto_encabezado_habilitado= exportacion.texto_encabezado_habilitado;

				this.form.seccion1_titulo = typeof exportacion.seccion1_titulo === 'object' ? exportacion.seccion1_titulo.es : '';
        this.form.seccion1_parrafo = typeof exportacion.seccion1_parrafo === 'object' ? exportacion.seccion1_parrafo.es : '';
        this.form.seccion1_titulo_zh = typeof exportacion.seccion1_titulo === 'object' ? exportacion.seccion1_titulo.zh : '';
        this.form.seccion1_parrafo_zh = typeof exportacion.seccion1_parrafo === 'object' ? exportacion.seccion1_parrafo.zh : '';

        this.form.seccion2_parrafo1 = typeof exportacion.seccion2_parrafo1 === 'object' ? exportacion.seccion2_parrafo1.es : '';
        this.form.seccion2_parrafo2 = typeof exportacion.seccion2_parrafo2 === 'object' ? exportacion.seccion2_parrafo2.es : '';
        this.form.seccion2_parrafo1_zh = typeof exportacion.seccion2_parrafo1 === 'object' ? exportacion.seccion2_parrafo1.zh : '';
        this.form.seccion2_parrafo2_zh = typeof exportacion.seccion2_parrafo2 === 'object' ? exportacion.seccion2_parrafo2.zh : '';

        this.form.seccion3_titulo = typeof exportacion.seccion3_titulo === 'object' ? exportacion.seccion3_titulo.es : '';
        this.form.seccion3_titulo_zh = typeof exportacion.seccion3_titulo === 'object' ? exportacion.seccion3_titulo.zh : '';

        this.form.seccion1_imagen = exportacion.seccion1_imagen;
        this.form.seccion2_imagen_fondo= exportacion.seccion2_imagen_fondo;
        this.form.seccion3_imagen_fondo= exportacion.seccion3_imagen_fondo;
        	}
        },
        loadExportacion() {

          axios.get("api/exportacion").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateExportacion(event){
        	if(!this.editMode)
	        	return this.createExportacion(event);

           this.$Progress.start()

           let formData =  new FormData(event.target)
			formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
			formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

			formData.append('seccion2_parrafo1',this.form.seccion2_parrafo1);
			formData.append('seccion2_parrafo2',this.form.seccion2_parrafo2);
			formData.append('seccion2_parrafo1_zh',this.form.seccion2_parrafo1_zh);
			formData.append('seccion2_parrafo2_zh',this.form.seccion2_parrafo2_zh);

			formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/exportacion/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedExportacionLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Exportacion Actualizada con Exito'
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

              if(this.idElement.id == 'seccion1_imagen'){
                this.form.seccion1_imagen = this.picFile
                console.log(this.form.seccion1_imagen);
              }

              if(this.idElement.id == 'seccion2_imagen_fondo'){
                this.form.seccion2_imagen_fondo = this.picFile
                console.log(this.form.seccion2_imagen_fondo);
              }

              if(this.idElement.id == 'seccion3_imagen_fondo'){
                this.form.seccion3_imagen_fondo = this.picFile
                console.log(this.form.seccion3_imagen_fondo);
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

        createExportacion(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
      			formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
      			formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

      			formData.append('seccion2_parrafo1',this.form.seccion2_parrafo1);
      			formData.append('seccion2_parrafo2',this.form.seccion2_parrafo2);
      			formData.append('seccion2_parrafo1_zh',this.form.seccion2_parrafo1_zh);
      			formData.append('seccion2_parrafo2_zh',this.form.seccion2_parrafo2_zh);

             axios.post('api/exportacion',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedExportacionLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Exportacion Actualizada con Exito'
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
            this.loadExportacion();
            Fire.$on('AfterCreatedExportacionLoadIt',()=>{ //custom events fire on
                this.loadExportacion();
                
            });
        }
    }
</script> 