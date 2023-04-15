<?php
include 'data.php';

require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require( "../vendor/phpmailer/phpmailer/src/SMTP.php");

if(isset($_GET['mail']) ){
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    $mail->setLanguage('ru', '../vendor/phpmailer/phpmailer/language/phpmailer.lang-ru.php');
    try{
        $headers = "From: Maksim <aimbjp@gmail.com>\r\n";
        $headers .= "Reply-To: " . $_SESSION['email'] . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        //Recipients
        $mail->encodeHeader($headers);
        $mail->setFrom('aimbjp@gmail.com', 'Maksim Sergeevich');
        $mail->addAddress($_SESSION['email'], $_SESSION['name']);     //Add a recipient

        //Attachments
        $mail->addEmbeddedImage('../pic/' . $_SESSION['type'] . '.jpg', 'cid');    //Optional name
        $mail->addAttachment('../txt_files/' . $_SESSION['name'] . '_' . date('d-m-Y') . '.txt', $_SESSION['name'] . '_' . date('d-m-Y') . '.txt');    //Optional name

        $mail->CharSet = 'UTF-8';

        $par = null;
        $c = 1;
        for ($i = 0; $i < count($_SESSION['Dops']); $i++){
            if ( $_SESSION['Dops'][$i] != 'true') continue;
            $par .= '<li>' . $arrDops[$_SESSION['type']]['n'. $i + 1]['name'] . '</li><br>';
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_SESSION['name'] . '_' . date('d-m-Y');
        $mail->Body    = "
            <div style='width: 500px'>
            <p style='text-align: center'>Уважаемый, " . $_SESSION['name'] . "!</p>
            <div style=\"display: flex;\">
            <img  src=\"http://aimbjpj6.beget.tech/pic/" . $_SESSION['type'] . ".jpg\" width='200px' alt=\"" . $arrType[$_SESSION['type']]['name'] . "\">
            <div>
                <p>Вы приобрели путевку:<br>
                      <b>". $arrType[$_SESSION['type']]['name'] ."</b>, страна ". $arrCountryNames[$_SESSION['country']] .".</p>
                <p>В путевку входят: <b>" . $arrEat[$_SESSION['eat']]['name'] . "</b></p>
                <p>Дополнительные услуги: <br>
                    <ul>" . $par . "</ul></p>
                    </div>
            </div>
            <p>Полная стоимость тура: <b>" . $_SESSION['cost'] . " руб.</b></p><br><br>
            <p>Почти настоящая компания.</p>
            </div>
            ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}