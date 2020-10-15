<form action= 'q2_sendmail.php' method='POST'>
    To:<input type= 'email' name='toemail'><br>
    Subject: <input type= 'text' name='subject'><br>
    Feedback:<textarea name= 'feedback'></textarea><br>
    <input type='submit' name='submit' value='Send Mail'><br>
</form>

<?php

ini_set("SMTP","smtp.gmail.com");
echo ini_get("SMTP");
die();


if(isset($_POST['submit'])){
    @$username = $_POST['name'];
    @$useremail = $_POST['useremail'];
    $feedback = $_POST['feedback'];
    $subject = "Feedback";
    $headers ="From: janbandhuesjay19ce@student.mes.ac.in";
    $message = "Thank you for your feedback!";
    $admin_log = "NAME: $username <br>EMAIL_ID: $useremail<br>MESSAGE: $message";
    mail($useremail, $subject, $message, $headers);

    echo "Mail sent successfully to the user";

    mail("janbandhuesjay19ce@student.mes.ac.in", "New feedback", "$admin_log");
}
else 

    die("Check username and User Email Id")

?>
