<?php
    include "conexion.php";
?>
<!DOCTYPE html>
<head>
    <title>Aloe Vera 100% Orgánica</title>
    <link rel="shortcut icon" href="img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
  

    <script type="text/javascript">
         function ajax(){
            var req = new XMLHttpRequest();

            req.onreadystatechange = function(){
             if (req.readyState == 4 && req.status == 200){
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        req.open('GET', 'chat.php', true);
        req.send();
    }
    //linea que hace que se refresque la página cada segundo
    setInterval(function(){ajax();}, 1000);
</script>




</head>    
<body onLoad="ajax();">
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat"></div>
        </div>
        <form method="POST" action="chatear.php">
        <div class="col-md-3 mb-3">
  <input type="text" class="form-control custom-input" name="nombre" placeholder="Ingresa tu nombre" required>
</div>
<div class="col-md-3 mb-3">
  <textarea name="mensaje" class="form-control custom-input" placeholder="Ingresa tu mensaje" required></textarea>
</div>
<input type="submit" name="enviar" value="Enviar" class="custom-button">
        </form>    
        <?php
            if (isset($_POST['enviar'])){
                $nombre=$_POST['nombre'];
                $mensaje=$_POST['mensaje'];

                $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                if ($ejecutar){
                    echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
                }

            }


?>
    </div>
</body>
</html>
