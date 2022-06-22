<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Crear - Reactivo</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/sb-admin.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrapper">   
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
                   	    	
	<!-- Topbar -->
	<nav class="navbar navbar-expand topbar mb-2 static-top shadow">
		  <div class="collapse text-gray-900 navbar-collapse" id="navbarNavDropdown">
			  <h5><i class="fas fa-book fa-sm"></i> Repositorio <i class="fas ml-2 mr-2 fa-arrow-right  fa-sm"></i> Reactivo Materia <i class="fas ml-2 mr-2 fa-arrow-right  fa-sm"></i> Crear Reactivo</h5>
			  </div>
	</nav>
	<!-- End of Topbar -->      
   
    <!-- Begin Page Content -->
    <div class="container-fluid">
       
        <!-- Content Row -->

        <div class="row pl-md-3 pr-md-3">

            <div class="col-xl-9 col-sm-12">

                <div class="card shadow border-left-success">
                    <!-- Card Header - Dropdown -->

                    <div class="card-header">
                        <h5 class="m-0 text-gray-800">Programación Estructurada</h5>
                    </div>
                    <!-- Card Body -->

                    <div class="card-body">

                            <div class="row pl-3">
                                <h5>Tipo de Reactivo : Directo / Complemento / Conjunto</h5></div>
                            <div class="row pl-3">
                                <h5>Complejidad: Basico / Medio / Avanzado</h5></div>
                            <div class="flex-row">
                                <div class="form-group pl-2 pr-5 pt-3">
                                    <textarea class="form-control rounded-2" rows="5" placeholder="Escriba el enunciado de la reactivo..."></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-xs-12">

                                    <h5>Ingrese las posibles respuestas </h5>

                                    <div class="form-group row pl-4">

                                        <h5>a)</h5>
                                        <div class="col-sm-8">
                                            <input id="ra" class="form-control" type="text" placeholder="Respuesta 1">
                                        </div>
                                    </div>
                                    <div class="form-group row pl-4">
                                        <h5>b)</h5>
                                        <div class="col-sm-8">
                                            <input id="ra" class="form-control" type="text" placeholder="Respuesta 2">
                                        </div>
                                    </div>
                                    <div class="form-group row pl-4">
                                        <h5>c)</h5>
                                        <div class="col-sm-8">
                                            <input id="ra" class="form-control" type="text" placeholder="Respuesta 3">
                                        </div>
                                    </div>
                                    <div class="form-group row pl-4">
                                        <h5>d)</h5>
                                        <div class="col-sm-8">
                                            <input id="ra" class="form-control" type="text" placeholder="Respuesta 4">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-7">
                                            <h5>Seleccione la respuesta correcta :</h5> </div>

                                        <div class="form-group">
                                            <select class="form-control">
                                                <option selected>a)</option>
                                                <option>b)</option>
                                                <option>c)</option>
                                                <option>d)</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="form-group row">
                                        <h5>Estado del reactivo :</h5>

                                        <div class="form-group col-6">
                                            <select class="form-control">
                                                <option selected>A medio terminar</option>
                                                <option>Disponible</option>
                                                <option>Obsoleto</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="text-right">
                                <a href="#cancel" class="btn btn-secondary" data-toggle="modal"> Cancelar</a>
                                <a href="#info1" class="btn btn-success " data-toggle="modal"> Crear Reactivo</a>

                            </div>

                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-sm-0">
                <div class="card shadow border-left-info">
                    <div class="card-header">
                    	<p class="m-0 text-gray-800">Información</p>
                    </div>
                    <div class="card-body py-3 align-items-center justify-content-between">
                        <p>Las preguntas directas se construyen de la siguiente manera.
                            <br> Ejemplo
                            <br> - Enunciado
                            <br> a) Respuesta 1
                            <br> b) Respuesta 2
                            <br> c) Respuesta 3
                            <br> d) Respuesta 4
                            <br>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

	</div>
	</div>
	</div> 
    
    
     <!-- VENTANAS EMERGENTES  ------------------------------------------------------------------------------->

    <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content">
                <!-- Header de la ventana -->
                <div class="modal-header text-gray-900">
                    <h5 class="modal-title">Advertencia</h5>
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- Contenido de la ventana -->
                <div class="modal-body text-gray-900">¿Está seguro de crear este reactivo?</div>
                <!-- Foooter de la ventana -->
                <div class="modal-footer">
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<a href="#guar1" class="btn btn-success" data-toggle="modal" data-dismiss="modal" > Si </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="crear1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" role="document">
                <!-- Header de la ventana -->
                <div class="modal-header text-gray-900">
                    <h5 class="modal-title">Información</h5>
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- Contenido de la ventana -->
                <div class="modal-body text-gray-900">Reactivo creado con éxito.</div>
                <!-- Foooter de la ventana -->
                <div class="modal-footer">      
                        <a href="profesor-cuestionarios.php" class="btn btn-success"> Aceptar </a>
                </div>
            </div>
        </div>
    </div>
                               
   <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Header de la ventana -->
                <div class="modal-header text-gray-900">
                    <h5 class="modal-title">Advertencia</h5>
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- Contenido de la ventana -->
                <div class="modal-body text-gray-900">¿Está seguro de cancelar la creación de este cuestionario?<br>No se guardará el trabajo realizado.</div>
                <!-- Foooter de la ventana -->
                <div class="modal-footer">
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<a href="profesor-repositorio-materia.php" class="btn btn-success"> Si </a>
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