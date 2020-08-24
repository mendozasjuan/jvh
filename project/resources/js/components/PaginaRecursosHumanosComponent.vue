
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Recursos Humanos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updatePaginaRecursosHumanos" enctype="multipart/form-data" id='form'>
                <div class="card-body">
                  <h3>Encabezado</h3>
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

                  </div>

                  <h3 style="margin-top: 30px">Seccion 1</h3>

                  <div class="form-group">
                        <label>Titulo (Español)</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="seccion1_titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Titulo (Chino)</label>
                        <input v-model="form.seccion1_titulo_zh" type="text" class="form-control" placeholder="Ingrese el Titulo" name="seccion1_titulo_zh" :class="{ 'is-invalid': form.errors.has('seccion1_titulo_zh') }">
                        <has-error :form="form" field="seccion1_titulo_zh"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Parrafo (Español)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }" tag-name="textarea"  :editor="editor" v-model="form.seccion1_parrafo" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Parrafo (Chino)</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('seccion1_parrafo_zh') }" tag-name="textarea"  :editor="editor" v-model="form.seccion1_parrafo_zh" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="seccion1_parrafo_zh"></has-error>
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
                    seccion1_titulo: '',
                    seccion1_titulo_zh: '',
                    seccion1_parrafo: '',
                    seccion1_parrafo_zh: '',

                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(paginarecursoshumanos){
        	if(paginarecursoshumanos){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= paginarecursoshumanos.id;
    				this.form.encabezado_imagen_fondo = paginarecursoshumanos.encabezado_imagen_fondo;

    				this.form.seccion1_titulo= typeof paginarecursoshumanos.seccion1_titulo === 'object' ? paginarecursoshumanos.seccion1_titulo.es : '';
    				this.form.seccion1_titulo_zh= typeof paginarecursoshumanos.seccion1_titulo === 'object' ? paginarecursoshumanos.seccion1_titulo.zh : '';

            this.form.seccion1_parrafo= typeof paginarecursoshumanos.seccion1_parrafo === 'object' ? paginarecursoshumanos.seccion1_parrafo.es : '';
            this.form.seccion1_parrafo_zh= typeof paginarecursoshumanos.seccion1_parrafo === 'object' ? paginarecursoshumanos.seccion1_parrafo.zh : '';


        	}

        },
        loadPaginaRecursosHumanos() {

          axios.get("api/paginarecursoshumanos").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updatePaginaRecursosHumanos(event){
        	if(!this.editMode)
	        	return this.createPaginaRecursosHumanos(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
           formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
            formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/paginarecursoshumanos/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedPaginaRecursosHumanosLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Recursos Humanos Actualizada con Exito'
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

        createPaginaRecursosHumanos(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
            formData.append('seccion1_parrafo',this.form.seccion1_parrafo);
            formData.append('seccion1_parrafo_zh',this.form.seccion1_parrafo_zh);

            axios.post('api/paginarecursoshumanos',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedPaginaRecursosHumanosLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Recursos Humanos Actualizada con Exito'
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
            this.loadPaginaRecursosHumanos();
            Fire.$on('AfterCreatedPaginaRecursosHumanosLoadIt',()=>{ //custom events fire on
                this.loadPaginaRecursosHumanos();
                
            });
        }
    }
</script> 