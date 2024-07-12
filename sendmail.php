<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "vendor/autoload.php";

class SendMail {
    public $From = "noreply.delish@gmail.com";
    public $FromName = "Delish";
    public $Username = "noreply.delish@gmail.com";
    public $Password = 'sahaskirensurya';

    public function __construct($toAddress, $toName,$subject, $htmlMessage) {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = $this->Username;
        $mail->Password = $this->Password;
        $mail->setFrom($this->From, $this->FromName);
        $mail->addAddress($toAddress, $toName);
        $mail->Subject = $subject;
        $mail->msgHTML($htmlMessage);
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }
    }

}
