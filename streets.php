<!DOCTYPE html>
<html lang="en">
  <head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarea 7</title>

    <style media="screen">
      .streetA
      {
        border-right: 1px solid black;
        margin-left: 25%;
      }

      .streetB
      {
        margin-right: 25%;
      }
    </style>

  </head>
  <body onload="Run()">

    <h3>Semafaro</h3>

      <a href="admin.php"><h3>admin</h3></a>

      <div class="streetA" style="float:left">
        <h3>Calle 1</h3>
        <canvas id="streetA" width="300" height="300"></canvas>
      </div>

      <div class="streetB" style="float:right">
        <h3>Calle 2</h3>
        <canvas id="streetB" width="300" height="300"></canvas>
      </div>

    <script type="text/javascript">



    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/control.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
