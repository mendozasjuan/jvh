
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Calidad</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateCalidad" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
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
                      <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? 'storage/'+form.encabezado_imagen_fondo : ''"/>
                    </figure>
                    
                  </div>
                  <div class="form-group">
                    <label for="logo_1_encabezado">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo_1_encabezado" name="logo_1_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_1_encabezado">Seleccione un Archivo</label>
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
                        <input type="file" class="custom-file-input" id="logo_2_encabezado" name="logo_2_encabezado" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="logo_2_encabezado">Seleccione un Archivo</label>
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
                        <input v-model="form.texto_encabezado" type="text" class="form-control" placeholder="Ingrese el Texto" name="texto_encabezado" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }">
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" name="texto_encabezado_habilitado" id="texto_encabezado_habilitado" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="texto_encabezado_habilitado">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="seccion1_titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }" tag-name="textarea"  :editor="editor" v-model="form.seccion1_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_logo1">Logo 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo1" name="seccion1_logo1" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo1">Seleccione un Archivo</label>
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
                        <input type="file" class="custom-file-input" id="seccion1_logo2" name="seccion1_logo2" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo2">Seleccione un Archivo</label>
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
                        <input type="file" class="custom-file-input" id="seccion1_logo3" name="seccion1_logo3" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo3">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo3"/>
                    </figure>
                  </div>

                  <div class="form-group">
                    <label for="seccion1_logo4">Logo 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo4" name="seccion1_logo4" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo4">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo4"/>
                    </figure>
                  </div>

                  <div class="form-group">
                    <label for="seccion1_logo5">Logo 5</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo5" name="seccion1_logo5" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo5">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo5"/>
                    </figure>
                  </div>

                  <div class="form-group">
                    <label for="seccion1_logo6">Logo 6</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo6" name="seccion1_logo6" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo6">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo6"/>
                    </figure>
                  </div>

                  <div class="form-group">
                    <label for="seccion1_logo7">Logo 7</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_logo7" name="seccion1_logo7" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion1_logo7">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion1_logo7"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion2_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion2_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="'storage/'+form.seccion2_imagen_fondo"/>
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
                    seccion1_logo1: '',
                    seccion1_logo2: '',
                    seccion1_logo3: '',
                    seccion1_logo4: '',
                    seccion1_logo5: '',
                    seccion1_logo6: '',
                    seccion1_logo7: '',
                    seccion2_imagen_fondo: '',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(calidad){
        	if(calidad){
				this.editMode = true
        		this.form.clear();
				this.form.reset();

				this.form.id= calidad.id;
				this.form.encabezado_imagen_fondo = calidad.encabezado_imagen_fondo;
				this.form.logo_1_encabezado= calidad.logo_1_encabezado;
				this.form.logo_2_encabezado= calidad.logo_2_encabezado;

				this.form.texto_encabezado= typeof calidad.texto_encabezado === 'object' ? calidad.texto_encabezado.es : '';
				this.form.texto_encabezado_zh= typeof calidad.texto_encabezado === 'object' ? calidad.texto_encabezado.zh : '';

				this.form.texto_encabezado_habilitado= calidad.texto_encabezado_habilitado;

				this.form.seccion1_titulo= typeof calidad.seccion1_titulo === 'object' ? calidad.seccion1_titulo.es : '';
				this.form.seccion1_parrafo= typeof calidad.seccion1_parrafo === 'object' ? calidad.seccion1_parrafo.es : '';
				this.form.seccion1_titulo_zh= typeof calidad.seccion1_titulo === 'object' ? calidad.seccion1_titulo.zh : '';
				this.form.seccion1_parrafo_zh= typeof calidad.seccion1_parrafo === 'object' ? calidad.seccion1_parrafo.zh : '';

				this.form.seccion1_logo1= calidad.seccion1_logo1;
				this.form.seccion1_logo2 = calidad.seccion1_logo2;
				this.form.seccion1_logo3= calidad.seccion1_logo3;
				this.form.seccion1_logo4= calidad.seccion1_logo4;
				this.form.seccion1_logo5= calidad.seccion1_logo5;
				this.form.seccion1_logo6 = calidad.seccion1_logo6;
				this.form.seccion1_logo7= calidad.seccion1_logo7;
				this.form.seccion2_imagen_fondo= calidad.seccion2_imagen_fondo;

        	}

        },
        loadCalidad() {

          axios.get("api/calidad").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateCalidad(event){
        	if(!this.editMode)
	        	return this.createCalidad(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
			formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
			formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

			formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/calidad/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedCalidadLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Calidad Actualizada con Exito'
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

              if(this.idElement.id == 'seccion1_logo4'){
                this.form.seccion1_logo4 = this.picFile
                console.log(this.form.seccion1_logo4);
              }

              if(this.idElement.id == 'seccion1_logo5'){
                this.form.seccion1_logo5 = this.picFile
                console.log(this.form.seccion1_logo5);
              }

              if(this.idElement.id == 'seccion1_logo6'){
                this.form.seccion1_logo6 = this.picFile
                console.log(this.form.seccion1_logo6);
              }

              if(this.idElement.id == 'seccion1_logo7'){
                this.form.seccion1_logo7 = this.picFile
                console.log(this.form.seccion1_logo7);
              }
              
              
              if(this.idElement.id == 'seccion2_imagen_fondo'){
                this.form.seccion2_imagen_fondo = this.picFile
                console.log(this.form.seccion2_imagen_fondo);
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

        createCalidad(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
			formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
			formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

            axios.post('api/calidad',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedCalidadLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Calidad Actualizada con Exito'
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
            this.loadCalidad();
            Fire.$on('AfterCreatedCalidadLoadIt',()=>{ //custom events fire on
                this.loadCalidad();
                
            });
        }
    }
</script> 