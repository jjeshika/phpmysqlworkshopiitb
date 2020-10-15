<form action = "q1_visitor_count.php" method="POST">
  <h2>Marksheet</h2>
  Name of the student : <input type = "text" name="name"><br>
  <h5>Enter the marks(Out of 100) </h5>
  
  <input type = 'number ' name = 'sub1 'placeholder="Subject 1"><br>
  <input type = 'number ' name = 'sub2 'placeholder="Subject 2"><br>
  <input type = 'number ' name = 'sub3 'placeholder="Subject 3"><br>
  <input type = 'number ' name = 'sub4 'placeholder="Subject 4"><br>
  <input type = 'number ' name = 'sub5 'placeholder="Subject 5"><br>
  <input type = 'submit' name ="Submit">
  <input type = 'reset' name = "Reset" value = "Reset"><br>
</form>

<?php

require ("connect1.php");

@$name = $_POST["name"];
@$subject1 = $_POST["sub1"];
@$subject2 = $_POST["sub2"];
@$subject3 = $_POST["sub3"];
@$subject4 = $_POST["sub4"];
@$subject5 = $_POST["sub5"];

$total_obt = $subject1+$subject2+$subject3+$subject4+$subject5;
$total_marks = 500;
$percent = (($subject1+$subject2+$subject3+$subject4+$subject5/500)*100);
  if($percent<100){
  if($name && $subject1 && $subject2 && $subject3 && $subject4 && $subject5){
	  echo"
	  <label>Student Name : </label>$name<br>
	  <label>Subject1 : </label>$subject1<br>
	  <label>Subject2 : </label>$subject2<br>
	  <label>Subject3 : </label>$subject3<br>
	  <label>Subject4 : </label>$subject4<br>
	  <label>Subject5 : </label>$subject5<br>
	  <label>Total Marks Obtained :</label>$total_obt<br>
	  <label>Total Marks : </label>$total_marks<br>
	  <label>Percentage Obtained : </label>$percent%<br>
	  ";
	@$write = "INSERT INTO `class1` (`Id`, `NAME`, `SUB1`, `SUB2`, `SUB3`, `SUB4`, `SUB5`, `TOTAL_MARKS_OBTAINED`, `TOTAL_MARKS`, `PERCENTAGE`) 
	         VALUES (NULL, '$name', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$total_obt', '$total_marks', '$percent')";
			 
  
	if ($conn->query($write) === TRUE) {
		echo "New record created successfully";
} 	else {
		echo "error: " . $write . "<br>". $conn->error;
}
  }
  }
  else{
	  echo "please enter marks between 0-100";
  }
$conn->close();

$file = file_get_contents("count.txt");
$visitors = $file;

$visitorsnew = $visitors+ 1;

$filenew = fopen("count.txt", "w");
fwrite($filenew, $visitorsnew);

echo "<br><br><br><br><br><br><br>";
echo "You had $visitorsnew visitors<br>";

$write = "INSERT INTO `visitor`(`visits`) VALUES ($visitorsnew)";
	if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }

$conn->close();
?>

