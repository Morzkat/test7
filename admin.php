
<?php

$conn = new mysqli("localhost","root","123",'tarea7');

$conn->connect_errno ? die('Error al conectar') : null;

if ($_POST)
{

  $user =$_POST['user'];
  $pass =$_POST['pass'];

  $sql = "SELECT * FROM users WHERE user = '$user' AND pass='$pass' LIMIT 1";
   $result  = $conn->query($sql);

    if ($result->num_rows > 0 )
{
  echo "<h3>Hola ".$user."</h3>";

  echo '    <h4>Tiempo</h4>
      <input type="number" id ="time" name="" value="">
      <button type="button" onclick="setTime()" id ="time" name="button">Cambiar tiempo</button>';
}

  else
    {
      echo "<h3> Datos incorrectos intente de nuevo </h3>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarea 7</title>

  </head>
  <body>

    <h2>login</h2>

    <form class="" action="admin.php" method="post">

      <h3>Usuario</h3>
      <input type="text" name="user" value="">

      <h3>Contraseña</h3>
      <input type="text" name="pass" value=""></p>

      <input type="submit" name="" value="Iniciar Sesion">

    </form>

    <h3>Semafaro</h3>

    <a href="street1.php"><h4>Calle A</h4></a>
    <a href="street2.php"><h4>Calle B</h4></a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/control.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>

</html>
