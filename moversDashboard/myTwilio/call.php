 <?php
// Get the PHP helper library from twilio.com/docs/php/install

// this line loads the library 
require __DIR__ . '/Twilio/autoload.php'; 
use Twilio\Twiml;

$response = new Twiml;
// get the phone number from the page request parameters, if given
//print_r($response);die;

if (isset($_REQUEST['To'])) {
    // $number = htmlspecialchars($_REQUEST['To']);
    $number="+917018256110";
    // $response->dial(array(
    //     'callerId' => '+15512727143'
    // ))->number($number);
      $response->dial(array(
        'callerId' => '+14065347696'
    ))->number($number);



    


} else {
    $response->say("Thanks for calling!");
}

echo $response;



