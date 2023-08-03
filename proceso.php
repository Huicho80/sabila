<?php

@session_start();
$u = $_POST['nombre'];
$contra = $_POST['contrasena'];
$user = strtoupper($u);

include("conexion.php");
$consul = $conexion -> query("SELECT * FROM usuario WHERE Usuario='$user' AND Contrasena='$contra'");
	if($nose = mysqli_fetch_array($consul)){
	$_SESSION['u_usuario'] = $user;
    print '<script language="JavaScript">'; 
    print 'alert("Has ingresado con éxito");'; 
    print 'window.location="inicio.php";'; 
    print '</script>';  
	}
	else{
	print '<script language="JavaScript">'; 
    print 'alert("Verifica tu Usuario o Contraseña.");'; 
    print 'window.location="index.html";'; 
    print '</script>';  
	}
?>


	