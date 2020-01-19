<?php
  if(isset($_POST['name'])){
    $username = htmlentities($_POST['name']);
    setcookie('username', $username, time()+3600);
    header('Location: page2.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="name" value="" placeholder="Enter Your Name">
      <br>
      <input type="email" name="email" value="" placeholder="Enter Your email">
      <br>
      <input type="submit" name="submit" value="submit">
      <br>
    </form>
  </body>
</html>
