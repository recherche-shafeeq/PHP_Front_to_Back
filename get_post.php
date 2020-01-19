<?php
  // if(isset($_GET['name'])){
  //   echo $_GET['name'];
  // }
  // if(isset($_POST['name'])){
  //   echo $_POST['name'];
  // }
  // if(isset($_REQUEST)){
  //   print_r($_REQUEST);
  // }
  echo $_SERVER["QUERY_STRING"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
  </head>
  <body>
    <form method="POST" action="get_post.php">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
