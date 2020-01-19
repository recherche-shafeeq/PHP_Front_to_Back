<!-- <h1> -->
  <?php
  // print "Hello World";
  // single line comment
  # also single line comment
  /*
   this is a multi-line string
    Variables
    - prefix with $ sign
    - variable starts with with a letter or a an underscore
    - varialbe cannot start with a number
    variables are case sensitive
    #Data types
    Strings
    Integers
    Floats
    Booleans
    Arrays
    Null
    Resourse
  */
  $var1 = 4;
  $var2 = 5;
  $var3 = 6;
  $sum = $var1 + $var2 + $var3;
  // echo $sum;
  $string1 = 'concatenating';
  $string2 = 'strings';
  $output_string = $string1 .' '. $string2;
  echo $output_string;
  $output_string = "$string1 $string2";
  echo $output_string;

  $float = 4.4;
  //constants

  define('GREETINGS','I AM A CONSTANT');
  echo GREETINGS;
  $string3 = "It\"s theirs";




?>
<!-- </h1> -->
