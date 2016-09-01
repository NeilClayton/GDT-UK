<?php

if(isset($_POST['g-recaptcha-response']) & $_POST['g-recaptcha-response']){
    $secret = "6LfypyQTAAAAABR3-nE1URgTXpDnEtQVKrUSRIZJ";
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
    $array = json_decode($response, TRUE);
    if ($array['success']){
        $name = check_input($_POST['name']);
        $email = check_input($_POST['email']);
        $mobile = check_input($_POST['mobile-number']);
        $subject = check_input($_POST['subject']);
        $message = check_input($_POST['message']);
        $to = "wewontbyte@gmail.com";
        $email_message = "
        <html>
        <head>
        <title> $subject </title>
        </head>
        <body>
        <p>From: $name</p><br>
        <p>Email: $email</p><br>
        <p>Tel: $mobile</p><br>
        <p>Message: $message</p>
        </body>
        ";

        $headers = "MIME-VERSION: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";

        mail($to, $subject, $email_message, $headers);

    } else {
        echo "Spam";
    }
}


function check_input ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}