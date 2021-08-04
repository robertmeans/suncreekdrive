<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '_db/functions.php';
require_once 'vendor/autoload.php';
require_once '_db/connect.php';

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['comments']);

if (is_post_request()) {

	if($name && $email && $message) {

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


    $mail = new PHPMailer(true);

    try { 

        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false;
        $mail->Username   = EMAIL;
        $mail->Password   = PASSWORD; 
				// email routing set to Remote

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress(EMAIL, 'Suncreekdrive Website');     // Add a recipient
        $mail->addReplyTo($email, $name);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('robertmeans01@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Email from Suncreekdrive Website';
        $mail->Body    =  'Name: ' . $name . '<br>Email: ' . $email . '<br><hr><br>' . nl2br($message);

        $mail->send();
		    // echo 'Message has been sent';
		    $signal = 'ok';
		    $msg =  'Message sent successfully';
	    } catch (Exception $e) {
	        $signal = 'bad';
	        $msg = 'Mail Error: {$mail->ErrorInfo}';
	    }

		} else {
		  $signal = 'bad';
		  $msg = 'Invalid email address. Please fix.';
		}

	} else {
		$signal = 'bad';
		$msg = 'Please fill in all the fields.';
	}

}
	$data = array(
		'signal' => $signal,
		'msg' => $msg
	);
	echo json_encode($data);

// stop

?>