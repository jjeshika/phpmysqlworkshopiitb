<form action ="q1_md5_enc.php" method="POST">  
    <label>Enter Username</label>  
    <input type="text" name="username" class="form-control" />  
    <br />  
    <label>Enter Password</label>  
    <input type="password" name="password" class="form-control" />  
    <br />  
    <input type="submit" name="submit" value="submit" class="btn btn-info" />  
    <br />  
      
</form>  

<?php 

require("connect2.php");

@$username =$_POST['username'];
@$password = $_POST['password'];

if(empty($username) && empty($password))
	 {
		 echo "Both fields are required.<br>";
	 }
	 else{
		 @$password = md5($password);
		 $write = "INSERT INTO `data1`(`Id`, `username`, `password`) VALUES ('NULL', '$username', '$password')";
	     if (@$conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . @$conn->error;
    }

@$conn->close();
	 }


 
?>

