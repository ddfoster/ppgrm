<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="header-top">
            <a href="mailto:info@papirgam.com">info@papirgam.com</a>
            <a href="tel:0677632900">+38 (067) 763 29 00</a>
        </div>
        <div class="header-bottom">
            <a href="/"><img src="<?php bloginfo("template_url")?>/assets/img/papigram-logo.png" alt=""></a>
            <div class="links">
                <a href="/">Головна</a>
                <a href="<?php echo wc_get_cart_url(); ?>">Кошик <span class="cart-count"><?php echo sprintf (WC()->cart->get_cart_contents_count() ); ?></span></a>
            </div>
        </div>
    </header>














