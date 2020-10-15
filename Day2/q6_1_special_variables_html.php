<html>

<form action ='q6_1_special_variables_html.php' method ='GET' >
	<input type = 'number' name ='sidea'><br>
	<input type = 'number' name ='sideb'><br>
	<input type = 'number' name ='sidec'><br>
	<input type = 'submit' value ='Enter'>
</form>

</html>


<?php
$a = $_GET['sidea'];
$b = $_GET['sideb'];
$c = $_GET['sidec'];

if($a*$a+$b*$b==$c*$c||$a*$a+$c*$c==$b*$b||$c*$c+$b*$b==$a*$a)
	echo "Right Angled Triangle<br>";
else {
		if($a==$b && $b==$c)
			echo "Equilateral Triangle<br>";
		else{
			if($a==$b||$a==$c||$b==$c)
			{
				echo "Isoceles Triangle<br>";
			}	
			else
				echo "Scalene Triangle<br>";
		}
}
   
?>

