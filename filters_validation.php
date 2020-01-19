<?php
  // if(filter_has_var(INPUT_POST,"data")){
  //   echo "Data Found";
  // } else {
  //   echo "No Data";
  // }
  // if(filter_has_var(INPUT_POST,"data")){
  //   $email = $_POST['data'];
  //   echo $email."<br>";
  //   $email = filter_var($_POST['data'],FILTER_SANITIZE_EMAIL);
  //   echo $email."<br>";
  //   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
  //     echo "Email is valid"."<br>";
  //   }else {
  //     echo "Email is not valid"."<br>";
  //   }
  // }
  /*
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_REGEXP
    FILTER_VALIDATE_URL

    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_ENCODED
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTERE_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_STIRNG
    FILTER_SANITIZE_URL

  */
  // $var = '23';
  // if(filter_var($var, FILTER_VALIDATE_INT)){
  //   echo $var." is a number";
  // } else {
  //   echo $var." is not a number";
  // }

  $var = '<script>alert(1)</script>';
  // echo $var;
  // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
  // var_dump(filter_var($number, FILTER_SANITIZE_STRING));
  // $filters = array(
  //   "data" => FILTER_VALIDATE_EMAIL,
  //   "data2" => array(
  //     "filter" => FILTER_VALIDATE_INT,
  //       "options" => array(
  //       "min_range" => 1,
  //       "max_range" => 100
  //       )
  //   )
  // );
  // print_r(filter_input_array(INPUT_POST,$filters));
  $arr = array(
    "name" => "shafeeq",
    "age" => "45",
    "email" => "p180039@nu.edu.pk",
  );
  $filters = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );

  // print_r(filter_var_array($arr,$filters));

?>

<?php
  $search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
  $search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
  echo "You have searched for $search_html.\n";
  echo "<a href='?search=$search_url'>Search again.</a>";
?>

<?php
$_GET['search'] = 'foo'; // This has no effect on the filter_input
$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
echo "You have searched for $search_html.\n";
echo "<a href='?search=$search_url'>Search again.</a>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <input type="text" name="data">
  <!-- <input type="text" name="data2"> -->
  <button type=submit>Submit</button>
</form>
