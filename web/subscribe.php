<?php
require('../vendor/autoload.php');
require_once('checklogin.php');

$password = '';
if(isset($_POST['password'])) {
    $password = $_POST['password'];
}
$view = checkLogin($password);

if($view == 'apero') {
    // Check for empty fields
    if(empty($_POST['name']) ||
        empty($_POST['count']) ||
        empty($_POST['email']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        header('HTTP/1.1 400 Bad Request');
        return false;
    }

    $name = $_POST['name'];
    $count = $_POST['count'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create the email and send the message
    $email_body_text = "Das Formular auf der Hochzeitswebseite wurde ausgefüllt!\n\n";
    $email_body_text .= "Name: " . $name . "\nEmail: ". $email . "\nAnzahl Personen: " . $count . "\nMessage:\n" . $message;
    $email_body_html = "<p>Das Formular auf der Hochzeitswebseite wurde ausgefüllt!</p>";
    $email_body_html .= '
        <table cellpadding="3">
            <tr><th style="text-align: right; width: 150px;">Name:</th><td>' . $name . '</td></tr>
            <tr><th style="text-align: right;">Email:</th><td>' . $email . '</td></tr>
            <tr><th style="text-align: right;">Anzahl Personen:</th><td>' . $count . '</td></tr>
            <tr><th style="text-align: right; vertical-align: top;">Mitteilung:</th><td>' . nl2br($message) . '</td></tr>
        </table>';
} else {
    // Check for empty fields
    if(empty($_POST['count']) ||
        empty($_POST['name']) ||
        empty($_POST['email']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||
        empty($_POST['attending']) ||
        empty($_POST['mealtype']) ||
        empty($_POST['travelBy']))
    {
        header('HTTP/1.1 400 Bad Request');
        return false;
    }

    $count = $_POST['count'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $attending = $_POST['attending'];
    $mealtype = $_POST['mealtype'];
    $travelBy = $_POST['travelBy'];
    $message = $_POST['message'];

    // Create the email and send the message
    $email_body_text = "Das Formular auf der Hochzeitswebseite wurde ausgefüllt!\n\n";
    $email_body_text .= "Anzahl Personen: " . $count . "\nName: " . $name . "\nEmail: ". $email . "\nBin dabei bei: " . $attending . "\nIch esse: " . $mealtype . "\nIch reise an mit: " . $travelBy . "\nMessage:\n" . $message;
    $email_body_html = "<p>Das Formular auf der Hochzeitswebseite wurde ausgefüllt!</p>";
    $email_body_html .= '
        <table cellpadding="3">
            <tr><th style="text-align: right; width: 150px;">Anzahl Personen:</th><td>' . $count . '</td></tr>
            <tr><th style="text-align: right;">Name:</th><td>' . $name . '</td></tr>
            <tr><th style="text-align: right;">Email:</th><td>' . $email . '</td></tr>
            <tr><th style="text-align: right;">Bin dabei bei:</th><td>' . $attending . '</td></tr>
            <tr><th style="text-align: right;">Ich esse:</th><td>' . $mealtype . '</td></tr>
            <tr><th style="text-align: right;">Ich reise an mit:</th><td>' . $travelBy . '</td></tr>
            <tr><th style="text-align: right; vertical-align: top;">Mitteilung:</th><td>' . nl2br($message) . '</td></tr>
        </table>';
}

$email_subject = "Hochzeitsformular: " . $view;
$from_email = 'noreply@nadiaundmartinheiraten.ch';
$from_name = 'nadiaundmartinheiraten.ch';
$to_email = 'juerg.hunziker@gmail.com';
$to_name = 'Jürg Hunziker';
$reply_to_email = $email;

try {
    $mandrill = new Mandrill('HjlidE8kRO-Lait1hi8b0g');
    $message = array(
        'html' => $email_body_html,
        'text' => $email_body_text,
        'subject' => $email_subject,
        'from_email' => $from_email,
        'from_name' => $from_name,
        'to' => array(
            array(
                'email' => $to_email,
                'name' => $to_name,
                'type' => 'to'
            )
        ),
        'headers' => array('Reply-To' => $reply_to_email)
    );
    $async = false;
    $result = $mandrill->messages->send($message, $async);
    return true;
} catch(Mandrill_Error $e) {
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    header('HTTP/1.1 400 Bad Request');
    return false;
}

?>