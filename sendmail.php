<?php
include("mailing.php");

$mailtitle = "";
$mailcontent = "";

if(isset($_POST["to"])){
    $email = preg_replace('/\s+/', '', $_POST["to"]);
    $mailtitle = $_POST["title"];
    $mailcontent = $_POST["content"];
    $mailhost = $_POST["mailhost"];
    $mailusername = $_POST["mailusername"];
    $mailpassword = $_POST["mailpassword"];
    $mailsmtpsecure = $_POST["mailsmtpsecure"];
    $mailport = $_POST["mailport"];
    $mailsendername = $_POST["mailsendername"];
    sendmail($email, $mailtitle, $mailcontent, $mailhost, $mailsendername, $mailusername, $mailpassword, $mailsmtpsecure, $mailport);
}


?>