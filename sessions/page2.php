<?php
  session_start();
  $_SESSION['name'] = 'Muhammad Shafeeq Jadoon';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Welcome Mr <?php echo $_SESSION['name']; ?> ,<?php echo ' '.$_SESSION['email'] ?> must be your email</h2>
    <a href="page3.php">GO to page 3</a>
  </body>
</html>
