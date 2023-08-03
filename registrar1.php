<?php
	//conexion con la base de datos y el servidor
	include("conexion.php");

	//obtenemos los valores del formulario
	 $nombre = $_POST['nombre'];
	 $apellidos = $_POST['apellidos'];
	 $correo = $_POST['correo']; 
    $telefono = $_POST['telefono']; 
    $user = $_POST['user']; 
	 $contrasena = $_POST['contrasena'];
     $confirmar = $_POST['confirmar']; 
	

    if($telefono != NULL){
$nume1 = $conexion -> query("SELECT * FROM usuario WHERE Telefono = '$telefono'");
                    }
 
 if($correo != NULL){
$nume2 = $conexion -> query("SELECT * FROM usuario WHERE correo = '$correo'");
                    }


if($nose = mysqli_fetch_array($nume1) || $nose = mysqli_fetch_array($nume2)){
    print '<script language="JavaScript">'; 
    print 'alert("Al parecer ya existe un registro con el correo o número telefónico!!.");'; 
    print 'window.history.back();'; 
    print '</script>';     
 }
 if ($contrasena !== $confirmar) {
    print '<script language="JavaScript">'; 
    print 'alert("No coincide la contraseña!!.");'; 
    print 'window.history.back();'; 
    print '</script>';  
 }

else{
	//ingresamos la informacion a la base de datos
	
	$sqlin="INSERT INTO usuario(id_usuario,nombre,apellidos,correo,telefono,Usuario,Contrasena,confirmar) 
    VALUES (NULL,'$nombre','$apellidos','$correo','$telefono','$user','$contrasena','$confirmar')";
    $result=$conexion->query($sqlin);
}
     if ($result == TRUE) { 

	print '<script language="JavaScript">'; 
    print 'alert("Usuario Guardado con éxito");'; 
    print 'location.href="index.html";'; 
    print '</script>'; 
	}
 
   else { echo "Error: " . $sqlin . "<br>" . $conexion->error; }   
 
    

?>







