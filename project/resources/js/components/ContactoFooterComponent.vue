
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Contacto Footer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateContactoFooter" enctype="multipart/form-data" id='form'>
                <div class="card-body">

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
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('telefonos1') }" tag-name="textarea"  :editor="editor" v-model="form.telefonos1" :config="editorConfig"></ckeditor>
                        <!--<input v-model="form.telefonos1" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos1" :class="{ 'is-invalid': form.errors.has('telefonos1') }">-->
                        <has-error :form="form" field="telefonos1"></has-error>
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
                        <ckeditor class="col-md-10 form-control" :class="{ 'is-invalid': form.errors.has('telefonos2') }" tag-name="textarea"  :editor="editor" v-model="form.telefonos2" :config="editorConfig"></ckeditor>
                        <has-error :form="form" field="telefonos2"></has-error>
                        <!--<input v-model="form.telefonos2" type="text" class="form-control" placeholder="Ingrese el Titulo" name="telefonos2" :class="{ 'is-invalid': form.errors.has('telefonos2') }">
                        <has-error :form="form" field="telefonos2"></has-error>-->
                  </div>


                  <div class="form-group">
                        <label>Contacto Titulo</label>
                        <input v-model="form.contacto_titulo" type="text" class="form-control" placeholder="Ingrese el Titulo" name="contacto_titulo" :class="{ 'is-invalid': form.errors.has('contacto_titulo') }">
                        <has-error :form="form" field="contacto_titulo"></has-error>
                  </div>


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
                    ciudad1 : '',
                    direccion1 : '',
                    ciudad1_zh : '',
                    direccion1_zh : '',
                    telefonos1 : '',
                    ciudad2 : '',
                    direccion2 : '',
                    ciudad2_zh : '',
                    direccion2_zh : '',
                    telefonos2 : '',
                    contacto_titulo : '',
                    contacto_titulo_zh : '',
                    comercio_exterior : '',
                    area_comercial : '',

                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(contactofooter){
        	if(contactofooter){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= contactofooter.id;

    				this.form.ciudad1= typeof contactofooter.ciudad1 === 'object' ? contactofooter.ciudad1.es : '';
    				this.form.direccion1= typeof contactofooter.direccion1 === 'object' ? contactofooter.direccion1.es : '';
            this.form.ciudad1_zh= typeof contactofooter.ciudad1 === 'object' ? contactofooter.ciudad1.zh : '';
            this.form.direccion1_zh= typeof contactofooter.direccion1 === 'object' ? contactofooter.direccion1.zh : '';

            this.form.ciudad2= typeof contactofooter.ciudad2 === 'object' ? contactofooter.ciudad2.es : '';
            this.form.direccion2= typeof contactofooter.direccion2 === 'object' ? contactofooter.direccion2.es : '';
            this.form.ciudad2_zh= typeof contactofooter.ciudad2 === 'object' ? contactofooter.ciudad2.zh : '';
            this.form.direccion2_zh= typeof contactofooter.direccion2 === 'object' ? contactofooter.direccion2.zh : '';

            this.form.contacto_titulo= typeof contactofooter.contacto_titulo === 'object' ? contactofooter.contacto_titulo.es : '';
            this.form.contacto_titulo_zh= typeof contactofooter.contacto_titulo === 'object' ? contactofooter.contacto_titulo.zh : '';

            this.form.telefonos1 = contactofooter.telefonos1;
            this.form.telefonos2 = contactofooter.telefonos2;
            this.form.comercio_exterior = contactofooter.comercio_exterior;
            this.form.area_comercial = contactofooter.area_comercial;


        	}

        },
        loadContactoFooter() {

          axios.get("api/contactofooter").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateContactoFooter(event){
        	if(!this.editMode)
	        	return this.createContactoFooter(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)
           formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('telefonos1',this.form.telefonos1);
            formData.append('telefonos2',this.form.telefonos2);

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/contactofooter/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedContactoFooterLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Contacto Footer Actualizado con Exito'
                    })

                    this.$Progress.finish()
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },

        createContactoFooter(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)
            formData.append('direccion1',this.form.direccion1);
            formData.append('direccion1_zh',this.form.direccion1_zh);
            formData.append('direccion2',this.form.direccion2);
            formData.append('direccion2_zh',this.form.direccion2_zh);
            formData.append('telefonos1',this.form.telefonos1);
            formData.append('telefonos2',this.form.telefonos2);

            axios.post('api/contactofooter',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedContactoFooterLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Contacto Footer Actualizado con Exito'
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
            this.loadContactoFooter();
            Fire.$on('AfterCreatedContactoFooterLoadIt',()=>{ //custom events fire on
                this.loadContactoFooter();
                
            });
        }
    }
</script> 