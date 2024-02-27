<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'src/PHPMailer/Exception.php';
 require 'src/PHPMailer/PHPMailer.php';
 require 'src/PHPMailer/SMTP.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANKE</title>
</head>

<body>
    <?php
 $vorname = $_POST['vorname'];
 $nachname = $_POST['nachname'];
 $name = $vorname. " ". $nachname;
 $email = $_POST['email'];
 $message = $_POST['message'];

    echo "Vielen Dank! Wir melden uns bei Ihnen!". $vorname . " " .$nachname;

 if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    $mail->CharSet ='utf-8';

    $mail->setLanguage('de');

    $mail->isSMTP();

    $mail->Host = "securemail-wda-innsbruck-at.prossl.de";

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = "tls";

    $mail->Port = 587;

    $mail->Username = "wiastud-newsletter";
    
    $mail->Password = "45YerkaidaAsaef5Kiap";

    $mail->From = "stud-newsletter@wda-innsbruck.at";
    $mail->FromName = "WDA-Studenten";

    $mail->addAddress($email, $name);
    $mail->addCC('gst.koikoi@gmail.com', "Koy Arcayos");
    $mail->addCC('info@ecostyle.at', 'Frau Goeller');

    $mail->isHTML(true);

    $mail->Subject = "Kontaktanfrage ueber die Hompage";

    $mail->Body = "
    <p><strong>Von:</strong> $vorname $nachname</p>
    <br>
    <p><em>Dies ist eine Kontaktaufnahme.</em></p>
    <p>Die DSGVO wurde zugestimmt!</p>
    <br>
    <p><strong>Nachricht:</strong></p>
    <p>$message</p>
    ";
 
    try {
        $mail->send();
        echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen'  .$vorname . ' ' . $nachname. '</h2>';

    } catch (Exception $ex) {
        echo 'Es ist ein Fehler passiert!' . $mail->ErrorInfo;
    }

}
?>



</body>

</html>


