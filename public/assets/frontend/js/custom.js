$(document).ready(function() {
    function imageToBackground() {
        var section = $(".image-as-bg");
        section.each(function() {
            var imageSource = $(this).attr("data-bg");
            if ($(this).hasClass("fixed-bg")) {
                $(this).css("background", "url('" + imageSource + "') no-repeat center / cover fixed");
            } else {
                $(this).css("background", "url('" + imageSource + "') no-repeat center / cover");
            }
        });
    }
    imageToBackground();
})
$(window).scroll(function() {
    var scrollPosition = $(this).scrollTop();

    function fixHeader() {
        var topHeader = $(".header-top");
        if (scrollPosition > topHeader.height()) {
            topHeader.fadeOut(300);
        } else {
            topHeader.fadeIn(300);
        }
    }
    fixHeader();
});