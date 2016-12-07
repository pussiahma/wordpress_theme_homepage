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

$overlay.append($image);

$("#metaslider_container_78").append($overlay);
$("#metaslider_78 a").click(function(event){
  event.preventDefault();
  var imageLocation = $(this).attr("href");
  $image.attr("src", imageLocation);
  $overlay.show();
  $("body").css(  "background", "rgba(0,0,0,0.7)");

});


$overlay.click(function(){
  $overlay.fadeOut();
    $("body").css(  "background", "#fff");

});



})( jQuery );

(function($) {

const faBo = $(".icon-facebook");
const linkedIn = $(".icon-linkedin");
const gitHub = $(".icon-github");

var showIcon = function(icon) {
icon.css("visibility", "visible").css("opacity", "1").css("transition", "opacity 0.5s cubic-bezier(.33,.65,.83,.67) 0s"); 

}

$(window).scroll(function() {
   const Ot = $('#contact').offset().top,
   St = $(this).scrollTop();
   if (St > Ot -300){

showIcon(faBo);
setTimeout(function(){ showIcon(linkedIn); }, 500);
setTimeout(function(){ showIcon(gitHub); }, 1200);

   }
});


})( jQuery );