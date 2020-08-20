
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
              <form role="form" @submit.prevent="updateQuienesSomos" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
                    <div class="form-group">
                    <label for="encabezado_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="encabezado_imagen_fondo" name="encabezado_imagen_fondo" v-on:change="onUploadImage">

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
                        <input type="file" class="custom-file-input" id="logo_1_encabezado" name="logo_1_encabezado" v-on:change="onUploadImage">
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
                        <input type="file" class="custom-file-input" id="logo_2_encabezado" name="logo_2_encabezado" v-on:change="onUploadImage">
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
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('texto_encabezado') }" tag-name="textarea"  :editor="editor" v-model="form.texto_encabezado" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.texto_encabezado" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('texto_encabezado') }"></textarea>-->
                        <has-error :form="form" field="texto_encabezado"></has-error>
                  </div>
                  <div class="form-check">
                    <input v-model="form.texto_encabezado_habilitado" type="checkbox" class="form-check-input" name="texto_encabezado_habilitado" id="exampleCheck1" :class="{ 'is-invalid': form.errors.has('texto_encabezado_habilitado') }">
                    <label class="form-check-label" for="exampleCheck1">Habilitar Texto en Encabezado</label>
                    <has-error :form="form" field="texto_encabezado_habilitado"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Parrafo 1</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo1" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo1') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo2" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo2') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 3</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo3" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo3') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                    <label>Parrafo 4</label>
                    <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }" tag-name="textarea"  :editor="editor" v-model="form.seccio1_parrafo4" :config="editorConfig"></ckeditor>
                        <!--<textarea v-model="form.seccio1_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccio1_parrafo4') }"></textarea>-->
                        <has-error :form="form" field="seccio1_parrafo4"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion1_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion1_imagen_fondo" name="seccion1_imagen_fondo" v-on:change="onUploadImage">
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
                        <input v-model="form.seccion2_titulo" type="text" class="form-control" name="seccion2_titulo" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_titulo') }">
                        <has-error :form="form" field="seccion2_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo</label>
                        <!--<textarea v-model="form.seccion2_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion2_parrafo') }" tag-name="textarea"  :editor="editor" v-model="form.seccion2_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion2_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion2_imagen_fondo">Imagen de Fondo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion2_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
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
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <!--<textarea v-model="form.seccion3_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion3_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion3_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion3_parrafo2"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 4</h3>

                  <div class="form-group">
                        <label>Parrafo 1</label>
                        <!--<textarea v-model="form.seccion4_parrafo1" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo1') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo1"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 2</label>
                        <!--<textarea v-model="form.seccion4_parrafo2" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo2') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo2"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 3</label>
                        <!--<textarea v-model="form.seccion4_parrafo3" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo3') }" tag-name="textarea"  :editor="editor" v-model="form.seccion4_parrafo3" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo3"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo 4</label>
                        <!--<textarea v-model="form.seccion4_parrafo4" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion4_parrafo4') }" tag-name="textarea" :editor="editor" v-model="form.seccion4_parrafo4" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion4_parrafo4"></has-error>
                  </div>
                  <div class="form-group">
                    <label for="seccion4_imagen_fondo">Imagen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="seccion4_imagen_fondo" name="seccion2_imagen_fondo" v-on:change="onUploadImage">
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
                    texto_encabezado_zh: '',
                    texto_encabezado_habilitado: '',
                    seccio1_parrafo1: '',
                    seccio1_parrafo2: '',
                    seccio1_parrafo3: '',
                    seccio1_parrafo4: '',
                    seccio1_parrafo1_zh: '',
                    seccio1_parrafo2_zh: '',
                    seccio1_parrafo3_zh: '',
                    seccio1_parrafo4_zh: '',
                    seccion1_imagen_fondo: '',
                    seccion2_titulo:'',
                    seccion2_parrafo:'',
                    seccion2_titulo_zh:'',
                    seccion2_parrafo_zh:'',
                    seccion2_imagen_fondo: '',
                    seccion3_parrafo1: '',
                    seccion3_parrafo2: '',
                    seccion3_parrafo1_zh: '',
                    seccion3_parrafo2_zh: '',
                    seccion4_parrafo1: '',
                    seccion4_parrafo2:'',
                    seccion4_parrafo3:'',
                    seccion4_parrafo4:'',
                    seccion4_parrafo1_zh: '',
                    seccion4_parrafo2_zh:'',
                    seccion4_parrafo3_zh:'',
                    seccion4_parrafo4_zh:'',
                    seccion4_imagen_fondo:'',

                })
            }
        },
        methods: {
        
        editWindow(quienessomos){
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

                this.form.texto_encabezado_habilitado= quienessomos.texto_encabezado_habilitado;

                this.form.seccio1_parrafo1= typeof quienessomos.seccio1_parrafo1 === 'object' ? quienessomos.seccio1_parrafo1.es : '';
                this.form.seccio1_parrafo2= typeof quienessomos.seccio1_parrafo2 === 'object' ? quienessomos.seccio1_parrafo2.es : '';
                this.form.seccio1_parrafo3= typeof quienessomos.seccio1_parrafo3 === 'object' ? quienessomos.seccio1_parrafo3.es : '';
                this.form.seccio1_parrafo4= typeof quienessomos.seccio1_parrafo4 === 'object' ? quienessomos.seccio1_parrafo4.es : '';
                this.form.seccio1_parrafo1_zh= typeof quienessomos.seccio1_parrafo1 === 'object' ? quienessomos.seccio1_parrafo1.zh : '';
                this.form.seccio1_parrafo2_zh= typeof quienessomos.seccio1_parrafo2 === 'object' ? quienessomos.seccio1_parrafo2.zh : '';
                this.form.seccio1_parrafo3_zh= typeof quienessomos.seccio1_parrafo3 === 'object' ? quienessomos.seccio1_parrafo3.zh : '';
                this.form.seccio1_parrafo4_zh= typeof quienessomos.seccio1_parrafo4 === 'object' ? quienessomos.seccio1_parrafo4.zh : '';

                this.form.seccion1_imagen_fondo= quienessomos.seccion1_imagen_fondo;

                this.form.seccion2_titulo=typeof quienessomos.seccion2_titulo === 'object' ? quienessomos.seccion2_titulo.es : '';
                this.form.seccion2_parrafo=typeof quienessomos.seccion2_parrafo === 'object' ? quienessomos.seccion2_parrafo.es : '';
                this.form.seccion2_titulo_zh=typeof quienessomos.seccion2_titulo === 'object' ? quienessomos.seccion2_titulo.zh : '';
                this.form.seccion2_parrafo_zh=typeof quienessomos.seccion2_parrafo === 'object' ? quienessomos.seccion2_parrafo.zh : '';

                this.form.seccion2_imagen_fondo= quienessomos.seccion2_imagen_fondo;

                this.form.seccion3_parrafo1= typeof quienessomos.seccion3_parrafo1 === 'object' ? quienessomos.seccion3_parrafo1.es : '';
                this.form.seccion3_parrafo2= typeof quienessomos.seccion3_parrafo2 === 'object' ? quienessomos.seccion3_parrafo2.es : '';
                this.form.seccion3_parrafo1_zh= typeof quienessomos.seccion3_parrafo1 === 'object' ? quienessomos.seccion3_parrafo1.zh : '';
                this.form.seccion3_parrafo2_zh= typeof quienessomos.seccion3_parrafo2 === 'object' ? quienessomos.seccion3_parrafo2.zh : '';
                this.form.seccion4_parrafo1= typeof quienessomos.seccion4_parrafo1 === 'object' ? quienessomos.seccion4_parrafo1.es : '';
                this.form.seccion4_parrafo2=typeof quienessomos.seccion4_parrafo2 === 'object' ? quienessomos.seccion4_parrafo2.es : '';
                this.form.seccion4_parrafo3=typeof quienessomos.seccion4_parrafo3 === 'object' ? quienessomos.seccion4_parrafo3.es : '';
                this.form.seccion4_parrafo4=typeof quienessomos.seccion4_parrafo4 === 'object' ? quienessomos.seccion4_parrafo4.es : '';
                this.form.seccion4_parrafo1_zh= typeof quienessomos.seccion4_parrafo1 === 'object' ? quienessomos.seccion4_parrafo1.zh : '';
                this.form.seccion4_parrafo2_zh=typeof quienessomos.seccion4_parrafo2 === 'object' ? quienessomos.seccion4_parrafo2.zh : '';
                this.form.seccion4_parrafo3_zh=typeof quienessomos.seccion4_parrafo3 === 'object' ? quienessomos.seccion4_parrafo3.zh : '';
                this.form.seccion4_parrafo4_zh=typeof quienessomos.seccion4_parrafo4 === 'object' ? quienessomos.seccion4_parrafo4.zh : '';

                this.form.seccion4_imagen_fondo=quienessomos.seccion4_imagen_fondo;
        	}
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
			
			formData.append('seccio1_parrafo1',this.form.seccio1_parrafo1);
			formData.append('seccio1_parrafo2',this.form.seccio1_parrafo2);
			formData.append('seccio1_parrafo3',this.form.seccio1_parrafo3);
			formData.append('seccio1_parrafo4',this.form.seccio1_parrafo4);
			formData.append('seccio1_parrafo1_zh',this.form.seccio1_parrafo1_zh);
			formData.append('seccio1_parrafo2_zh',this.form.seccio1_parrafo2_zh);
			formData.append('seccio1_parrafo3_zh',this.form.seccio1_parrafo3_zh);
			formData.append('seccio1_parrafo4_zh',this.form.seccio1_parrafo4_zh);

			formData.append('seccion2_titulo',this.form.seccion2_titulo);
			formData.append('seccion2_parrafo',this.form.seccion2_parrafo);
			formData.append('seccion2_titulo_zh',this.form.seccion2_titulo_zh);
			formData.append('seccion2_parrafo_zh',this.form.seccion2_parrafo_zh);


			formData.append('seccion3_parrafo1',this.form.seccion3_parrafo1);
			formData.append('seccion3_parrafo2',this.form.seccion3_parrafo2);
			formData.append('seccion3_parrafo1_zh',this.form.seccion3_parrafo1_zh);
			formData.append('seccion3_parrafo2_zh',this.form.seccion3_parrafo2_zh);
			formData.append('seccion4_parrafo1',this.form.seccion4_parrafo1);
			formData.append('seccion4_parrafo2',this.form.seccion4_parrafo2);
			formData.append('seccion4_parrafo3',this.form.seccion4_parrafo3);
			formData.append('seccion4_parrafo4',this.form.seccion4_parrafo4);
			formData.append('seccion4_parrafo1_zh',this.form.seccion4_parrafo1_zh);
			formData.append('seccion4_parrafo2_zh',this.form.seccion4_parrafo2_zh);
			formData.append('seccion4_parrafo3_zh',this.form.seccion4_parrafo3_zh);
			formData.append('seccion4_parrafo4_zh',this.form.seccion4_parrafo4_zh);

             formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/quienessomos'+this.form.id,formData)
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
			
			formData.append('seccio1_parrafo1',this.form.seccio1_parrafo1);
			formData.append('seccio1_parrafo2',this.form.seccio1_parrafo2);
			formData.append('seccio1_parrafo3',this.form.seccio1_parrafo3);
			formData.append('seccio1_parrafo4',this.form.seccio1_parrafo4);
			formData.append('seccio1_parrafo1_zh',this.form.seccio1_parrafo1_zh);
			formData.append('seccio1_parrafo2_zh',this.form.seccio1_parrafo2_zh);
			formData.append('seccio1_parrafo3_zh',this.form.seccio1_parrafo3_zh);
			formData.append('seccio1_parrafo4_zh',this.form.seccio1_parrafo4_zh);

			formData.append('seccion2_titulo',this.form.seccion2_titulo);
			formData.append('seccion2_parrafo',this.form.seccion2_parrafo);
			formData.append('seccion2_titulo_zh',this.form.seccion2_titulo_zh);
			formData.append('seccion2_parrafo_zh',this.form.seccion2_parrafo_zh);


			formData.append('seccion3_parrafo1',this.form.seccion3_parrafo1);
			formData.append('seccion3_parrafo2',this.form.seccion3_parrafo2);
			formData.append('seccion3_parrafo1_zh',this.form.seccion3_parrafo1_zh);
			formData.append('seccion3_parrafo2_zh',this.form.seccion3_parrafo2_zh);
			formData.append('seccion4_parrafo1',this.form.seccion4_parrafo1);
			formData.append('seccion4_parrafo2',this.form.seccion4_parrafo2);
			formData.append('seccion4_parrafo3',this.form.seccion4_parrafo3);
			formData.append('seccion4_parrafo4',this.form.seccion4_parrafo4);
			formData.append('seccion4_parrafo1_zh',this.form.seccion4_parrafo1_zh);
			formData.append('seccion4_parrafo2_zh',this.form.seccion4_parrafo2_zh);
			formData.append('seccion4_parrafo3_zh',this.form.seccion4_parrafo3_zh);
			formData.append('seccion4_parrafo4_zh',this.form.seccion4_parrafo4_zh);

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
          
        },

        created() { 
            this.loadQuienesSomos();
            Fire.$on('AfterCreatedQuienesSomosLoadIt',()=>{ //custom events fire on
                this.loadQuienesSomos();
                
            });
        }
    }
</script> 