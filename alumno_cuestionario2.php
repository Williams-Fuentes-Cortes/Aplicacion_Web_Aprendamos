<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alumno-Cuestionario</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">    

</head>

<body>
         	<!-- Topbar -->
	<nav class="navbar navbar-expand topbar mb-2 static-top shadow">
		  <div class="collapse text-gray-900 navbar-collapse" id="navbarNavDropdown">
			  <h5><i class="fas fa-book fa-sm"></i> Nombre del Cuestionario</h5></div>
	</nav>

  <div class="container">
                    

    <!-- Outer Row -->
    <div class="row justify-content-center">

     <div class="col-xl-9 col-lg-9 col-md-9">

       <div class="card o-hidden shadow-lg my-4  m-3 border-left-success">
          <div class="card-body p-0">
            
              
             <div class="row">
    
                <div class="col">

                    <div class="m-5 text-gray-900">
                
                        <div class="card">
                       <div class="pregresp">
                          <div class="h5 mb-0 pregunta mb-4">10.- Enunciado del reactivo<br /></div>
                              <div class="respuestas row">
                                 <div class="col">
                                    <ol type="a">
                                      <li><input  type="radio" name="preg1" value="1" checked /> A <i class="fas fa-fw fa-times"  ></i></li>
                                      <li><input type="radio" name="preg2" value="2" /> B </li>
                                      <li><input type="radio" name="preg3" value="3" /> C </li>
                                      <li><input type="radio" name="preg4" value="4" /> D <i class="fas fa-fw fa-check"></i>
                                      </li>
                                    </ol>
                                   
                                 </div>
                              </div>
                       </div>
                       </div>                    
            
                                                                              
                    <div class="text-left mt-2">      

                        <a href="alumno_materia_cuestionario.php" class="btn btn-secondary "> Salir </a>                      
                     	<a href="#info1" class="btn btn-success ml-2" data-toggle="modal"> Concluir </a> 
                      
                    </div>
                </div>
            </div>
                               
                                
                                   
          </div> 
           
           <div class="row">
           <div class="col offset-md-3">
            <nav aria-label="Page navigation">
              <ul class="pagination ">
                <li class=" page-item disabled ">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item "><a class="page-link" href="alumno_cuestionario.php">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item  active"><a class="page-link" href="alumno_cuestionario2.php">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            </div>
            </div>
            
          </div>
             
        </div>
        

      </div>

    </div>

  </div>


 <div class="modal fade" id="info1">
	 <div class="modal-dialog">
		 <div class="modal-content">
			 <!-- Header de la ventana -->
				  <div class="modal-header text-gray-900">
					 <h4 class="modal-title">Información</h4>
							<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				  </div>
			  <!-- Contenido de la ventana -->
			  <div class="modal-body row mr-0 ml-0 " >
					<div class="text-center text-gray-900 col"><h6>Correctas:</h6></div>
					<div class="text-center text-gray-900 col"><h6> 7/10</h6></div>
			  </div>

			  <div class="modal-body row  mr-0 ml-0" >
					<div class="text-center text-gray-900  col"><h6>Incorrectas:</h6></div>
					<div class="text-center text-gray-900  col"><h6> 3/10</h6></div>
			  </div>

				  <!-- Foooter de la ventana -->
			  <div class="modal-footer container my-auto" >
					 <div cl></div>
					  
					  <a href="alumno_materia_cuestionario.php" class="btn btn-success" >Aceptar </a> 
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
