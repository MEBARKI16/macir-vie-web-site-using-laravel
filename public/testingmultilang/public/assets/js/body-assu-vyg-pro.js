$("span#switch").click(function(){
  if ($(this).hasClass("switch-night")) {
$("span#switch").addClass("switch-day");
$("span#switch").removeClass("switch-night");
  } else {
  $("span#switch").addClass("switch-night");
  $("span#switch").removeClass("switch-day");
  }
});

$(document).ready(function(){
    $('.dropdown-submenu a.test').on("click", function(e){
      $(this).next('ul').toggle();
      e.stopPropagation();
      e.preventDefault();
    });
  });

AOS.init();
