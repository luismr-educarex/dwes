<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	require ("paciente.php");	
	
    $paciente=new paciente();
    
    if(isset($_REQUEST["operacion"])){
        if($_REQUEST["operacion"]=="alta"){
            $paciente->alta_paciente($_POST["nombre"],$_POST["direccion"]);
        }

    }else{
        listarPacientes($paciente->leer_pacientes());
    }



    // Muestra el listado de los contactos a partir de una matriz de registros.
	// El parámetro $id_edit indica el registro que el usuario desea editar.
	function listarPacientes($pacientes_array)
	{
        

         $html='<div class="container">
        <h2>PACIENTES COVID</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Dirección</th>
            </tr>
          </thead>
          <tbody>  
      ';

		// Bucle que recorre todos los registros de la matriz
		for ($i=0;$i<sizeof($pacientes_array);$i++)
		{
			// Si el id_edit no coincide con el id del registro $i de la matriz 
			// entonces imprimimos los datos
            
            $fila='<tr>
                   <td>'.$pacientes_array[$i][1].'</td>
                   <td>'.$pacientes_array[$i][2].'</td>
                  </tr>';

          $html=$html.$fila;

			
        }
        
        $html=$html.'</tbody>
                 </table>
             </div>';
        echo $html;
		
	}
     
?>

<div class="container">

  <form method="POST"  class="form-inline" action="index.php?operacion=alta">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion" placeholder="direccion" name="direccion">
    
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>
</div>

</body>
</html>
