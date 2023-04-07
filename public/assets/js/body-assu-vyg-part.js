$("span#switch").click(function(){
  if ($(this).hasClass("switch-night")) {
$("span#switch").addClass("switch-day");
$("span#switch").removeClass("switch-night");
  } else {
  $("span#switch").addClass("switch-night");
  $("span#switch").removeClass("switch-day");
  }
});


$(document).ready(function() {
  $(".dropdown-submenu a.test").on("click", function(e) {
      console.log("submenu-->", $(this).next("ul")[0].id);
      $(this)
          .next("ul")
          .toggle();
         
      if ($(this).next("ul")[0].id == "general-submenu") {
          $("#tunisie-submenu").hide();
          $("#turquie-submenu").hide();
      } else if ($(this).next("ul")[0].id == "tunisie-submenu") {
          $("#general-submenu").hide();
          $("#turquie-submenu").hide();
      } else if ($(this).next("ul")[0].id == "turquie-submenu") {
        $("#general-submenu").hide();
        $("#tunisie-submenu").hide();
    }
      
      e.stopPropagation();
      e.preventDefault();
  });
});


$(document).ready(function() {
  $(".dropdown-toggle").on("click", function(e) {
    //alert("Hello! I am an alert box!!");
    $("#tunisie-submenu").hide();
    $("#turquie-submenu").hide();
    $("#general-submenu").hide();
      
  });
});

AOS.init();
