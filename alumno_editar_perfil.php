<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumno - Editar Perfil</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
  <link rel="stylesheet" href="css/sb-admin.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center mr-4 " href="alumno_materia.php">
            <img src="recursos/images/profile50x50.png" class="img-profile rounded-circle ml-4" alt="avatar">   
      </a>  
        <div class="col-auto ">
                <div class="sidebar-brand d-flex align-items-center justify-content-center">Alumno</div>
        </div> 
      
    
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="alumno_materia.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Materias</span></a>
      </li>
            
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="alumno_estadistica.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Estad&iacute;sticas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-2 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn  d-md-none mr-3">
                        <i class="fa fa-bars"></i>
                      </button>                    

                  <!-- Page Heading -->
                       <div class="collapse text-gray-900 navbar-collapse" id="navbarNavDropdown">
                        <h5><i class="fas fa-pen fa-sm"></i> Editar perfil</h5>
                    </div>

                        
                     <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesión</button> 
                
                </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          
          <div class="row pl-md-3 pr-md-3  ">

            <!-- Area Chart -->
            <div class="col">
              <div class="card shadow mb-4">
               
                <!-- Card Body -->
                <div class="card border-left-success m-3">
               
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="row m-2">
                        <div class="ml-5 col-3 text-center">
                            <img src="recursos/images/profile100x100.png" class="img-profile rounded-circle" alt="avatar">
                            
                        </div>
                         <div class="col-xl-7 col-lg-5 text-gray-800">                     
                             <a>Cargar imagen...</a><input  type="file" class="form-control" >
                         </div>                        
                    </div>   
                      
                </div> 
                
                
    <div class="row justify-content-center">
     
      <div class="col-xl-10 col-lg-12 col-md-10">
        
       <div class="card o-hidden shadow-lg my-4 border-left-success m-3">
         
         
          <div class="card-body p-0">         
           
           <div class="row">
               
              <div class="col-lg-7 col-md-12">
               
                <div class="m-4">
                  <form>
                  
                  <div class="form-group">                   
                  <div class="text">
                    <h2 class="h5 mb-2 text-gray-800">Usuario</h2>
                    <h2 class="h5 mb-2 text-gray-800">Nombre apellidos</h2>
                    <h2 class="h5 mb-2 text-gray-800">Correo electr&oacute;nico</h2>
                    <h2 class="h5 mb-2 text-gray-800">Fecha nacimiento</h2>
                    <h2 class="h5 mb-2 text-gray-800">Escuela de procedencia</h2>
                    <h2 class="h5 mb-5 text-gray-800">Matr&iacute;cula</h2>
                  </div>                
                  </div>
           
                                               
                  </form>
                  
               
              </div>
              </div> 
           </div>
          </div>
        </div>
         
                
        <div class="card o-hidden shadow-lg my-4 border-left-success m-3">
         
         
          <div class="card-body p-0">         
           
           <div class="row">
               
              <div class="m-auto  col-lg-8">
               
                <div class="m-4">

                  <form>
                  
                  <div class="form-group">
                                              
                  <div class="text-center"><br>
                    <h4 class="h5 mb-1 text-gray-800">Cambiar grupo</h4>
                  </div>
                
                  <select class="form-control">
                        <option value="0">Seleccionar grupo</option>
                        <option value="1">104</option>
                        <option value="2">204</option>
                        <option value="3">304</option>
                        <option value="3">404</option>
                        <option value="3">504</option>
                        <option value="3">604</option>
                        <option value="3">704</option>
                        <option value="3">804</option>
                        <option value="3">904</option>
                        <option value="3">1004</option>
                  </select>                 
                  </div>
                  
                  <div class="text-center"><br>
                    <h4 class="h5 mb-1 text-gray-800">Cambiar correo</h4>
                  </div>  
                     <div class="form-group">
                      
               
                        <div class="form-label-group mb-5">
                            <input type="email" id="exampleInputEmail" class="form-control" placeholder="Correo electrónico nuevo" required="required">
                            <label for="exampleInputEmail">Correo electr&oacute;nico nuevo</label>
                        
                            </div>
                      
                      
                    </div>                
                                               
                  </form>
                  
               
                  </div>
              </div> 
           </div>
           
          </div>
          
        </div>
         
         
        <div class="row m-2">
                <a href="#actualizacion"  data-toggle="modal">Actualización al curso normal</a> 

        </div>
        
        <div class="text-right mb-2"> 
                
                <a href="#guardar" class="btn btn-success" data-toggle="modal"> Guardar cambios </a> 
        </div>

    </div>
   
    </div>
    </div>
    </div>
    </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Logout Modal                 Cerrar Sesión-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-gray-900">
          <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de cerrar la sesión?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-gray-900">Seleccione "Cerrar sesión" para salir de la plataforma.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="login.html">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>
  
  
    <!---------------------------Guardar cambios----------------------------->


                      <div class="text-left col"> 
                                
                         <div class="modal fade" id="guardar">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <!-- Header de la ventana -->
                                     <div class="modal-header text-gray-900">
                                         <h4 class="modal-title">Información</h4>
                                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                             <!-- Contenido de la ventana -->
                                             <div class="modal-body" >
                                                   <div class="text-body text-gray-900"><p>Información actualizada</p></div>
                                             </div>
                                                 <!-- Foooter de la ventana -->
                                             <div class="modal-footer m-0" >
                                                     <button tyle="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                             </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="error1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Header de la ventana -->
                                            <div class="modal-header text-gray-900">
                                                <h5 class="modal-title">Error</h5>
                                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <!-- Contenido de la ventana -->
                                            <div class="modal-body" >
                                                <div class="text-body text-gray-900"><h6>Cuestionario no disponible</h6></div>
                                            </div>
                                            <!-- Foooter de la ventana -->
                                            <div class="modal-footer" >
                                                <button tyle="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
     <!---------------------------Actualización al curso normal----------------------------->
  
                  <div class="modal fade" id="actualizacion">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Header de la ventana -->
                                <!-- Header de la ventana -->
                                <div class="modal-header text-gray-900">
                                    <h4 class="modal-title">Información</h4>
                                        <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                             <!-- Contenido de la ventana -->
                             <div class="modal-body" >
                                   <div class="text-body text-gray-900">
                                   <h6> Para actualizar tu perfil al curso normal necesitamos su matr&iacute;cula</h6>
                                   </div>
                                    <form>                                  
                                        <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="text" id="nombreMateria" class="form-control" placeholder="Nombre de la materia" required="required" autofocus="autofocus"><label for="nombreMateria">Matr&iacute;cula</label>
                        
                                        </div>
                                      </div> </form>
                                  
                             </div>
                             
                                 <!-- Foooter de la ventana -->
                             <div class="modal-footer" >
  
                                    <button type="reset" tyle="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                     <button type="submit" tyle="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
                                     
                             </div>
                        </div>
                    </div>
                 </div>
     
     


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>