<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profesor - Editar - Cuestionario</title>

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
			  <h5><i class="fas fa-align-justify fa-sm"></i> Cuestionarios <i class="fas ml-2 mr-2 fa-arrow-right  fa-sm"></i> Editar Cuestionario</h5>
			  </div>
	</nav>
	<!-- End of Topbar -->      

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row pl-md-3 pr-md-3">

            <div class="col">

                <div class="card shadow border-left-success">
                    <!-- Card Header - Dropdown -->

                    <div class="card-header">
                        <h5 class="m-0 text-gray-800">Programación Estructurada</h5>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                            <div class="row pl-3">
                               <div class="col-xl-3 col-xs-12"><h5>Nombre del Cuestionario</h5></div>
                               <div class="col"><h5>Complejidad: Basico / Medio / Avanzado</h5></div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-xs-12 pt-2">
                                <div class="card shadow">
                                <div class="row">
                                    <div class="col text-center pt-2">Vista previa del Cuestionario</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col m-3">
                                        <div class="card">
                                          <ul class="list-group list-group-flush ">
                                            <li class="list-group-item">
                                            <div class="row">
                                                <div class="col pl-4">    
                                                <input type="checkbox" class="custom-control-input" id="vist1">
                                                <label class="custom-control-label" for="vist1">Enunciado del reactivo ...</label>
                                                </div>
                                            </div>
                                            <div class="row pl-4">a)Respuesta1 b)Respuesta2 <br>a)Respuesta3 b)Respuesta4</div>
                                            <div class="row">
                                                <div class="col text-right">Tipo</div>
                                            </div>
                                            </li>
                                            <li class="list-group-item">
                                            <div class="row">
                                                <div class="col pl-4">    
                                                <input type="checkbox" class="custom-control-input" id="vist2">
                                                <label class="custom-control-label" for="vist2">Enunciado del reactivo ...</label>
                                                </div>
                                            </div>
                                            <div class="row pl-4">a)Respuesta1 b)Respuesta2 <br>a)Respuesta3 b)Respuesta4</div>
                                            <div class="row">
                                                <div class="col text-right">Tipo</div>
                                            </div>
                                            </li>
                                            <li class="list-group-item">
                                            <div class="row">
                                                <div class="col pl-4">    
                                                <input type="checkbox" class="custom-control-input" id="vist3">
                                                <label class="custom-control-label" for="vist3">Enunciado del reactivo ...</label>
                                                </div>
                                            </div>
                                            <div class="row pl-4">a)Respuesta1 b)Respuesta2 <br>a)Respuesta3 b)Respuesta4</div>
                                            <div class="row">
                                                <div class="col text-right">Tipo</div>
                                            </div>
                                            </li>                                                                                        

                                          </ul>
                                        </div>

                                        <div class="row pt-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="0">Estado</option>
                                                        <option value="1">Inconcluso</option>
                                                        <option value="2">Disponible</option>
                                                        <option value="3">Obsoleto</option>
                                                    </select>
                                                </div>                                                
                                            </div>
                                            <div class="col text-right">
                                            <button tyle="button" class="btn btn-secondary">Remover selección</button>
                                            </div>                                            
                                        </div>                                                                                                                                                                             
                                                                                                          
                                                                          
                                    </div>   
                                    
                                </div>
                                </div>


                                </div>

                                <div class="col-xl-6 col-xs-12 pt-2">
                                    <div class="card shadow">
                                        <div class="row m-2">
                                            <div class="col">
                                                <p>Complejidad : Avanzado</p>                                                 
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="0">Tipo de Reactivo</option>
                                                        <option value="1">Directo</option>
                                                        <option value="2">Complemento</option>
                                                        <option value="3">Conjuntos</option>
                                                    </select>
                                                </div>                                                  
                                            </div>                                            
                                        </div>  
                                        
                                        
                                        
                                        <div class="row">
                                             <div class="col offset-1 " >
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Enunciado del reactivo</label>
                                                    
                                                  </div> 
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck2">
                                                    <label class="form-check-label" for="exampleCheck2">Enunciado del reactivo</label>
                                                  </div>                                                                                       <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck3">
                                                    <label class="form-check-label" for="exampleCheck3">Enunciado del reactivo</label>
                                                  </div>      
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck4">
                                                    <label class="form-check-label" for="exampleCheck4">Enunciado del reactivo</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck5">
                                                    <label class="form-check-label" for="exampleCheck5">Enunciado del reactivo</label>
                                                  </div>                                                                                       <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck6">
                                                    <label class="form-check-label" for="exampleCheck6">Enunciado del reactivo</label>
                                                  </div>       
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck7">
                                                    <label class="form-check-label" for="exampleCheck7">Enunciado del reactivo</label>
                                                  </div>                                                                                       <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck8">
                                                    <label class="form-check-label" for="exampleCheck8">Enunciado del reactivo</label>
                                                  </div>      
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck9">
                                                    <label class="form-check-label" for="exampleCheck9">Enunciado del reactivo</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" value="" id="exampleCheck10">
                                                    <label class="form-check-label" for="exampleCheck10">Enunciado del reactivo</label>
                                                  </div>                                                                                                                                         
                                             </div>
                                             
                                             
                                              
                                           
                                        </div> 
                                        
                                        <div class="row">
                                            <div class="col m-2 text-right">
                                                <button tyle="button" class="btn btn-secondary">Remover selección</button>
                                            </div>
                                        </div>

                                </div>

                            </div>


                        </div>
                            <div class="row m-2">
                                <div class="col text-right">
                                <a href="#cancel" class="btn btn-secondary" data-toggle="modal"> Cancelar</a>      
                                <a href="#edit" class="btn btn-success " data-toggle="modal"> Editar Cuestionario</a>
                                </div>
                            </div>                        

                    </div>
            </div>


        </div>

    </div>
    <!-- /.container-fluid -->

       
    
    </div>

    </div>
	</div>
	</div> 
   
   
    <!-- VENTANAS EMERGENTES  ------------------------------------------------------------------------------->
    
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"  role="document">
            <div class="modal-content">
                <!-- Header de la ventana -->
                <div class="modal-header text-gray-900">
                    <h5 class="modal-title">Advertencia</h5>
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <!-- Contenido de la ventana -->
                    <div class="modal-body" >
                        <div class="text-body text-gray-900">¿Está seguro de editar este cuestionario?</div>
                    </div>    

                <!-- Foooter de la ventana -->
                <div class="modal-footer">
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<a href="#edit1" class="btn btn-success" data-toggle="modal" data-dismiss="modal" > Si </a>
                </div>
            </div>
        </div>
    </div>
    
	<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header  text-gray-900">
					<h5 class="modal-title">Información</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				
                    <div class="modal-body" >
                        <div class="text-body text-gray-900">Cuestionario editadón con éxito.</div>
                    </div>  
				<!-- Foooter de la ventana -->
				<div class="modal-footer">
					<a href="profesor-cuestionarios.php" class="btn btn-success "> Aceptar </a>
				</div>
			</div>
		</div>
	</div>        
    
    <!-- Advertencia - cancelar Cuestionario -->
    <div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Header de la ventana -->
                <div class="modal-header text-gray-900">
                    <h5 class="modal-title">Advertencia</h5>
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <!-- Contenido de la ventana -->
                
                    <div class="modal-body" >
                        <div class="text-body text-gray-900">¿Está seguro de cancelar la edicion de este cuestionario?<br>No se guardarán los cammbios realizados.</div>
                    </div> 
                <!-- Foooter de la ventana -->
                <div class="modal-footer">
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button tyle="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					<a href="profesor-cuestionarios.php" class="btn btn-success"> Si </a>
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