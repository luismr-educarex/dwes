<!DOCTYPE html>
<html>
<body>

<?php
require_once 'conexion.php';

$id = intval($_GET['id']);

//OBTENER LA CONEXION METODO 1
$con = mysqli_connect($db['host'], $db['username'], $db['password'], $db['db']);

//OBTENER LA CONEXION METODO 2
$con = mysqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD);



// Comprobar la conexión
if (!$con) {
  die("Error en la conexión: " . mysqli_connect_error());
}

$sql="SELECT * FROM Pacientes WHERE id = '".$id."'";
$pacientes = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Nombre</th>
<th>Dirección</th>
</tr>";
while($paciente = mysqli_fetch_array($pacientes )) {
  echo "<tr>";
  echo "<td>" . $paciente ['nombre'] . "</td>";
  echo "<td>" . $paciente ['direccion'] . "</td>";
  echo "</tr>";
}

echo "</table>";
mysqli_close($con);
?>

</body>

</html> 