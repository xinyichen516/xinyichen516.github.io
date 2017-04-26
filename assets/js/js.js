(function blink() { 
  $('.blink').fadeOut(500).fadeIn(500, blink); 
})();

$(document).ready(function(){
    $(".submit").click(function(){
        alert("Thank you for the message! I usually respond within 48 hours.");
    });
});