<?php
/*
* Este archio muestra los productos en una tabla.
*/
header("Content-Type: text/html;charset=utf8");
    session_start();
if(isset($_SESSION['u_usuario'])){

    include("conexion.php");
     
   
 
                                }

else{
   header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Aloe Vera 100% Orgánica</title>
 <link rel="shortcut icon" href="img/logo.jpg">
 <link href="CSS/freelancer.min.CSS" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido: <?php echo $_SESSION['u_usuario']?></a>
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
       
            <ul class="navbar-nav ml-auto">
			<li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./cart.php"><i class="fas fa-shopping-cart"></i></a>
                </li>
				<li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="producto.php">Productos</a>
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Productos</h1>
			<a href="./cart.php" class="btn btn-warning">Ver Carrito</a>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $conexion->query("select * from product");
?>
<table class="table table-bordered">
<thead>
	<th>Producto</th>
	<th>Precio</th>
	<th></th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):?>
<tr>
	<td><?php echo $r->name;?></td>
	<td>$ <?php echo $r->price; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;

	if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
	?>
	<?php if($found):?>
		<a href="cart.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="./php/addtocart.php">
	<input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
	  <div class="form-group">
	    <input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
	  </div>
	  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>	
	<?php endif; ?>
	</td>
</tr>
<?php endwhile; ?>
</table>
		</div>
	</div>
</div>
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