<?php
use PHPMailer\PHPMailer\PHPMailer; // use namespace
use PHPMailer\PHPMailer\SMTP; // use namespace
use PHPMailer\PHPMailer\Exception; // use namespace

require 'vendor/autoload.php'; // include autoload
$mail = new PHPMailer(true); // new object PHPMailer

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // debugger SMTP
    $mail->isSMTP(); // connection SMTP
    $mail->Host = 'smtp.gmail.com'; // HOST
    $mail->SMTPAuth = true; // authorization
    $mail->Username = 'AdressFrom@adress.ru'; // gmail for send
    $mail->Password = '13ad-re-ss-Password123'; // password for this gmail
    $mail->Port = 587; // port to send
    $mail->CharSet = "utf-8";
    $mail->setFrom("AdressFrom@adress.ru","Name"); // from mail
    $mail->addAddress("AdressTo@adress.ru", 'Name'); // gmail to
    $mail->addAttachment('background.jpg', 'new.jpg'); // attachment(images, etc)
    $mail->SMTPSecure = 'tls';
    $mail->isHTML(true); // use HTML tag
    $mail->Subject = "Заголовок сообщения."; // gmail subject
    $mail->Body = "Тут должен быть текст на русском языке :)"; // gmail body->text
    $mail->AltBody = "Альтернативное содержание сообщения.";

    $mail->send(); // send mail
    echo "Сообщение отправлено.";
} catch (Exception $e) { // catch exception/error
    echo "Ошибка отправки: {$mail->ErrorInfo}";
}