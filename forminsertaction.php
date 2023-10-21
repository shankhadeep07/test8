<?php
include("connection.php");

$name= $_REQUEST['name'];				
$email= $_REQUEST['email'];				
$password= md5($_REQUEST['pass']);
$phone= $_REQUEST['ph'];


$filename= $_FILES['uploadimage']["name"]; //name of the image
$tempname= $_FILES['uploadimage']["tmp_name"]; //path of the image
$folder= "image/".$filename;
move_uploaded_file($tempname, $folder);

$sql= "INSERT INTO `user`(`user_id`, `name`, `email`, `password`, `phone`,`gen2`) VALUES ('','$name','$email','$password','$phone','$folder')";

$data= mysqli_query($conn,$sql);

if($data)  //here to make the statement true we dont have to write ==1 it by default 1
{
	echo "insert data successfull";
	header("location:login.php");
}
else
{
	echo "insert data not successfull";
}

?>