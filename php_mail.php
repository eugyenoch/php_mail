//PHP mail() begins
$to = EMAIL_ADDRESS;
$subject = EMAIL_SUBJECT;

$message = EMAIL_MESSAGE;
$message .= ADDITIONAL_MESSAGE;
$message .= ADDITIONAL_MESSAGE;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@email.net>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
//PHP mail() ends
