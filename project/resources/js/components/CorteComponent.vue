
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cortes</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew" @click="openModalWindow">Agregar Nuevo Corte <i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
             
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria de Corte</th>
                        <th>Tamaño de Caja</th>
                        <th>Accion</th>
                  </tr> 

                  <tr v-for="corte in cortes.data" :key="corte.id">
                    <td>{{ corte.id }}</td>
                    <td>{{ corte.nombre }}</td>
                    <td>{{ corte.descripcion }}</td>
                    <td>{{ corte.categoria.categoria }}</td>
                    <td>{{ corte.tamano_caja }}</td>

                    <td>
                        <a href="#" data-id="corte.id" @click="editModalWindow(corte)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        |
                        <a href="#" @click="deleteCorte(corte.id)">
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

                    <h5 v-show="!editMode" class="modal-title" id="addNewLabel">Nuevo Corte</h5>
                    <h5 v-show="editMode" class="modal-title" id="addNewLabel">Actualizar Corte</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              <form @submit.prevent="editMode ? updateCorte() : createCorte()" enctype="multipart/form-data" id='form'>
                <div class="modal-body">
                   <div class="form-group">
                        <input v-model="form.nombre" type="text" name="nombre"
                            placeholder="Nombre"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('nombre') }">
                        <has-error :form="form" field="nombre"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.descripcion" type="text" name="descripcion"
                            placeholder="Descripcion"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('descripcion') }">
                        <has-error :form="form" field="descripcion"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.tamano_caja" type="text" name="tamano_caja"
                            placeholder="Tamaño de Caja"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('tamano_caja') }">
                        <has-error :form="form" field="tamano_caja"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.medidas" type="text" name="medidas"
                            placeholder="Medidas"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('medidas') }">
                        <has-error :form="form" field="medidas"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.envasado" type="text" name="envasado"
                            placeholder="Envasado"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('envasado') }">
                        <has-error :form="form" field="envasado"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.piezas_por_caja" type="text" name="piezas_por_caja"
                            placeholder="Piezas por Caja"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('piezas_por_caja') }">
                        <has-error :form="form" field="piezas_por_caja"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.condiciones_termicas" type="text" name="condiciones_termicas"
                            placeholder="Condiciones Termicas"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('condiciones_termicas') }">
                        <has-error :form="form" field="condiciones_termicas"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.especificaciones" type="text" name="especificaciones"
                            placeholder="Especificaciones"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('especificaciones') }">
                        <has-error :form="form" field="especificaciones"></has-error>
                    </div>

                    <div class="form-group">
                        <select v-model="form.categoria_corte_id" name="categoria_corte_id">
                          <option value="" selected>Seleccione Una Categoria</option>
                          <option v-for="categoria in categorias.data" :key="categoria.id" :value="categoria.id" >{{ categoria.categoria }}</option>
                        </select>
                        <has-error :form="form" field="categoria_corte_id"></has-error>
                    </div>

                    <div class="form-group">
                        <label for="imagenCorte">Imagen Corte</label>
                        <input type="file" class="form-control" id="imagenCorte" ref="file" name="imagenCorte" v-on:change="onUploadImage" >
                    </div>

                    <div class="form-group">
                        <label for="imagenEtiquetado">Imagen Etiquetado</label>
                        <input type="file" class="form-control" id="imagenEtiquetado" ref="file" name="imagenEtiquetado" v-on:change="onUploadImage" >
                    </div>

                    <div class="form-group">
                        <label for="imagenPackaging">Imagen Packaging</label>
                        <input type="file" class="form-control" id="imagenPackaging" ref="file" name="imagenPackaging" v-on:change="onUploadImage" >
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button v-show="editMode" type="submit" class="btn btn-primary">Editar</button>
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
                cortes: {},
                categorias:{},
                picFile:'',
                idElement:'',
                form: new Form({
                    id: '',
                    nombre : '',
                    descripcion: '',
                    tamano_caja: '',
                    medidas: '',
                    envasado: '',
                    piezas_por_caja: '',
                    condiciones_termicas: '',
                    especificaciones: '',
                    categoria_corte_id: '',
                    imagen_corte: '',
                    imagen_etiquetado:'',
                    imagen_packaging:'',

                })
            }
        },
        methods: {
        
        editModalWindow(corte){
           this.form.clear();
           this.editMode = true
           this.form.reset();
           $('#addNew').modal('show');
           this.form.fill(corte)
        },
        updateCorte(){
           this.form.put('api/corte/'+this.form.id)
               .then(()=>{

                   Toast.fire({
                      icon: 'success',
                      title: 'Corte Actualizado con Exito'
                    })

                    Fire.$emit('AfterCreatedCorteLoadIt');

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

        loadCortes() {

          axios.get("api/corte").then( data => (this.cortes = data.data));

          //pick data from controller and push it into users object

        },
        loadCategorias() {

          axios.get("api/categorias-corte").then( data => (this.categorias = data.data));
          //pick data from controller and push it into users object

        },
        onUploadImage: function (event){
          if (event) {
            this.idElement = event.target
            this.picFile = this.idElement.files[0];
          }
            if (this.picFile) {
              if(this.idElement.id == 'imagenCorte'){
                this.form.imagen_corte = this.picFile
                console.log(this.form.imagen_corte);
              }

              if(this.idElement.id == 'imagenEtiquetado'){
                this.form.imagen_etiquetado = this.picFile
                console.log(this.form.imagen_etiquetado);
              }
              
              if(this.idElement.id == 'imagenPackaging'){
                this.form.imagen_packaging = this.picFile
                console.log(this.form.imagen_packaging);
              }
            }
        },

        createCorte(){

            this.$Progress.start()

            this.form.submit('post','api/corte',{

                // Transform form data to FormData
                transformRequest: [function (data, headers) {
                    return objectToFormData(data)
                }]
            })
                .then(() => {
                   
                    Fire.$emit('AfterCreatedCorteLoadIt'); //custom events

                        Toast.fire({
                          icon: 'success',
                          title: 'Corte Creado con Exito'
                        })

                        this.$Progress.finish()

                        $('#addNew').modal('hide');

                })
                .catch(() => {
                   console.log("Error......")
                })

     

            //this.loadUsers();
          },
          deleteCorte(id) {
            this.$Progress.start()
            Swal.fire({
              title: 'Estas segur@?',
              text: "Esta accion no se puede deshacer!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Eliminar!'
            }).then((result) => {
                
              if (result.value) {
                //Send Request to server
                this.form.delete('api/corte/'+id)
                    .then(()=> {
                      Fire.$emit('AfterCreatedCorteLoadIt');
                      
                            Swal.fire(
                              'Eliminado!',
                              'Corte Eliminado con Exito',
                              'success'
                            )
                      this.$Progress.finish()

                    }).catch(() => {
                        Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: '<a href>Why do I have this issue?</a>'
                        })

                      this.$Progress.fail()
                    })
                }

            })
          }
        },

        created() { 
            this.loadCortes();
            this.loadCategorias();
            Fire.$on('AfterCreatedCorteLoadIt',()=>{ //custom events fire on
                this.loadCortes();
                this.loadCategorias();
            });

        }
    }
</script> 