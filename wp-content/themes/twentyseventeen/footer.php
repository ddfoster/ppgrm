<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<footer>
    <div class="social">

        <?php dynamic_sidebar('footer-social'); ?>
        <h2><?php _e( 'Ми в соціальних мережах', 'custom-text' ) ?></h2>
        <div class="links">
            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/facebook.png" alt=""></a>
            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/instagram.png" alt=""></a>
            <a href="#"><img src="<?php bloginfo("template_url")?>/assets/img/youtube.png" alt=""></a>
        </div>
    </div>
    <div class="info">

        <div class="left">
            <?php dynamic_sidebar('footer-widget'); ?>
<!--            <h5>Загальні запити<span>info@papirgam.com</span></h5>-->
<!--            <h5>Відділ продажу<span>sales@papirgam.com</span></h5>-->
<!--            <h5>Співпраця<span>colab@papirgam.com</span></h5>-->
        </div>
        <div class="right">
            <div class="language">
                 <?php echo do_shortcode('[wpml_language_selector_widget]') ?>
            </div>
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

<!--            <a href="#">Головна</a>-->
<!--            <a href="#">Гаманці</a>-->
            <a class="logo" href="<?php echo $my_home_url?>">
                <img src="<?php bloginfo("template_url")?>/assets/img/papigram-logo.png" alt="">
            </a>

            <div class="copyright">

                © Papirgam 2019
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
