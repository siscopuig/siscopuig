<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

# Load Composer's autoloader
require '../vendor/autoload.php';


function sendPhpMailer($subject, $body)
{

    $mail = new PHPMailer(true);
    try {
        //Server settings
        #$mail->SMTPDebug = 2;                       // Enable verbose debug output
        $mail->isSMTP();                             // Set mailer to use SMTP
        $mail->Host = '';   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                      // Enable SMTP authentication
        $mail->Username = '';                        // SMTP username
        $mail->Password = '';             // SMTP password
        $mail->SMTPSecure = 'ssl';                   // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                           // TCP port to connect to
        //Content
        $mail->isHTML(true);
        $mail->From = '';
        $mail->addAddress('');
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        # Send mail
        $mail->send();

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

    if ($mail->ErrorInfo)
        return False;
    return True;
}


$name = null;
$email = null;
$message = null;
$errors = [];
$data = [];

# Validate input name
if (empty($_POST['name']))
    $errors['name'] = 'Name is required.';
elseif (strlen($_POST['name']) > 50)
    $errors['name'] = 'Name has to be less than 25 characters';
else
    $name = trim(strip_tags($_POST['name']));
    $subject = "Web user - $name";

# Validate input email
if (empty($_POST['email']))
    $errors['email'] = 'Email is required.';
elseif (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    $errors['email'] = 'Email Invalid';
else
    $email = trim($_POST['email']);

# Validate input message
if (empty($_POST['message']))
    $errors['message'] = 'Message is required.';
elseif (strlen($_POST['message']) > 300)
    $errors['message'] = 'Message longer than 300 characters';
else
    $message = trim(strip_tags($_POST['message']));

if (! empty($errors)) {
    $data['success'] = False;
    $data['errors']  = $errors;

} else {

    # Creates email body
    $body = "
        <p>Name: $name</p>
        <p>Mail address: $email</p>
        <br>
        <br>
        <p>$message</p>
    ";

    # Call PhpMailer
    if (! sendPhpMailer($subject, $body)) {
        $data['success'] = False;
    }
    else {
        $data['success'] = True;
        $data['name'] = $name;
    }
}

# return all our data to an AJAX call
echo json_encode($data);
