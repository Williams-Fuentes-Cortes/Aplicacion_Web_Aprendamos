<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--
    <link href="css/sb-admin-2.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    -->
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link href="css/sb-admin.css" rel="stylesheet">
	  <link href="css/sb-admin-2.min.css" rel="stylesheet">    
	  <link rel="stylesheet" type="text/css" href="css/style2.css" />
	  
    <title>Universidad de lstmo - Login</title>
  </head>
  <body>
     
      <div class="container">
         <div class="row align-items-center">

            
            <div class="col">
                  
                  <h1 class="display-3 text-success">¡Bienvenido!</h1><br>
                    <p class="lead">Esta plataforma te ofrece una gran variedad de cuestionarios para ayudarte a estudiar en las materias que se te dificulten</p>
                    <hr class="my-4">
                    <ul>
                        <li class="mb-3">Exámenes personalizdos de acuerdo a la dificultad que desees.</li>
                        <li class="mb-3">Estadísticas en tiempo real de tu desempeño.</li>
                    </ul>
                    <div class="text-center d-flex justify-content-between my-4">   
                        <a href="http://www.unistmo.edu.mx"><img src="recursos/images/logo1.png" class="rounded float-left" alt="unistmo"></a>
                        <a href="http:/www.unistmo.edu.mx/~computacion"><img src="recursos/images/comp.png" class="rounded float-right" alt="computacion"></a>
                        
                    </div>
                    
            </div>
            
            
            <div class="col">
               <div class="login-container d-flex align-items-center justify-content-center">
                  <form class="login-form" method="post" name="loginform" onsubmit="return validateForm(this);" action="">
                     <h1 class="display-4 mb-2">Ingresar</h1>
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuario" required name="usr">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" required name="pword">
                     </div>
                     <div class="forgot-link d-flex justify-content-between">
                         <div class="form-check">
                             <input type="checkbox" class="form-check-input " id="recordar">
                             <label for="recordar">Recordar Contraseña</label>
                         </div>
                         <p><a href="recuperar_contrase%C3%B1a.php" >Olvide mi contraseña</a></p> 

                     </div>
                     <div class="row">
                         <div class="col-md-8 col-sm-6 text-left">
                          <p class="font-weight-bold"><a href="registro.php" class="text-success"><strong>Registrate aquí</strong></a></p> 
                         	
                         </div>
                         <div class="col-md-4 col-sm-6 text-right">
                          	<a href="#"><button type="button" class="btn btn-success">Ingresar</button></a>
                         	
                         </div>
                     	
                     </div>

                  </form>
               </div>    
            </div>
            
         </div>
      </div>
      
<!--     <script type="text/javascript">
        function validateForm() {
            var un = document.loginform.usr.value;
            var pw = document.loginform.pword.value;
            var username = "username"; 
            var password = "password";
            
            if ((un == username) && (pw == password)) {
                alert("Welcome");
                window.location="http://www.unistmo.edu.mx";
                return true;
            }
            else {
                alert ("Login was unsuccessful, please check your username and password");
                return false;
            }
        }
      </script>    --> 
        
  </body>
</html>