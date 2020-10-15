<?php
include 'connectlogin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE STUDENT DETAIL</title>
</head>
<h1>Update</h1>
<form align="center" method="POST">
<table align="center">
<tr>	<th><label>Roll no. </label></th><td><input type="text" name="roll"></td></tr>
	<tr> 	<th><label>PHP</label></th><td><input type="number" name="php"></td></tr>
	<tr> 	<th><label>MySQL</label></th><td><input type="number" name="mysql"></td></tr>
	<tr> 	<th><label>HTML</label></th><td><input type="number" name="html"></td></tr>
</table>
	<br><br>
	<input type="submit" name="update" value="Update">
	<button><a href="member.php">Back</a></button>

<?php

if (isset($_POST['update'])) {
$roll=$_POST['roll'];
$php=$_POST['php'];
$mysql=$_POST['mysql'];
$html=$_POST['html'];
$sum=$php+$mysql+$html;
$out=300;
$per=($sum/$out)*100;

if($per>60){
	$status="DISTINCTION";
}
	elseif($per<35){
		$status="FAIL";
	}
		else{
			$status= "PASS";
	}
		$sql = mysqli_query($conn,"UPDATE `final` SET `php`=$php,`mysql`=$mysql,`html`=$html,`obtained`=$sum,`totalmarks`=$out,`percentage`=$per WHERE id= $roll");

		if($sql){
			echo "<br>Record Updated Successfully";
	}
	else{
		echo "<br>Not Updated";
}

}
?>
</form>
</body>
</html>