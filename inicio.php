<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi aplicación web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
  <div class="col-sm-10">
    
  </div>
 
  <div class="col-sm-2 ">Usuari@:<?php echo $_SESSION['usuario'] ?>
   <a href="logout.php">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>  
  
  </div>
</div>
</div>

