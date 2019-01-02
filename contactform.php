<?php

// configure
$from = '<trcnotifications@starcomm.com>';
$sendTo = '<trcnotifications@starcomm.com>';
$subject = 'Inquiry from StarComm contact page';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'email' => 'Email', 'phone' => 'Phone', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Form successfully submitted. Thank you';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending
try
{
    $emailText = "A new message from the StarComm website\n=============================\n";

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
