/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    var stickyTarget = $(".un-sticky");
    stickyDiv = "sticky";
    offset = 500;
    //titleHeight = $('.intro').height();

    $(window).scroll(function() {
        if (($(this).scrollTop() > offset) && ($(window).width() > 1023)) {
            stickyTarget.addClass(stickyDiv);
        } else {
            stickyTarget.removeClass(stickyDiv);
        }
    });
});