<?php
/**
 * Template Name: Thank you page
 * User: D
 * Date: 04-Nov-18
 * Time: 23:15
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
    <div class="thank-page">
        <img src="<?php bloginfo('template_url')?>/assets/img/papigram-logo.png" alt="">
        <h1><?php the_content(); ?></h1>
        <a class="home-button" href="<?php echo $my_home_url?>"><?php _e('Повернутись на головну', 'custom-text')?></a>
    </div>

<?php get_footer(); ?>
