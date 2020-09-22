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
    $codes=$_POST['code'];
     $res=mysqli_query($conn,"select * from coinsyst where coupun_id='$codes'");
     $row = mysqli_fetch_assoc($res);
    $count=mysqli_num_rows($res);
    if($count>0){
      echo $_SESSION['TOTCOINS']=$row['Amount']+$_SESSION['TOTCOINS'];
   
 
    }
    else{
        echo ("not_exist");

    }
}


?>