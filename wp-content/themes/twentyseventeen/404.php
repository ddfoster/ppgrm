<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<style>
    body{
        padding-top: 0;
    }
    header, footer{
        display: none;
    }
</style>

    <div class="error-page">
        <a href="/" class="error-page_logo">
            <img src="<?php bloginfo('template_url')?>/assets/img/papigram-logo.png" alt="">
        </a>
        <div class="error-page_image">
            <img src="<?php bloginfo('template_url')?>/assets/img/404wallet1.png" alt="">
        </div>
        <div class="error-page_info">
            <div><a href="/">На головну!</a></div>
            <h5>Загальні запити<span>info@papirgam.com</span></h5>
            <h5>Відділ продажу<span>sales@papirgam.com</span></h5>
            <h5>Співпраця<span>colab@papirgam.com</span></h5>
            <div class="copyright">
                © Papirgam 2019
            </div>
        </div>
    </div>

<?php get_footer();
