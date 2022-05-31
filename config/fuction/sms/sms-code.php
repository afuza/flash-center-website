<?php

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC97b6bf1f69b2527b9255843a228ddd4b';
$auth_token = '1836b29613142d7f81f439f7ecafd212';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12058131319";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    ''.$nope.'',
    array(
        'from' => $twilio_number,
        'body' => 'Flashing Center Request kode : '.$qust.''
    )
);

?>