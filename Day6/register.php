<?php

echo "<h1>Register</h1>";

@$submit = $_POST['submit'];

@$username = $_POST['username'];
@$password = md5($_POST['password']);
@$repeat = md5($_POST['repeatpassword']);

if($submit)
{
	$password = md5($_POST['password']);
	$repeat = md5($_POST['repeatpassword']);

	require ('connectlogin.php');
	$queryreg= "INSERT INTO `final`(`id`, `student_id`, `password`) VALUES (NULL, $username, $password)";
	die ("you have been registered! <a href='index.php'>Return</a> to login page.");
}

?>

<html>
<form action='register.php' method='POST'>
	<table>
		<tr>
			<td>
				Choose a username:
			</td>
			<td>
				<input name='text' name='student_id'>
			</td>
		</tr>
		<tr>
			<td>
				Choose a password:
			</td>
			<td>
				<input type='password' name='password'>
			</td>
		</tr>
		<tr>
			<td>
				repeat your password:
			</td>
			<td>
				<input type='password' name='repeatpassword'>
			</td>
		</tr>
	</table>
	<p>
		<input type='submit' name='submit' value='Register'>
		
</form>
</html>
