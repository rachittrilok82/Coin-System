<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password,'coinsyst');

if (!$conn) {
  echo ("not_exist");
}
else{
    $_SESSION['TOTCOINS']=$_POST['totcoins'];
    echo "yes";
}


?>

