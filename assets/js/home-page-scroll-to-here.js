/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    $('.hero-chevron').on('click', function() {
        var body = $("html, body");
        body.stop().animate({ scrollTop: $('#genesis-content').offset().top }, '500');
    });
});