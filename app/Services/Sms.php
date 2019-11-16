<?php
namespace App\Services;

use App\User;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

class Sms
{

    public static function sendSms($to, $message)
    {
        $accountSid = config('twilio.twilio_account_sid');
        $authToken = config('twilio.twilio_auth_token');
        $twilioNumber = config('twilio.twilio_number');
        

        $client = new Client($accountSid, $authToken);

        try {
            $client->messages->create(
                $to,
                [
                    "body" => $message,
                    "from" => $twilioNumber
                ]
            );

        } catch (TwilioException $e) {
            \Log::error(
                'Could not send SMS notification.' .
                ' Twilio replied with: ' . $e
            );
        }
    }


}
