<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TiffinCRM - Tiffin Service Management Application/Software</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
<link rel="manifest" href="/img/icons/site.webmanifest">
<link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#1205a3">
<link rel="shortcut icon" href="/img/icons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/img/icons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

    <meta name="theme-color" content="#5546af" />

    <link rel="stylesheet" href="css/base.css?0.0.7" />
    <link rel="stylesheet" href="css/style.css?25" />

    <!-- +++++++++++ fonts link ++++++++++++ -->
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
      rel="stylesheet"
    />
    <!-- <style>
        .expand_item_des {
        display: none; /* Initially hide the expanded content */
    }
    </style> -->
  </head>

  <body>
    <header>
      <div class="container">
        <div class="navbar_container r-flex ali-c jut-sb">
          <a href="#home" class="logo r-flex ali-c jut-c">
            <img
              src="https://imeals.in/imeals/img/logo2.svg"
              alt="imeals logo" />
          </a>
          <nav class="nav-collapse">
            <ul class="nav_menu_box r-flex ali-c gap-1">
              <li class="menu-item nav_featur_menu first_menu_item">
                <a
                  href="javascript:void(0)"
                  onclick="navMenu()"
                  class="nav_featur_menu r-flex ali-c gap-05">
                  <span>Features</span>
                  <div class="menu_drop_dwon_icon r-flex ali-c jut-c">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 4.75L10 12.25L2.5 4.75L1 6.25L10 15.25L19 6.25L17.5 4.75Z" fill="#222121"/>
                        </svg>
                        
                  </div>
                </a>
                <ul class="menu_drop_dwon c-flex gap-2">
                  <li><a href="#">Single Click</a></li>
                  <li><a href="#">iMeal</a></li>
                  <li><a href="#">Expense Manager</a></li>
                </ul>
              </li>
              <li class="menu-item"><a href="#pricing_sec">Pricing</a></li>
              <li class="menu-item"><a href="#">About</a></li>
              <li class="menu-item"><a href="#">Contact</a></li>
              <li class="menu-item start_btn">
                <a href="https://wa.me/919068062563?text=I Want to Start Using TiffinCRM">Start Using it !</a>
              </li>
            </ul>
          </nav>
          <div onclick="hamburger()" class="hamburger_icon">
            <svg
              width="24"
              height="18"
              viewBox="0 0 16 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.125 1H14.875M1.125 6H14.875M1.125 11H14.875"
                stroke="#1B1B1B"
                stroke-width="1.25"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </div>
        </div>
      </div>
    </header>


    <main>
      <section class="service_hero_sec">
        <div class="container">
          <div class="serice_hero_container r-flex ali-c jut-sb">
            <div class="service_left_side_cont">
              <div class="color_hero_heading">
                Tiffin Service Management CRM App
              </div>
              <h1 class="service_hero_main_heading">
                Simplifying Tiffin Services
              </h1>
              <p class="service_help_text">
                You'll love the way we done it for you! 😉 

              </p>
              <div class="hero_tips_points_box c-flex gap-2">
                <div class="hero_tip_box r-flex ali-c gap-15">
                  <div class="tip_line_img">
                    <img src="img/check-mark.svg" alt="check mark" />
                  </div>
                  <div class="tips_line_text">New Age CRM</div>
                </div>
                <div class="hero_tip_box r-flex ali-c gap-15">
                  <div class="tip_line_img">
                    <img src="img/check-mark.svg" alt="check mark" />
                  </div>
                  <div class="tips_line_text">Minimal Taps, Maximum Results</div>
                </div>
                <div class="hero_tip_box r-flex ali-c gap-15">
                  <div class="tip_line_img">
                    <img src="img/check-mark.svg" alt="check mark" />
                  </div>
                  <div class="tips_line_text">Easiest CRM on Earth</div>
                </div>
              </div>
              <div class="left_side_btn_box r-flex ali-c gap-1">
                <a href="https://wa.me/919068062563?text=I Want to Start Using TiffinCRM" class="play_stor_link r-flex ali-c gap-1">
                  <div class="play_stor_icon_box">
                    <img src="img/paly-stor-icon.svg" alt="play stor icon" />
                  </div>
                  <span>Use in Android Phone</span>
                </a>
                <a href="https://wa.me/919068062563?text=I have a question about Tiffincrm" class="ask_quetion_link r-flex ali-c gap-1">
                  <span>Ask Question →</span>
                  <!-- <div class="play_stor_icon_box">
                    <img src="img/left-arrow.svg?v1" alt="left arrow icon" />
                  </div> -->
                </a>
              </div>
            </div>
            <div class="service_right_side_cont">
              <div onclick="vdoPopUp()" class="hero_service_vdo_container">
                <img src="img/thumbnail2.jpg" />
              </div>
              <div class="video_pop_box">
                <div class="vdo_container">
                  <div
                    onclick="vdoPopUp()"
                    class="vdo_close_btn r-flex ali-c jut-c"
                  >
                    <img src="img/close.svg" alt="crose icon" />
                  </div>
                  <div class="vdo_pop_box r-flex ali-c jut-c">
                    <img src="img/thumbnail2.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="help_steps_section">
        <div class="container">
          <div class="help_steps_container">
            <div class="color_step_heading">Features & use Case</div>
            <h2 class="steps_main_heading">We help you in every Step</h2>
            <p class="steps_cont_text">
              We are highly Focused on this niche and understand how can we
              maximise the help our app can do.
            </p>
            <div class="steps_items_container c-flex gap-3">
              <div class="steps_item_box r-flex ali-s jut-sb">
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">We Show you</div>
                  <h3 class="steps_item_main_heading">What to Buy</h3>
                  <p class="steps_items_desc">
                    You can check daily raw material need in Advance and plan
                    the purchases of raw material accordingly.
                  </p>
                  <p class="expand_item_des">
                    We give you list of how much and which food to prepare for breakfast, lunch, dinner separately and collectively as well. You can change the date and look the details of food to prepare in upcoming days to plan the raw material and buy that accordingly.
                    
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>1</span>
                </div>
              </div>
              <div class="steps_item_box r-flex ali-s jut-sb">
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">We Prepare list of</div>
                  <h3 class="steps_item_main_heading">What to Prepare & Pack</h3>
                  <p class="steps_items_desc">
                    Yyou can see the list of items to prepare for
                    specific meal with number of servings. Order detail Wise list will help you
                    to know what Exactly to Pack for each customer.
                  </p>
                  <p class="expand_item_des">
                    Same as you see details of upcoming days you can check what items to prepare with their quantity at home screen. it will by default listed as per the meal schedule but you can also play with timing and do better planing to prepare food for particular day. After preparing the Food you can go through the order wise details and pack the meals for your customers.
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>2</span>
                </div>
              </div>
             
              <div class="steps_item_box r-flex ali-s jut-sb ">
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">We Give</div>
                  <h3 class="steps_item_main_heading">
                    Deliver Boy App With Zones Categorisation
                  </h3>
                  <p class="steps_items_desc">
                   You can deliver yourself or invite delivery boy to download the app deliver accordingly. They will access to deliveries only. 
                  </p>
                  <p class="expand_item_des">
                    We have built specific screens for delivery boy which is optimized for their purpose. Admin can also view those screens and deliver themselves as well.
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>3</span>
                </div>
              </div>
              <div class="steps_item_box r-flex ali-s jut-sb ">
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">You Enjoy!</div>
                  <h3 class="steps_item_main_heading">
                    Leave Accounting & Finance to Us
                  </h3>
                  <p class="steps_items_desc">
                    it Auto debit customer balance & calculate balances . it
                    Also calculate your exact profit with revenues if you add
                    expense entries.
                  </p>
                  <p class="expand_item_des">
                    You can see all the data including monthly bills, transactions, deliveris reports and your daily revenues, expenses, profits. Every data about your tiffin service business in one app.
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>4</span>
                </div>
              </div>
              <div class="steps_item_box r-flex ali-s jut-sb ">
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">Customer Wants Report</div>
                  <h3 class="steps_item_main_heading">
                    We’ll Give it Along with Delivery Pause/Cancel Options
                  </h3>
                  <p class="steps_items_desc">
                    Customer can login and manage their deliveries, add balance,
                    see transaction, and check reports.
                  </p>
                  <p class="expand_item_des">
                   You can share the imeals.in link with customers and they can login with their number and see their reports, transaction, upcoming deliveries, meals plans, pause delivery option, Your Upi Handle, Your Whatsapp number. They will get limited access to do actions. 
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>5</span>
                </div>
              </div>
              
            </div>
            <!-- <div
              onclick="toggleMenu()"
              class="steps_collapse_btn r-flex ali-c jut-c gap-05"
            >
              <span id="setep_expand">See ALL</span>
              <span id="step_collaps">Collapse Again</span>
              <img src="img/collapse.svg" alt="down-arrow icon" />
            </div> -->
          </div>
        </div>
      </section>

      <section class="cakes_section">
        <div class="container">
          <div class="cakes_container">
            <h2 class="cakes_main_heading">Some Cherries on Cakes</h2>
            <div class="cakes_box r-flex ali-c jut-sb">
              <div class="cakes_itm r-flex ali-c gap-2">
                <div class="cake_item_img r-flex ali-c jut-c">
                  <img src="img/cloude.svg" alt="Cloud" />
                </div>
                <span>Fully on Cloud </span>
              </div>
              <div class="cakes_itm r-flex ali-c gap-2">
                <div class="cake_item_img r-flex ali-c jut-c">
                  <img src="img/wi-fi.svg" alt="Cloud" />
                </div>
                <span>Offline Access</span>
              </div>
              <div class="cakes_itm r-flex ali-c gap-2">
                <div class="cake_item_img r-flex ali-c jut-c">
                  <img src="img/esy-uses.svg" alt="Cloud" />
                </div>
                <span>Easy to Use</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="worth_mentioning_section">
        <div class="container">
          <div class="help_steps_container">
            <div class="color_step_heading">Features</div>
            <h2 class="steps_main_heading">Worth Mentioning</h2>
            <p class="steps_cont_text">
              Below Features are the most helpful features in our app
            </p>
            <div class="steps_items_container active c-flex gap-3">
              <div
                class="steps_item_box r-flex ali-s jut-sb"
                style="background-color: #ffffff;"
              >
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">Create Order in</div>
                  <h3 class="steps_item_main_heading">
                    One Click for All Active Customers
                  </h3>
                  <p class="steps_items_desc">
                    It will be Applied to customers who are taking orders for that time
                    and their order is not cancelled & they are active.
                  </p>
                  <p class="expand_item_des">
                   on the home screen of TiffinCrm you will find a powerfull button "Start Preparation" which will create order for all the customers who has active account With Active Meal. No further action need to be taken incase if you don’t want to cancel any delivery. 
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>1</span>
                </div>
              </div>
              <div
                class="steps_item_box r-flex ali-s jut-sb"
                style="background-color: #ffffff;"
              >
                <div class="we_show_heading_box">
                  <div class="littel_step_heading">On imeal.in Website</div>
                  <h3 class="steps_item_main_heading">
                    Customer can Pause + Cancel Deliveries & Check Reports
                  </h3>
                  <p class="steps_items_desc">
                    They can login with their number and do action related to
                    their deliveries including cancellation of any specific
                    day’s delivery.
                  </p>
                  <p class="expand_item_des">
                    You can check daily raw material need in Advance and plan
                    the purchases of raw material accordingly.You can check
                    daily raw material need in Advance and plan the purchases of
                    raw material accordingly.
                  </p>
                  <div class="step_check_btn_box r-flex ali-c gap-05">
                    <span>Check How</span>
                    <div class="step_check_img_box r-flex ali-c jut-c">
                      <img src="img/down-arrow.svg?v1" alt="down arrow icon" />
                    </div>
                  </div>
                </div>
                <div class="step_no_icon_text_box r-flex ali-c jut-c">
                  <span>2</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pricing_section" id="pricing_sec">
        <div class="container">
          <div class="pricing_container">
            <div class="pricing_color_heading">Pricing</div>
            <h2 class="pricing_main_heading">Easy & Simple Pricing</h2>
            <p class="pricing_sub_heading">
              Our Pricing is subject to change without any prior notification.
            </p>
            <div class="pricing_choosing_box r-flex ali-s jut-c">
              <div class="left_side_pricing_box">
                <div class="top_pric_itme_heading_box r-flex ali-c gap-2">
                  <div class="item_heading_img_box r-flex ali-c jut-c">
                    <img src="img/payment-feature.svg" alt="" />
                  </div>
                  <div class="item_heading_cont">
                    <span class="item_features_heading">All Features</span>
                    <h3 class="item_main_heading">PartTime Work</h3>
                  </div>
                </div>
                <div class="user_limit_text">Upto 20 User</div>
                <h3 class="about_pricing_price">Free</h3>
                <div class="pricing_time_limit">Lifetime</div>
                <button class="palne_select_btn">Use Free</button>
              </div>
              <div class="right_side_pricing_box">
                <div class="top_pric_itme_heading_box r-flex ali-c gap-2">
                  <div class="item_heading_img_box r-flex ali-c jut-c">
                    <img src="img/payment-feature.svg" alt="" />
                  </div>
                  <div class="item_heading_cont">
                    <span class="item_features_heading">All Features</span>
                    <h3 class="item_main_heading">Bussiness</h3>
                  </div>
                </div>
                <div class="user_limit_text">
                  Not Launched Yet, User Base Pricing
                </div>
                <h3 class="about_pricing_price">Free</h3>
                <div class="pricing_time_limit">Until Plan Launch</div>
                <button class="palne_select_btn">Start Free</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <=================== faqs section ============> -->
      <section class="faqs-sec" id="faq">
        <div class="container">
          <div class="faq-section">
            <div class="color_faq_heading">FAQ</div>
            <h2 class="faqs-main-heading">Frequently Asked Questions</h2>
            <p class="faqs-main-content">
              You can always contact is to ask any query still you can refer to
              these faqs to get better knowledge of our product ..
            </p>
            <div class="faqs r-flex jut-sb">
              <div class="faq-container-box">
                <div class="container-faq">
                  <h3 class="question active">
                    1. What is TiffinCrm and What’s it use?
                  </h3>
                  <div class="answercont" style="max-height: 200px;">
                    <div class="answer">
                      TiffinCrm is a comprehensive CRM (Customer Relationship
                      Management) app designed specifically for tiffin service
                      businesses. It streamlines various aspects of managing a
                      tiffin service, including raw material requirements,
                      customer management, deliveries, billing, and financial
                      tasks
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    2. How can TiffinCrm benefit my tiffin service business?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      TiffinCrm simplifies and automates many tasks involved in
                      running a tiffin service. It helps in managing raw
                      material inventory efficiently, keeping track of customer
                      orders and preferences, optimizing delivery routes,
                      generating invoices, and maintaining financial records.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">3. Is TiffinCrm easy to use?</h3>
                  <div class="answercont">
                    <div class="answer">
                      Yes, TiffinCrm is designed with user-friendliness in mind.
                      Its intuitive interface makes it easy for tiffin service
                      owners and staff to navigate through various features and
                      functionalities without requiring extensive training.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    4. How to start using and set up TiffinCrm?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      To start using TiffinCrm, simply sign up for an account on
                      our website and follow the step-by-step setup process.
                      You'll be guided through configuring your business
                      details, setting up menus and pricing, and importing
                      customer data if needed. Our support team is also
                     available to assist you throughout the setup process,
                      ensuring a smooth transition to our platform.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    5. Can I customize TiffinCrm app to suit my business needs?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      We offer a plethora of built-in customization options to
                      tailor the app to your needs. However, if you find that
                      you require additional features or specific
                      customizations, we welcome your requests. Tiffin CRM is
                      meticulously crafted to accommodate the diverse needs of
                      all tiffin service businesses.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    6. Is TiffinCrm suitable for small as well as large tiffin
                    service businesses?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Yes, TiffinCrm caters to tiffin service businesses of all
                      sizes. Whether you're a small local tiffin provider or a
                      large-scale operation serving multiple locations,
                      TiffinCrm can adapt to your business requirements.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    7. Can I add my business expenses here? ?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Yes, TiffinCrm allows you to track and manage your
                      business expenses efficiently. You can easily add expenses
                      related to raw materials, operational costs, and other
                      expenditures directly within the platform, providing you
                      with a comprehensive view of your business finances.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    8. Do I have to Add Daily Orders & Transaction?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      One Click on "Start Preparations" and all orders will be
                      created & amount will be deducted from customer's virtual
                      account. You can set up recurring orders for regular
                      customers or manually create orders as needed. Our
                      platform adapts to your workflow, allowing you to manage
                      orders efficiently without unnecessary daily tasks.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                   9. What is imeals.in, and how does it relate to TiffinCrm?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      imeals.in is a user interface provided by TiffinCrm
                      exclusively for your tiffin service customers. It allows
                      your customers to conveniently manage their upcoming
                      orders, pause their account during vacations, cancel
                      specific deliveries or meals, and request edits to their
                      meal via contacting you on WhatsApp. The platform also
                      provides direct links to your WhatsApp for any assistance
                      needed. imeals.in is seamlessly integrated with TiffinCrm,
                      serving as an extension of the CRM platform to enhance
                      your experience and streamline operations.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    10. What functionalities are available to customers on
                    imeals.in?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Customers can manage their upcoming orders, including
                      pausing their account for vacations and canceling specific
                      deliveries or meals. They can also request edits to their
                      meal preferences and seek support via WhatsApp directly
                      from the platform. However, customers cannot edit items or
                      pricing, as data is fetched directly from the TiffinCrm
                      platform. .
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">11. How can customers access imeals.in?</h3>
                  <div class="answercont">
                    <div class="answer">
                      Only active customers of tiffin services utilizing
                      TiffinCrm have access to imeals.in. They can log in using
                      their credentials provided by their tiffin service
                      provider. This ensures that only authorized users can
                      access the platform and manage their orders and
                      preferences effectively.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                   12. What is the pricing model for TiffinCrm?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      TiffinCrm offers a flexible pricing model designed to
                      accommodate the needs of tiffin service businesses of all
                      sizes. We provide a free trial period of 1 month, allowing
                      you to experience the full functionality of TiffinCrm at
                      no cost. Additionally, TiffinCrm is free for up to 20
                      users, enabling small to medium-sized businesses to
                      utilize our platform without any financial commitment.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    13. Does TiffinCrm charge any commission?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      No, TiffinCrm does not charge any commission on
                      transactions. We operate on a subscription-based pricing
                      model, where you pay a fixed fee for access to our
                      platform's features and functionalities. There are no
                      hidden fees or commissions, allowing you to manage your
                      tiffin service business without any additional costs.
                    </div>
                  </div>
                </div>

                <div class="container-faq">
                  <h3 class="question">
                    14. Can I try the app before committing to a subscription?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Absolutely! We encourage you to take advantage of our free
                      trial period to explore TiffinCrm and determine how it can
                      benefit your tiffin service business. During the trial
                      period, you'll have access to all features and
                      functionalities of TiffinCrm, allowing you to make an
                      informed decision before committing to a subscription.
                    </div>
                  </div>
                </div>
                <div class="container-faq">
                  <h3 class="question">
                    15. Does TiffinCrm use or steal my customers or my data?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Absolutely not. TiffinCrm respects the privacy and
                      ownership of your customer data. We do not use or steal
                      your customers or your data for any purpose other than
                      providing you with the tools and insights to manage your
                      tiffin service business effectively. Your data is securely
                      stored and accessible only to authorized users.
                    </div>
                  </div>
                </div>

                <div class="container-faq" style="border-bottom: none">
                  <h3 class="question">
                    16. Does TiffinCrm offer support and assistance for users?
                  </h3>
                  <div class="answercont">
                    <div class="answer">
                      Yes, TiffinCrm provides dedicated customer support to
                      assist users with any queries or issues they may
                      encounter. Our support team is committed to ensuring that
                      you make the most out of TiffinCrm and achieve success in
                      your tiffin service business.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <=================== faqs section close ============> -->

      <footer>
        <section class="footer_sec">
          <div class="container">
            <div class="footer_contaier r-flex ali-c jut-sb">
              <div class="footer_logo">
                <img src="img/logo2.svg" alt="" />
              </div>
              <div class="footer_copyright">
                Copyright © 2024 TiffinCRM | All Rights Reserved
              </div>
            </div>
          </div>
        </section>
      </footer>
    </main>

    <script></script>

    <script src="script.js?v=0.0.5"></script>
  </body>
</html>
