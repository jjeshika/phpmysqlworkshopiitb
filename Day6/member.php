<?php

session_start();

if($_SESSION['username'])
    echo "Welcome,".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>
    <br><a href='passwordchange.php'>Change password</a>
    ";
else
    die("You must be logged in!");

?>