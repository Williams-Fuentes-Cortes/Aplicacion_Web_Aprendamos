<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador - Plan de estudios</title>

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
        <ul class="nav navbar-nav bg-success sidebar sidebar-dark" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand align-items-center justify-content-center " href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-cog"></i>
                </div>

                <div class="sidebar-brand-text mx-3">Administrador</div>
            </a>
            <br>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!--
        <div class="sidebar-heading">
        Interfaz
      </div>
        -->

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#" data-target="#mini" aria-expanded="true" aria-controls="mini">
                    <i class="fa fa-fw fa-users"></i>
                    <span id="letbar">Cuentas</span>
                </a>
                <div id="mini" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="administrador_alumnos.php">Alumnos</a>
                        <a class="collapse-item" href="administrador_profesor.php">Profesores</a>
                    </div>

                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="administrador_planestudios.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Materias</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="administrador_periodos.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Periodos</span></a>
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
                        <h5><i class="fas fa-book  fa-sm"></i> Materias</h5>
                    </div>

                    <button class="btn btn-sm btn-outline-danger" type="button" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>Cerrar sesi??n</button>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <div class="row pl-md-3 pr-md-3">

                        <!-- Area Chart -->
                        <div class="col ">
                            <div class="card shadow mb-4">

                                <!-- Card Body -->
                                <div class="card border-left-success m-3">
                                    <div class="card-header text-gray-800">
                                        <h5>Nombre del plan de estudios 1</h5></div>
                                    <div class="card-body">
                                        <div class=" row d-sm-flex align-items-center justify-content-between form-group">
                                            <div class="col-xs-12 ml-4 ">
                                                <a href="administrador_a??adirmateria.php" class="btn btn-outline-success">
                                                    <i class="fas fa-fw fa-plus-square">  </i> A??adir materia
                                                </a>
                                            </div>

                                            <li class="sidebar-search mr-4" style="list-style:none;">
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
                                        <div class="col table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">Nombre</th>
                                                        <th scope="col" class="text-center">Clave</th>
                                                        <th scope="col" class="text-center">Cr??dito</th>
                                                        <th scope="col" class="text-center">Horas</th>
                                                        <th scope="col" class="text-center">Profesor</th>
                                                        <th scope="col" class="text-center">Semestre</th>
                                                        <th scope="col" class="text-center"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="text-center">ED</th>
                                                        <td class="text-center">A2</td>
                                                        <td class="text-center">01</td>
                                                        <td class="text-center">15</td>
                                                        <td class="text-center">A</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center"><a class="" href="administrador_editarmateria.php">EDITAR</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-center">POO</th>
                                                        <td class="text-center">B5</td>
                                                        <td class="text-center">02</td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center"><a class="" href="administrador_editarmateria.php">EDITAR</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-center">ISW</th>
                                                        <td class="text-center">C4</td>
                                                        <td class="text-center">03</td>
                                                        <td class="text-center">15</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center">3</td>
                                                        <td class="text-center"><a class="" href="administrador_editarmateria.php">EDITAR</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="text-center">HPF</th>
                                                        <td class="text-center">D8</td>
                                                        <td class="text-center">04</td>
                                                        <td class="text-center">30</td>
                                                        <td class="text-center">B</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center"><a class="" href="administrador_editarmateria.php">EDITAR</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

    <!-- Logout Modal-->
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
                    <a class="btn btn-danger" href="login.php">Cerrar sesi??n</a>
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
