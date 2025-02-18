

// DEMO Swticher Base
jQuery('.demo-icon').click(function() {
    if ($('.demo_changer').hasClass("active")) {
        $('.demo_changer').animate({ "right": "-270px" }, function() {
            $('.demo_changer').removeClass("active");
        });
    } else {
        $('.demo_changer').animate({ "right": "0px" }, function() {
            $('.demo_changer').addClass("active");
        });
    }
});

//p-scroll bar
const ps5 = new PerfectScrollbar('.sidebar-right1', {
    useBothWheelAxes: true,
    suppressScrollX: true,
});


// Switcher Close //
$(document).on("click", ".page", function() {
    if ($('.demo_changer').hasClass("active")) {
        $('.demo_changer').animate({ "right": "-270px" }, function() {
            $('.demo_changer').removeClass("active");
        });
    }
});