<?php
    $fromname = htmlspecialchars_decode($_POST["name"]);
    $frommail = htmlspecialchars_decode($_POST["mail"]);
    $phone = htmlspecialchars_decode($_POST["phone"]);
    $to = "contato@jhonatanmachado.com.br";
    $subject = htmlspecialchars_decode($_POST["subject"]);
    $contact = $fromname . " " . $phone;
    $message = htmlspecialchars_decode($_POST["message"]);
    $headers = "From: " . $fromname . " <" . $frommail . ">";

    //echo $frommail . " " . $fromname . " " . $subject . " " . $headers;
    
    mail($to, $subject, $contact, $headers);
    mail($to,$subject,$message,$headers);
?>