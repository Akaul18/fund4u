<?php


if( isset($_POST['username']) and isset($_POST['password']) ) {

  include('conncection.php');

		$user=$_POST['username'];
		$pass=$_POST['password'];

		$ret=mysqli_query( $conn, "SELECT * FROM user_table WHERE name='$user' AND password='$pass'");

    $row = mysqli_fetch_assoc($ret);



  	if(!$row) {

      header('location: login.html');




		}
		else {

      //header('location: Dashboard.php');
      session_start();
	    $_SESSION['user']=$user;


		}
}
?>
