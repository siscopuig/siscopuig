$(document).ready(function() {
    setTimeout(function() {
        $(".impressions.first").removeClass("hidden").animate({
            opacity: "1"
        }, 1500)
    }, 1000);
    setTimeout(function() {
        $(".impressions.first").animate({
            opacity: "0"
        }, 500);
        setTimeout(function() {
            $(".impressions.first").addClass("hidden")
        }, 500);
        $(".impressions.second").removeClass("hidden").animate({
            opacity: "1"
        }, 1500)
    }, 7000);
    setTimeout(function() {
        $(".impressions.second").animate({
            opacity: "0"
        }, 500);
        setTimeout(function() {
            $(".impressions.second").addClass("hidden")
        }, 500);
        $(".impressions.third").removeClass("hidden").animate({
            opacity: "1"
        }, 1500)
    }, 12000);
    setTimeout(function() {
        $(".impressions.third").animate({
            opacity: "0"
        }, 500);
        setTimeout(function() {
            $(".impressions.third").addClass("hidden")
        }, 500);
        $(".impressions.last").removeClass("hidden").addClass("active").animate({
            opacity: "1"
        }, 1500)
    }, 17000);
    // $(document).scroll(function() {
    //     let b =- (($(window).scrollTop() / 3) + 10);
    //     let a = "center " + b + "px";
    //     $(".nav").css({
    //         backgroundPosition: "center " + b + "px"
    //     })
    // })
});