<?php
/**
 * Created by Nick
 * Date: 2019-03-16
 *
 * This program needs PHP Pear package along with PHP PEAR Mail package.
 * Use the requirements.php file to check if your server can execute this script.
 */

require_once ('Mail.php');

// Basic mail info
$from = "You <you@yourmail.com>";
$to = "You <you@yourmail.com>";
$subject = "Your Subject";
$body = "Your Message";
$replyTo = "you@yourmail.com";  // Optional, if you need a custom reply-to header

// SMTP config
$host = "ssl://yourhost.com";
$port = "465";
$username = "you@yourmail.com";
$password = "YourPassword";

// Construct the mail header assiciative array
$headers = array(
    'From' => $from,
    'To' => $to,
    'Reply-To' => $replyTo,
    'Subject' => $subject
);

// Init the SMTP object
$smtp = Mail::factory('smtp',
    array (
        'host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password
    )
);

// Send the mail
$mail = $smtp->send($to, $headers, $body);

// Check if mail was sent and respond accordingly
if (PEAR::isError($mail)) {
    echo "Error" . $mail->getMessage();
    return;
}
else {
    echo "Success";
    return;
}
