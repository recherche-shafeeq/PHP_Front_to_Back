<?php
  /*
    types of loops
    For
    while
    Do while
    foreach
  */
  for($i = 0;$i < 10; $i++){
    // echo 'Number '.$i;
    echo '<br>';
  }
  $i = 0;
  while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
  }
  $i = 0;
  do{
    echo $i;
    echo '<br>';
    $i++;
  }while($i < 10);

  // $people = array('Shafeeq','Haris','Hafeez');
  // foreach($people as $person){
  //   echo $person;
  //   echo '<br>';
  // }

  $people = array('Shafeeq' => 'shafeeq@email.com','Haris' => 'haris@email.com','Hafeez' => 'Hafeez@email.com');
  foreach($people as $person => $email){
    echo $person.' '.$email;
    echo '<br>';
  }

 ?>
