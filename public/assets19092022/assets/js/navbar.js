$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        showBg();
    } else {
        showBg();
    }
});

function showBg() {
    $("#Bcg").show();
    $("#Bcg li").show();
}

function hideBg() {
    $("#Bcg").hide();
    $("#Bcg li").hide();
}

$("a#Particulier").click(function() {
    if ($(".dropdown-menu#dropdown-navigation-par").css("display") == "none") {
        $(".dropdown-menu#dropdown-navigation-par").css("display", "block");
        $(".dropdown-menu#dropdown-navigation-pro").css("display", "none");
    } else {
        $(".dropdown-menu#dropdown-navigation-par").css("display", "none");
    }
});

$("a#Professionnel").click(function() {
    if ($(".dropdown-menu#dropdown-navigation-pro").css("display") == "none") {
        $(".dropdown-menu#dropdown-navigation-pro").css("display", "block");
        $(".dropdown-menu#dropdown-navigation-par").css("display", "none");
    } else {
        $(".dropdown-menu#dropdown-navigation-pro").css("display", "none");
    }
});

// if ($("#navbar").hasClass("show")) {
//   alert("hello");
// }

$("button.navbar-toggler").on("click", function() {
    // if ($("button.navbar-toggler[aria-expanded:false]")) {
    $("#navbar").trigger("classChange");
    if ($("#navbar").hasClass("show")) {
        $('body').removeClass("overflow-hidden");
    } else {
        $('body').addClass("overflow-hidden");
    }
    // }
});

// in another js file, far, far away
$("#navbar").on("classChange", function() {
    // alert("hello");
});

$("ul.navbar-nav").hover(showBg);

var expand_btn = $("button.navbar-toggler");
// var expanded = expand_btn.attr('aria-expanded');
var navbar = $("div#navbar");
expand_btn.click(handleMenuExpanding);

function handleMenuExpanding() {
    if (window.matchMedia("(max-width: 485px)").matches) {
        if (navbar.hasClass("show")) {
            $(".coeur-btn").css("margin-top", "-60px");
            $(".coeur-btn-2").css("margin-top", "-113px");
            $("span.navbar-toggler-icon").removeClass("btn-X");
        } else {
            $("span.navbar-toggler-icon").addClass("btn-X");
            $(".coeur-btn").css("margin-top", "-370px");
            $(".coeur-btn-2").css("margin-top", "-423px");
        }
    }

    if (
        window.matchMedia("(max-width: 766px) and (min-width: 486px)").matches
    ) {
        if (navbar.hasClass("show")) {
            $(".coeur-btn").css("margin-top", "-200px");
            $(".coeur-btn-2").css("margin-top", "-280px");
            $("span.navbar-toggler-icon").removeClass("btn-X");
        } else {
            $("span.navbar-toggler-icon").addClass("btn-X");
            $(".coeur-btn").css("margin-top", "-480px");
            $(".coeur-btn-2").css("margin-top", "-560px");
        }
    }
}

window.onresize = manageCoeurbtn;

function manageCoeurbtn() {
    if (window.matchMedia("(min-width: 767px)").matches) {
        $(".coeur-btn").css("margin-top", "-200px");
        $(".coeur-btn-2").css("margin-top", "-280px");
    }
}

// if ($('ul.navbar-nav').is(":hover")) {
//   $('#Bcg').show();
//   $('#Bcg li').show();
//   alert('hi');
// }

// $('ul.navbar-nav').hover(function() {
//   $('#Bcg').show();
//   $('#Bcg li').show();
//   alert('hi');
// });
