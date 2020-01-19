<?php
  /*
    Camel Case - myFunction
    Lower Case - my_function
    Pascal Case - myFunction
  */

  function simpleFunction(){
    echo 'Hello World';
  }
  // simpleFunction();

  function sayHello(&$name = "World"){
    $name = "Hello $name<br >";
    echo $name;
    return $name;
  }
  $greet = "Shafeeq";
  echo sayHello($greet);
  echo $greet;
  // sayHello("Haris");
  //


?>
