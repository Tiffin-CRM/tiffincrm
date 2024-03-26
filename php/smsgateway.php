<?php
$curl = curl_init();
$apikey = '8020633454984907210';//if you use apikey then userid and password is not required

$sendMethod = 'simpleMsg'; //(simpleMsg|groupMsg|excelMsg)
$messageType = 'text'; //(text|unicode|flash)
$senderId = 'Asknvg';
$mobile = '919068062563,919138331357';//comma separated
$msg = "5674 is your OTP from AskNavigator";
$scheduleTime = '';//mention time if you want to schedule else leave blank

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://www.smsgateway.center/SMSApi/rest/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "userId=$userId&password=$password&senderId=$senderId&sendMethod=$sendMethod&msgType=$messageType&mobile=$mobile&msg=$msg&duplicateCheck=true&format=json",
  CURLOPT_HTTPHEADER => array(
    "apikey: $apikey",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}