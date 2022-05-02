/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    var offset = 500;
    $(window).resize(function() {
        if ($(window).width() >= 1024) {
            $(window).scroll(function() {
                if ($("#page-top").length) {
                    if ($(this).scrollTop() < offset) {
                        document.getElementById("page-top").style.display = "none";
                    } else {
                        document.getElementById("page-top").style.display = "block";
                    }
                }
            })
        };
    });
});