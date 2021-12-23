<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once "vendor/autoload.php";

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['tel'];
$txtMessage = $_POST['msg'];
$mail = new PHPMailer(true);
 
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "jrweborders@gmail.com";   //username
    $mail->Password = "Jrwebcreations@6390";   //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                    //smtp port
  
    $mail->setFrom('jrweborders@gmail.com', 'Web/Android Order');
    $mail->addAddress('bharthblaster@gmail.com', 'RECEPIENT_NAME');
 
    // $mail->addAttachment(__DIR__ . '/attachment1.png');
    // $mail->addAttachment(__DIR__ . '/attachment2.png');
 
    $mail->isHTML(true);
    $mail->Subject = "New Order!!!";
    $mail->Body    =  "Hello My Name is $txtName , my email is $txtEmail & number is $txtPhone My Order is <b> $txtMessage</b>" ;
 
    $mail->send();
    echo '<h1 style="background-color:powderblue; color:blue; text-align:center; font-size:300%;">Mail Sent</h1>
    <a href="index.html" >Home</a>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
?>

 