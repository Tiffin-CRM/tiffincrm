// +++++++++++ check how ++++++++++
let stepCheckButtons = document.querySelectorAll('.step_check_btn_box');
stepCheckButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        let expandableItem = this.parentElement.querySelector('.expand_item_des');
        
        expandableItem.classList.toggle('expanded');
    });
});
 

// +++++++ collabes ++++++++
function toggleMenu() {
  const menu = document.querySelector('.steps_items_container');
  menu.classList.toggle('active');
}
// +++++++ hamburger click ++++++++
function hamburger() {
    const menu = document.querySelector('.nav-collapse');
    menu.classList.toggle('active');
    document.body.classList.toggle("noscroll");

}
// +++++++ hamburger click ++++++++
function vdoPopUp() {
    // const menu = document.querySelector('.video_pop_box');
    // menu.classList.toggle('active');
    // document.body.classList.toggle("noscroll");
    window.open('https://youtu.be/NiTm5JCsRp4', '_blank');



}
// +++++++ nav menu drop down ++++++++
function navMenu() {
    const menu = document.querySelector('.menu_drop_dwon');
    menu.classList.toggle('active');
}


// ++++++++++ faq +++++++++++
let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})