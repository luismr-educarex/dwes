
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
  <h2>Login</h2>
  <form action="login.php" method="POST"> 
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Introduzca el nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Introduzca password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Recuerdame</label>
    </div>
    <button type="submit" class="btn btn-default">Entrar</button>
  </form>
</div>

</body>
</html>