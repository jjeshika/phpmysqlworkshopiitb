<?php
include 'connectlogin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD STUDENT DETAILS</title>
</head>

	<form method="POST">
	<tr>	
		<th><label>student_id </label></th><td><input type="text" name="roll">
		</td>
	</tr>
	<tr> 	
		<th><label>PHP</label></th><td><input type="number" name="php">
		</td>
	</tr>
	<tr> 	
		<th><label>MySQL</label></th><td><input type="number" name="mysql">
		</td>
	</tr>
	<tr> 	
		<th><label>HTML</label></th><td><input type="number" name="html">
		</td>
	</tr>
	

	</table>
	<br><br>
	<input type="submit" name="add" value="Add">
	<button><a href="member.php">Back</a></button>
</form>
<?php

if (isset($_POST['add'])) {

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
$result = mysqli_query($conn,"INSERT INTO `final`(`id`, `student_id`, `php`, `mysql`, `html`, `obtained`, `totalmarks`, `percentage`) VALUES (NULL, $roll ,$php,$mysql,$html,$sum,$out,$per)");
if($result){
	echo "<br>Details Added Successfully..";
}	
else{
	echo "<br>Add details Failed..";
}

}
?>
</body>
</html>