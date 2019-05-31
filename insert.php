<?php 
require_once "conexion.php";

$sql="INSERT INTO nose(nombre, correo)
VALUES ('deniz','denizillo15@ucol.mx')";

if($conn->query($sql) === TRUE){
    echo "new record created successfully";
} else{
    echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>