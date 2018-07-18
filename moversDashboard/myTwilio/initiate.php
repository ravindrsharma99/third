<?php
require __DIR__ . '/Twilio/autoload.php';

use Twilio\Jwt\ClientToken;

// put your Twilio API credentials here
$accountSid = 'AC98533cb36f8ee1317386250a102e748a';
$authToken  = '7f9c5646db9ebf48074b844043fb1163';
// Test credentials
// $accountSid = 'AC636e7692865cc024f926365a598bc881';
// $authToken  = 'ec76f5d852faa3e287636154f2f3f1a7';
// SUBACCOUNT
// Kudos App
// ACCOUNT SID
// $accountSid = 'AC3762b0968c63c01ebf89ba0378312157';
// AUTH TOKEN
// $authToken  = '645619e0572f3a53de077e5c777b1944';
// App sid
// $appSid = 'AP0ccdda002ee555f0a9573afbbd908f91';
$appSid = 'AP49e517a2b5169a00e3ba768bd5263452';

$capability = new ClientToken($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
if ($_GET['client']!="") {
	$capability->allowClientIncoming($_GET['client']);
}
$token = $capability->generateToken();
echo $token;


