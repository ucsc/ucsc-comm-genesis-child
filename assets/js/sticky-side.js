/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    // target and cache the element
    var stickyTarget = $(".un-sticky");

    // set up un-sticky-wrap
    var stickyWrap = $("<div class='un-sticky-wrap'></div>");

    // Wrap .un-sticky in a div
    $(stickyTarget).wrap(stickyWrap);

    // find the original un-sticky position
    var stickyPos = stickyTarget.offset().top;
    var stickyClass = "sticky";

    $(window).scroll(function() {
        //get scroll position from top of the page
        var scrollPos = $(this).scrollTop();
        // check if scroll position is >= un-sticky position
        if ((scrollPos >= stickyPos) && ($(window).width() > 1023)) {
            $(".un-sticky-wrap").height($(".un-sticky").outerHeight());
            stickyTarget.addClass(stickyClass);
            $(".sticky").width($(".un-sticky").width());
        } else {
            $(".un-sticky-wrap").height(0);
            stickyTarget.removeClass(stickyClass);
            $(".sticky").width(0);
        }
    });
});