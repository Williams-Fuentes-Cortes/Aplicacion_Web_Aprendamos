<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Repositorio</title>

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
            
            <!--
            <div class="text-center mb-4"><a href="index.php">cerrar sesión</a></div>-->
            <hr>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-md-block">

            <!-- Heading --
            <div class="sidebar-heading">Interfaz</div>-->

            <li class="nav-item active">
                <a class="nav-link" href="profesor-repositorio.php"><i class="fas fa-fw fa-book "></i>
                <span>Repositorio</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-alumnos.php"><i class="fas fa-fw fa-users"></i>
                <span id="letbar">Alumnos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-cuestionarios.php"><i class="fas fa-fw fa-align-justify"></i>
                <span>Cuestionarios</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profesor-avisos.php"><i class="fas fa-fw fa-bell"></i>
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
                          <h5><i class="fas fa-book fa-sm"></i> Repositorio</h5>
                        
                          </div>
                          
                      <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesión</button>

                </nav>
                <!-- End of Topbar -->                

                                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                    <!-- Content Row -->
                    <div class="row pl-md-3 pr-md-3">

                        <!-- Area Chart -->
                        <div class="col ">
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header">
                                    <h5 class="m-0 text-gray-800">Materias</h5>
                                </div>
                                <!-- Card Body -->
                                <div class="card border-left-success m-3">
                                    <div class="card-header">1er Semestre</div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <a href="profesor-repositorio-materia.php">
                                                <li class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                                                    Programación Estructurada<span class="badge badge-primary badge-pill">14</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                                                    Química<span class="badge badge-primary badge-pill">25</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Física<span class="badge badge-primary badge-pill">10</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Filosofía<span class="badge badge-primary badge-pill">3</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Precálculo<span class="badge badge-primary badge-pill">5</span></li>
                                            </a>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card border-left-success m-3">
                                    <div class="card-header">3er Semestre</div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                                                    Progamación Orientada a Objetos<span class="badge badge-primary badge-pill">14</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between list-group-item-action align-items-center list-group-item-success">
                                                    Diseño Digital<span class="badge badge-primary badge-pill">25</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Matematicas Discretas<span class="badge badge-primary badge-pill">10</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Teoría de la Computación<span class="badge badge-primary badge-pill">3</span></li>
                                            </a>
                                            <a href="#">
                                                <li class="list-group-item d-flex justify-content-between  list-group-item-success  align-items-center list-group-item-success">
                                                    Cálculo Integral<span class="badge badge-primary badge-pill">5</span></li>
                                            </a>

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