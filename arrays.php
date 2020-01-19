<?php
  /*
    Array types

    - Indexed Arrays
    - Associative Arrays
    - MultiDimentional Arrays

  */
  $people = array('Shafeeq','Haris','Hafeez');
  // echo $people[0];
  // echo $people[3]; //Undefined Offset

  $ids = array(10,11,12);
  echo $ids[2];
  // echo "     ";
  $cars = ['Honda','Toyota','Corolla'];
  $cars[] = "Chevy";
  $cars[3] = "Chevy";
  // echo $cars[3];

  //Functions on Arrays
  // echo count($cars);
  // print_r($cars);
  // var_dump($cars);

  //Associative Arrays
  $people = array('Shafeeq' => 21, 'Haris' => 22);
  $ids = [21 => 'Shafeeq',23 => 'Haris'];
  // echo $people['Shafeeq'];
  // echo $ids[21];
  // $people['Azhar']= 19;
  // print_r($people);
  // var_dump($people);
  // var_dump($ids);
  $cars = array(
    array('Honda',20,20),
    array('Corolla',30,10)
  );
  echo $cars[0][0];

?>
