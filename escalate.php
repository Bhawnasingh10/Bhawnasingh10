<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\Complaints-master\phpmailer\src\SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'singhbhawna1001@gmail.com';
$mail->Password = 'kfukympqpkbrgfqc';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('singhbhawna1001@gmail.com', 'Grievance Management');
$mail->addAddress("mdarbazpc@gmail.com");
$mail->isHTML(true);
$mail->Subject = 'Escalated Grievance';
$mail->Body = 'The complaint has been escalated.';
// $mail->Body=$_POST["Subject"];
$mail->send();
?>
