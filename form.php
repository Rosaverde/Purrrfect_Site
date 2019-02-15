<?php
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "purrrfect@purrrfect.online";
    $headers = "From: ".$mailFrom;
    $txt = "You have recived an email from ".$name.".\n\n".$message;

    mail($mailTo, $headers, $txt);
    header("Location: contact");

