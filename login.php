<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iMeal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet" />
    <meta robots="noindex, nofollow" />
    <style>
      body {
        background: #faf9ff;
        padding: 10px;
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        color: #313131;
      }
      .heading_box h2,
      .heading_box p,
      .heading_box svg {
        margin: 2px auto;
      }
      .container {
        max-width: 800px;
        padding: 20px 0px;
        width: 100%;
        margin: 2px auto;
      }
      .heading_box {
        padding: 20px;
        text-align: center;
        border-radius: 5px;
        border: 1px solid #e5e5e5;
        background: #fff;
        margin: 0px auto;
        display: flex; /* Make the container a flexbox */
        flex-direction: row; /* Set the flex direction to column */
        justify-content: center;
      }
      h2 {
        color: #313131;
        font-size: 24px;
        font-weight: 700;
      }
      p {
        color: #313131;
        font-size: 14px;
      }
      .form_div {
        margin-top: 60px;
      }
      .input_styling {
        width: 100%;
        padding: 18px;
        font-size: 16px;
        border: 1px solid #e5e5e5;
        margin-top: 8px;
        box-sizing: border-box; /* Add this line */
        border-radius: 5px;
      }
      input:focus {
        outline-color: #5546af; /* This will change the color of the focus outline to blue when you click on an input field */
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0; /* Optional - removes the margin for Firefox */
      }
      .input_div label {
        font-size: 16px;
        font-weight: 700;
      }
      .input_div {
        margin: 20px auto;
      }
      .button {
        border-radius: 5px;
        border: 1px solid #dfdfdf;
        background: #5546af;
        color: #f3f3f3;
        font-weight: 600;
        font-size: 16px;
        text-align: center;
      }
      .hideit {
        display: none;
      }
      .cur {
        cursor: pointer;
      }
      .response {
        text-align: center;
        font-size: 16px;
        color: #353535;
        font-weight: 500;
      }
      .lottieimg{
        display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
    margin: 20px auto;
    align-items: center;
    width: 70%;

      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="heading_box">
        <div>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="50"
            height="50"
            viewBox="0 0 24 24"
            fill="none">
            <path
              d="M19 15V3C14.184 7.594 13.977 11.319 14 15H19ZM19 15V21H18V18M8 4V21M5 4V7C5 7.79565 5.31607 8.55871 5.87868 9.12132C6.44129 9.68393 7.20435 10 8 10C8.79565 10 9.55871 9.68393 10.1213 9.12132C10.6839 8.55871 11 7.79565 11 7V4"
              stroke="#5546AF"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </div>
        <div>
          <h2>Login to iMeal</h2>
          <p>Manage Your Meals Here</p>
        </div>
      </div>
      <div class="lottieimg">
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

<dotlottie-player src="https://lottie.host/f0e2ec99-3bc8-46e8-b88f-16fb9b4c958a/pw1a35AFiw.lottie" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>      </div>
      <div class="form_div">
        <div id="phone_section">
          <div class="input_div">
            <label for="phone">Mobile Number</label>
            <input
              type="number"
              name="phone"
              id="phoneNumber"
              class="input_styling"
              placeholder="Enter Your Registered Phone Number"
              required />
            <div class="input_div">
              <button
                class="input_styling cur button"
                id="send_otp"
                onclick="check_number()">
                Get OTP
              </button>
            </div>
          </div>
        </div>
        <div id="otp_section" class="hideit">
          <div class="input_div" id="otp">
            <label for="otp">OTP</label>
            <input
              type="number"
              name="otp"
              id="otpInput"
              placeholder="Enter 4 Digit OTP here"
              min="1000" max="9999"
              maxlength="4"
              class="input_styling"
              required />
          </div>
          <div class="input_div">
            <button class="input_styling cur button" onclick="getOTP()">
              Login Now
            </button>
          </div>
          <p id="resultMessage" class="hideit response">Result Here</p>
          <p id="show_response" class="response">
    <?php if(isset($_GET[''])) {echo $_GET[''];} ?>
</p>

        </div>
      </div>
    </div>
  </body>
</html>
<script>
function sendOTP() {
    var phoneNumber = document.getElementById("phoneNumber").value;
    document.getElementById("phoneNumber").disabled = true;
    document.getElementById("send_otp").classList.add("hideit");
    document.getElementById("otp_section").classList.remove("hideit");

    fetch("/php/send_otp.php", {
        method: "POST",
        body: JSON.stringify({ phoneNumber: phoneNumber }),
        headers: {
            "Content-Type": "application/json",
        },
    })
    .then((response) => response.json())
    .then((data) => {
        console.log(data); // Log the response from the server
    })
    .catch((error) => console.error("Error:", error));
}

function getOTP() {
    var enteredOTP = document.getElementById("otpInput").value;

    var otpPattern = /^\d{4}$/;
    if (!otpPattern.test(enteredOTP)) {
        alert("Please enter a valid otp"); // Display error message
    } else {
        fetch("/php/verify_otp.php", {
            method: "POST",
            body: JSON.stringify({ otp: enteredOTP }),
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then(response => response.json())
        .then(data => {
          console.log('Response from server:', data); // Log response data for debugging

          if (data.hasOwnProperty('message') && data.message === 'OTP Verified successfully!') {
            console.log('OTP verification successful. Redirecting to logged-in page...');
            window.location.href = 'user.php'; 
        } else {
                // If OTP verification fails, display an error message to the user
                document.getElementById("resultMessage").innerText = data.message;
                document.getElementById("resultMessage").classList.remove("hideit");
            }
        })
        .catch(error => console.error('Error:', error));
    }
}

function check_number() {
    var phoneNumber = document.getElementById("phoneNumber").value;
    // Regular expression to validate phone number format (E.164 format)
    var phoneNumberPattern = /^\d{10}$/;

    if (phoneNumberPattern.test(phoneNumber)) {
        sendOTP(); // If phone number format is correct, proceed to send OTP
    } else {
        alert("Please enter a valid phone number"); // Display error message
    }
}

</script>
