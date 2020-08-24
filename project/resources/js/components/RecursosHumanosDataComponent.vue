
<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de Curriculums Recibidos</h3>
              </div>
             
              <div class="card-body  p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Foto</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>DNI</th>
                        <th>Pais</th>
                        
                        <th >Accion</th>
                  </tr> 
                </thead>
                  <paginate name="curriculums" :list="curriculums" :per="3" tag="tbody">
                      <tr v-for="curriculum in paginated('curriculums')" :key="curriculum.id">
                          <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                            <td>{{ curriculum.id }}</td>
                            <td>{{ curriculum.nombre + ' '+ curriculum.apellido }}</td>
                            <td><img width="100" :src="curriculum.foto"></td>
                            <td>{{ curriculum.telefono }}</td>
                            <td>{{ curriculum.email }}</td>
                            <td>{{ curriculum.dni }}</td>
                            <td>{{ curriculum.pais.pais_nac }}</td>
                            

                            <td>
                                <a :href="curriculum.curriculum" target="_blank" title="Descargar Curriculum">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                |
                                <a href="#" @click="deleteCurriculum(curriculum.id)" title="Eliminar">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          <!--</tr>-->
                      </tr>
                  </paginate></table>
                
              </div>
            
              <div class="card-footer text-center">
                 <paginate-links for="curriculums" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>
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
                curriculums: [],
                picFile:'',
                idElement:'',
                paginate: ['curriculums'],
            }
        },
        methods: {
        loadCurriculums() {

          axios.get("api/listcurriculums").then( data => {
            this.curriculums = Array.from(data.data)
            console.log(data.data)
          }
            );
          
          //pick data from controller and push it into users object

        },
          deleteCurriculum(id) {
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
                axios.post('api/deletecurriculum/'+id)
                    .then(()=> {
                      Fire.$emit('AfterDeletedCurriculumLoadIt');
                            Swal.fire(
                              'Eliminado!',
                              'Curriculum Eliminado con Exito',
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
            this.loadCurriculums();
            Fire.$on('AfterDeletedCurriculumLoadIt',()=>{ //custom events fire on
                this.loadCurriculums();
            });
        }
    }
</script>