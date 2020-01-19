<?php
  //overriding a cookie
  setcookie('username', 'Jadoon', time() + 2);
  // overriding again
  $_COOKIE['username'] = 'Shafeeq';
  if (isset($_COOKIE['username'])){
      echo 'User '.$_COOKIE['username'].' is set<br>';
  } else {
    echo 'User not set';
  }

 ?>
