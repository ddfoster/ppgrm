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
<?php $my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="preloader"></div>
    <header class="header">
        <?php dynamic_sidebar('header-widget'); ?>
        <div class="header-bottom">
            <a href="<?php echo $my_home_url?>"><img src="<?php bloginfo("template_url")?>/assets/img/logo.svg" alt=""></a>
            <div class="header-bottom_content">

                <?php
                wp_nav_menu([
                    'menu'            => 'TopMenu',
                    'theme_location'  => 'header-menu',
                    'container'       => 'div',
                    'container_class' => 'links',
    //                'menu_id'         => false,
    //                'menu_class'      => 'navbar-nav',
    //                'fallback_cb'     => 'bs4navwalker::fallback',
    //                'walker'          => new bs4navwalker()
                ]);
            ?>


                <a href="<?php echo wc_get_cart_url(); ?>" class="header-cart"><?php _e( 'Кошик', 'custom-text' ) ?>
                    <span class="cart-count"><?php echo sprintf (WC()->cart->get_cart_contents_count() ); ?></span>
                </a>
            </div>
        </div>
    </header>














