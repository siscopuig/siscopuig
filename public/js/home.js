$(document).ready(function() {

    setTimeout(function() {
        $(".impressions.first").removeClass("hidden").animate({
            opacity: "1"
        }, 2000) // duration of the action
        setTimeout(function () { // Fades out
            $(".impressions.first").animate({
                opacity: "0"            
            }, 2000)
        }, 5000)
    }, 0);
    setTimeout(function() {
        $(".impressions.second").removeClass("hidden").animate({
            opacity: "1"
        }, 2000) // duration of the action
        setTimeout(function () {
            $(".impressions.second").animate({
                opacity: "0"            
            }, 2000)
        }, 5000)
    }, 10000);
    setTimeout(function() {
        $(".impressions.third").removeClass("hidden").animate({
            opacity: "1"
        }, 2000) // duration of the action
        setTimeout(function () {
            $(".impressions.third").animate({
                opacity: "0"            
            }, 2000)
        }, 5000)
    }, 20000);
    setTimeout(function() {
        $(".impressions.last").removeClass("hidden").addClass("active").animate({
            opacity: "1"
        }, 2000) // duration of the action
        setTimeout(function () {
            $(".impressions.last").animate({
                opacity: "1"            
            }, 2000)
        }, 5000)
    }, 30000);
    
    $(".mobile-menu-button").click(function() {
        $("body").addClass("menu-open"),
        $(".mobile-menu").fadeIn(300).addClass("in")
    }),
    $(".mobile-menu-close").click(function() {
        $("body").removeClass("menu-open"),
        $(".mobile-menu").fadeOut(300).removeClass("in")
    })
    $("[data-expand]").click(function() {
        var t = $(this).attr("data-expand");
        $(this).toggleClass("collapsed"),
        $(t).slideToggle(300).toggleClass("expand")
    })
});