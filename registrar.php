<?php
	//conexion con la base de datos y el servidor
	include("conexion.php");

	//obtenemos los valores del formulario
	 $nombre = $_POST['nombre'];
	 $paterno = $_POST['paterno'];
	 $materno = $_POST['materno']; 
	 $edad = $_POST['edad'];
    $email = $_POST['email']; 
    $telefono = $_POST['telefono']; 
    

    if($telefono == ""){

    print '<script language="JavaScript">'; 
    print 'alert("Falta el número telefónico.");'; 
    print 'window.history.back();'; 
    print '</script>';     
 }

else{
	//ingresamos la informacion a la base de datos
	
	$sqlin="INSERT INTO contacto(id_socio,nombre,paterno,materno,edad,email,telefono) VALUES (NULL,'$nombre','$paterno','$materno','$edad','$email',
		'$telefono')";
    $result=$conexion->query($sqlin);
}
     if ($result == TRUE) { 

	print '<script language="JavaScript">'; 
    print 'alert("Guardado Con Éxito");'; 
    print 'location.href="inicio.php";'; 
    print '</script>'; 
	}
 
   else { echo "Error: " . $sqlin . "<br>" . $conexion->error; }   
 
    

?>







