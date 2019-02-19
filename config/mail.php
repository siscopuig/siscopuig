<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data
$messages       = array();
// validate the variables ====================================================
// if any of these variables don't exist, add an error to our $errors array


if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
} elseif (strlen($_POST['name']) > 50) {
    $errors['name'] = 'Name has to be less than 25 characters';
}
    $name = trim(strip_tags($_POST['name']));

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
} elseif (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email Invalid';
}
    $email = trim($_POST['email']);

if (empty($_POST['message'])) {
    $errors['message'] = 'Message is required.';
} elseif (strlen($_POST['message']) > 300) {
    $errors['message'] = 'Message longer than 300 characters';
}
    $message = trim(strip_tags($_POST['message']));

// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = False;
    $data['errors']  = $errors;

} else {
    // if there are no errors process our form, then return a message

    # Put your own email address here!!!
    $emailTo = 'sisco@localhost.com'; 
    $body = "Name: $name \n\nEmail: $email  \n\nBody:\n $message";
    $headers = 'From: Sisco Puig - Developer <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
    
    $mail = mail($emailTo, $body, $headers);

    if ($mail) {
        $data['success'] = True;
        $data['name'] = $name;
    }
}

// return all our data to an AJAX call
echo json_encode($data);


