<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    $mailTo = "info@softinfodynamics.com";
    $headers = "From: ".$mailFrom;
    $txt = " You have recieved an e-mail from ".$name."\n\n".$message;
    mail($mailTo, $subject,$txt);
    header("Location: index.php?mailsend");
  }
?>
