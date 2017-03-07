<?php

if ($_POST)
{
  $time = $_POST["new_Time"];

  if (!file_exists("time.txt"))
  {
    $file = fopen("time.txt", "w+");
    file_put_contents($file, $time);
  }

  else
  {
    file_put_contents("time.txt", $time);
  }
}

?>
