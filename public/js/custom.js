// scrolling effect
$(window).on("scroll", function() {
    if ($(window).scrollTop()) {
        $(".header_nav").addClass('sticky');
        // $(".header_nav").addClass('container');
        $(".header_nav").addClass('white-bg');
    } else {
        $(".header_nav").removeClass('sticky');
    }
})

// toggle menu effect
$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('.menu-toggle').toggleClass('active');
        $('nav').toggleClass('active');
    })
})
