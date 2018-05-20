<?php



//    $mail = new PHPMailer();
////
//    $mail->isSMTP();
//    $mail->SMTPDebug = 2;
//    $mail->Debugoutput = 'html';
//    $mail->Host = 'smtp.ukr.net';
//    $mail->Port = 465;
//    $mail->SMTPAuth = true;
//    $mail->Username = 'login@ukr.net';
//    $mail->Password = '******';
//
//    $mail->setFrom('login@ukr.net', 'Test Last');
//    $mail->addReplyTo('replyto@example.com', 'First Last');
//    $mail->addAddress('whoto@example.com', 'John Doe');
//    $mail->Subject = 'PHPMailer SMTP test';
//    $emailTemplateHtml = file_get_contents('email-template.html');
//
//    $mail->AddEmbeddedImage(dirname(__FILE__) . '/images/devider.png', 'img_1u');
//    $mail->AddEmbeddedImage(dirname(__FILE__) . '/images/polaroid-bottom3.png', 'img_2u');
//    $mail->AddEmbeddedImage(dirname(__FILE__) . '/images/polaroid-top1.png', 'img_3u');
//
//    $mail->msgHTML(file_get_contents('email-template.html'), dirname(__FILE__));
//    $mail->AltBody = nl2br(strip_tags($emailTemplateHtml));
////send the message, check for errors
//    if (!$mail->send()) {
//        echo "Mailer Error: " . $mail->ErrorInfo;
//    } else {
//        echo "Message sent!";
//    }

    $from='Test User <login@ukr.net>';
    $to='bav0813@gmail.com';
    $subject="mail test";
    $replyto="'replyto@example.com', 'First Last'";
    $message=file_get_contents('email-template.html');
    $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.$from. PHP_EOL .
        'Reply-To: '.$from. PHP_EOL;
    $res=mail($to, $subject, $message, $headers );
     if (!$res) {
         echo "Mailer Error: ";
     } else {
         echo "Message sent!";
     }