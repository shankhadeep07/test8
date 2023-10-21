<?php
include("connection.php");

$id=$_REQUEST['ep'];
//echo $id;

$sql= "SELECT * FROM user WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$result= mysqli_fetch_assoc($data);
print_r($result);
?>