<?php

if(isset($_POST['submit']))
{
    $to      = 'nobody@example.com';
    $subject = '';
    $name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$country = $_POST['country'];
    $message = '';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>