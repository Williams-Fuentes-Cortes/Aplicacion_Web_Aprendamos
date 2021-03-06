<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumno-Materia-Cuestionario</title>

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
                <div class="sidebar-brand d-flex align-items-center justify-content-center" href="alumno_materia.php">Alumno</div>
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
                        
                    <div class="collapse text-gray-900 navbar-collapse" id="navbarNavDropdown">
                        <h5><i class="fas fa-book  fa-sm"></i> Materias <i class="fas ml-2 mr-2 fa-arrow-right  fa-sm"></i> Cuestionario</h5>
                    </div>
                        
                          <a href="alumno_editar_perfil.php"><button class="btn btn-sm btn-outline-success mr-2" type="button">
                          <i class="fas fa-pen fa-sm fa-fw mr-1"></i>Editar perfil
                        </button></a>  
                        
                     <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesi??n</button> 
               
                </nav>

       
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
        
        
        
          <!-- Content Row -->
          
          <div class="row pl-md-3 pr-md-3">

            <!-- Area Chart -->
            <div class="col ">
              <div class="card shadow mb-4">

                <!-- Card Body -->
                <div class="card border-left-success m-3">
               
                <!-- Card Header - Dropdown -->
                <div class="card-header "> 
                
                        <!-- Page Heading -->
                         <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                             <h5 class="mb-0 text-gray-800">Nombre de la materia</h5>
                             <div>
                                <h5 class="mb-0 text-gray-800">Nombre del profesor</h5>
                            </div>

                            <li class="sidebar-search" style="list-style:none;">
                                <div class="input-group ">
                                    <input type="text" class="form-control bg-ight border-dark small text-rigthd" placeholder="Buscar" arial-label="Buscar" aria-describedby="basic-addon2"> 
                                    <div class="input-group-append">
                                     <button class="btn btn-success" type="button">
                                        <i class="fa fa-search"></i>
                                     </button>
                                    </div>
                                                    
                            

                               </div>
                            <!-- /input-group -->
                            </li>
                        </div>               
                </div>
                  
                  <div class="card-body">
                  <div class="col table-responsive">
                    <table class="table table-striped">
                        <tbody>
                          
                            <tr>
                               
                                <td  class="text-center ">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                                   
                                <td><a href="#info2" class="btn btn-success col-md-9 m-0 p-1" data-toggle="modal"> Solicitar </a></td>
                                                   
                                <th scope="col" class="text-center"></th>
                            </tr>
                             <tr>
                               
                                <td  class="text-center">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                                   
                                 <td ><strong>Concluido</strong></td>
                                                   
                                <th scope="col" class="text-center"></th>
                            </tr>
                            <tr>
                               
                                <td  class="text-center">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                                   
                                <td><a href="#info2" class="btn btn-success col-md-9 m-0 p-1" data-toggle="modal"> Solicitar </a></td>
                                                   
                                <th scope="col" class="text-center"></th>
                            </tr>
                             <tr>
                               
                                <td  class="text-center">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                                   
                                <td><a href="alumno_cuestionario.php"><button  tyle="button"   class=" btn btn-primary col-md-9 m-0 p-1 active" >En curso</button></a></td>
                                <th scope="col" class="text-center"></th>
                            </tr>
                            <tr>
                               
                                <td  class="text-center">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                                 <td ><strong>Concluido</strong></td>
                                        
                                                   
                                <th scope="col" class="text-center"></th>
                            </tr>
                            
                            <tr>
                               
                                <td  class="text-center">Cuestionario</td>
                                <td  class="text-center">L&iacute;mite para acceder</td>
                                <td  class="text-center">Complejidad</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td ><strong>Concluido</strong></td>
    
                                        
                                                   
                                <th scope="col" class="text-center"></th>
                            
                        </tbody>
                      </table>
                  </div>
                </div>
                              
              </div>
             <div class="text-right mr-5 mb-2">
                    <a href="alumno_materia.php" class="btn btn-success"> Regresar </a> 
              </div>
              
            </div>
                
              
          </div>
           
            
        </div>       

</div>

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
  
  <!-- Logout Modal                 Cerrar Sesi??n-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-gray-900">
          <h5 class="modal-title" id="exampleModalLabel">??Est?? seguro de cerrar la sesi??n?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body text-gray-900">Seleccione "Cerrar sesi??n" para salir de la plataforma.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="login.html">Cerrar sesi??n</a>
        </div>
      </div>
    </div>
  </div>
    
    <!---------------------------Solicitar----------------------------->
                      <div class="text-left col"> 
                                
                         <div class="modal fade" id="info2">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <!-- Header de la ventana -->
                                     <div class="modal-header text-gray-900">
                                         <h4 class="modal-title">Informaci??n</h4>
                                                <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      </div>
                                             <!-- Contenido de la ventana -->
                                             <div class="modal-body" >
                                                   <div class="text-body text-gray-900"><p>Solicitud enviada</p></div>
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
                                                <div class="text-body text-gray-900">Cuestionario no disponible</div>
                                            </div>
                                            <!-- Foooter de la ventana -->
                                            <div class="modal-footer" >
                                                <button tyle="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                                            </div>
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