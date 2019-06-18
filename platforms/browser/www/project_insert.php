<?php
include('conncection.php');
// Check connection
if(isArray($_POST)){
  foreach ($_POST as $key => $value) {
    $key = $key;
    $$key = mysli_real_escape_string($conn,(htmlentities($value)));
  }
}
$abc = 1;

$sql = "INSERT INTO Project_details (uid,p_name,p_category,p_country,p_desc,fund_goal,p_video,p_image,p_bank_acnt,p_bank_branch,p_addn_details,date_created) VALUES ('{$abc}','{$p_name}','{$p_category}','{$p_country}','{$p_desc}','{$fund_goal}','{$p_video}','{$p_image}','{$p_bank_acnt}','{$p_bank_branch}','{$p_addn_details}',NOW())";

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
