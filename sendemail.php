<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['naam'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['onderwerp'])); 
    $message = @trim(stripslashes($_POST['bericht'])); 

    $email_from = $email;
    $email_to = 'email@gmail.com';

    $body = 'Naam: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'onderwerp: ' . $subject . "\n\n" . 'bericht: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die; 