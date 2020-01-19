//if you want to set an array in a cookie then first you need to serialize imgth
//what serialization will do is convert the cookie into string
<?php
  $user = ['name' => 'Shafeeq' , 'email' => 'shafeeqjadoon@outlook.com'];
  $user = serialize($user);
  setcookie("user", $user ,3600);

  $user = unserialize($user);
  echo $user['name'];

 ?>
