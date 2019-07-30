<?php

namespace App\Siscopuig;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class ContactController extends BaseController
{

    public function contact(Request $request, Response $response)
    {
        return $this->container->views->render($response, 'contact.twig');
    }

    public function mail(Request $request, Response $response)
    {
        $name    = $request->getParam('name');
        $email   = $request->getParam('email');
        $message = $request->getParam('message');
        $errors = [];
        $data = [];
        $subject = '';

        if (empty($name)) {
            $errors['name'] = 'Name is required';
        } elseif (strlen($name) > 50) {
            $errors['name'] = 'Name too long, Please use a short name';
        } else {
            $name = trim(strip_tags($name));
            $subject = "Web user - $name";
        }

        if (empty($email)) {
            $errors['email'] = 'Email is required';
        } elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "email: $email invalid";
        } else {
            $email = trim($email);
        }

        # Validate input message
        if (empty($message)) {
            $errors['message'] = 'Message is required.';
        } elseif (strlen($message) > 300) {
            $errors['message'] = 'Message longer than 300 characters';
        } else {
            $message = trim(strip_tags($_POST['message']));
        }

        if (! empty($errors)) {
            $data['success'] = false;
            $data['errors']  = $errors;
        } else {
            # Creates email body
            $body = "<p>Name: $name</p>
                     <p>Mail address: $email</p>
                     <br>
                     <br>
                     <p>$message</p>";

            # Call PhpMailer
            $sendmailer = new SendMail();

            if (! $sendmailer->sendPhpMailer($subject, $body)) {
                $data['success'] = false;
            } else {
                $data['success'] = true;
                $data['name'] = $name;
            }
        }
        # Return data
        return $response->withJson($data);
    }
}
