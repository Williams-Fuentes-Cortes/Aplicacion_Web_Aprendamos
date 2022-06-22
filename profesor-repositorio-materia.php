<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Repositorio - Materia</title>

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


            <li class="nav-item active">
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
                          
                          <h5><i class="fas fa-book fa-sm"></i> Repositorio <i class="fas ml-2 mr-2 fa-arrow-right  fa-sm"></i> Reactivo Materia</h5>
                          </div>
                          
                      <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesión</button>
                </nav>
                <!-- End of Topbar -->                 

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row pl-md-3 pr-md-3">
                       
                        <div class="col-md-8">
                            <a href="#reac1" class="btn btn-outline-success" data-toggle="modal"><i class="fas fa-fw fa-plus-square"></i>&nbsp;Agregar Reactivo</a>

                        </div>

                        <div class="col-md-2">
                            <div class="text-center btn-group " role="group">
                                <button type="button" class="btn btn-secondary active">Todos</button>
                                <button type="button" class="btn btn-secondary">Propios</button>
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="0">Filtro</option>
                                    <option value="1">Fecha Ascendente</option>
                                    <option value="2">Fecha Descentente</option>
                                    <option value="3">Nivel</option>
                                    <option value="4">Status</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row pl-md-3 pr-md-3">

                        <!-- Area Chart -->
                        <div class="col ">
						<div class="card shadow">
							<!-- Card Header - Dropdown -->
							<div class="card-header">
								<h5 class="m-0 text-gray-800">Programación Estructurada</h5>
							</div>
							<!-- Card Body -->
							<div class="card border-left-success  m-3">
								<div class="card-body ">
									<div class="row ">
										<div class="col">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto facilis ipsam, vero aspernatur nihil magni dicta dolorum, deserunt qui voluptatum ducimus incidunt, vel quod pariatur vitae velit. Perferendis, iusto.</p>
											<ol type="a">
												<li>Respuesta a</li>
												<li>Respuesta b</li>
												<li>Respuesta c</li>
												<li>Respuesta d</li>
											</ol>
										</div>
										<div class="col">
											<hr>
											<ul style="list-style-type: none">
												<li>Nivel : Básico</li>
												<li>Fecha de adición : dd/mm/aaaa</li>
												<li>Estado: Activo</li>
												<li>CVU : XXXXXXXXXX</li>
											</ul>
											<hr>

										</div>

									</div>

									<div class="text-right"><a href="profesor-editar-reactivo.php">Editar</a></div>

								</div>

							</div>

							<div class="card border-left-success  m-3">
								<div class="card-body">
									<ul class="list-group">
										<div class="row">
											<div class="col">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto facilis ipsam, vero aspernatur nihil magni dicta dolorum, deserunt qui voluptatum ducimus incidunt, vel quod pariatur vitae velit. Perferendis, iusto.</p>
												<ol type="a">
													<li>Respuesta a</li>
													<li>Respuesta b</li>
													<li>Respuesta c</li>
													<li>Respuesta d</li>
												</ol>
											</div>
											<div class="col">
												<hr>
												<ul style="list-style-type: none">
													<li>Nivel : Básico</li>
													<li>Fecha de adición : dd/mm/aaaa</li>
													<li>Estado: Activo</li>
													<li>CVU : XXXXXXXXXX</li>
												</ul>
												<hr>

											</div>

										</div>
										<div class="text-right"><a href="profesor-editar-reactivo.php">Editar</a></div>

									</ul>
								</div>

							</div>

							<div class="card border-left-success  m-3">
								<div class="card-body">
									<ul class="list-group">
										<div class="row">
											<div class="col">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto facilis ipsam, vero aspernatur nihil magni dicta dolorum, deserunt qui voluptatum ducimus incidunt, vel quod pariatur vitae velit. Perferendis, iusto.</p>
												<ol type="a">
													<li>Respuesta a</li>
													<li>Respuesta b</li>
													<li>Respuesta c</li>
													<li>Respuesta d</li>
												</ol>
											</div>
											<div class="col">
												<hr>
												<ul style="list-style-type: none">
													<li>Nivel : Básico</li>
													<li>Fecha de adición : dd/mm/aaaa</li>
													<li>Estado: Activo</li>
													<li>CVU : XXXXXXXXXX</li>
												</ul>
												<hr>

											</div>

										</div>
										<div class="text-right"><a href="profesor-editar-reactivo.php">Editar</a></div>

									</ul>
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

    <!-- VENTANAS EMERGENTES  ------------------------------------------------------------------------------->
    
    
    <!-- Agregar Reactivo -->
	<div class="modal fade" id="reac1">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Header de la ventana -->
			<div class="modal-header">
				<h5 class="modal-title text-success">Agregar Reactivo</h5>
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<!-- Contenido de la ventana -->
			<div class="modal-body">
				<div class="text-center">
					<h4>Datos del reactivo</h4></div>
				<div class="text-center m-4">
					<select class="form-control">
						<option selected>Tipo de reactivo</option>
						<option>Directo</option>
						<option>Conjunto</option>
						<option>Complemento</option>
					</select>
				</div>
				<div class="text-center m-4">
					<select class="form-control">
						<option selected>Complejidad</option>
						<option>Basico</option>
						<option>Medio</option>
						<option>Avanzado</option>
					</select>
				</div>
			</div>
			<!-- Foooter de la ventana -->
			<div class="modal-footer">
				<a href="profesor-crear-reactivo.php" class="btn btn-success "> Aceptar </a>
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