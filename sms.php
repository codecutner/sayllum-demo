<?php
$userNumber = $_GET['userNumber'];
$userUsername   = $_GET['userUsername'];

function send_sms($number,$body)
{
    $ID = 'AC08960a1c7d17f01f2bb15e6cb5cae44d';
    $token = 'eb2fe89269a1342f5afeade2d2606f48';
 //   $service = 'AB1234567890abcdef1234567890abcdef';
    $url = 'https://api.twilio.com/2010-04-01/Accounts/' . $ID . '/Messages.json';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    curl_setopt($ch, CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD,$ID . ':' . $token);

    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        'To=' . rawurlencode('+27' . $number) .
       
        '&From=' . rawurlencode('+18148854754') .
        '&Body=' . rawurlencode($body));

    $resp = curl_exec($ch);
    curl_close($ch);
    $json_decoded_data = json_decode($resp,true);
    //return print_r($resp);

  foreach ($json_decoded_data as $key => $value) {
    if($key == 'status') {
        if($value == 'queued'){
            echo 'You are now subscribed to Checkers! You will now receive promotional from Checkers! check your sms' ;
        }else{echo 'Something went wrong try again!'; }
    }

}


} //body should contail url with username -md5'ed . Then ask question . if correct - then show message . prolly gonna need another page ! - page should have inputs for questions

 echo send_sms('638946565','its working boi go here:https://google.com here your code:0943');



