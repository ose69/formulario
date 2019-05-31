<?php 
$servername ="localhost";
$username ="id9787806_pillo";
$password="123456789";
//creando conexión
$conn=new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo "conexión exitosa";
?>