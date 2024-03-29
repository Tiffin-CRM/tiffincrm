<?php

session_start();
$phonetoken = $_COOKIE['token'];

if (!$phonetoken) {
    header("Location: login.php?not_logged_in");
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
    <link rel="stylesheet" href="css/base.css?v=0.0.1">
    <link rel="stylesheet" href="css/style.css?v6">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
        <script>
                    function toogleList(ele_id,icon) {
                        document.getElementById(ele_id).classList.toggle('hideit');
                        document.getElementById(icon).classList.toggle('rotateit');
                    }

                </script>
                <style>
                    .cancel_btn{
                                    style="width: 16px;" 
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
                <div class="hero_cont_box">
                    <div class="cont_box_text">Hi <?php echo $user["name"]; ?> (<span id="userPhone"><?php echo $phone; ?></span>), Welcome to Mom’s Canteen. Use iMeals to manage your meals
                        and pay to Mom’s Canteen.
                    </div>
                    <!-- <div class="app_installation_guide_box r-flex ali-c jut-c">
                        <a href="#">See Installation Guide</a> <span> (App size: 2 MB only)</span>
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
                                        <img src="img/cancel.svg?v6" class="cancel_btn" alt="cancel icon">
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
                                        <img src="img/clock.svg" alt="line up and down">
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
                                        <img src="img/color-cancel.svg?v2" alt="cancel icon">
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
                        <span><?php echo ($user['status'] == 'active') ? 'Pause' : 'Resume' ; ?> All  Future Deliveries</span>
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
                                        <span>24 Deliveries</span>
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
                                        <span>24 Deliveries</span>
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
                <div class="overly-touch" onclick="toggleBtn()"></div>
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



    <script src="js/script.js?v1.9.14"></script>
</body>

</html>