
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Impacto Social</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateImpactoSocial" enctype="multipart/form-data" id='form'>
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
                      <img class="miniatura img-fluid" :src="form.encabezado_imagen_fondo ? this.imagesRootPath+form.encabezado_imagen_fondo : ''"/>
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
                      <img class="miniatura img-fluid" :src="this.imagesRootPath+form.logo_2_encabezado"/>
                    </figure>
                  </div>
                  <div class="form-group">
                        <label>Texto</label>
                        <input v-model="form.texto_encabezado" type="text" class="form-control" name="texto_encabezado" placeholder="Ingrese Texto" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }">
                        <!--<ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea" name="texto_encabezado" :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" name="texto_encabezado_habilitado" class="form-check-input" id="texto_encabezado_habilitado" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="texto_encabezado_habilitado">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" name="seccion1_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 1</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccion1_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion1_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo2"></has-error>
                  </div>
                  

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Titulo</label>
                        <input v-model="form.seccion2_titulo" type="text" class="form-control" name="seccion2_titulo" placeholder="Ingrese Titulo" :class="{ 'is-invalid': form.errors.has('seccion2_titulo') }">
                        <has-error :form="form" field="seccion2_titulo"></has-error>
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
                      <img class="miniatura img-fluid" :src="this.imagesRootPath+form.seccion2_imagen_fondo"/>
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
                imagesRootPath: this.$imagesRootPath,
                form: new Form({
                    id: '',
                    encabezado_imagen_fondo : '',
                    logo_1_encabezado: '',
                    logo_2_encabezado: '',
                    texto_encabezado: '',
                    texto_encabezado_zh: '',
                    texto_encabezado_habilitado: '',
                    seccion1_titulo: '',
                    seccion1_parrafo1: '',
                    seccion1_parrafo2: '',
                    seccion2_titulo: '',
                    seccion1_titulo_zh: '',
                    seccion1_parrafo1_zh: '',
                    seccion1_parrafo2_zh: '',
                    seccion2_titulo_zh: '',
                    seccion2_imagen_fondo: '',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(impactosocial){
        	if(impactosocial){
        		this.editMode = true;
        		this.form.clear();
				this.form.reset();

				this.form.id= impactosocial.id;
				this.form.encabezado_imagen_fondo = impactosocial.encabezado_imagen_fondo;
				this.form.logo_1_encabezado= impactosocial.logo_1_encabezado;
				this.form.logo_2_encabezado= impactosocial.logo_2_encabezado;

				this.form.texto_encabezado= typeof impactosocial.texto_encabezado === 'object' ? impactosocial.texto_encabezado.es : '';
				this.form.texto_encabezado_zh= typeof impactosocial.texto_encabezado === 'object' ? impactosocial.texto_encabezado.zh : '';

				this.form.texto_encabezado_habilitado= impactosocial.texto_encabezado_habilitado;

				this.form.seccion1_titulo= typeof impactosocial.seccion1_titulo === 'object' ? impactosocial.seccion1_titulo.es : '';
				this.form.seccion1_parrafo1 = typeof impactosocial.seccion1_parrafo1 === 'object' ? impactosocial.seccion1_parrafo1.es : '';
				this.form.seccion1_parrafo2= typeof impactosocial.seccion1_parrafo2 === 'object' ? impactosocial.seccion1_parrafo2.es : '';
				this.form.seccion2_titulo= typeof impactosocial.seccion2_titulo === 'object' ? impactosocial.seccion2_titulo.es : '';

				this.form.seccion1_titulo_zh= typeof impactosocial.seccion1_titulo === 'object' ? impactosocial.seccion1_titulo.zh : '';
				this.form.seccion1_parrafo1_zh = typeof impactosocial.seccion1_parrafo1 === 'object' ? impactosocial.seccion1_parrafo1.ezh: '';
				this.form.seccion1_parrafo2_zh= typeof impactosocial.seccion1_parrafo2 === 'object' ? impactosocial.seccion1_parrafo2.zh : '';
				this.form.seccion2_titulo_zh= typeof impactosocial.seccion2_titulo === 'object' ? impactosocial.seccion2_titulo.zh : '';

				this.form.seccion2_imagen_fondo= impactosocial.seccion2_imagen_fondo;
        	}

        },
        loadImpactoSocial() {
          axios.get("api/impactosocial").then( data => (this.editWindow(data.data)));
        },
        updateImpactoSocial(event){
        	if(!this.editMode)
	        	return this.createImpactoSocial(event);
	        let formData =  new FormData(event.target)
			formData.append('seccion1_parrafo1',this.form.seccion1_parrafo1);
			formData.append('seccion1_parrafo2',this.form.seccion1_parrafo2);
			formData.append('seccion1_parrafo1_zh',this.form.seccion1_parrafo1_zh);
			formData.append('seccion1_parrafo2_zh',this.form.seccion1_parrafo2_zh);

			formData.append('_method', 'PUT');

           this.$Progress.start()
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/impactosocial/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedImpactoSocialLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Impacto Social Actualizada con Exito'
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

        createImpactoSocial(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
			formData.append('seccion1_parrafo1',this.form.seccion1_parrafo1);
			formData.append('seccion1_parrafo2',this.form.seccion1_parrafo2);
			formData.append('seccion1_parrafo1_zh',this.form.seccion1_parrafo1_zh);
			formData.append('seccion1_parrafo2_zh',this.form.seccion1_parrafo2_zh);

            axios.post('api/impactosocial',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedImpactoSocialLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Impacto Social Actualizada con Exito'
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
            this.loadImpactoSocial();
            Fire.$on('AfterCreatedImpactoSocialLoadIt',()=>{ //custom events fire on
                this.loadImpactoSocial();
                
            });
        }
    }
</script> 