<?php
$destino= "consultas@jygproyecto.com";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
//$contenido="Nombre:".$nombre."\ncorreo:".$correo."\nteléfono:".$telefono."\nMensaje:".$mensaje;
/*mail($destino,"contacto",$contenido);
header("location:loggin.html");*/

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form>
        <h2>contacto</h2>
        <div>tu nommbre es:<p><?php echo $nombre ?></p></div>
        <div>correo:<p><?php echo $correo ?></p></div>
        <div>teléfono:<p><?php echo $telefono ?></p></div>
        <div>mensaje:<p> <?php echo $mensaje ?></p></div>
    </form>
</body>
</html>
