<?php
$destino= "consultas@jygproyecto.com";
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];
//$contenido="Nombre:".$nombre."\ncorreo:".$correo."\nteléfono:".$telefono."\nMensaje:".$mensaje;
mail($destino,"contacto",$contenido);
header("location:loggin.html");

?>

<html>
    <body>
        <p>kjh daskjh askjh askjdh akdah </p>
        <p> a nomber de :<?php echo $nombre;?></p>
        <div><p> alkj dlkaj sdlkaj d<?php echo $_POST['telefono'];?></p>
        <?php 

    </body>
</html>
