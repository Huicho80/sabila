<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <title>Aloe Vera 100% Orgánica</title>
 <link rel="shortcut icon" href="img/logo.jpg">
 <link href="https://fonts.googleapis.com/CSS?family=Montserrat:400,700" rel="stylesheet
" type="text/CSS">
 <link href="https://fonts.googleapis.com/CSS?family=Lato:400,700,400italic,700italic" r
el="stylesheet" type="text/CSS">
 <link href="CSS/freelancer.min.CSS" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body background="img/green.jpeg" bgcolor="FFCECB">
    
      
<section class="page-section" id="contact">
    <div class="container">
        <br> <br>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registro nuevo</h2>
       <form action="registrar1.php" method="POST">
      
       
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="" class="formulario" id="formulario">
               <br>
                  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombre</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Nombre" required min ="4" && maxlength="45" name="nombre">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Apellidos </label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Apellidos" required min ="4" && maxlength="45" name="apellidos" >
    </div>
     </div>
  <div class="form-row">
        <div class="col-md-6 mb-3">
      <label for="validationDefault04">Correo electrónico</label>
      <input type="email" class="form-control" id="validationDefault04" name="correo"  placeholder="Email" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Telefóno</label>
      <input type="text" class="form-control" name="telefono" pattern="[0-9]{10}" placeholder="Número 10 digitos" required>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-4 mb-3">
      <label for="validationDefault05">Usuario</label>
      <input type="text" class="form-control"  name="user"  placeholder="Usuario" required>
    </div>
        <div class="col-md-4 mb-3">
      <label for="validationDefault05">Contraseña</label>
      <input type="password" class="form-control"  name="contrasena"  placeholder="Contraseña" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault05">Confirma contraseña</label>
      <input type="password" class="form-control" name="confirmar"  placeholder="Reingresa la contraseña" required>
    </div>
  </div>
  <div class="form-group">
    
  <button class="btn btn-primary" type="submit">Enviar</button>
  <button class="btn btn-secondary"  type="submit" onclick="regresar()">Iniciar sesion</button></button>
 
                                    </form>

                                </div>
                                </div>
                                
                                </div>
                                </section>
                                <script>
        function regresar() {
          // Aquí puedes redirigir a la página de registro de usuarios
          window.location.href = "index.html";
        }
      </script>
                            </body>
                                <footer class="footer text-center">
                                <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <h4 class="text-uppercase mb-4">Desarollador</h4>
                                        <p class="lead mb-0">José Luis García Serrano.
                                        <a href="http://unideh.edu.mx" style="color:#131212;">UNIDEH</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </footer ><section class="copyright py-4 text-center text-white">
                                <div class="container">
                                <small>  UNIDEH 2023</small>
                                </div>
                            </section>       

    
</html>



