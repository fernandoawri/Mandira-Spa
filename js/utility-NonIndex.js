(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));

$(document).ready(function(){
    var $menu = $("#menuF");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
            $menu.fadeOut("fast",function(){
                $(this).removeClass("default").addClass("fixed transbg").fadeIn("fast");
            });
        } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
            $menu.fadeOut("fast",function(){
                $(this).removeClass("fixed transbg").addClass("default").fadeIn("fast");
            });
        }
    });
});

$(document).ready(function(){
    $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();
    $('.carousel').carousel();
    $('.slider').slider({full_width: true});
});
