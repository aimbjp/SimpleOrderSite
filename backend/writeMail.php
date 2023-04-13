<?php


require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require( "../vendor/phpmailer/phpmailer/src/SMTP.php");

if(isset($_GET['mail']) ){
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->setLanguage('ru', '../vendor/phpmailer/phpmailer/language/phpmailer.lang-ru.php');
    try{
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'aimbjpen@gmail.com';                     //SMTP username
        $mail->Password   = 'kbylf900';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('aimbjpu@gmail.com', 'Mailer');
        $mail->addAddress($_SESSION['email'], $_SESSION['name']);     //Add a recipient

        //Attachments
        $mail->addAttachment('../pic/' . $_SESSION['type'] . '.jpg', $_SESSION['type'] . '.jpg');    //Optional name
        $mail->addAttachment('../txt_files/' . $_SESSION['name'] . '_' . date('d-m-Y') . '.txt', $_SESSION['name'] . '_' . date('d-m-Y') . '.txt');    //Optional name


        $par = null;
        $c = 1;
        for ($i = 0; $i < count($_SESSION['Dops']); $i++){
            if ( $_SESSION['Dops'][$i] != 'true') continue;
            $par .= $c++. ') ' . $arrDops[$_SESSION['type']]['n'. $i + 1]['name'] . '<br>';
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_SESSION['name'] . '_' . date('d-m-Y');
        $mail->Body    = '
            <p>Уважаемый ' . $_SESSION['name'] . '!</p>
            <p>Вы приобрели путевку:<br>
                  '. $arrType[$_SESSION['type']]['name'] .', страна '. $arrCountryNames[$_SESSION['country']] .'.</p>
            <p>В путевку входят: ' . $arrEat[$_SESSION['eat']]['name'] . '</p>
            <p>Дополнительные услуги: <br>
                ' . $par . '</p>
                <p>Полная стоимость тура: <bold>' . $_SESSION['cost'] . '</bold></p>
            ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}