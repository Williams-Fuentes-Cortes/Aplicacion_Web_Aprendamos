<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registrar Profesor 1</title>

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

    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-10">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
                            
          <div class="text-center">
           <br>
            <h2 class="h4 mb-2">Registro Profesor 1</h2>
          </div>
         
           
           <div class="row">
               
              <div class="col-lg-6 col-md-12">
               
                <div class="m-4">

                  <form>
                  <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="nombre" class="form-control" placeholder="Nombre" required="required" autofocus="autofocus">
                        <label for="nombre">Nombre</label>
                    </div>
                  </div> 
                  
                
                  <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="ape_paterno" class="form-control" placeholder="Apellido paterno" required="required" autofocus="autofocus">
                        <label for="ape_paterno">Apellido paterno</label>
                    </div>
                  </div> 
      
                  <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="ape_materno" class="form-control" placeholder="Apellido materno" required="required" autofocus="autofocus">
                        <label for="ape_materno">Apellido materno</label>
                    </div>
                  </div> 
                  
                  <div class="form-group">
                  <select class="form-control">
                        <option value="0">Grado maximo de estudios</option>
                        <option value="1">Licenciatura / Ingeniería</option>
                        <option value="2">Maestria</option>
                        <option value="3">Doctorado</option>
                  </select>                 
                  </div>
                  
                   <div class="text-right">           
                     <a href="index.php" class="btn btn-secondary"> Cancelar </a>
                     <a href="registro_profesor2.php" class="btn btn-success"> Continuar </a> 
                     
                  </div>                                                                        
                                                                        
                                                                         
                  </form>
                  
               
              </div>
              </div>
              
              <div class="col-lg-6 text-center">
                  <img src="recursos/images/img-prof.jpg" class=" img-center p-2">
              </div>               
               
           </div>
            
              

          
            
            
          </div>
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