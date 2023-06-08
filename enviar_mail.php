<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function enviar_mail($email,$nombre,$codi_activacion)
{
    require "PHPMailer/Exception.php";
    require "PHPMailer/SMTP.php";
    require "PHPMailer/PHPMailer.php";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jesuslopezcenteno@outlook.es';                     //SMTP username
    $mail->Password   = 'pvmstdcqqcnbpqhe';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jesuslopezcenteno@outlook.es', 'MAS');
    $mail->addAddress("$email", "$nombre");                 //Add a recipient
    $mail->addCC('aguado.isma@gmail.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Activa tu cuenta';
    $mail->Body    = "
    <h2>Saludos, $nombre!</h2>
    <p>Tu código de verificación es <b>$codi_activacion</b></p>
    ";
    $mail->AltBody = "
    Saludos, $nombre!. Tu código de verificación es $codi_activacion.
    ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>