<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../inc/head.php'; ?>
  <title>How to Use Tiffin CRM - TiffinCRM</title>
  <meta name="description"
    content="At TiffinCrm, we're passionate about revolutionizing the way tiffin businesses operate. Our user-friendly app is designed to simplify every aspect of managing a tiffin service, from handling raw materials to ensuring timely deliveries.">
  <link rel="canonical" href="https://tiffincrm.com/guides/how-to-use.php" />
    <style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #F4F4F4;
            color: #353535;
            font-size: 14px;
        }

        .content {
            max-width: 1200px;
            padding: 10px;
            margin: 20px auto;
        }

        .steps {
            margin: 40px auto;
        }
        main li{
            list-style: auto;
            margin: 10px 20px;
        }
        .main_content_area {
    padding: 40px 10px;
}


        h2,
        h3 {
            color: #1205A3;
        }

        .heading_desc_text {
            font-size: 14px;
        }

        .info_box {
            border-radius: 5px;
            border: 1px solid #E5E5E5;
            background: #FFF;
            margin: 40px auto;
        }


        .info_box_title {
            font-size: 18px;
            display: block;
            border-bottom: #E5E5E5 1px solid;
            padding: 15px 30px;
            font-weight: 600;
        }

        .info_box_content {
            margin: 15px;
        }

        .semi_bold {
            font-weight: 600;
        }
    </style>
</head>

<body>
<?php include '../inc/header.php'; ?>

    <div class="main_content_area content">
        <h2>
            How to Setup Tiffin CRM?
        </h2>
        <p>
            Setup Tiffin CRM & Organise Your Businesses. <br> Visit Next <a href="https://tiffincrm.com/guides/how-to-use.php">How to Use tiffin Crm</a> </p>

        <div class="steps">
            <h3>
                1. Add Customers
            </h3>
            <p class="heading_desc_text">
                Add Your Existing Customers </p>
            <div class="info_box">
                <span class="info_box_title">General Info</span>
                <div class="info_box_content">
                    <ol>
                        <li> Go To Customer Section & Click on + Icon to Add Customer
                        </li>
                        <li>Only Name & Phone Number is Required.
                    </ol>
                </div>
            </div>
            <div class="info_box">
                <span class="info_box_title">Best Practices</span>
                <div class="info_box_content">
                    <ol>
                        <li> Divide All the Customers by Landmarks and use those landmarks as Zones
                        </li>
                        <li>Use Tags to make groups of customers to navigation easily later.</li>
                        <li>Use Customer Note Which Tell Details of customer which help later in delivery or preparation
                        </li>
                        <li>Set the Account status of loosed customer as blocked. So he can’t be able to resume their
                            deliveries or access
                            imeals.in.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="steps">
            <h3>
                2. Add Repeat Orders/Meal Plan
            </h3>
            <p class="heading_desc_text">
                Repeat order is the order which customers wants daily like a subscription or meal plan. </p>
            <div class="info_box">
                <span class="info_box_title">General Info</span>
                <div class="info_box_content">
                    <ol>

                        <li> Enter the items with quantity for the order. Generally some items are different for
                            everyday. like someday you make
                            Matar Paneer and Some Day You Make Daal. Adding the Daily Menu for every customer is very
                            hectic so we introduced the
                            variable which can reflects in your items to prepare screen. Like Sabji1, Sabji2, Sabji3. If
                            You make same item daily
                            then you can also enter the exact name. otherwise entering the variable like sabji1 will be
                            a better option.
                        </li>
                        <li>Enter quantity as prefix for the item name so you get exact quantity in item to prepare
                            screen.<br>
                            Exp 1: If Customer takes 6 Roti, 2 Sabji & curd. then - you enter <br>
                            6 Roti, Sabji1, Sabji2, curd. <br>Exp 2: If Customer takes 2 Roti, 3 Sabji & Milk. then you
                            enter <br>
                            2 Roti, Sabji1, Sabji2, Sabji3, Milk</li>
                        <li>Enter the Price to specify how much amount to deduct for this meal plan.</li>
                        <li>Use the timing for the meal from options breakfast, lunch or dinner.</li>
                        <li>Use the order type as repeat if customer wants it daily or use one_time if he want that for
                            once only.</li>
                    </ol>
                </div>
            </div>
            <div class="info_box">
                <span class="info_box_title">Best Practices</span>
                <div class="info_box_content">
                    <ol>
                        <li> Set Meal Templates from “More Tab” and all the fields will be populated as per that. which
                            make your work super fast.
                        </li>

                    </ol>
                </div>
            </div>


        </div>
        <div class="steps">
            <h3>
                3. Add/Deduct Balance
            </h3>
            <p class="heading_desc_text">
                Add or Deduct Customer Balance
            <div class="info_box">
                <span class="info_box_title">General Info</span>
                <div class="info_box_content">
                    <ol>

                        <li>Go to Customer & Click on Add Transaction
                        </li>
                        <li>Entered Note will be visible to customer on imeals.in as well.</li>
                        <li>Use Minus Symbol to deduct the balance.</li>

                    </ol>
                </div>
            </div>
            <div class="info_box">
                <span class="info_box_title">Best Practices</span>

                <div class="info_box_content">
                    <ol>

                        <li>InCase of Customer reached their credit limit means balance in minus you can block the
                            customer
                            until he pays the
                            previous pending balance.
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php include '../inc/footer.php'; ?>
      
      </body>
      
      </html>
      