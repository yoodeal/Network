<?php
sleep(1);
$to      = 'info@yoodeal.net';
$subject = 'Yoodeal.net Contact form';
$message = $_POST['message'];
$headers = sprintf("From: %s <%s>", $_POST['name'], $_POST['email']);

mail($to, $subject, $message, $headers);

?>