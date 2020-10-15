<html>
<form action='login.php' method="post">
Student id:<input type='text' name='username'><br>
Password:<input type='password' name='password'><br>
<input type='submit' value='Log in'><br>      
</form>
</html>

<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$password){
        require("connectlogin.php");
        $query = "SELECT * FROM `final` WHERE student_id='$username' ";
        $rowquery = mysqli_query($conn, $query);
        $numrows = mysqli_num_rows($rowquery);

        if($numrows != 0)
        {
           while($row = mysqli_fetch_assoc($rowquery))
           {
                @$dbusername= $row['student_id'];
                @$dbpassword= $row['password'];
           }

           if($username==$dbusername && $password==$dbpassword)
           {
               echo"You're in! <a href='member.php'>Click</a> here to enter user page";
               $_SESSION['username']==$dbusername;
           }
              else
                echo"Incorrect password!";
        }
}
    else
      die("That user doesn't exist!");

      
?>
