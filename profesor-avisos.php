<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Avisos</title>

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
            <a class="sidebar-brand align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Profesor</div>
            </a>


            <!-- Divider -->
            <hr>

            <!-- Divider -->
            <hr class="sidebar-divider d-md-block">

            <li class="nav-item ">
                <a id="a-sid" class="nav-link" href="profesor-repositorio.php">
                    <i class="fas fa-fw fa-book "></i>
                    <span>Repositorio</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-alumnos.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Alumnos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-cuestionarios.php">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Cuestionarios</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="profesor-avisos.php">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Avisos</span></a>
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
                      <button id="sidebarToggleTop" class="btn d-md-none mr-3">
                        <i class="fa fa-bars"></i>
                      </button>    
                      
                      <div class="collapse text-gray-900 navbar-collapse" id="navbarNavDropdown">
                          <h5><i class="fas fa-bell fa-sm"></i> Avisos</h5></div>
                          
                      <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesión</button>

                </nav>
                <!-- End of Topbar -->                
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <div class="row pl-md-3 pr-md-3">

                        <!-- Area Chart -->
                        <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header">
                                    <h5 class="m-0 text-gray-800">Bandeja de entrada</h5>
                                </div>
                                <!-- Card Body -->
                                <h5 class="pl-3">Hoy</h5>
                                <div class="card border-left-success m-3">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6 col-sm-12">
                                               <div class="row">
                                                   <div class="col-xs-6 col-md-6 col-lg-3 ">
                                                       <img src="recursos/images/profile100x100.png" alt="" class="rounded-circle">    
                                                   </div>    
                                                   <div class="col-xs-6 col-md-6 col-lg-9">
                                                       <h6>Nombre del Alumno</h6>
                                                       <h6>Solicitud de Cuestionario</h6>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h6>FECHA: DD/MM/AA</h6>
                                                <div class="text-right">
                                                    <a href="#deneg" class="btn btn-secondary " data-toggle="modal"> Denegar</a>  
                                                    <a href="#acept" class="btn btn-success " data-toggle="modal"> Aceptar</a>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="card border-left-success m-3">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6 col-sm-12">
                                               <div class="row">
                                                   <div class="col-xs-6 col-md-6 col-lg-3 ">
                                                       <img src="recursos/images/profile100x100.png" alt="" class="rounded-circle">    
                                                   </div>    
                                                   <div class="col-xs-6 col-md-6 col-lg-9">
                                                       <h6>Nombre del Alumno</h6>
                                                       <h6>Solicitud de Cuestionario</h6>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h6>FECHA: DD/MM/AA</h6>
                                                <div class="text-right">
                                                    <a href="#deneg" class="btn btn-secondary " data-toggle="modal"> Denegar</a>  
                                                    <a href="#acept" class="btn btn-success " data-toggle="modal"> Aceptar</a>
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                
                                <h5 class="pl-3">Ayer</h5>
                                
                                <div class="card border-left-success m-3">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6 col-sm-12">
                                               <div class="row">
                                                   <div class="col-xs-6 col-md-6 col-lg-3 ">
                                                       <img src="recursos/images/profile100x100.png" alt="" class="rounded-circle">    
                                                   </div>    
                                                   <div class="col-xs-6 col-md-6 col-lg-9">
                                                       <h6>Nombre del Alumno</h6>
                                                       <h6>Solicitud de Cuestionario</h6>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h6>FECHA: DD/MM/AA</h6>
                                                <div class="text-right">
                                                    <h5>Denegada</h5>    
                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="card border-left-success m-3">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6 col-sm-12">
                                               <div class="row">
                                                   <div class="col-xs-6 col-md-6 col-lg-3 ">
                                                       <img src="recursos/images/profile100x100.png" alt="" class="rounded-circle">    
                                                   </div>    
                                                   <div class="col-xs-6 col-md-6 col-lg-9">
                                                       <h6>Nombre del Alumno</h6>
                                                       <h6>Solicitud de Cuestionario</h6>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h6>FECHA: DD/MM/AA</h6>
                                                <div class="text-right">
                                                    <h5>Denegada</h5>    
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

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

	 <!-- VENTANAS EMERGENTES  ------------------------------------------------------------------------------->
	
	<div class="modal fade" id="acept"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header  text-gray-900">
					<h5 class="modal-title">Información</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				                
                    <div class="modal-body" >
                        <div class="text-body text-gray-900">Solicitud aceptada</div>
                    </div>
           
				<!-- Foooter de la ventana -->
				<div class="modal-footer">
					<a href="profesor-avisos.php" class="btn btn-success "> Aceptar </a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="deneg"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header  text-gray-900">
					<h5 class="modal-title">Información</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				    <div class="modal-body" >
                        <div class="text-body text-gray-900">Solicitud denegada</div>
                    </div>
				<!-- Foooter de la ventana -->
				<div class="modal-footer">
					<a href="profesor-avisos.php" class="btn btn-success "> Aceptar </a>
				</div>
			</div>
		</div>
	</div>   
                                 
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
                    <a class="btn btn-danger" href="login.php">Cerrar sesión</a>
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