<?php 
$db="id9787806_conexion";
require_once "conexion.php"

$sql="INSERT INTO nose(nombre, correo, teléfono)
VALUES ('jorge','joochoa15@ucol.mx','31231234531')";
if($conn->query($sql)===TRUE){
    echo "new record created successfully";
} else{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>