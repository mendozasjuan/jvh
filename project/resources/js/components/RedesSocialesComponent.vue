
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Redes Sociales</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateRedesSociales" enctype="multipart/form-data" id='form'>
                <div class="card-body">

                  <div class="form-group">
                        <label>Linkedin</label>
                        <input v-model="form.linkedin" type="text" class="form-control" placeholder="Ingrese el Link" name="linkedin" :class="{ 'is-invalid': form.errors.has('linkedin') }">
                        <has-error :form="form" field="linkedin"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Instagram</label>
                        <input v-model="form.instagram" type="text" class="form-control" placeholder="Ingrese el Link" name="instagram" :class="{ 'is-invalid': form.errors.has('instagram') }">
                        <has-error :form="form" field="instagram"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Facebook</label>
                        <input v-model="form.facebook" type="text" class="form-control" placeholder="Ingrese el Link" name="facebook" :class="{ 'is-invalid': form.errors.has('facebook') }">
                        <has-error :form="form" field="facebook"></has-error>
                  </div>
                  <div class="form-group">
                        <label>Youtube</label>
                        <input v-model="form.youtube" type="text" class="form-control" placeholder="Ingrese el Link" name="youtube" :class="{ 'is-invalid': form.errors.has('youtube') }">
                        <has-error :form="form" field="youtube"></has-error>
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
                    linkedin : '',
                    instagram : '',
                    facebook : '',
                    youtube : '',

                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(redessociales){
        	if(redessociales){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= redessociales.id;

            this.form.linkedin = redessociales.linkedin;
            this.form.instagram = redessociales.instagram;
            this.form.facebook = redessociales.facebook;
            this.form.youtube = redessociales.youtube;


        	}

        },
        loadRedesSociales() {

          axios.get("api/redessociales").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateRedesSociales(event){
        	if(!this.editMode)
	        	return this.createRedesSociales(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/redessociales/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedRedesSocialesLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Redes Sociales Actualizadas con Exito'
                    })

                    this.$Progress.finish()
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },

        createRedesSociales(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)

            axios.post('api/redessociales',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedRedesSocialesLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Redes Sociales Actualizadas con Exito'
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
            this.loadRedesSociales();
            Fire.$on('AfterCreatedRedesSocialesLoadIt',()=>{ //custom events fire on
                this.loadRedesSociales();
                
            });
        }
    }
</script> 