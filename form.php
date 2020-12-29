<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    try{
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'quadratwemimo@gmail.com';
       $mail->Password = 'Sunkanmi01';
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
       $mail->pORT = '587';

       $mail->setfrom('quadratwemimo@gmail.com');
       $mail->addAddress('quadratwemimo@gmail.com, ayomideolaniran@gmail.com');

       $mail->isHTML(true);
       $mail->Subject = 'Message Received (Book Request)';
       $mail->Body = '<h3>Name: $name <br>Email: $email <br>Title: $title <br>Author: $author</h3>';

       $mail->send();
       $alert = '<div class="alert-success">
                    <span>Request Sent!</span>
                </div>';

    } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}


?>