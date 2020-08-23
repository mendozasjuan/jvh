
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Logotipo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" @submit.prevent="updateLogo" enctype="multipart/form-data" id='form'>
                <div class="card-body">

                  <div class="form-group">
                    <label for="logo">Logotipo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo" v-on:change="onUploadImage">

                        <label class="custom-file-label" for="logo">Seleccione un Archivo</label>
                        
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    <figure>
                      <img class="miniatura img-fluid" :src="form.logo ? form.logo : '' "/>
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
                    logo : '',

                    _method:'',

                })
            }
        },
        methods: {
        
        editWindow(logo){
        	if(logo){
				    this.editMode = true
        		this.form.clear();
    				this.form.reset();

    				this.form.id= logo.id;

            this.form.logo = logo.logo;


        	}

        },
        loadLogo() {

          axios.get("api/logo").then( data => (this.editWindow(data.data)));
        
          //pick data from controller and push it into users object

        },
        updateLogo(event){
        	if(!this.editMode)
	        	return this.createLogo(event);


           this.$Progress.start()
           let formData =  new FormData(event.target)

			       formData.append('_method', 'PUT');
            //this.form.submit('put','api/inicio/'+this.form.id,{
              axios.post('api/logo/'+this.form.id,formData)
               .then(()=>{
                  Fire.$emit('AfterCreatedLogoLoadIt');

                   Toast.fire({
                      icon: 'success',
                      title: 'Logo Actualizado con Exito'
                    })

                    this.$Progress.finish()
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        }
        ,
        onUploadImage: function (event){
          if (event) {
            this.idElement = event.target
            this.picFile = this.idElement.files[0];
            $(this.idElement).next('.custom-file-label').html(this.picFile.name);
            this.cargarMiniatura(this.idElement,this.picFile);
            
          }
            if (this.picFile) {
              if(this.idElement.id == 'logo'){
                this.form.logo = this.picFile
                console.log(this.form.logo);
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

        createLogo(event){

            this.$Progress.start()
            let formData =  new FormData(event.target)

            axios.post('api/logo',formData)
                .then(() => {
                   
                    Fire.$emit('AfterCreatedLogoLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Logo Actualizado con Exito'
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
            this.loadLogo();
            Fire.$on('AfterCreatedLogoLoadIt',()=>{ //custom events fire on
                this.loadLogo();
                
            });
        }
    }
</script> 