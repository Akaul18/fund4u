<?php
include('conncection.php');
// Check connection


$sql = "Select * FROM Project_details";

$result=mysqli_query($conn, $sql);

if(!result){

  echo "0";

}
else {

    echo $result;
}

//
// echo "$sql";


?>
