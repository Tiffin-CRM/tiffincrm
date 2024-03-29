<?php

session_start();
$phonetoken = $_COOKIE['token'];

if (!$phonetoken) {
    header("Location: login.php?show_response=Please Login First");
    exit;
}
$phone = $phonetoken / '4578348';

try {

    include ("php/api.php");
    $user = getCustomer($phone);
    $_SESSION['user_id'] = $user["id"];
    $deliveries = getOrders($user["id"]);
    //code...
} catch (\Throwable $th) {
    header("Location: login.php?phone_not_found");
    echo $th->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Deliveries - iMeals</title>
    <link rel="icon" href="/assets/icons/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/assets/icons/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#5546af" />

    <link rel="stylesheet" href="css/base.css?v=0.0.1">
    <link rel="stylesheet" href="css/style.css?v7">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
        <script>
                    function toogleList(ele_id,icon) {
                        document.getElementById(ele_id).classList.toggle('hideit');
                        document.getElementById(icon).classList.toggle('rotateit');
                    }
                    function copyText() {
    var inputField = document.getElementById("upi_id_input_box");
    inputField.select();
    document.execCommand("copy");
    alert("Upi Id copied to clipboard! Now Paste in Any Upi App & Pay");
  }
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/service-worker.js')
        .then(registration => {
          console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch(error => {
          console.error('Service Worker registration failed:', error);
        });
    });
  }
  let deferredPrompt;

self.addEventListener('beforeinstallprompt', (event) => {
  // Prevent the default prompt from showing
  event.preventDefault();
  // Save the event for later use
  deferredPrompt = event;
});

                </script>
                <style>
                    .cancel_icon{
                                    width: 16px !important;
                                }
                    .expandable_heading_container {
                        padding: 15px;
                        display: flex;
                        margin: 0;
                        justify-content: space-between;
                        flex-direction: row;
                        background: #ffffff;
                        border-radius: 5px;
                    }
                   .hideit
                   {
                       display: none;
                   }
                   .rotateit{
                       transform: rotate(180deg);
                   }
                   #paused_orders{
                    background-color: rgb(255, 255, 255);
                    padding: 5px;
                   }
                   #active_meals{
                    background-color: rgb(255, 255, 255);
                    padding: 5px;
                   }

                   .upi_id_input_container {
                            position: relative;
                            width: 100%;
                        }

                        #upi_id_input_box {
                            width: 100%;
                            /* Adjust width to accommodate icon */
                            padding-right: 25px;
                            /* Space for the icon */
                        }

                        #copy_icon {
                            position: absolute;
                            top: 62%;
                            right: 30px;
                            /* Adjust as needed */
                            transform: translateY(-50%);
                        }
                </style>
</head>

<body>
    <header class="pos-r">
        <div class="container noscroll header_box">
            <!-- <div class="hamburger" onclick="toggleMenu()">
                <svg width="18" height="24" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H17M1 7H9M1 13H17" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div> -->
            <div class="nav_logo">
                                        <img src="https://imeals.in/img/tool-kitchen.svg" alt="nife icon">

                <span>Mom's Canteen</span>
            </div>
            <a href="https://api.whatsapp.com/send?phone=919068062563" class="whats_app_icon">
                <img src="img/whast-app-btn-icon.svg?v2" alt="Whats app icon">
            </a>
        </div>
        </div>
        <nav class="menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="hero_secion">
            <div class="container">
                <!-- <div class="delivery_name r-flex ali-c">
                    <div class="tool_kic_img">
                        <img src="img/tool-Canteen.svg" alt="nife icon">
                    </div>
                    <div class="name_deliry_text">Mom’s Canteen</div>
                </div> -->
                <div class="hero_cont_box"  onclick="deferredPrompt.prompt();">
                    <div class="cont_box_text">Hi <?php echo $user["name"]; ?> (<span id="userPhone"><?php echo $phone; ?></span>), Welcome to Mom’s Canteen. Use iMeals to manage your meals.
                    </div>
                    <!-- <div class="app_installation_guide_box r-flex ali-c jut-c">
                        <a href="#"  onclick="deferredPrompt.prompt();">Install Now</a> <span> (Web App)</span>
                    </div> -->
                </div>
                <div id="active_deliveries" class="active_deliveries_container">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Active Deliveries</span>
                        <img src="img/green-tik.svg" alt="green verification tik">
                    </div>
                    <?php foreach ($deliveries as $delivery) {
                        if ($delivery['status'] == 'preparing') {
                            ?>
                                            <div class="active_deliveries_box">
                                                <div class="brk_tre_box r-flex ali-c jut-sb">
                                                    <div class="brk_box r-flex ali-c">
                                                        <img src="img/time.svg" alt="sun set and date">
                                                        <span>
                                                            <?php echo $delivery['time']; ?> - Today
                                                        </span>
                                                    </div>
                                                    <div class="pre_box r-flex ali-c">
                                                        <img src="img/pre.svg" alt="line up and down">
                                                        <span>Preparation Started</span>
                                                    </div>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/food-item.png" alt="meal icon">
                                                    <span>
                                                        <?php echo $delivery['items']; ?>
                                                    </span>
                                                </div>
                                                <div class="active_deloveries_note">
                                                    <b>Note:</b> Amount is Deducted for this Delivery and cannot be refunded. But You can still
                                                    cancel this to better utilisation of food prepared for you
                                                </div>
                                                <div class="req_can_box r-flex ali-c jut-sb">
                                                    <div class="req_box r-flex ali-c" onclick="request_edit();">
                                                        <img src="img/edite-icon.svg" alt="eddite text icon">
                                                        <span>Edit this delivery</span>
                                                    </div>
                                                    <div class="can_box r-flex ali-c" onclick="updateDeliveryStatus(<?php echo $delivery['id']; ?>, 'wasted');">
                                                        <img src="img/cancel.svg?v6" class="cancel_icon" alt="cancel icon">
                                                        <span>Cancel This Delivery</span>
                                                    </div>
                                                </div>

                                
                                            </div>
                                <?php }
                    } ?>
                </div>
                <hr style="margin: 20px auto; border: 1px solid #f9f5f5;">

                <div class="active_deliveries_container">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Upcoming Deliveries</span>
                    </div>
                    <?php foreach ($deliveries as $delivery) {
                        if ($delivery['status'] == null) {
                            ?>
                                            <div class="active_deliveries_box">
                                                <div class="brk_tre_box r-flex ali-c jut-sb">
                                                    <div class="brk_box r-flex ali-c">
                                                        <img src="img/time.svg" alt="sun set and date">
                                                        <span>
                                                            <?php echo $delivery['time']; ?> - Today
                                                        </span>
                                                    </div>
                                                    <div class="pre_box r-flex ali-c" style="color: #3E3D3D;">
                                                        <img src="img/clock.svg" alt="line up and down" style="width=15px;">
                                                        <span>Preparation Not Started</span>
                                                    </div>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/food-item.png" alt="meal icon">
                                                    <span>
                                                        <?php echo $delivery['items']; ?>
                                                    </span>
                                                </div>
                                                <div class="req_can_box r-flex ali-c jut-sb">
                                                    <div class="req_box r-flex ali-c" onclick="request_edit();">
                                                        <img src="img/color-edite-icon.svg" alt="eddite text icon">
                                                        <span style="color: #5546AF;">Edit this delivery</span>
                                                    </div>
                                                    <div class="can_box r-flex ali-c" onclick="updateDeliveryStatus(<?php echo $delivery['id']; ?>, 'cancelled')">
                                                        <img src="img/color-cancel.svg?v2" alt="cancel icon" class="cancel_icon">
                                                        <span style="color: #5546AF;">Cancel This Delivery</span>
                                                    </div>
                                                </div>

                                            </div>
                                <?php }
                    } ?>
                </div>

                <div class="pause_deliveries_btn">
                    <button class="delivery_pause r-flex ali-c jut-c" onclick="updateAccount(this, '<?php echo $user['status'] == 'active' ? 'paused' : 'active'; ?>');">
                        <img src="img/pause.svg" alt="pause icon">
                        <span><?php echo ($user['status'] == 'active') ? 'Pause' : 'Resume'; ?> All  Future Deliveries</span>
                    </button>
                    <?php if ($user['status'] == 'active') { ?>
                                <div class="delivery_pause_text">This will pause all your future deliveries until you resume it
                                    back. Remember: This will not impact Active deliveries</div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <hr style="margin: 20px auto; border: 1px solid #f9f5f5;">

        <section class="transactions_section">
            <div class="container">
                <div class="add_balance_box r-flex ali-c jut-sb">
                    <div class="left_wallet_box">
                        <div class="wallet_icon r-flex ali-c">
                            <img src="img/wallet-icon.svg" alt="wallet icon">
                            <div class="balance_box c-flex">
                                <div class="amount_balance_text">
                                    <?php echo $user["balance"]; ?>
                                </div>
                                <div class="balance_span_text">Balance</div>
                            </div>
                        </div>
                    </div>

                    <div class="right_add_balance_box" onclick="add_balance()">+Add Balance</div>
                </div>
                <!-- <button class="go_to_trans_box" onclick="window.open('transactions.php');">Go to Transactions</button> -->
            </div>
        </section>
        <hr style="margin: 20px auto; border: 1px solid #f9f5f5;">

        <section class="meal_plasns_box">
            <div class="container">
                <div id="active_meals" class="active_deliveries_container " style="margin-top: 25px;">
                    <div class="active_deliveries_heading r-flex ali-c expandable_heading_container"  onclick="toogleList('active_plans_list','active_plan_arrow');">
                        <span>Your Active Meal Plans <img src="img/green-tik.svg" alt=""></span>
                        
                        <span><svg id="active_plan_arrow" width="15" height="9" viewBox="0 0 15 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1L7.5 8L1 1" stroke="#272727" stroke-linecap="square" />
                            </svg>
                        </span>
                    </div>
                    <div id="active_plans_list" class="hideit">

                    <?php foreach ($deliveries as $delivery) {
                        if ($delivery['is_active'] == 1) {
                            ?>
                                            <div class="active_deliveries_box">
                                                <div class="brk_tre_box r-flex ali-c jut-sb">
                                                    <div class="brk_box r-flex ali-c">
                                                        <img src="img/time.svg" alt="sun set and date">
                                                        <span>
                                                            <?php echo $delivery['time']; ?> - Daily
                                                        </span>
                                                    </div>
                                                    <div class="pre_box r-flex ali-c">
                                                        <img src="img/scooter-icon.svg?v1" alt="scooter icon">
                                                        <span>Multiple Deliveries</span>
                                                    </div>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/food-item.png" alt="meal icon" style="width:17px;">
                                                    <span>
                                                        <?php echo $delivery['items']; ?>
                                                    </span>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/subscription-icon.svg" alt="meal icon">
                                                    <span>₹
                                                    <?php echo $delivery['price']; ?>/Meal
                                                    </span>
                                                </div>

                                                <div class="req_can_box r-flex ali-c jut-sb">
                                                    <div class="req_box r-flex ali-c" onclick="request_edit();">
                                                        <img src="https://imeals.in/img/color-edite-icon.svg" alt="Edit Meal Plan">
                                                        <span  style="color: #5546AF;">Edit Meal Plan</span>
                                                    </div>
                                                    <div class="can_box r-flex ali-c" onclick="updateOrderStatus(<?php echo $delivery['id']; ?>, 'pause');">
                                                        <img src="https://imeals.in/img/resume-icon.svg" style="width:6px;" alt="pause icon">
                                                        <span  style="color: #5546AF;">Pause Now</span>
                                                    </div>
                                                </div>
                                

                                            </div>
                                <?php }
                    } ?>
                    <div style="display: none;" id="no_active_meals">No Active Meals</div>
                </div>
                </div>
                <hr style="border: 1px solid #f9f5f5;">

                <div id="paused_orders" class="active_deliveries_container" style="margin-top: 10px;opacity:80%;" >
                <div class="active_deliveries_heading r-flex ali-c expandable_heading_container" onclick="toogleList('paused_plans_list','paused_plan_arrow');">
                        <span>Your Paused Meal Plans</span>
                        <span><svg id="paused_plan_arrow" width="15" height="9" viewBox="0 0 15 9" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1L7.5 8L1 1" stroke="#272727" stroke-linecap="square" />
                            </svg>
                        </span>
                    </div>
                    <div id="paused_plans_list" class="hideit">
                    <?php foreach ($deliveries as $delivery) {
                        if ($delivery['is_active'] == 0) {
                            ?>
                                            <div class="active_deliveries_box">
                                                <div class="brk_tre_box r-flex ali-c jut-sb">
                                                    <div class="brk_box r-flex ali-c">
                                                        <img src="img/time.svg" alt="sun set and date">
                                                        <span>
                                                            <?php echo $delivery['time']; ?> - Daily
                                                        </span>
                                                    </div>
                                                    <div class="pre_box r-flex ali-c">
                                                        <img src="img/scooter-icon.svg" alt="scooter icon">
                                                        <span>Multiple Deliveries</span>
                                                    </div>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/food-item.png" alt="meal icon">
                                                    <span>
                                                        <?php echo $delivery['items']; ?>
                                                    </span>
                                                </div>
                                                <div class="meal_item_list r-flex ali-c">
                                                    <img src="img/subscription-icon.svg" alt="meal icon">
                                                    <span>₹
                                                    <?php echo $delivery['price']; ?>/Meal
                                                    </span>
                                                </div>

                                                <div class="req_can_box r-flex ali-c jut-sb">
                                                    <div class="req_box r-flex ali-c" onclick="request_edit();">
                                                        <img src="https://imeals.in/img/color-edite-icon.svg" alt="Edit Meal Plan">
                                                        <span  style="color: #5546AF;">Edit Meal Plan</span>
                                                    </div>
                                                    <div class="can_box r-flex ali-c" onclick="updateOrderStatus(<?php echo $delivery['id']; ?>, 'resume');">
                                                        <img src="https://imeals.in/img/resume-again.svg?v1" style="width:10px;" alt="pause icon">
                                                        <span  style="color: #5546AF;">Resume Now</span>
                                                    </div>
                                                </div>

                                            </div>
                                <?php }
                    } ?>
                </div>
                </div>
                <button class="user_log_out_btn r-flex ali-c jut-c" onclick="logout();">
                    <img src="img/log-out-icon.svg" alt="log out icon" style="width:20px;">
                    <span>LogOut</span>
                </button>

                <div class="disclaimer_box">Disclaimer: This Information is provided by Mom's Canteen.</div>
            </div>
        </section>

        <section class="popup_section">
            <div class="background_pop_up">
                <div class="overly-touch"  id="overly-touch"></div>
                <div class="pop_up_container">
                    <div class="close_pop_up_box" onclick="toggleBtn()">
                        <img src="img/close_cross.svg" alt="cross icon">
                    </div>
                    <div class="pop_heading_text" id="popupTitle">Request Edit in Meal Plan</div>
                    <div class="dark_sub_heading" id="descText">You have to request this to Mom's Canteen Management
                        Team on
                        Whatsapp</div>
                    <div class="dark_sub_heading" id="steps_desc"
                        style="text-align: start; font-size: 14px;display:none;">
                        1. Enter Payment Amount & Click Below Button
                        <br>
                        2. Pay via any UPI apps
                        <br>
                        3. Send Payment Screenshot to Mom's Canteen
                    </div>
                    <div class="short_not_box" id="noteText">Remember: You must have to send payment screenshot to
                    Mom's Canteen
                        to Add the Balance in your wallet</div>
                        <div class="upi_id_copy" onclick="copyText()" style="display:none" id="upi_id_input_container">
                        <input type="upiid" name="amount" id="upi_id_input_box" value="7847992004@ybl"
                            class="amount_input_box" readonly>
                        <svg id="copy_icon" width="20" height="22" viewBox="0 0 20 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13 0.25H8.944C7.106 0.25 5.65 0.25 4.511 0.403C3.339 0.561 2.39 0.893 1.641 1.641C0.893 2.39 0.561 3.339 0.403 4.511C0.25 5.651 0.25 7.106 0.25 8.944V15C0.250024 15.8934 0.568936 16.7575 1.14934 17.4367C1.72974 18.1159 2.53351 18.5657 3.416 18.705C3.553 19.469 3.818 20.121 4.348 20.652C4.95 21.254 5.708 21.512 6.608 21.634C7.475 21.75 8.578 21.75 9.945 21.75H13.055C14.422 21.75 15.525 21.75 16.392 21.634C17.292 21.512 18.05 21.254 18.652 20.652C19.254 20.05 19.512 19.292 19.634 18.392C19.75 17.525 19.75 16.422 19.75 15.055V9.945C19.75 8.578 19.75 7.475 19.634 6.608C19.512 5.708 19.254 4.95 18.652 4.348C18.121 3.818 17.469 3.553 16.705 3.416C16.5657 2.53351 16.1159 1.72974 15.4367 1.14934C14.7575 0.568936 13.8934 0.250024 13 0.25ZM15.13 3.271C14.9779 2.827 14.6908 2.44166 14.3089 2.16893C13.927 1.89619 13.4693 1.74971 13 1.75H9C7.093 1.75 5.739 1.752 4.71 1.89C3.705 2.025 3.125 2.279 2.702 2.702C2.279 3.125 2.025 3.705 1.89 4.711C1.752 5.739 1.75 7.093 1.75 9V15C1.74971 15.4693 1.89619 15.927 2.16892 16.3089C2.44166 16.6908 2.827 16.9779 3.271 17.13C3.25 16.52 3.25 15.83 3.25 15.055V9.945C3.25 8.578 3.25 7.475 3.367 6.608C3.487 5.708 3.747 4.95 4.348 4.348C4.95 3.746 5.708 3.488 6.608 3.367C7.475 3.25 8.578 3.25 9.945 3.25H13.055C13.83 3.25 14.52 3.25 15.13 3.271ZM5.408 5.41C5.685 5.133 6.073 4.953 6.808 4.854C7.562 4.753 8.564 4.751 9.999 4.751H12.999C14.434 4.751 15.435 4.753 16.191 4.854C16.925 4.953 17.313 5.134 17.59 5.41C17.867 5.687 18.047 6.075 18.146 6.81C18.247 7.564 18.249 8.566 18.249 10.001V15.001C18.249 16.436 18.247 17.437 18.146 18.193C18.047 18.927 17.866 19.315 17.59 19.592C17.313 19.869 16.925 20.049 16.19 20.148C15.435 20.249 14.434 20.251 12.999 20.251H9.999C8.564 20.251 7.562 20.249 6.807 20.148C6.073 20.049 5.685 19.868 5.408 19.592C5.131 19.315 4.951 18.927 4.852 18.192C4.751 17.437 4.749 16.436 4.749 15.001V10.001C4.749 8.566 4.751 7.564 4.852 6.809C4.951 6.075 5.132 5.687 5.408 5.41Z"
                                fill="#585859" />
                        </svg>
                    </div>
                    <input type="number" name="amount" id="amount_input_box" placeholder="Enter Amount"
                        class="amount_input_box" required>
                    <button class="pop_main_btn r-flex ali-c jut-c" id="popup_action_btn" onclick="toggleBtn()">
                        <span pop_main_btn_text id="btn_text">Send Message on Whatspp</span>
                        <img src="img/whast-app-btn-icon.svg" id="btn_icon" alt="what's app icon">
                    </button>
                    <a href="#" class="ss_on_whats_app_btn r-flex ali-c jut-c hideit" id="send_screenshot_link"> Send
                        Screenshot on Whatsapp </a>
                </div>
            </div>
        </section>



        <footer>
            <div class="power_by_text">Powered By TiffinCRM</div>
        </footer>
    </main>



    <script src="js/script.js?v1.9.18"></script>
</body>

</html>