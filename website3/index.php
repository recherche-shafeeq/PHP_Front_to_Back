<?php
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST,'submit')){
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST["message"]);

      if(!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
          $msg = 'Please use a valid email address';
          $msgClass = 'alert-danger';
        } else {
          echo 'Passed';
        }
      } else {
        $msg = "Fill all the fields";
        $msgClass = 'alert danger';
      }
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="navbar-brand" href="index.php">My Website</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''?>">
          </div>
          <div class="form-group">
            <label for="">Message</label>
            <textarea name="message" class="form-control"><?php echo isset($_POST['name']) ? $_POST['name'] : '' ?></textarea>
          </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    </div>
  </body>
</html>
