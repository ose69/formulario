<?php
require_once "insert.php"
 $sql = "SELECT nombre, correo  FROM nose";
  $result = $conn->query($sql);
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
  $conn->close();
  ?>