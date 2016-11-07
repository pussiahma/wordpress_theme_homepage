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

(function($) {
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");


//An image to overlay
$overlay.append($image);

//Add overlay
$("#metaslider_container_78").append($overlay);

//Capture the click event on a link to an image
$("#metaslider_78 a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  //Update overlay with the image linked in the link
  $image.attr("src", imageLocation);
  
  //Show the overlay.
  $overlay.show();
  $("body").css(  "background", "rgba(0,0,0,0.7)");
  //Get child's alt attribute and set caption

});

//When overlay is clicked
$overlay.click(function(){
  //Hide the overlay
  $overlay.fadeOut();
    $("body").css(  "background", "#fff");

});



})( jQuery );



