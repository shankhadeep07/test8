<?php
include("connection.php");
$email=$_REQUEST["email"];
$password=md5($_REQUEST["password"]);
  // echo $email;
  // echo $password;

$sql= "SELECT * FROM user WHERE email='$email' AND password='$password'";
$data = mysqli_query($conn,$sql);
$total = mysqli_num_rows($data);

if($total){
	// echo "Login successful";
		header("Location:display.php");
}else{
	echo "Login failed";
}
?>
