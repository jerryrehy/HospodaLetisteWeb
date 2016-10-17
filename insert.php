<?php
  $con=mysqli_connect("wm31.wedos.net","w41347_dbs","33f7VHpK","d41347_dbs");
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysql_query("SET NAMES 'UTF-8 '");
  mysql_query("SET CHARACTER SET UTF-8");
  $datum = date("Y-m-d");
  $sql="INSERT INTO aktuality (title, aktualita, datum) VALUES ('$_POST[title]','$_POST[aktual]','$datum')";

  if (!mysqli_query($con,$sql))
  {
    header('Location: index.php?page=upload&navi=22&u=0');
  }
  header('Location: index.php?page=upload&navi=22&u=1');
  mysqli_close($con);
?> 