
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
  echo ' <div class="row">
        <div class="col-md-2 col-md-offset-5"><h3>Hola '.$user.'</h3>';

  echo '    <h4>Tiempo</h4>

      <input type="number" id ="time" name="" value="">
<<<<<<< HEAD
      <button type="button" onclick="setTime()" id ="time" name="button">Cambiar tiempo</button> </div></div>';
=======
      <button type="button" onclick="setTime()" id ="time" name="button">Cambiar tiempo</button>';
>>>>>>> origin/master
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Tarea 7</title>

    <style media="screen">
      body
      {
        background-image: url("img/1.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
      }
    </style>

  </head>
  <body>

    <div class="row">
        <div class="col-md-2 col-md-offset-5">

      <h2>login</h2>

      <form class="text-info" action="admin.php" method="post">

        <h3  class="text-warning">Usuario</h3>
        <input type="text" name="user" value="">

        <h3  class="text-warning">Contraseña</h3>
        <input type="password" name="pass" value=""></p>

        <input type="submit" name="" value="Iniciar Sesion">

      <h3>Semafaro</h3>

<<<<<<< HEAD
      <a href="street1.php"><h4>Calle A</h4></a>
      <a href="street2.php"><h4>Calle B</h4></a>

        </div>
    </div>
=======
    <a href="street1.php"><h4>Calle A</h4></a>
    <a href="street2.php"><h4>Calle B</h4></a>
>>>>>>> origin/master

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/control.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>

</html>
