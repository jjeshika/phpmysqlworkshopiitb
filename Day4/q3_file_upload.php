<html>
<form action = 'q3_file_upload.php' method = 'POST' enctype = 'multipart/form-data'>
  <input type = 'file' name = 'filetoupload'><p>
  <input type = 'submit' value = 'upload image' name = 'upload'>
</form>
</html>

<?php

if(isset($_POST['submit'])){
$file = $_FILES["myfile"];
$name = $_FILES["myfile"]['name'];
$type= $_FILES["myfile"]["type"];
$size= $_FILES["myfile"]["size"];
$temp= $_FILES["myfile"]["tmp_name"];
$error= $_FILES["myfile"]["error"];
print_r($_FILES);

if($error>0)
{
	die("Error while uploading file! $error.");	
}
else
{
	move_uploaded_file($temp,$name);
		echo "Upload Completed successfully!";
		echo "<br>"."$name"."<br>";
		echo "$type";

}
}
?>
