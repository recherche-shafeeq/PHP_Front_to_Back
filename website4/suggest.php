<?php
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Ali";
$people[] = "Salman";


$q = $_REQUEST['q'];

$suggestion = "";


if($q != ""){
  $q = strtolower($q);
  foreach($people as $person){
    $len = strlen($q);
    if(stristr($q,substr($person, 0 ,$len))){
      if($suggestion === ""){
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}
echo $suggestion === "" ? "No Suggestion" : $suggestion;

 ?>
