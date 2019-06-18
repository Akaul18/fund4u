<?php

include('conncection.php');
// Check connection
if(isArray($_POST)){
  foreach ($_POST as $key => $value) {
    $key = $key;
    $$key = mysli_real_escape_string($conn,(htmlentities($value)));
  }
}


$sql = "INSERT INTO backer_details (f_name, l_name, email, fund_amount, date_created) VALUES ('{$f_name}','{$l_name}','{$email}','{$fund_amount}',NOW())";

$result=mysqli_query($conn, $sql);

if($result){

  echo "Done";
}
else {

    echo "not done";
}

//
// echo "$sql";


?>
