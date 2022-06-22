<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registrar Profesor 2</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">    
  <link rel="stylesheet" type="text/css" href="css/style2.css" />

</head>

<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-10">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
                            
          <div class="text-center">
           <br>
            <h1 class="h4 mb-2">Registro Profesor 2</h1>
        
          </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
               
                <div class="m-4">

                  <form>
                  
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="required" autofocus="autofocus">
                      <label for="correo">Correo electrónico</label>
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="usuario" class="form-control" placeholder="Usuario" required="required">
                        <label for="usuario">Usuario</label>
                    </div>
                  </div>          
   
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
                      <label for="inputPassword">Contraseña</label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="form-label-group">
                      <input type="password" id="confirmPassword" class="form-control" placeholder="Repetir contraseña" required="required">
                      <label for="confirmPassword">Repetir contraseña</label>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <select class="form-control">
                        <option value="0">Elegir pregunta de seguridad</option>
                        <option value="1">¿Cuál es el nombre de tu mejor amigo(a)?</option>
                        <option value="2">¿Cuál es el nombre de tu primera mascota?</option>
                        <option value="3">¿Cuál es el nombre de tu mamá?</option>
                  </select>                 
                  </div>
                   
                  <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="respuesta" class="form-control" placeholder="Respuesta" required="required">
                        <label for="respuesta">Respuesta</label>
                    </div>
                  </div>
                    
                    

                                   
                    <div class="text-right">      
                     <a href="index.php" class="btn btn-secondary"> Cancelar </a>
                     <a href="registro_profesor1.php" class="btn btn-secondary "> Regresar </a>    
                     <a href="#reg1" class="btn btn-success" data-toggle="modal"> Registrarse </a> 
                     
                     
                     
                     
                  </div>    
                                    
                  </form>

         

                </div>
              </div>
              
              <div class="col-lg-6 text-center">
                  <img src="recursos/images/img-prof.jpg" class=" img-center">
              </div>                
            </div>

              
            
            
            
          </div>
        </div>

      </div>

    </div>

  </div>


 
	<div class="modal fade" id="reg1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header  text-gray-900">
					<h5 class="modal-title">Información</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				<div class="modal-body text-gray-900">Registro Exitoso</div>
				<!-- Foooter de la ventana -->
				<div class="modal-footer">
					<a href="index.php" class="btn btn-success "> Aceptar </a>
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