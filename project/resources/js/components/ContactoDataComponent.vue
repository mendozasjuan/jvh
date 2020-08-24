
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Mensajes Recibidos</h3>
              </div>
             
              <div class="card-body  p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Mensaje</th>
                        <th >Accion</th>
                  </tr> 
                </thead>
                  <paginate name="mensajes" :list="mensajes" :per="3" tag="tbody">
                      <tr v-for="mensaje in paginated('mensajes')" :key="mensaje.id">
                          <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                            <td>{{ mensaje.id }}</td>
                            <td>{{ mensaje.nombre + ' '+ mensaje.apellido }}</td>
                            <td>{{ mensaje.correo }}</td>
                            <td>{{ mensaje.telefono }}</td>
                            <td>{{ mensaje.mensaje }}</td>
                            

                            <td>
                               <a href="#" @click="deleteMensaje(mensaje.id)" title="Eliminar">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          <!--</tr>-->
                      </tr>
                  </paginate></table>
                
              </div>
            
              <div class="card-footer text-center">
                 <paginate-links for="mensajes" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>
              </div>
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
                mensajes: [],
                picFile:'',
                idElement:'',
                paginate: ['mensajes'],
            }
        },
        methods: {
        loadMensajes() {

          axios.get("api/listcontactos").then( data => {
            this.mensajes = Array.from(data.data)
            console.log(data.data)
          }
            );
          
          //pick data from controller and push it into users object

        },
          deleteMensaje(id) {
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
                axios.post('api/deletecontacto/'+id)
                    .then(()=> {
                      Fire.$emit('AfterDeletedMensajeLoadIt');
                            Swal.fire(
                              'Eliminado!',
                              'Mensaje Eliminado con Exito',
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
            this.loadMensajes();
            Fire.$on('AfterDeletedMensajeLoadIt',()=>{ //custom events fire on
                this.loadMensajes();
            });
        }
    }
</script>