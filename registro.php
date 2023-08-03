<?php
	//conexion con la base de datos y el servidor
	include("conexion.php");

	//obtenemos los valores del formulario
	 $nombre = $_POST['nombre']; 
    $email = $_POST['email']; 
    $telefono = $_POST['telefono']; 
    $mensaje = $_POST['mensaje']; 

   
	//ingresamos la informacion a la base de datos
	
	$sqlin="INSERT INTO contacto(nombre,email,telefono,mensaje) VALUES ('$nombre','$email','$telefono','$mensaje')";
    $result=$conexion->query($sqlin);

     if ($result == TRUE) { 

	print '<script language="JavaScript">'; 
    print 'alert("Guardado Con Éxito");'; 
    print 'location.href="principal.html";'; 
    print '</script>'; 
	}
 
   else { echo "Error: " . $sqlin . "<br>" . $conexion->error; }   
 
    

?>







