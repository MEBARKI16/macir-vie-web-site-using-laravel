$("span#switch").click(function(){
  if ($(this).hasClass("switch-night")) {
$("span#switch").addClass("switch-day");
$("span#switch").removeClass("switch-night");
  } else {
  $("span#switch").addClass("switch-night");
  $("span#switch").removeClass("switch-day");
  }
});



AOS.init();
