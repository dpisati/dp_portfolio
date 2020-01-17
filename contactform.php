<?php

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $emailFrom = $_POST['Email'];
    $subject = "Message from Portfolio"
    $message = $_POST['Message'];
    
    $mailTo = 'dpist89@gmail.com';
    $headers = "From: My Portfolio ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}