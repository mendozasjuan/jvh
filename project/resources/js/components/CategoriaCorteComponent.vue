
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categorias de Corte</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew" @click="openModalWindow">Nueva Categoria de Corte<i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
             
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Accion</th>
                  </tr> 

                  <tr v-for="categoria in categorias.data" :key="categoria.id">
                    <td>{{ categoria.id }}</td>
                    <td>{{ categoria.categoria }}</td>

                    <td>
                        <a href="#" data-id="categoria.id" @click="editModalWindow(categoria)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        |
                        <a href="#" @click="deleteCategoria(categoria.id)">
                            <i class="fa fa-trash red"></i>
                        </a>

                    </td>
                  </tr>
                </tbody></table>
              </div>
            
              <div class="card-footer">
                 
              </div>
            </div>
           
          </div>
        </div>


            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">

                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Nueva Categoria</h5>
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Editar Categoria</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

<form @submit.prevent="editMode ? updateCategoria() : createCategoria()">
<div class="modal-body">
     <div class="form-group">
        <input v-model="form.categoria" type="text" name="categoria"
            placeholder="Categoria"
            class="form-control" :class="{ 'is-invalid': form.errors.has('categoria') }">
        <has-error :form="form" field="categoria"></has-error>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    <button v-show="editMode" type="submit" class="btn btn-primary">Actualizar</button>
    <button v-show="!editMode" type="submit" class="btn btn-primary">Crear</button>
</div>

</form>

                </div>
            </div>
            </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                editMode: false,
                categorias: {},
                form: new Form({
                    id: '',
                    categoria : '',
                })
            }
        },
        methods: {
        
        editModalWindow(categoria){
           this.form.clear();
           this.editMode = true
           this.form.reset();
           $('#addNew').modal('show');
           this.form.fill(categoria)
        },
        updateCategoria(){
           this.form.put('api/categorias-corte/'+this.form.id)
               .then(()=>{

                   Toast.fire({
                      icon: 'success',
                      title: 'Categoria Actualizada con Exito'
                    })

                    Fire.$emit('AfterCreatedCategoriaLoadIt');

                    $('#addNew').modal('hide');
               })
               .catch(()=>{
                  console.log("Error.....")
               })
        },
        openModalWindow(){
           this.editMode = false
           this.form.reset();
           $('#addNew').modal('show');
        },

        loadCategorias() {

        	axios.get("api/categorias-corte").then( data => (this.categorias = data.data));
          //pick data from controller and push it into users object

        },

        createCategoria(){

            this.$Progress.start()

            this.form.post('api/categorias-corte')
                .then(() => {
                   
                    Fire.$emit('AfterCreatedCategoriaLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Categoria Creada con Exito'
                        })

                        this.$Progress.finish()

                        $('#addNew').modal('hide');

                })
                .catch(() => {
                   console.log("Error......")
                })

     

            //this.loadUsers();
          },
          deleteCategoria(id) {
          	this.$Progress.start()
            Swal.fire({
              title: 'Estas Segur@?',
              text: "Esta accion no se puede deshacer!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Eliminarlo!'
            }).then((result) => {
                
              if (result.value) {
                //Send Request to server
                this.form.delete('api/categorias-corte/'+id)
                    .then(()=> {
                    	Fire.$emit('AfterCreatedCategoriaLoadIt');
                            Swal.fire(
                              'Eliminada!',
                              'Categoria Eliminada con Exito',
                              'success'
                            )
                    
                    this.$Progress.finish();

                    }).catch(() => {
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Ha ocurrido un Error!',
                          footer: '<a href>Why do I have this issue?</a>'
                        })
                        this.$Progress.fail();
                    })
                }

            })
          }
        },

        created() { 
            this.loadCategorias();

            Fire.$on('AfterCreatedCategoriaLoadIt',()=>{ //custom events fire on
                this.loadCategorias();
            });

        }
    }
</script> 