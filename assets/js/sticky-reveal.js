/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    var offset = 250;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() < offset) {
            document.getElementById("page-top").style.display = "none";
            //$('.page-top').slideUp(duration);
        } else {
            // $('.page-top').slideDown(duration);
            document.getElementById("page-top").style.display = "block";
        }
    });
});