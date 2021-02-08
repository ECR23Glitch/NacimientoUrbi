<?php
    $name = $_POST['first name'];
    $app = $_POST['last name'];
    $mail = $_POST['email'];
    $message = $_POST['message'];

    $para = "santaclos@testnacimientourbi.samuraistudio.com.mx";
    $asunto = "Carta";
    $header = "From: ".$mail;

    mail($para, $asunto, $message, $header);
    header("http://testnacimientourbi.samuraistudio.com.mx/");
 ?>
