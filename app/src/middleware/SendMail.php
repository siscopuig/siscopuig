<?php

namespace App\Siscopuig;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Siscopuig\ConfigParser;

class SendMail
{
    public function sendPhpMailer($subject, $body)
    {

        $conf = new ConfigParser('../app/config/config.json');

        try {
            $mail = new PHPMailer(true);
            //Server settings
            # $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                        // Set mailer to use SMTP
            $mail->Host = $conf->getParam('mail', 'host');          // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                 // Enable SMTP authentication
            $mail->Username = $conf->getParam('mail', 'username');  // SMTP username
            $mail->Password = $conf->getParam('mail', 'password');  // SMTP password
            $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                      // TCP port to connect to
            //Content
            $mail->isHTML(true);
            $mail->From = $conf->getParam('mail', 'from');
            $mail->addAddress($conf->getParam('mail', 'toAddress'));
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $body;
            # Send mail
            $mail->send();
        } catch (Exception $e) {
            # For debuuging purposes only
            # print "Message could not be sent. Mailer Error: $mail->ErrorInfo";
        }

        if ($mail->ErrorInfo) {
            return false;
        }
        return true;
    }
}
