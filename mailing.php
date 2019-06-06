<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require("vendor/phpmailer/phpmailer/class.phpmailer.php"); //change this according to your need
require("vendor/phpmailer/phpmailer/class.smtp.php"); //change this according to your need

function sendmail($recipient, $subject, $message, $mailhost, $mailsendername, $mailusername, $mailpassword, $mailsmtpsecure, $mailport){
    $message = str_replace("\\r\\n", "", $message);
    $message = stripslashes($message);
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $mailhost;                                // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $mailusername;                 // SMTP username
        $mail->Password = $mailpassword;                           // SMTP password
        $mail->SMTPSecure = $mailsmtpsecure;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
    
        $mail->setFrom($mailusername, $mailsendername);
        $mail->AddReplyTo($mailusername,$mailsendername);
        $mail->From = $mailusername;
        
    	//Recipients
    	$mail->addAddress($recipient);     // Add a recipient
    
        $mailbody = $message;
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $mailbody;
        $mail->AltBody = strip_tags($mailbody);
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
