/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @link https://premium.wpmudev.org/blog/back-to-top-button-wordpress/
 */

jQuery(document).ready(function($) {
    var x = document.getElementById("genesis-nav-primary");

    if (window.matchMedia("(max-width: 1023px)").matches && x.className === "nav-primary") {
        x.className += " collapse";
    } else {
        x.className = "nav-primary";
    }
});