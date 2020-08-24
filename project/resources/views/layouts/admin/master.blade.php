<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <title>JVH - Panel de Administración</title>
 
  <link rel="stylesheet" href="css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

 
  </nav>
  <!-- /.navbar -->
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{$logo ? $logo->logo : ''}}" alt="JVH Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light">JVH</span>
    </a>
 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <!--<img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="#" class="d-block">
              <i class="far fa-user-circle"></i> {{ Auth::user()->name }}
          </a>
        </div>
      </div>
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <router-link to="/inicio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Inicio
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/quienessomos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Quienes Somos
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/produccion" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Producción
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/exportacion" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Exportacion
                  </p>
                </router-link>
              </li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Productos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/paginaproductos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Pagina
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/categorias-corte" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Categorias de Corte
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/cortes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Cortes
                  </p>
                </router-link>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <router-link to="/calidad" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Calidad
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/impactosocial" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Impacto Social
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/paginarecursoshumanos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Pagina Recursos Humanos
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/listcurriculums" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Curriculums Recibidos
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/paginacontacto" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Pagina Contacto
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/listmensajes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Mensaje de Contacto Recibidos
                  </p>
                </router-link>
              </li>
              
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuracion
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Usuarios</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/contactofooter" class="nav-link">
                  <i class="nav-icon far fa-address-card"></i>
                  <p>
                    Contacto Footer
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/redessociales" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Redes Sociales
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/logo" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Logo
                  </p>
                </router-link>
              </li>
            </ul>
          </li>
          
          <!--<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Paginas del Sitio
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            </ul>
          </li>-->
          
          <!--<li class="nav-item">
            <router-link to="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Perfil
              </p>
            </router-link>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-power-off"></i>
                <p>
                  {{ __('Cerrar Sesion') }}
                </p>
            </a>
 
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <router-view></router-view>
          <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <!--Anything you want-->
    </div>
    <!-- Default to the left -->
    <!--<strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.-->
  </footer>
</div>
    <script src="js/app.js"></script>
</body>
</html>