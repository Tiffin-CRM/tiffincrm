<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"));
    $enteredOTP = $data->otp;

    // Retrieve the OTP from the user's session
    $storedOTP = isset($_SESSION['otp']) ? $_SESSION['otp'] : null;

    if ($storedOTP && $enteredOTP === $storedOTP) {
        echo json_encode(['message' => 'OTP Verified successfully!']);
    } else {
        echo json_encode(['message' => 'Incorrect OTP. Please try again.']);
    }
}
?>
