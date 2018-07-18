    <?php

error_reporting(E_ALL);
ini_set('display_errors',1);
require('/Admin/application/libraries/Twilio.php');
require('/Admin/application/libraries/Twilio/autoload.php');
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\VoiceGrant;
use Twilio\Jwt\ClientToken;
 use Twilio\Twiml;



        $response = new Twiml;

        // get the phone number from the page request parameters, if given
        if (isset($_get['To'])) {
            $number = htmlspecialchars($_get['To']);
            $response->dial(array(
                'callerId' => ' +13617920980'
            ))->number($number);
        } else {
            $response->say("Thanks for calling");
        }

        echo $response;
     
      ?>