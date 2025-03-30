<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Include PHPMailer files
require __DIR__ ."/../package/PHPMailer/src/Exception.php";
require __DIR__ ."/../package/PHPMailer/src/PHPMailer.php";
require __DIR__."/../package/PHPMailer/src/SMTP.php";

function usePHPMailer($subject, $message) {
    try {

        $to = "info@evenu.com";

        $mailConfig = [
            'host' => '127.0.0.1',    
            'port' => 1025,                     
            'username' => null, 
            'password' => null,    
            'encryption' => null,             
            'from_email' => "info@evenu.com",  
            'from_name' => "Evenu",    
        ];
        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;           
        $mail->isSMTP();
        $mail->Host = $mailConfig['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $mailConfig['username'];
        $mail->Password = $mailConfig['password'];
        $mail->SMTPSecure = $mailConfig['encryption'];
        $mail->Port = $mailConfig['port'];
    
        $mail->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->isHTML(true);
        // $mail->send();

        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    }
    catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}