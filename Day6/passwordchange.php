<form action='passwordchange.php' method='POST'>
    Old password:<input type='text' name='oldpassword'><p>
    New password:<input type='password' name='newpassword'><br>
    Repeat New password:<input type='password' name='repeatnewpassword'><br>
    <input type='submit' name='submit' value='change password'>
</form>

<?php

session_start();

$user = $_SESSION['student_id'];
if($user)
{

if($_POST['submit'])
{
   $oldpassword= md5($_POST['oldpassword']);
   $newpassword= md5($_POST['newpassword']);
   $repeatpassword = md5($_POST['repeatnewpassword']);

   require('connectlogin.php');

   $queryget = ("SELECT password FROM final WHERE student_id='$user'");
   $querypass = mysqli_query($conn, $queryget);
   $row = mysqli_fetch_assoc($querypass);

   $oldpassworddb = $row['password'];

   echo $oldpassworddb."<br>";
   echo $oldpassword."<br>";

   if($oldpassword==$oldpassworddb)
   {
       if($newpassword==$repeatpassword)
       {
           $querychange = (
               "UPDATE `final` SET `password`= $newpassword, WHERE student_id= $user"
           );
           session_destroy();
           die ("your password has been changed.<a href='index.php'>Return</a> to the main page.");

       }
       else
            echo "New password doesn't match!";
   }


    else
        die("You must be logged in to change your password!");

?>


