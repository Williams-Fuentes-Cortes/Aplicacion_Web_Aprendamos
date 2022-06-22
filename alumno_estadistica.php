<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumno-Estadistica</title>

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
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center mr-4 " href="alumno_materia.php">
            <img src="recursos/images/profile50x50.png" class="img-profile rounded-circle ml-4" alt="avatar">   
      </a>  
        <div class="col-auto ">
                <div class="sidebar-brand d-flex align-items-center justify-content-center" href="alumno_materia.html">Alumno</div>
        </div> 


    <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Materias -->
      <li class="nav-item ">
        <a class="nav-link" href="alumno_materia.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Materias</span></a>
      </li>
      
 
      
      <!-- Nav Item - Estadísticas -->
      <li class="nav-item active">
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
                        <h5><i class="fas fa-chart-area fa-sm"></i> Estad&iacute;sticas</h5>
                    </div>
                        
                          <a href="alumno_editar_perfil.php"><button class="btn btn-sm btn-outline-success mr-2" type="button">
                          <i class="fas fa-pen fa-sm fa-fw mr-1"></i>Editar perfil
                        </button></a>
                        
                        
                     <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesión</button>  
               
                </nav>

 
        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Content Row -->
          <div class="row pl-md-3 pr-md-3 ">

            <div class="col">
              

               <!-- Area Chart -->
               <div class="card shadow mb-4 ">
              
                   <!-- Card Body -->
                   <div class="card border-left-success m-3">
               

                   
                   
                   
                    <div class="card-header py-3 text-gray-800 ">
                    <h5>Estructura de datos</h5>
                    </div>
                  
                  

                  
                   </div>
                </div>
              
              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <!-- Card Body -->
                    <div class="card border-left-success m-3">


                                    
                    <div class="card-header py-3 text-gray-800 ">
                    <h5>Base de datos</h5>
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
  
  
  
  
  
  


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->

  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
