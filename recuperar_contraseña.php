<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Recuperar Contraseña</title>

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
            
            <div class="row">
             
              <div class="col"></div>
              
              <div class="col-lg-7 col-md-12">
                <div class="m-5">
                 
                  <div class="text-center">
                    <h1 class="h4 mb-2">Recuperar contraseña</h1>
                    <p class="mb-4"></p>
                  </div>
    
                  <form >
                   

                    <div class="form-label-group">
                        <input type="email" id="correo" class="form-control form-control-user" placeholder="Correo Electrónico" required="required" autofocus="autofocus">
                        <label for="correo">Correo Electrónico</label>
                    </div><br>
                    
                    <select class="form-control">
                        <option value="0">Elegir pregunta</option>
                        <option value="1">¿Cuál es el nombre de tu mejor amigo(a)?</option>
                        <option value="2">¿Cuál es el nombre de tu primera mascota?</option>
                        <option value="3">¿Cuál es el nombre de tu mamá?</option>
                    </select>
                    <br>
                    
                    <div class="form-label-group">
                        <input type="texto" id="resp" class="form-control" placeholder="Respuesta" required="required">
                        <label for="resp">Respuesta</label>
                    </div>   
                    <br>
                  </form>
                  


                  <div class="text-right"> 
                     <a href="index.php" class="btn btn-secondary"> Regresar </a>
                     <a href="#info1" class="btn btn-success" data-toggle="modal"> Enviar </a> 
                     
                     
                  </div>


                </div>
              </div>
              
              <div class="col"></div>
              
            </div>
            
            
          </div>
        </div>

      </div>

    </div>

  </div>
  


    <!-- Información - Habilitar Cuestionario -->
	<div class="modal fade" id="info1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Header de la ventana -->
				<div class="modal-header  text-gray-900">
					<h5 class="modal-title">Información</h5>
					<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<!-- Contenido de la ventana -->
				<div class="modal-body text-gray-900">Se ha enviado la contraseña al correo electrónico</div>
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
