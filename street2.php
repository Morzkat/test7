<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calle 2</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<<<<<<< HEAD
    <style media="screen">
      body
      {
        background-image: url("img/0.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
      }
    </style>
=======
>>>>>>> origin/master
  </head>

  <body >

    <h3 class="text-success">Semafaro Calle 2</h3>
    <div class="" id="streetA">

      <canvas id="canvas_StreetB" width="300" height="300"></canvas>
    </div>

<<<<<<< HEAD
    <div>

      <span class="btn btn-info" onclick="goTO('1')">Calle B </span>

      <a href="admin.php"><h4>Admin</h4></a>
    </div>

=======
>>>>>>> origin/master
    <script src="js/control.js" charset="utf-8"></script>

    <script type="text/javascript">

        setStreet(2);
<<<<<<< HEAD
        <?php

          if (file_exists("time.txt"))
          {
            $time = intval( file_get_contents("time.txt"));
          }

          else
          {
            $time = 1;
          }

        ?>
        var time = '<?php echo $time  ?>';
        Run(time);

    </script>

    </script>
=======
        
        var time = '<?php echo intval( file_get_contents("time.txt")); ?>';
        Run(time);

    </script>
>>>>>>> origin/master
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
