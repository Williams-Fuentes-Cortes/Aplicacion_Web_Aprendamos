<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Alumnos</title>

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
            
			<hr>

            <!-- Divider -->
            <hr class="sidebar-divider d-md-block">

            <li class="nav-item ">
                <a id="a-sid" class="nav-link" href="profesor-repositorio.php">
                    <i class="fas fa-fw fa-book "></i>
                    <span>Repositorio</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="profesor-alumnos.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Alumnos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-cuestionarios.php">
                    <i class="fas fa-fw fa-align-justify"></i>
                    <span>Cuestionarios</span></a>
            </li>

            <li class="nav-item">
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
                          <h5><i class="fas fa-users fa-sm"></i> Alumnos</h5></div>
                          
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
                           
                            <div class="card shadow border-left-success mb-3">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header">
                                    <h5 class="m-0 text-gray-900">Grupo : 504</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="list-group">
                                      <a href="#alum1" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Edwir Acevedo Acevedo</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Marco Antonio Acevedo Escudero</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Carlos Eugenio Cabrera Guerra</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Williams Fuentes Cortés</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Erick Oswaldo Gallegos Pérez</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Rubén Sanchez González</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Rafael Torres Moreno</h5></div>
										  </div>
                                      </a>                                                                                                                                                                                              
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card shadow border-left-success mb-3">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header">
                                    <h5 class="m-0 text-gray-900">Grupo : 704</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <div class="list-group">
                                      <a href="#alum1" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Edwir Acevedo Acevedo</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Marco Antonio Acevedo Escudero</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Carlos Eugenio Cabrera Guerra</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Williams Fuentes Cortés</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Erick Oswaldo Gallegos Pérez</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Rubén Sanchez González</h5></div>
										  </div>
                                      </a>
                                      <a href="#" class="list-group-item list-group-item-action" data-toggle="modal">
										  <div class="row">
											  <div class="col-xl-1"><img src="recursos/images/profile50x50.png" alt="" class="rounded-circle"></div>
											  <div class="col"><h5>Rafael Torres Moreno</h5></div>
										  </div>
                                      </a>                                                                                                                                                                                              
                                    </div>
                                    
                                </div>
                            </div>                           
                           
                        </div>
                        


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
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
    
    
	<!-- VENTANAS EMERGENTES -->
	<div class="modal fade" id="alum1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog"  role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header text-gray-900">
					<h5 class="modal-title">Estadísticas del alumno</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				<div class="modal-body">
					<div class="text-center">
						<div class="row">
							<div class="col"><img src="recursos/images/profile100x100.png" alt="" class="rounded-circle"></div>
							<div class="col text-left">
								Nombre: Edwir Acevedo Acevedo <br>
								Matricula: XXXXXXXXXX <br>
								Semestre: Quinto <br>
								Escuela de procedencia: CECyTE <br>
							</div>
						</div>
						<div class="row pt-3 pl-5 pr-5">
								<select class="form-control">
									<option selected>Materia</option>
									<option>Física</option>
									<option>Filosofía</option>
									<option>Química</option>
								</select>                                                    

						</div>
						<div class="row">
						  <div class="chart-area">
							<!-- Area de estadisticas del Alumno -->
						  </div>                                                    

						</div>
					</div>
					<!-- Foooter de la ventana -->
					<div class="modal-footer">
						<a href="profesor-alumnos.php" class="btn btn-success "> Aceptar </a>
					</div>
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