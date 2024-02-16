<?php
$to_email = "shadowchor883@gmail.com";
$subject = "Forget password";
$body = "Hello ,

Greetings from Simtrak! Your verification code is , valid for the next 5 minutes.
Please keep it confidential and do not share it with anyone.

Best regards,
Simtrak Team";
$headers = "From: contact@simtrak.in";
mail($to_email, $subject, $body, $headers);


?>