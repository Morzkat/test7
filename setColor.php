<?php


if ($_POST)
{
  $street = $_POST['street'];

  $file = fopen("street.txt", "w+") or die("error");

  fwrite($file, $street);

  fclose($file);

  $f = fopen("street.txt", "r") or die("error");

  $lastFile = fread($f, filesize("street.txt"));

  if (!file_exists("color.txt"))
  {
    $color = fopen("color.txt", "w+") or die ("error");
    fwrite($color, "1");
    $lastcolor = fread($color, filesize("color.txt"));

  }
  else
  {
    $lastcolor = intval(file_get_contents("color.txt"));

  }

  if ($lastFile == "1")
  {
    if ($lastcolor == "1")
    {
        echo "green";
        file_put_contents("color.txt", "2");
    }

    elseif ($lastcolor == "2")
    {
      echo "yellow";
      file_put_contents("color.txt", "3");
    }

    elseif ($lastcolor == "3")
    {
      echo "red";
      file_put_contents("color.txt", "1");
    }
  }

  elseif ($lastFile == "2")
  {
    if ($lastcolor == "1")
    {
        echo "yellow";
        file_put_contents("color.txt", "2");
    }

    elseif ($lastcolor == "2")
    {
      echo "green";
      file_put_contents("color.txt", "3");
    }

    elseif ($lastcolor == "3")
    {
      echo "red";
      file_put_contents("color.txt", "1");
    }
  }
}

 ?>
