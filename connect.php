<?php 

$con = mysqli_connect("localhost","root","","test");

if($con){
   echo "connect successfull";
}
else {
  die("Connection failed: " . mysqli_connect_error());
}

?>