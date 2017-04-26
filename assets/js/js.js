(function blink() { 
  $('.blink').fadeOut(500).fadeIn(500, blink); 
})();

$(function(){
   // See if this is a touch device
   if ('ontouchstart' in window)
   {
      // Set the correct [touchscreen] body class
      $('body').removeClass('no-touch').addClass('touch');
     
      // Add the touch toggle to show text when tapped
      $('div.boxInner img').click(function(){
         $(this).closest('.boxInner').toggleClass('touchFocus');
      });
   }
});