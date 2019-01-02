<?php

// configure
$from = '<trcnotifications@starcomm.com>';
$sendTo = '<Ttrcnotifications@starcomm.com>';
$subject = 'TRC Submitted Form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'email' => 'Email', 'address1' => 'Address1', 'address2' => 'Address2', 'city' => 'City', 'state' => 'State', 'zip' => 'Zip', 'phone' => 'Phone', 'boxes' => 'Boxes', 'devices' => 'Devices', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Form successfully submitted. You will receive a shipping label and instructions shortly. Thank you';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending
try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
