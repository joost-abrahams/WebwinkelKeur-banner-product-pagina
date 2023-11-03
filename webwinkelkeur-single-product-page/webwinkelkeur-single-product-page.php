<?php
/*
Plugin Name: WebwinkelKeur single product page banner
Description: Place the WebwinkelKeur banner after the cart button.
Author: Joost Abrahams
Version: 1.0
Author URI: https://profiles.wordpress.org/joost-abrahams/profile/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
Source page for the WenwinkelKeur banner or logo:
https://www.webwinkelkeur.nl/kennisbank/eenvoudige-integratie/tooltip
*/

function add_webwinkelkeur_banner_after_addtocart_button() {
	 echo '<a href="https://www.webwinkelkeur.nl/webshop/Hardscape-shop_1218616" class="webwinkelkeurPopup" title="Webshop Trustmark and customer reviews" target="_blank"><img src="https://dashboard.webwinkelkeur.nl/banners/65/1218616/1652997600.svg" width="249" height="95" alt="Webshop Trustmark and customer reviews"></a>';
}

add_action( 'woocommerce_after_add_to_cart_form', 'add_webwinkelkeur_banner_after_addtocart_button' );

