<!DOCTYPE html>
<html lang="es"> 

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumno - Materia</title>

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
    <ul class="navbar-nav bg-success sidebar sidebar-dark " id="accordionSidebar">

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
                        <h5><i class="fas fa-book  fa-sm"></i> Materias</h5>
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

            <!-- Area Chart -->
            <div class="col">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-success m-3">
                                                
                             
                       <div id="accordion">

                             <div class="card">
                               <div class="card-header" id="heading1">
                                
                                 <a class="card-link" data-toggle="collapse" href="#collapse1" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                                        <h5 class="mb-0 text-gray-800">1er Semestre</h5>
                                    </div>
                                 </a>
                                 
                               </div>
                           <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                             <div class="card-body">
                                         <!-- Content Row -->
                                <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                  <div class="col-xl-2 col-md-6 mb-4 mr-4">
                                  <div class="card border-left-success">
                                    <div class="card-body ">
                                      <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center"> <a class="text-success" href="alumno_materia_cuestionario.php">Filosof&iacute;a</a> </div>                       
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                  <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">50%</div>
                                                </div>
                                                <div class="col">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar  bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                </div>
                                             </div>
                                        </div>
                                        <div class="col-auto">
                                          <i class="fas fa-book  text-gray-300"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>

                               <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-6 mb-4 mr-4">
                              <div class="card border-left-secondary">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">PE</div>
                                         <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">0%</div>
                                            </div>
                                            <div class="col">
                                            <div class="progress progress-sm ">
                                                <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </div>
                                         </div>                  
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-book  text-gray-300"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                        <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-2 col-md-6 mb-4 mr-4">
                              <div class="card border-left-success">
                                <div class="card-body">
                                  <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">F&iacute;sica</div>
                                         <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">45%</div>
                                            </div>
                                            <div class="col">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar  bg-success" role="progressbar" style="width: 45%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            </div>
                                         </div>                  
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-book  text-gray-300"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                             <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4 mr-4">
                          <div class="card border-left-success">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">Qu&iacute;mica</div>                      
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                          <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">50%</div>
                                        </div>
                                        <div class="col">
                                        <div class="progress progress-sm ">
                                            <div class="progress-bar  bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-book  text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4 mr-4">
                          <div class="card border-left-success">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">Prec&aacute;lculo</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                          <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">100%</div>
                                        </div>
                                        <div class="col">
                                        <div class="progress progress-sm ">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-book  text-gray-300"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

            
                      </div>
                    </div>
                     </div>
                    </div>
                    </div>     
              </div>
              
            </div>
            
            
            
            
            
            
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-success m-3">
                                                
                             
                       <div id="accordion">

                             <div class="card">
                               <div class="card-header" id="heading2">
                                 <a class="card-link collapsed" data-toggle="collapse"  data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" href="#collapse2">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                                        <h5 class="mb-0 text-gray-800">2do Semestre</h5>
                                    </div>
                                 </a>
                               </div>
                           <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                             <div class="card-body">
 
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4 mr-4">
              <div class="card border-left-success">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">TGS</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">50%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm">
                                <div class="progress-bar  bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                         </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

               <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4 mr-4">
              <div class="card border-left-success">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">ED</div>
                         <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">20%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm ">
                                <div class="progress-bar  bg-success" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                         </div>                  
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


                 <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4 mr-4">
              <div class="card border-left-secondary">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center">PE</div>
                         <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">0%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm ">
                                <div class="progress-bar  bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                         </div>                  
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                 <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4 mr-4">
              <div class="card border-left-success">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">A. L&iacute;neal</div>                      
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">50%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm ">
                                <div class="progress-bar  bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                         </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4 mr-4">
              <div class="card border-left-success">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">C. Dif</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h6 mb-0 mr-1 font-weight-bold text-gray-900">100%</div>
                            </div>
                            <div class="col">
                            <div class="progress progress-sm ">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                         </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book  text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       
          </div>
                    </div>
                     </div>
                    </div>
                    </div>     
              </div>
              
            </div>
            
            
            
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-success m-3">
                                                
                             
                       <div id="accordion">

                             <div class="card">
                                       <div class="card-header" id="heading3">
                                         <a class="card-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" href="#collapse3">
                                            <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                                                <h5 class="mb-0 text-gray-800">3er Semestre</h5>
                                            </div>
                                         </a>
                                       </div>
                                   <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                     <div class="card-body">
                                     <div class="row">
                                         
                                         
                                     </div>

                                    </div>
                                 </div>
                            </div>
                        </div>     
              </div>
              
            </div> 
            
                       
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-success m-3">
                                                
                             
                       <div id="accordion">

                             <div class="card">
                                    <div class="card-header" id="heading4">
                                         <a class="card-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" href="#collapse4">
                                            <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                                                <h5 class="mb-0 text-gray-800">4to Semestre</h5>
                                            </div>
                                         </a>
                                       </div>
                                   <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                     <div class="card-body">
                                     <div class="row">
                                         
                                         
                                         
                                         
                                         
                                         
                                     </div>
                                   
                                    </div>
                                 </div>
                            </div>
                        </div>     
              </div>
              
            </div>  
            
        
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card border-left-success m-3">
                                                
                             
                       <div id="accordion">

                             <div class="card">
                                    <div class="card-header" id="heading5">
                                         <a class="card-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" href="#collapse5">
                                            <div class="d-sm-flex align-items-center justify-content-between mb-2 m-2 form-group">
                                                <h5 class="mb-0 text-gray-800">5to Semestre</h5>
                                            </div>
                                         </a>
                                       </div>
                                   <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                     <div class="card-body">
                                     <div class="row">
                                         
                                         
                                         
                                     </div>
                                   
                                   
                                    </div>
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

  <!-- Logout Modal-->
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

</body>

</html>
