<?php
  $datos = file_get_contents("libros.txt");
 echo "<pre>";
print_r(json_decode($datos));
echo "</pre>";
?>