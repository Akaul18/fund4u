<?php
require_once('conncection.php');

unset($_SESSION['user']);
session_destroy();
if(session_destroy())
{
  echo "1";
}else{
  echo "0";
}

 ?>
