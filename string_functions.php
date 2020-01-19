<?php
  # substr()
  // substr
  // strlen
  // strpos
  // strrpos
  // trim
  // strtouppper
  // strtolower
  // ucwords
  // str_replace
  // is_string
  // gzuncompress
  // gzcompress
  $greet = "Hello World     ";
  echo substr($greet,2,5)."<br>";
  echo strlen($greet)."<br>";
  echo strpos($greet,'e')."<br>";
  echo strrpos($greet,'o')."<br>";
  echo strlen($greet)."<br>";
  $trimmed = trim($greet);
  echo strlen($trimmed)."<br>";
  echo strtoupper($greet)."<br>";
  echo strtolower($greet)."<br>";
  echo ucwords(strtoupper($greet))."<br>";
  echo str_replace("Hello","Why not Hi",$greet.'<br>');
  $compressed = gzcompress($greet);
  echo $compressed;
  echo "<br>";
  $uncompress = gzuncompress($compressed);
  echo $uncompress.'<br>';
  echo is_string($greet)."<br>";
  echo is_integer(2);

 ?>
