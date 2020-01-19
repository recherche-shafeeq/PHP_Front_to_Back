<?php
  // echo date('d');
  // echo date('m');
  // echo date('y');
  // echo date('l');

  // echo date('Y');
  // echo date('m-d-Y');
  // echo date('d-m-Y');
  echo date('h');
  echo "<br>";
  // echo date('m-s-a');
  //Setting time zone
  date_default_timezone_set("Asia/Karachi");
  // echo date('h-i-s-a');
  // echo "<br>";
  $timestamp = mktime(13,14, 54, 07, 26, 1998);
  // echo date("m/d/Y h:i:sa", $timestamp);

  $timestamp = strtotime("6:45pm Jan 06 2020");
  echo date("m/d/Y h:i:sa",$timestamp)."<br>";


  $timestamp = strtotime("tomorrow");
  echo date("m/d/Y h:i:sa",$timestamp)."<br>";


  $timestamp = strtotime("next year");
  echo date("m/d/Y h:i:sa",$timestamp)."<br>";

  $timestamp = strtotime("+2 Days");
  echo date("m/d/Y h:i:sa",$timestamp)."<br>";

  $timestamp = strtotime("next SundayA");
  echo date("m/d/Y h:i:sa",$timestamp)."<br>";


   ?>
