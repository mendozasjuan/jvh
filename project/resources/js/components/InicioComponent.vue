
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
              <form role="form" @submit.prevent="updateInicio" enctype="multipart/form-data" id='form'>
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
                      <img class="miniatura img-fluid" :src="data.encabezado_imagen_fondo ? data.encabezado_imagen_fondo : '' "/>
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
                      <img class="miniatura img-fluid" :src="data.logo_1_encabezado ? data.logo_1_encabezado :''"/>
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
                      <img class="miniatura img-fluid" :src="data.logo_2_encabezado ? data.logo_2_encabezado : ''"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto</label>
                        <input v-model="data.texto_encabezado" type="text" name="texto_encabezado" class="form-control" placeholder="Ingrese el Texto" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="data.texto_encabezado_habilitado" type="checkbox" class="form-check-input" name="texto_encabezado_habilitado" id="exampleCheck1" :class="{ 'is-invalid': '' }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="data" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="data.seccion1_titulo" type="text"  class="form-control" name="seccion1_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': ''}">
                        <has-error :form="data" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <!--<textarea v-model="data.seccion_1_parrafo" style="display:none" class="form-control" rows="3" placeholder="Enter ..." ></textarea>-->

                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': data.errors.has('seccion_1_parrafo') }" tag-name="textarea"  :editor="editor" v-model="data.seccion_1_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_1_parrafo"></has-error>
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
                      <img class="miniatura img-fluid" :src="data.seccion1_logo1 ? data.seccion1_logo1 : ''"/>
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
                      <img class="miniatura img-fluid" :src="data.seccion1_logo2 ? data.seccion1_logo2 : ''"/>
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
                      <img class="miniatura img-fluid" :src="data.seccion1_logo3 ? data.seccion1_logo3 : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="data.seccio2_titulo" type="text" class="form-control" name="seccio2_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                        <has-error :form="data" field="seccio2_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <ckeditor class="col-md-10 form-control"  :class="{ 'is-invalid': '' }" tag-name="textarea"  :editor="editor" v-model="data.seccion_2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion_2_parrafo"></has-error>
                  </div>
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
                      <img class="miniatura img-fluid" :src="data.seccion2_imagen_fondo ? data.seccion2_imagen_fondo : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 3</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="data.seccion3_titulo" type="text" class="form-control" name="seccion3_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': '' }">
                       <has-error :form="data" field="seccion3_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <!--<textarea v-model="form.seccion3_parrafo" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo') }" class="form-control" rows="3" placeholder="Enter ..."></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid':'' }"  tag-name="textarea"  :editor="editor" v-model="data.seccion3_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="data" field="seccion3_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion3_imagen">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion3_imagen" name="seccion3_imagen" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion3_imagen">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="data.seccion3_imagen ? data.seccion3_imagen : ''"/>
                    </figure>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="data.seccion4_titulo" :class="{ 'is-invalid': '' }" type="text" name="seccion4_titulo" class="form-control" placeholder="Ingrese Titulo">
                        <has-error :form="data" field="seccion4_titulo"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion4_imagen_fondo">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion4_imagen_fondo" name="seccion4_imagen_fondo" v-on:change="onUploadImage">
                        <label class="custom-file-label" for="seccion4_imagen_fondo">Seleccione un Archivo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
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
                data:new Form({
                  id: '',
                  encabezado_imagen_fondo : '',
                  texto_encabezado:'',
                  texto_encabezado_zh:'',
                  texto_encabezado_habilitado: '',
                  seccion1_titulo:'',
                  seccion1_titulo_zh:'',
                  seccion_1_parrafo:'',
                  seccion_1_parrafo_zh:'',
                  seccion1_logo1: '',
                  seccion1_logo2: '',
                  seccion1_logo3: '',
                  seccion2_imagen_fondo:'',
                  seccio2_titulo:'',
                  seccio2_titulo_zh:'',
                  seccion_2_parrafo:'',
                  seccion_2_parrafo_zh:'',
                  seccion3_titulo:'',
                  seccion3_titulo_zh:'',
                  seccion3_parrafo:'',
                  seccion3_parrafo_zh:'',
                  seccion3_imagen: '',
                  seccion4_titulo:'',
                  seccion4_titulo_zh:'',
                  seccion4_imagen_fondo:''


                }),errors:[],
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

            this.data.texto_encabezado_habilitado= inicio.texto_encabezado_habilitado;

            this.data.seccion1_titulo=  typeof inicio.seccion1_titulo === 'object' ? inicio.seccion1_titulo.es : '';
            this.data.seccion1_titulo_zh=  typeof inicio.seccion1_titulo === 'object' ? inicio.seccion1_titulo.zh : '';
            this.data.seccion_1_parrafo=  typeof inicio.seccion_1_parrafo === 'object' ? inicio.seccion_1_parrafo.es : '';
            this.data.seccion_1_parrafo_zh=  typeof inicio.seccion_1_parrafo === 'object' ? inicio.seccion_1_parrafo.zh : '';

            this.data.seccion1_logo1= inicio.seccion1_logo1;
            this.data.seccion1_logo2= inicio.seccion1_logo2;
            this.data.seccion1_logo3= inicio.seccion1_logo3;
            this.data.seccion2_imagen_fondo=  inicio.seccion2_imagen_fondo;

            this.data.seccio2_titulo=  typeof inicio.seccio2_titulo === 'object' ? inicio.seccio2_titulo.es : '';
            this.data.seccio2_titulo_zh=  typeof inicio.seccio2_titulo === 'object' ? inicio.seccio2_titulo.zh : '';
            this.data.seccion_2_parrafo=  typeof inicio.seccion_2_parrafo === 'object' ? inicio.seccion_2_parrafo.es : '';
            this.data.seccion_2_parrafo_zh=  typeof inicio.seccion_2_parrafo === 'object' ? inicio.seccion_2_parrafo.zh : '';
            this.data.seccion3_titulo=  typeof inicio.seccion3_titulo === 'object' ? inicio.seccion3_titulo.es : '';
            this.data.seccion3_titulo_zh=  typeof inicio.seccion3_titulo === 'object' ? inicio.seccion3_titulo.zh : '';
            this.data.seccion3_parrafo=  typeof inicio.seccion3_parrafo === 'object' ? inicio.seccion3_parrafo.es : '';
            this.data.seccion3_parrafo_zh=  typeof inicio.seccion3_parrafo === 'object' ? inicio.seccion3_parrafo.zh : '';

            this.data.seccion3_imagen= inicio.seccion3_imagen;

            this.data.seccion4_titulo=  typeof inicio.seccion4_titulo === 'object' ? inicio.seccion4_titulo.es : '';
            this.data.seccion4_titulo_zh= typeof inicio.seccion4_titulo === 'object' ? inicio.seccion4_titulo.zh : '';

            this.data.seccion4_imagen_fondo=  inicio.seccion4_imagen_fondo;
          }
           
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
          
        },

        created() { 
            this.loadInicio();
            Fire.$on('AfterCreatedInicioLoadIt',()=>{ //custom events fire on
                this.loadInicio();
                
            });
        }
    }
</script> 