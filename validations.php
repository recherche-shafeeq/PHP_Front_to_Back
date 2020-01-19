<?php
  print_r($_POST['email'])."<br>";
  print_r(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
 ?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <input type="text" name="email">
  <button type="submit">Submit</button>
</form>
