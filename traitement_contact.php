<?php
session_start();
$title = "traitement_contact";
include "includes/header.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//require_once "vendor/PHPMailer/src/Exception";

//Load Composer's autoloader
require 'vendor/autoload.php';
$title = "traitement_contact";
//include "includes\header.php";
if (!isset($_POST["token"]) || !isset($_SESSION["token"]) || $_POST["token"] !== $_SESSION["token"]) {
    exit();
}

isset($_POST) ? $_POST : "";
isset($_POST["nom"]) ? $_POST["nom"] : "";
$nom = trim($_POST["nom"]);
$nom = htmlspecialchars($nom);
if (empty($nom)) { ?>
<p class="text-center fs-1 text-uppercase" style="color: #2196f3; ">
    <?php echo "Veuillez remplir le champ NOM."; ?></p>
<?php }

isset($_POST["prenom"]) ? $_POST["prenom"] : "";
$prenom = $_POST["prenom"];
$prenom = trim($prenom);
$prenom = htmlspecialchars($prenom);
if (empty($prenom)) { ?>
<p class="text-center fs-1 text-uppercase" style="color: #2196f3; ">
    <?php echo "Veuillez remplir le champ PRÉNOM."; ?></p>
<?php }

isset($_POST["tel"]) ? $_POST["tel"] : "";
$tel = trim($_POST["tel"]);
$tel = htmlspecialchars($tel);
if (empty($tel) || strlen($tel) !== 10) { ?>
<p class="text-center fs-1 text-uppercase" style="color: #2196f3; ">
    <?php echo "LE NUMÉRO DE TÉLÉPHONE SAISI EST INVALIDE !"; ?></p>
<?php }
isset($_POST["msg"]) ? $_POST["msg"] : "";
$msg = $_POST["msg"];
$msg = trim($msg);

isset($_POST["mail"]) ? $_POST["mail"] : "";
$mailContact = $_POST['mail'];
$format = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/";
isset($_POST['mail']) ? $_POST['mail'] : '';
$mailContact = trim($mailContact);
$mailContact = htmlspecialchars($mailContact);
if (empty($mailContact) || !preg_match($format, $mailContact)) { ?>
<p class="text-center fs-1 text-uppercase" style="color: #2196f3; ">
    <?php echo "L'EMAIL SAISI EST INVALIDE !"; ?></p>
<?php } else {

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'localhost';                     //Set the SMTP server to send through
        $mail->Port       = 1025;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('Présentation@example.com', 'Mailer');
        $mail->addAddress('rolandmerhej8@gmail.com', 'Joe User');     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'CONTACT DU SITE Présentation';
        $mail->Body    = "NOM: $nom <br><br> PRÉNOM: $prenom <br><br>  TÉLÉPHONE: $tel <br><br>  MAIL: $mailContact <br><br> MESSAGE : $msg";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send(); ?>
<p class="text-center fs-1 text-uppercase" style="color: white; ">
    <?php echo ' SUCCES :Message ENVOYÉ ! '; ?></p>
<?php  } catch (Exception $e) { ?>
<p class="text-center fs-1 text-uppercase" style="color: white; ">
    <?php echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; ?></p>
<?php }
} ?>

<button>
    <a style="color: white;background-color:darkblue" href="http://localhost/Pr%C3%A9sentation/contact.php">RETOUR</a>
</button>
<?php include "includes/footer.php"; ?>