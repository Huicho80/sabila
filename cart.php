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
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./products.php">Productos</a>
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
			<h1>Carrito</h1>
			<a href="./products.php" class="btn btn-default">Productos</a>
			<br><br>
<?php
/*
* Esta es la consulta para obtener todos los productos de la base de datos.
*/
$products = $conexion->query("select * from product");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-bordered">
<thead>
	<th>Cantidad</th>
	<th>Producto</th>
	<th>Precio Unitario</th>
	<th>Total</th>
	<th></th>
</thead>
<?php 
/*
* Recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $conexion->query("SELECT * from product where id=$c[product_id]");
$r = $products->fetch_object();
	?>
<tr>
<th><?php echo $c["q"];?></th>
	<td><?php echo $r->name;?></td>
	<td>$ <?php echo $r->price; ?></td>
	<td>$ <?php echo $c["q"]*$r->price; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}
	?>
		<a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger">Eliminar</a>
	</td>
</tr>
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="./php/process.php">
<div class="form-row">
    <div class="col-md->5 mb-3">
      <label for="validationDefault01">Nombre Completo</label>
      <input type="text" class="form-control"  placeholder="Nombre" required min ="4" && maxlength="45" name="nombre" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Dirección </label>
      <input type="text" class="form-control"  placeholder="Dirección" required min ="4" && maxlength="45" name="direccion" required>
    </div>
     </div>
  <div class="form-row">
        <div class="col-md-5 mb-3">
      <label for="validationDefault04">Correo electrónico</label>
      <input type="email" class="form-control"  name="correo"  placeholder="Email" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Telefóno</label>
      <input type="text" class="form-control" name="telefono" pattern="[0-9]{10}" placeholder="Número 10 digitos" required>
    </div>
	</div>
	<br>
  <div class="form-group">
	
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
  
</form>


<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>



		</div>
	</div>
</div>
<div>
	</div
</body>
<br><br><hr><br><br><hr><br><br><hr>
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