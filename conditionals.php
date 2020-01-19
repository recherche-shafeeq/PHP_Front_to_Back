<?php
  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */
  $num = '5';
  if($num === 5){
    echo "Equal";
  }elseif($num == 5){
    echo "Equal string 5<br>";
  }
  else{
    echo "Not Equal";
  }
  /*
    logical operators
    and &&
    or ||
    xor
  */
  if($num > 4  || $num < 6){
    echo "$num passed<br>";
  }
  if($num > 4  xor $num == 6){
    echo "$num passed<br>";
  }
  #switch
  $favColor = "Yellow";
  switch($favColor){
    case 'red':
      echo 'Your Favourite color is red<br>';
      break;
    case 'blue':
      echo 'Your Favourite color is blue<br>';
      break;
    default:
      echo "Your favourite color is something I can't guess";

  }
 ?>
