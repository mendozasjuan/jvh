
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Productos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updatePaginaProductos" enctype="multipart/form-data" id='form'>
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
                        <label>Titulo</label>
                        <input v-model="form.seccion1_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="seccion1_titulo" :class="{ 'is-invalid': form.errors.has('seccion1_titulo') }">
                        <has-error :form="form" field="seccion1_titulo"></has-error>
                  </div>

                  <div class="form-group">
                      <label for="seccion1_imagen">Imagen</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="seccion1_imagen" name="seccion1_imagen" v-on:change="onUploadImage">

                          <label class="custom-file-label" for="seccion1_imagen">Seleccione un Archivo</label>
                          
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                      <figure>
                        <img class="miniatura img-fluid" :src="form.seccion1_imagen ? form.seccion1_imagen : ''"/>
                      </figure>

                  </div>

                  <div class="form-group">
                      <label for="seccion1_imagen_fondo">Imagen de Fondo Seccion 1</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="seccion1_imagen_fondo" name="seccion1_imagen_fondo" v-on:change="onUploadImage">

                          <label class="custom-file-label" for="seccion1_imagen_fondo">Seleccione un Archivo</label>
                          
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                      <figure>
                        <img class="miniatura img-fluid" :src="form.seccion1_imagen_fondo ? form.seccion1_imagen_fondo : ''"/>
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
                    seccion1_titulo: '',
                    seccion1_titulo_zh: '',
                    seccion1_imagen: '',
                    seccion1_imagen_fondo: '',
                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(paginaproductos){
        	if(paginaproductos){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= paginaproductos.id;
    				this.form.encabezado_imagen_fondo = paginaproductos.encabezado_imagen_fondo;
    				this.form.logo_1_encabezado= paginaproductos.logo_1_encabezado;
    				this.form.logo_2_encabezado= paginaproductos.logo_2_encabezado;

    				this.form.seccion1_titulo= typeof paginaproductos.seccion1_titulo === 'object' ? paginaproductos.seccion1_titulo.es : '';
    				this.form.seccion1_titulo_zh= typeof paginaproductos.seccion1_titulo === 'object' ? paginaproductos.seccion1_titulo.zh : '';
            this.form.seccion1_imagen= paginaproductos.seccion1_imagen;
            this.form.seccion1_imagen_fondo= paginaproductos.seccion1_imagen_fondo;


        	}

        },
        loadPaginaProductos() {

          axios.get("api/paginaproductos").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updatePaginaProductos(event){
        	if(!this.editMode)
	        	return this.createPaginaProductos(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/paginaproductos/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedPaginaProductosLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Productos Actualizada con Exito'
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

              if(this.idElement.id == 'seccion1_imagen'){
                this.form.seccion1_imagen = this.picFile
                console.log(this.form.seccion1_imagen);
              }
              
              if(this.idElement.id == 'seccion1_imagen_fondo'){
                this.form.seccion1_imagen_fondo = this.picFile
                console.log(this.form.seccion1_imagen_fondo);
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

        createPaginaProductos(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)

            axios.post('api/paginaproductos',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedPaginaProductosLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Productos Actualizada con Exito'
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
            this.loadPaginaProductos();
            Fire.$on('AfterCreatedPaginaProductosLoadIt',()=>{ //custom events fire on
                this.loadPaginaProductos();
                
            });
        }
    }
</script> 