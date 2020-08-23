
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
             
              <div class="card-body  p-0">
                <table class="table table-hover table-responsive">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Categoria de Corte</th>
                        <th>Tamaño de Caja</th>
                        <th style="width: 13%">Accion</th>
                  </tr> 
                </thead>
                  <paginate name="cortes" :list="cortes" :per="10" tag="tbody">
                      <tr v-for="corte in paginated('cortes')" :key="corte.id">
                          <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                            <td>{{ corte.id }}</td>
                            <td>{{ corte.nombre }}</td>
                            <td>{{ corte.descripcion }}</td>
                            <td>{{ corte.categoria.categoria.es }}</td>
                            <td>{{ corte.tamano_caja }}</td>

                            <td>
                                <a href="#" data-id="corte.id" @click="editModalWindow(corte)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                |
                                <a href="#" @click="addModalImagenesProductoWindow(corte)">
                                    <i class="fa fa-trash red"></i>
                                </a>
                                |
                                <a href="#" @click="addModalEtiquetadoProductoWindow(corte)">
                                    <i class="fa fa-trash red"></i>
                                </a>
                                |
                                <a href="#" @click="addModalPackagingProductoWindow(corte)">
                                    <i class="fa fa-trash red"></i>
                                </a>
                                |
                                <a href="#" @click="deleteCorte(corte.id)">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          <!--</tr>-->
                      </tr>
                  </paginate></table>
                
              </div>
            
              <div class="card-footer text-center">
                 <paginate-links for="cortes" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>
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
                          <option v-for="categoria in categorias.data" :key="categoria.id" :value="categoria.id" >{{ categoria.categoria.es }}</option>
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


            <!--Modal Imagenes Producto-->

            <div class="modal fade" id="addNewImageProducto" tabindex="-1" role="dialog" aria-labelledby="addImageProductoLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="addImageProductoLabel">Listado de Imagenes del Producto</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <button class="btn btn-success float-right mb-4" v-on:click="addNewImagenProducto"> Nueva Imagen <i class="fas fa-user-plus fa-fw"></i></button>
                      <form class="d-none" role="form" @submit.prevent="uploadImageProduto" enctype="multipart/form-data" id='formImagenProducto'>
                        <div class="row">
                          <div class="form-group">
                            <label for="imageproducto">Selecione Imagen</label>
                            <input type="file" class="form-control-file" name="imageproducto" id="imageproducto" v-on:change="onUploadImage">
                          </div>
                        </div>
                        <div class="row">
                          <img id="miniaturaImagenProducto" class="miniatura d-none" width="200" height="200" src="" alt="">
                        </div>
                        <div class="row">
                         <button class="btn btn-success">
                           Guardar
                         </button>
                         <input type="button" v-on:click="cancelAddImagenProducto" class="btn btn-danger" value="Cancelar">
                           
                         </input>
                        </div>
                      </form>
                       <table class="table table-hover">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Accion</th>
                          </tr> 
                        </thead>
                        <paginate name="imagenesproducto" :list="imagenesproducto" :per="5" tag="tbody">
                            <tr v-for="imagen in paginated('imagenesproducto')" :key="imagen.id">
                                <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                                  <td>{{ imagen.id }}</td>
                                  <td><img width="50" :src="imagen.imagen"></td>

                                  <td>
                                      <a href="#" data-id="corte.id" @click="editImagenProducto(imagen)">
                                          <i class="fa fa-edit blue"></i>
                                      </a> 
                                      |
                                      <a href="#" @click="deleteImagenProducto(imagen.id)">
                                          <i class="fa fa-trash red"></i>
                                      </a>

                                  </td>
                                <!--</tr>-->
                            </tr>
                        </paginate>

                      </table>
                      <paginate-links for="imagenesproducto" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                  </div>
              </div>
            </div>


            <!--Modal Imagenes Etiquetados-->

            <div class="modal fade" id="addNewEtiquetadoProducto" tabindex="-1" role="dialog" aria-labelledby="addEtiquetadoProductoLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="addEtiquetadoProductoLabel">Listado Etiquetado del Producto</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <button class="btn btn-success float-right mb-4" v-on:click="addNewEtiquetadoProducto"> Nuevo Etiquetado <i class="fas fa-user-plus fa-fw"></i></button>
                     <form class="d-none" role="form" @submit.prevent="uploadEtiquetadoProduto" enctype="multipart/form-data" id='formEtiquetadoProducto'>
                        <div class="row">
                          <div class="form-group">
                            <label for="etiquetadoproducto">Selecione Imagen</label>
                            <input type="file" class="form-control-file" name="etiquetadoproducto" id="etiquetadoproducto" v-on:change="onUploadImage">
                          </div>
                        </div>
                        <div class="row">
                          <img id="miniaturaEtiquetadoProducto" class="miniatura d-none" width="200" height="200" src="" alt="">
                        </div>
                        <div class="row">
                         <button class="btn btn-success">
                           Guardar
                         </button>
                         <input type="button" v-on:click="cancelAddEtiquetadoProducto" class="btn btn-danger" value="Cancelar">
                           
                         </input>
                        </div>
                      </form>
                       <table class="table table-hover">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Accion</th>
                          </tr> 
                        </thead>
                        <paginate name="etiquetados" :list="etiquetados" :per="5" tag="tbody">
                            <tr v-for="etiquetado in paginated('etiquetados')" :key="etiquetado.id">
                                <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                                  <td>{{ etiquetado.id }}</td>
                                  <td><img width="50" :src="etiquetado.etiquetado"></td>

                                  <td>
                                      <a href="#" data-id="corte.id" @click="editEtiquetadoProducto(etiquetado)">
                                          <i class="fa fa-edit blue"></i>
                                      </a>
                                      |
                                      <a href="#" @click="deleteEtiquetadoProducto(etiquetado.id)">
                                          <i class="fa fa-trash red"></i>
                                      </a>

                                  </td>
                                <!--</tr>-->
                            </tr>
                        </paginate>

                      </table>
                      <paginate-links for="etiquetados" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                  </div>
              </div>
            </div>

            <!--Modal Imagenes Packagings-->

            <div class="modal fade" id="addNewPackagingProducto" tabindex="-1" role="dialog" aria-labelledby="addPackagingProductoLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="addPackagingProductoLabel">Listado Packaging del Producto</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <button class="btn btn-success float-right mb-4" v-on:click="addNewPackagingProducto"> Nuevo Packaging <i class="fas fa-user-plus fa-fw"></i></button>
                      <form class="d-none" role="form" @submit.prevent="uploadPackagingProduto" enctype="multipart/form-data" id='formPackagingProducto'>
                        <div class="row">
                          <div class="form-group">
                            <label for="packagingproducto">Selecione Imagen</label>
                            <input type="file" class="form-control-file" name="packagingproducto" id="packagingproducto" v-on:change="onUploadImage">
                          </div>
                        </div>
                        <div class="row">
                          <img id="miniaturaPackagingProducto" class="miniatura d-none" width="200" height="200" src="" alt="">
                        </div>
                        <div class="row">
                         <button class="btn btn-success">
                           Guardar
                         </button>
                         <input type="button" v-on:click="cancelAddPackagingProducto" class="btn btn-danger" value="Cancelar">
                           
                         </input>
                        </div>
                      </form>
                       <table class="table table-hover">
                          <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Accion</th>
                          </tr> 
                        </thead>
                        <paginate name="packagings" :list="packagings" :per="5" tag="tbody">
                            <tr v-for="packaging in paginated('packagings')" :key="packaging.id">
                                <!--<tr v-for="corte in cortes.data" :key="corte.id">-->
                                  <td>{{ packaging.id }}</td>
                                  <td><img width="50" :src="packaging.packaging"></td>

                                  <td>
                                      <a href="#" data-id="corte.id" @click="editPackagingProducto(packaging)">
                                          <i class="fa fa-edit blue"></i>
                                      </a>
                                      |
                                      <a href="#" @click="deletePackagingProducto(packaging.id)">
                                          <i class="fa fa-trash red"></i>
                                      </a>

                                  </td>
                                <!--</tr>-->
                            </tr>
                        </paginate>

                      </table>
                      <paginate-links for="packagings" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                editImagenMode : false,
                cortes: [],
                imagenesproducto: [],
                imagenproducto:{},
                etiquetados: [],
                etiquetadoproducto:{},
                packagings: [],
                packagingproducto:{},
                categorias:{},
                picFile:'',
                idElement:'',
                paginate: ['cortes','imagenesproducto','etiquetados','packagings'],
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

                }),
                corte: {}
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

        addModalImagenesProductoWindow(corte){
          this.loadImagenesProducto(corte.id)
          this.corte = corte
          console.log(this.corte);
          $('#addNewImageProducto').modal('show');
        },

        addModalEtiquetadoProductoWindow(corte){
          this.loadEtiquetadosProducto(corte.id)
          this.corte = corte
          console.log(this.etiquetados);
          $('#addNewEtiquetadoProducto').modal('show');
        },

        addModalPackagingProductoWindow(corte){
          this.loadPackagingsProducto(corte.id)
          this.corte = corte
          console.log(this.packagings);
          $('#addNewPackagingProducto').modal('show');
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

          axios.get("api/corte").then( data => {
            this.cortes = Array.from(data.data.data)
          }
            
            );
          console.log(this.cortes)
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
            this.cargarMiniatura(this.idElement,this.picFile);
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
        cargarMiniatura(object,file){
          let reader = new FileReader();
          reader.onload = (e) => {
            console.log($(this.idElement).parents('form').find('.miniatura')[0]);
            $(this.idElement).parents('form').find('.miniatura')[0].src = e.target.result;
            $(this.idElement).parents('form').find('.miniatura').addClass('d-block')
            //return this.imagenMiniatura = e.target.result;
          }
          reader.readAsDataURL(file);
        },
        uploadImageProduto(event){
          if(this.editImagenMode)
            return this.updateImagenProducto(event);

          console.log(event.target)
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('corteid',this.corte.id);

          axios.post('api/saveimageproducto',formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Pagina Calidad Actualizada con Exito'
            })

            this.$Progress.finish()
            this.loadImagenesProducto(data.data.corte_id);

            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaImagenProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formImagenProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        loadImagenesProducto(corteid){
          axios.get("api/allimagesproducto/"+corteid).then( data => {
            console.log(data);
            this.imagenesproducto = Array.from(data.data)
          })
        },
        addNewImagenProducto(){
            $("#formImagenProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        cancelAddImagenProducto(){
            $("#miniaturaImagenProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formImagenProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        editImagenProducto(imagen){
          this.imagenproducto = imagen;
          this.editImagenMode = true;
          console.log(this.editImagenMode)
          $("#formImagenProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        updateImagenProducto(event){
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('imageid',this.imagenproducto.id);
          formData.append('corteid',this.corte.id);

          axios.post('api/updateimageproducto/'+this.imagenproducto.id,formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Imagen del Producto Actualizada con Exito'
            })

            this.$Progress.finish()
            this.loadImagenesProducto(data.data.corte_id);
            this.editImagenMode = false;
            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaImagenProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formImagenProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        deleteImagenProducto(imagenid){
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

                axios.post('api/deleteimageproducto/'+imagenid)
                .then((data) => {
                  console.log(data);
                  Toast.fire({
                    icon: 'success',
                    title: 'Imagen Eliminada con Exito'
                  })

                  this.$Progress.finish()
                  this.loadImagenesProducto(this.corte.id);

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
        },
        uploadEtiquetadoProduto(event){
          if(this.editImagenMode)
            return this.updateEtiquetadoProducto(event);

          console.log(event.target)
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('corteid',this.corte.id);

          axios.post('api/saveetiquetadoproducto',formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Etiquetado Guardado con Exito'
            })

            this.$Progress.finish()
            this.loadEtiquetadosProducto(data.data.corte_id);

            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaEtiquetadoProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formEtiquetadoProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },

        loadEtiquetadosProducto(corteid){
          axios.get("api/alletiquetadosproducto/"+corteid).then( data => {
            console.log(data);
            this.etiquetados = Array.from(data.data)
          })
        },
        addNewEtiquetadoProducto(){
            $("#formEtiquetadoProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        cancelAddEtiquetadoProducto(){
            $("#miniaturaEtiquetadoProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formEtiquetadoProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        editEtiquetadoProducto(etiquetado){
          this.etiquetadoproducto = etiquetado;
          this.editImagenMode = true;
          console.log(this.editImagenMode)
          $("#formEtiquetadoProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        updateEtiquetadoProducto(event){
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('etiquetadoid',this.etiquetadoproducto.id);
          formData.append('corteid',this.corte.id);

          axios.post('api/updateetiquetadoproducto/'+this.etiquetadoproducto.id,formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Etiquetado del Producto Actualizado con Exito'
            })

            this.$Progress.finish()
            this.loadEtiquetadosProducto(this.corte.id);
            this.editImagenMode = false;
            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaEtiquetadoProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formEtiquetadoProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        deleteEtiquetadoProducto(etiquetadoid){
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

                axios.post('api/deleteetiquetadoproducto/'+etiquetadoid)
                .then((data) => {
                  console.log(data);
                  Toast.fire({
                    icon: 'success',
                    title: 'Imagen Eliminada con Exito'
                  })

                  this.$Progress.finish()
                  this.loadEtiquetadosProducto(this.corte.id);

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
        },

        uploadPackagingProduto(event){
          if(this.editImagenMode)
            return this.updatePackagingProducto(event);

          console.log(event.target)
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('corteid',this.corte.id);

          axios.post('api/savepackagingproducto',formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Packaging Guardado con Exito'
            })

            this.$Progress.finish()
            this.loadPackagingsProducto(this.corte.id);

            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaPackagingProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formPackagingProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },

        loadPackagingsProducto(corteid){
          axios.get("api/allpackagingsproducto/"+corteid).then( data => {
            console.log(data);
            this.packagings = Array.from(data.data)
          })
        },
        addNewPackagingProducto(){
            $("#formPackagingProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        cancelAddPackagingProducto(){
            $("#miniaturaPackagingProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formPackagingProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        editPackagingProducto(packaging){
          this.packagingproducto = packaging;
          this.editImagenMode = true;
          console.log(this.editImagenMode)
          $("#formPackagingProducto").trigger("reset").removeClass('d-none').addClass('d-block');
        },
        updatePackagingProducto(event){
          var formulario = event.target;
          this.$Progress.start()
          let formData =  new FormData(formulario)
          formData.append('packagingid',this.packagingproducto.id);
          formData.append('corteid',this.corte.id);

          axios.post('api/updatepackagingproducto/'+this.packagingproducto.id,formData)
          .then((data) => {
            console.log(data);
            Toast.fire({
              icon: 'success',
              title: 'Packaging del Producto Actualizado con Exito'
            })

            this.$Progress.finish()
            this.loadPackagingsProducto(this.corte.id);
            this.editImagenMode = false;
            

          })
          .catch(() => {
            console.log("Error......")
          })

            $("#miniaturaPackagingProducto").attr('src',"").removeClass('d-block').addClass('d-none');
            $("#formPackagingProducto").trigger("reset").removeClass('d-block').addClass('d-none');
        },
        deletePackagingProducto(packagingid){
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

                axios.post('api/deletepackagingproducto/'+packagingid)
                .then((data) => {
                  console.log(data);
                  Toast.fire({
                    icon: 'success',
                    title: 'Packaging Eliminada con Exito'
                  })

                  this.$Progress.finish()
                  this.loadPackagingsProducto(this.corte.id);

                })
                .catch(() => {
                  console.log("Error......")
                })
              }

            })
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