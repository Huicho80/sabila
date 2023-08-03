<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php 
header("Content-Type: text/html;charset=utf8");
    session_start();
if(isset($_SESSION['u_usuario'])){

    include("conexion.php");
     
   
 
                                }

else{
   header("Location: index.html");
}
?>
 <title>Aloe Vera 100% Orgánica</title>
 <link rel="shortcut icon" href="img/logo.jpg">
 <link href="https://fonts.googleapis.com/CSS?family=Montserrat:400,700" rel="stylesheet" type="text/CSS">
 <link href="https://fonts.googleapis.com/CSS?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/CSS">
 <link href="CSS/freelancer.min.CSS" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<body id="page-top"></body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido: <?php echo $_SESSION['u_usuario']?></a>
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-5" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="producto.php">Productos</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contacto.php">Contacto</a>
                </li>
                
                <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html"><i class="fas fa-sign-out-alt"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

       </div><br><br><br>  
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">    
            <h1 class="masthead-heading text-uppercase mb0">Aloe Vera del Valle</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class='fa fa-star'></i>
                </div>
                <div class="divider-custom-line"></div>
                </div><p class="masthead-subheading font-weight-light mb-0">100% Orgánica</p>
                
            </div>
    </header>
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <br> <br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Vídeo</h2>
            <br> 
           <style>
  .video-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
  }
</style>

<div class="video-container">
  <video src="video/sabila.mp4" width="640" height="360" controls>
    Tu navegador no admite el elemento de video.
  </video>
</div>
                   
</div>
</section>   

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



