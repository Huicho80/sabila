<!DOCTYPE html>
<html lang="en">
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
 <link href="CSS/freelancer.min.CSS" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-VoPFwpx3sQCkhEcWIiK2VR3Ig6IyfS8E4Lc4drkpxzCU9SpMfPqBDv9TE9KA6KEs" crossorigin="anonymous">
	<link rel="stylesheet" href="cs/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
	
</head>
<div class="search_bar">
		<input type="text" id="search_input" placeholder="Buscar productos...">
		<button class="search_button"><i class="fa fa-search"></i></button>
	</div>
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
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>

            </form>
            <ul class="navbar-nav ml-auto">
			<li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Fotos</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Beneficios</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="inicio.php">Inicio</a>
                </li>
				<li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html"><i class="fas fa-sign-out-alt"></i></a>
                </li>
               
                
            </ul>
        </div>
    </div>
</nav>


	
			<section class="page-section portfolio" id="portfolio">
				
	<div class="wrap">
		<h1>Productos disponibles</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="plantas">Plantas</a>
				<a href="#" class="category_item" category="pulpa">Pulpa en trozo</a>
				<a href="#" class="category_item" category="molida">Pulpa Molida</a>
				<a href="#" class="category_item" category="penca">Penca</a>
				
			</div>
			
			<section class="products-list">

<div class="product-item" category="plantas">
    <input type="hidden" name="product_id" value="1">
    <img src="img/sab1.png" alt="">
    <a href="#">Planta grande $150 pieza</a>
	
</div>
				
<div class="product-item" category="plantas">
    <input type="hidden" name="product_id" value="2">
    <img src="img/sabchica.png" alt="">
    <a href="#">Planta chica $50 pieza</a>
   
</div>

				<div class="product-item" category="pulpa">
				<input type="hidden" name="product_id" value="3">
					<img src="img/sab3.jpg" alt="" >
					<a href="#">Pulpa en trozo 1 lt: $100</a>
				
				</div>
				<div class="product-item" category="pulpa">
				<input type="hidden" name="product_id" value="4">
					<img src="img/sab6.jpg" alt="" >
					<a href="#">Pulpa en trozo 1/2 lt: $60</a>
					
				</div>
				<div class="product-item" category="molida">
				<input type="hidden" name="product_id" value="5">
					<img src="img/sab5.jpg" alt="" >
					<a href="#">Pulpa molida 1 lt: $120</a>
					
				</div>
                <div class="product-item" category="molida">
				<input type="hidden" name="product_id" value="6">
					<img src="img/sab7.jpg" alt="" >
					<a href="#">Pulpa molida colada 1 lt: $150</a>
					
				</div>
				<div class="product-item" category="penca">
				<input type="hidden" name="product_id" value="7">
					<img src="img/penca1.jfif" alt="" >
					<a href="#">Penca individual: $20</a>
				
				</div>
				<div class="product-item" category="penca">
				<input type="hidden" name="product_id" value="8">
					<img src="img/sab2.jpg" alt="" >
					<a href="#">Penca mayoreo: $15</a>
				
				</div>
				
			</section>
		</div>
	</div>
	
	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">
			<br> <br> 
	
			<div class="row">
			   
			<h2 class="page-section-heading text-center text-uppercase text-white">8 beneficios de la sábila para tu salud</h2>
			<br>
		</div>  <h4 p class="text-center"></p>
	
			<div class="col-lg-4 ml-auto">
		   
			</div>
			<br>
			
				<p class="lead">1. La sábila para el manejo de la diabetes</p>
				<p class="lead">2. Problemas digestivos</p>
				<p class="lead">3. Asma</p>
				<p class="lead">4. Aliviaría el dolor causado por las quemaduras y las irritaciones</p>
				<p class="lead">5. Aliviaría la presencia de acné</p>
				<p class="lead">6. Disminuiría las grasas del organismo</p>
				<p class="lead">7. La sábila fortalecería el sistema inmunitario</p>
				<p class="lead">8. Antiinflamatorio natural</p>
				
				<br>
		   
				
		
	</div>  
	
	</section>
    
</body>
<script>
    function agregarAlCarrito() {
        // Obtener los detalles del producto
        var productItem = event.target.parentNode;
        var productId = productItem.querySelector('input[name="product_id"]').value;
        var productName = productItem.querySelector('a').innerText;
        var productPrice = 50; // Precio del producto (ejemplo)

        // Crear un objeto de producto con los detalles obtenidos
        var product = {
            id: productId,
            name: productName,
            price: productPrice
        };

        // Enviar el objeto de producto al servidor
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'agregar_al_carrito.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Redireccionar a la página carrito.php
                window.location.href = "carrito.php";
            }
        };
        xhr.send(JSON.stringify(product));
    }
</script>


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