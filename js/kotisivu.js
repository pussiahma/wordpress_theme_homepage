(function($) {
	
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});



})( jQuery );


(function($) {


   $('.jumbo h1').slideDown(3000);
  $('.jumbo img').show(3000,
function() {
   $('.bubble').fadeIn(3000, function() {
$('.bubble').fadeOut(2000);

});

   });



})( jQuery );








