<?php

$conn = mysqli_connect("localhost","root","") or die("connection failed!");
mysqli_select_db($conn, "marksheet") or die("Couldn't find db");

echo"Connected!<br>";


?>