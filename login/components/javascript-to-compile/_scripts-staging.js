// $('.join-now-btn').click(function() {
//       $("#da-body").removeClass("modal-open");
//       $(this).addClass('modal-open');
// });


$.fx.speeds.slow = 1500; // 'slow' now means 1.5 seconds
$(document).ready(function() {
   window.setTimeout("fadeMyDiv();", 3000); //call fade in 3 seconds
 }
)
function fadeMyDiv() {
   $("#success-fade").fadeOut('slow');
}