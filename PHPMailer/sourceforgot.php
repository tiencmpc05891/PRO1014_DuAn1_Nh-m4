<?php

$mail = new Mailer();

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{


    public function sendMail($title, $content, $addressMail)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = 'utf-8';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leminhhuy1604@gmail.com';
            $mail->Password = 'fxyu dnmr csxk yjsp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('leminhhuy1604@gmail.com', 'Huy');
            $mail->addAddress($addressMail);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $title;
            $mail->Body = $content;

            // Send the email
            $mail->send();
        } catch (Exception $e) {

        }
    }
    public function sendMailContact($thank_you_title, $thank_you_content, $email)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = 'utf-8';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leminhhuy1604@gmail.com';
            $mail->Password = 'fxyu dnmr csxk yjsp';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('leminhhuy1604@gmail.com', 'Huy');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $thank_you_title;
            $mail->Body = $thank_you_content;

            // Send the email
            $mail->send();

        } catch (Exception $e) {

        }
    }


}

