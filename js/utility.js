(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));

$(function() {
  $("#slides").slidesjs({
    width: 1000,
    height: 478,
    play: {
      active: true,
      auto: true,
      interval: 6000,
      swap: true
    }
  });
});

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
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $(".button-collapse").sideNav();
});
