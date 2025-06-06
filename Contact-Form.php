<?php
    $RecipientName = $_POST['name'];
    $Subject = $_POST['subject'];
    $message = $_POST['message'];

    $formcontent = "Name: $RecipientName\Subject: $Subject\nMessage: $message";
    $thankYou = "Dear $RecipientName,\n
Thank you for taking the time to contact us today, we hope we can assist you with your query.\n
Please rest assured our team will review you message and get back to you with the next 48 hours.

Best regards,
Wi.Bi Studios";

    $recipient = $_POST['email'];
    $subject = "Contact Reason: $Subject";
    $headers = "From: $recipient";
    $thankYouHeaders = "From: wibistudio@gmail.com";

    if (mail("wibistudio@gmail.com", $subject, $formcontent, $headers)) {
        mail($recipient, "Thank You!", $thankYou, "From: wibistudio@gmail.com");
        header("Location: ThankYou.html");
        exit();
    } else {
        echo "Error sending email.";
    }
?>