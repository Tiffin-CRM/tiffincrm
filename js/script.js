function toggleMenu() {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("active");
    document.body.classList.toggle("noscroll");
  }
  function toggleBtn() {
    const background_pop_up = document.querySelector(".background_pop_up");
    background_pop_up.classList.toggle("active");
    document.body.classList.toggle("noscroll");
  }
  
  function cancel_delivery() {
    var popupTitle = "Cancel This Delivery";
    var descText = "Are you sure you want to cancel this delivery?";
    var noteText = "Note: This will only cancel this delivery";
    var btn_text = "Yes, Cancel";
    changeElement(popupTitle, descText, noteText, btn_text);
  }
  function pause_plan() {
    var popupTitle = "Pause All Deliveries";
    var descText = "Are you sure you want to pause all future deliveries?";
    var noteText =
      "Note: You have to manually resume the deliveries after pausing.";
    var btn_text = "Yes, Pause All";
    changeElement(popupTitle, descText, noteText, btn_text);
  }
  function request_edit() {
    var popupTitle = "Request Edit in Meal Plan";
    var descText =
      "You have to request this to Soumya’s Kitchen Management Team on Whatsapp?";
    var noteText =
      "Note: Make sure to check the updated information here after requesting.";
    var btn_text = "Send Message on Whatspp";
    changeElement(popupTitle, descText, noteText, btn_text);

    document.getElementById("popup_action_btn").onclick = function() {
        window.open("https://api.whatsapp.com/send?phone=919068062563&text=Hi%20Please%20Edit%20My%20Meal%20Plan");
      };
  }
  
  function add_balance() {
    var popupTitle = "Add Balance in Wallet";
    var descText = "Must Follow Below Steps to Add Balance";
    var noteText =
      "Remember: You must have to send payment screenshot to Soumya’sK Kitchen to Add the Balance in your wallet";
    var btn_text = "Pay Now";
    changeElement(popupTitle, descText, noteText, btn_text);
    
    document.getElementById("popup_action_btn").onclick = function() {
        paytoupi();
      };
    // Individual params
    var btn_icon = "img/whast-app-btn-icon.svg";
    document.getElementById("btn_icon").src = btn_icon;
    document.getElementById("send_screenshot_link").style.display = "block";
    document.getElementById("steps_desc").style.display = "block";
    document.getElementById("amount_input_box").style.display = "block";
  }
  
  function changeElement(popupTitle, descText, noteText, btn_text) {
    document.getElementById("popupTitle").innerHTML = popupTitle;
    document.getElementById("descText").innerHTML = descText;
    document.getElementById("noteText").innerHTML = noteText;
    document.getElementById("btn_text").innerHTML = btn_text;
    popup_default();
    toggleBtn();
  }
  
  function popup_default() {
    document.getElementById("send_screenshot_link").style.display = "none";
    document.getElementById("steps_desc").style.display = "none";
    document.getElementById("btn_icon").style.display = "none";
    document.getElementById("amount_input_box").style.display = "none";
  }
  
  function paytoupi(){
    var amountValue = document.getElementById("amount_input_box").value;
    document.getElementById("amount_input_box").onclick = function() {
        window.open("upi://pay?pa=digiheadway@icici&pn=Yogesh&cu=INR&tn=Add_to_9595844598&am="+amountValue);
      };
  }