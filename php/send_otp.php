<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"));
    $phoneNumber = $data->phoneNumber;

    // Generate a random 4-digit OTP
    $otp = strval(rand(1000, 9999));

    // Store the OTP in the user's session
    $_SESSION['otp'] = $otp;

    // Prepare the payload to send to the webhook
    $payload = json_encode(array("phoneNumber" => $phoneNumber, "otp" => $otp));

    // Set up cURL to make a POST request to the webhook URL
    $ch = curl_init("https://webhook.site/8f4d8972-6500-4491-b02e-744540dcb9a0");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Handle the response from the webhook (optional)
    echo $response;
}
?>
