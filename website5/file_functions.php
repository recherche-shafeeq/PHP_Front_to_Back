<?php
  $path = 'dir/dir1/myfile.txt';
  $file = "file.txt";
  echo  basename($path)."<br>";
  // without extention
  echo basename($path,".txt")."<br>";

  echo dirname($path)."<br>";
  $whandle = fopen($file, "w");
  $txt = 'Shafeeq Jadoon';
  fwrite($whandle, $txt);
  fclose($whandle);

  $rhandle = fopen($file, "r");
  $data = fread($rhandle,filesize($file));
  echo $data."<br>";

  $current = file_get_contents($file);

  echo $current."<br>";

  file_put_contents($file, "Good bye old hostel");
  $current = file_get_contents($file);

  echo $current."<br>";
  // mkdir("new_hostel");
  // rmdir("new_hostel");
  echo copy($file , "newfile.txt")."<br>";
  $new_file = file_get_contents("newfile.txt");
  echo $new_file."<br>";
  unlink("newfile.txt");

  rename("file.txt","zama_file.txt");
  echo is_file("zama_file.txt");
 ?>
