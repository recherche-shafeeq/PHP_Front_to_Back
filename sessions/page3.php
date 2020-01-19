<?php
  session_start();
  $_SESSION['name'] = "Jadoon";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Your name has become <?php echo $_SESSION['name']; ?></h2>
  </body>
</html>
