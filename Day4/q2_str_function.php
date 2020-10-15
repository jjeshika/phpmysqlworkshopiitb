<form action = "q2_str_function.php" method = "POST">
Enter a string:<input type ="text" name = "str">
<input type = "submit" value = "submit">
</form>

<?php

error_reporting(0);
 $string = $_POST['str'];
 if(isset($string)){
	 
	 echo "The number of character is: ".strlen($string)."<br>";
	 $exparray = explode(" ",$string);
	 foreach($exparray as $value);
	 {
		 echo "After breaking the string: ".$value."<br>";
	 }
	 echo "The reverse of the string: ".strrev($string)."<br>";
	 echo "Lower case: ".strtolower($string)."<br>";
	 echo "Upper case: ".strtoupper($string)."<br>";
	 $result = substr_replace($string,"Eshika",7,12);
	 echo "Replacing the substring: ".$result;
	 
	 
	 
 }

?>