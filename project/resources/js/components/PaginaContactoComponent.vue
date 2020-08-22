
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pagina Contacto</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updatePaginaContacto" enctype="multipart/form-data" id='form'>
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
                        <label>Ciudad 1</label>
                        <input v-model="form.ciudad1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad1" :class="{ 'is-invalid': form.errors.has('ciudad1') }">
                        <has-error :form="form" field="ciudad1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Direccion 1</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion1') }" tag-name="textarea"  :editor="editor" v-model="form.direccion1" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Telefono 1</label>
                        <input v-model="form.telefonos1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos1" :class="{ 'is-invalid': form.errors.has('telefonos1') }">
                        <has-error :form="form" field="telefonos1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Coordenadas 1</label>
                        <input v-model="form.coordenadas1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="coordenadas1" :class="{ 'is-invalid': form.errors.has('coordenadas1') }">
                        <has-error :form="form" field="coordenadas1"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Ciudad 2</label>
                        <input v-model="form.ciudad2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="ciudad2" :class="{ 'is-invalid': form.errors.has('ciudad2') }">
                        <has-error :form="form" field="ciudad2"></has-error>
                  </div>


                  <div class="form-group">
                        <label>Direccion 2</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('direccion2') }" tag-name="textarea"  :editor="editor" v-model="form.direccion2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="direccion2"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Telefono 2</label>
                        <input v-model="form.telefonos2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos2" :class="{ 'is-invalid': form.errors.has('telefonos2') }">
                        <has-error :form="form" field="telefonos2"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Coordenadas 2</label>
                        <input v-model="form.coordenadas2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="coordenadas2" :class="{ 'is-invalid': form.errors.has('coordenadas2') }">
                        <has-error :form="form" field="coordenadas2"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Contacto Titulo</label>
                        <input v-model="form.contacto_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="contacto_titulo" :class="{ 'is-invalid': form.errors.has('contacto_titulo') }">
                        <has-error :form="form" field="contacto_titulo"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Contacto Descripcion</label>
                        <!--<textarea v-model="form.seccion1_parrafo" class="form-control" rows="3" placeholder="Enter ..." :class="{ 'is-invalid': form.errors.has('seccion1_parrafo') }"></textarea>-->
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('contacto_descripcion') }" tag-name="textarea"  :editor="editor" v-model="form.contacto_descripcion" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="contacto_descripcion"></has-error>
                  </div>

                  <h3 style="margin-top: 30px">Seccion 2</h3>

                  <div class="form-group">
                        <label>Comercio Exterior</label>
                        <input v-model="form.comercio_exterior" type="text" class="form-control" placeholder="Ingrese el Titulo" name="comercio_exterior" :class="{ 'is-invalid': form.errors.has('comercio_exterior') }">
                        <has-error :form="form" field="comercio_exterior"></has-error>
                  </div>

                  <div class="form-group">
                        <label>Area Comercial</label>
                        <input v-model="form.area_comercial" type="text" class="form-control" placeholder="Ingrese el Titulo" name="area_comercial" :class="{ 'is-invalid': form.errors.has('area_comercial') }">
                        <has-error :form="form" field="area_comercial"></has-error>
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
                    'ciudad1' : '',
                    'direccion1' : '',
                    'ciudad1_zh' : '',
                    'direccion1_zh' : '',
                    'telefonos1' : '',
                    'ciudad2' : '',
                    'direccion2' : '',
                    'ciudad2_zh' : '',
                    'direccion2_zh' : '',
                    'telefonos2' : '',
                    'contacto_titulo' : '',
                    'contacto_descripcion' : '',
                    'contacto_titulo_zh' : '',
                    'contacto_descripcion_zh' : '',
                    'comercio_exterior' : '',
                    'area_comercial' : '',
                    'coordenadas1' : '',
                    'coordenadas2' : '',

                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(paginacontacto){
        	if(paginacontacto){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= paginacontacto.id;
    				this.form.encabezado_imagen_fondo = paginacontacto.encabezado_imagen_fondo;

    				this.form.ciudad1= typeof paginacontacto.ciudad1 === 'object' ? paginacontacto.ciudad1.es : '';
    				this.form.direccion1= typeof paginacontacto.direccion1 === 'object' ? paginacontacto.direccion1.es : '';
            this.form.ciudad1_zh= typeof paginacontacto.ciudad1 === 'object' ? paginacontacto.ciudad1.zh : '';
            this.form.direccion1_zh= typeof paginacontacto.direccion1 === 'object' ? paginacontacto.direccion1.zh : '';

            this.form.ciudad2= typeof paginacontacto.ciudad2 === 'object' ? paginacontacto.ciudad2.es : '';
            this.form.direccion2= typeof paginacontacto.direccion2 === 'object' ? paginacontacto.direccion2.es : '';
            this.form.ciudad2_zh= typeof paginacontacto.ciudad2 === 'object' ? paginacontacto.ciudad2.zh : '';
            this.form.direccion2_zh= typeof paginacontacto.direccion2 === 'object' ? paginacontacto.direccion2.zh : '';

            this.form.contacto_titulo= typeof paginacontacto.contacto_titulo === 'object' ? paginacontacto.contacto_titulo.es : '';
            this.form.contacto_descripcion= typeof paginacontacto.contacto_descripcion === 'object' ? paginacontacto.contacto_descripcion.es : '';
            this.form.contacto_titulo_zh= typeof paginacontacto.contacto_titulo === 'object' ? paginacontacto.contacto_titulo.zh : '';
            this.form.contacto_descripcion_zh= typeof paginacontacto.contacto_descripcion === 'object' ? paginacontacto.contacto_descripcion.zh : '';

            this.form.telefonos1 = paginacontacto.telefonos1;
            this.form.telefonos2 = paginacontacto.telefonos2;
            this.form.comercio_exterior = paginacontacto.comercio_exterior;
            this.form.area_comercial = paginacontacto.area_comercial;
            this.form.coordenadas1 = paginacontacto.coordenadas1;
            this.form.coordenadas2 = paginacontacto.coordenadas2;


        	}

        },
        loadPaginaContacto() {

          axios.get("api/paginacontacto").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updatePaginaContacto(event){
        	if(!this.editMode)
	        	return this.createPaginaContacto(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
           formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('contacto_descripcion',this.form.contacto_descripcion);
            formData.append('contacto_descripcion_zh',this.form.contacto_descripcion_zh);

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/paginacontacto/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedPaginaContactoLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Pagina Contacto Actualizada con Exito'
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

        createPaginaContacto(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
            formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('contacto_descripcion',this.form.contacto_descripcion);
            formData.append('contacto_descripcion_zh',this.form.contacto_descripcion_zh);

            axios.post('api/paginacontacto',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedPaginaContactoLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Pagina Contacto Actualizada con Exito'
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
            this.loadPaginaContacto();
            Fire.$on('AfterCreatedPaginaContactoLoadIt',()=>{ //custom events fire on
                this.loadPaginaContacto();
                
            });
        }
    }
</script> 