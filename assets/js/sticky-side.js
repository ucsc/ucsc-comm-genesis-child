/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    // target and cache the element
    var stickyTarget = $(".un-sticky");

    // find the original un-sticky position
    var stickyPos = stickyTarget.offset().top;
    var stickyDiv = "sticky";
    //offset = 500;

    $(window).scroll(function() {
        //get scroll position from top of the page
        var scrollPos = $(this).scrollTop();
        // check if scroll position is >= un-sticky position
        if ((scrollPos >= stickyPos) && ($(window).width() > 1023)) {
            stickyTarget.addClass(stickyDiv);
        } else {
            stickyTarget.removeClass(stickyDiv);
        }
    });
});