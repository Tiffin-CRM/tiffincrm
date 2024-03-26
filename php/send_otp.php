<?php
session_start(); // Start the session

// Function to check if the user has exceeded the request limit
function hasExceededRequestLimit($limit, $window) {
    // Get the current timestamp
    $currentTime = time();

    // Initialize session variables if not set
    if (!isset($_SESSION['request_count'])) {
        $_SESSION['request_count'] = 0;
        $_SESSION['request_start_time'] = $currentTime;
    }

    // Increment the request count if within the time window
    if ($_SESSION['request_start_time'] + $window >= $currentTime) {
        $_SESSION['request_count']++;
    } else {
        // Reset request count and start time if the time window has passed
        $_SESSION['request_count'] = 1;
        $_SESSION['request_start_time'] = $currentTime;
    }

    // Check if the request count has exceeded the limit
    return $_SESSION['request_count'] > $limit;
}

// Check if the user has exceeded the request limit (e.g., 5 requests per minute)
if (hasExceededRequestLimit(5, 60)) {
    // If the limit is exceeded, return an error response
    http_response_code(429); // 429 Too Many Requests
    echo json_encode(['error' => 'Rate limit exceeded. Please try again later.']);
    exit;
}

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

    $success = true;
    $response = $success ? ['success' => true] : ['success' => false];
    echo json_encode($response);
}
?>
