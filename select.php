<?php 
require_once "conexion.php";

$sql = "SELECT nombre, correo FROM nose";
$result=$conn->query($sql);

echo "<table border='1'>
<tr>
<th>nombre</th>
<th>correo</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['correo'] . "</td>";
  echo "</tr>";
}
echo "</table>";

// if($result->num_rows>0){
//     while($row=$result->fetch_assoc()){
//         echo "nombre " . $row["nombre"]. "correo".$row["correo"].""."<br>";
//     }
// }
// else{
//     echo "0 resultados";
// }
// $conn->close();
?>
