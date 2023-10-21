<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data"> 
		Enter Image: <input type="file" name="uploadimgae"><br>
		<input type="submit" name="submit" value="SUBMIT">

	</form>

<?php
	
$filename= $_FILES['uploadimage']["name"]; //name of the image
$tempname= $_FILES['uploadimage']["temp_name"]; //path of the image
$folder= "image/".$filename;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder'>";
// print_r($filename);

?>

</body>
</html>