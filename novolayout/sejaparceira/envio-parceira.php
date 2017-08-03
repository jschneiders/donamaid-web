<?php

if($_POST['nome'] == '' || $_POST['cidade'] == '' || $_POST['email'] == ''){
  return "Dados não preenchidos";
  die();
}
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require '../PHPMailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "donamaidbrasil@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "Delta455";
//Set who the message is to be sent from
$mail->setFrom('donamaidbrasil@gmail.com', 'Donamaid');
//Set an alternative reply-to address
$mail->addReplyTo('donamaidbrasil@gmail.com', 'Donamaid');
//Set who the message is to be sent to
$mail->addAddress('luiz@donamaid.com', 'Luiz Gilberto');
//$mail->addAddress('schneiders.janine@gmail.com', 'Janine');
//Set the subject line
$mail->Subject = 'Nova parceira Donamaid ';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->Body = "teste";
$nome = utf8_decode($_POST['nome']);
$cidade = utf8_decode($_POST['cidade']);
$email = utf8_decode($_POST['email']);
$genero = utf8_decode($_POST['genero']);
$conheceu = utf8_decode($_POST['conheceu']);
$acessa = utf8_decode($_POST['acessa']);
$avise = utf8_decode($_POST['avise']);
$ano = utf8_decode($_POST['ano']);
$preco = utf8_decode($_POST['preco']);
$telefone = utf8_decode($_POST['telefone']);
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->Body =  utf8_encode('<div style="height: 24px;padding: 50px 00px; width: 100%; background-color: #7200b8; color: #ffffff;text-align: center; font-size: 22px;">
                Novo cliente Donamaid
              </div>
              <div style="height: 200px;padding: 100px 50px; width: calc(100% - 100px); background-color: #9900cc; color: #ffffff;text-align: left; font-size: 18px;"> 
                Cidade: <b> '.$cidade.' </b><br>
                Nome: <b>'.$nome.'</b><br>
                Email: <b> <a style="color: #ffffff;">'.$email.'</a></b><br>
                Genero: <b> '.$genero.'</b><br>
                Como ficou sabendo:<b> '.$conheceu.' </b><br>
                Por onde acessa a internet: <b> '.$acessa.'</b><br>
                Ano de nascimento: <b> '.$ano.'</b><br>
                Faixa de preço: <b> '.$preco.'</b><br>
                Telefone: <b> '.$telefone.'</b><br>
                Avise quando estiverem operando na minha cidade:<b> '.$avise.' </b><br>
              </div>');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//send the message, check for errors
if (!$mail->send()) {
    return "Mailer Error: " . $mail->ErrorInfo;
} else {
    return "Message sent!";
}

?>