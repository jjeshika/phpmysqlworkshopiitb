<?php
  require("connect.php");

$extract= (" SELECT * FROM `class1` WHERE name='Rohan' ");
$getdata = mysqli_query($conn , $extract);

while($row = mysqli_fetch_assoc($getdata)){ 
  $name=$row['NAME'];
  $sub5=$row['SUB5'];
  $total_obt=$row['TOTAL_MARKS_OBTAINED'] ;
  $percent=$row['PERCENTAGE'];

  @$new_SUB5=99;
  @$new_total_obt=$total_obt-$sub5+$new_SUB5 ;
  @$new_percent=  $new_total_obt/5;
  echo  "Marksheet before updating :<br> Subject 5 = ".$sub5."<br>Total Marks obtained : ".$total_obt."<br>Percentage Obtained : ".$percent." %<br>";

$sql = " UPDATE `class1` SET `SUB5`=$new_SUB5,`TOTAL_MARKS_OBTAINED`=$new_total_obt,`PERCENTAGE`=$new_percent  
                WHERE `NAME`= Rohan";
   
   if (mysqli_query($connect, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($connect);
   }
}
echo  @$name." has updated marksheet:<br> Subject 5 = ".@$new_SUB5."<br>Total Marks obtained : ".@$new_total_obt."<br>Percentage Obtained : ".@$new_percent." %" ;

   mysqli_close($connect);
?>