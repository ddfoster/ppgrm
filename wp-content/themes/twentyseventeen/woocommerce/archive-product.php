<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>

<style>
    .product-item{
        display: none;
    }
</style>

<div class="mainPage">
    <div class="mainPage_product-description">
        <div class="mainPage_product-description-welcome"></div>
        <div class="mainPage_product-description-about">
            <div class="container">

                <?php if(get_field('shop_header', 5)): ?>


                    <?php while(the_repeater_field('shop_header', 5)): ?>
                        <h1><?php the_sub_field('title');?></h1>
                        <p><?php the_sub_field('description');?></p>
                        <div class="buttons">
                            <a href="#buy-wallet" class="buy"><?php the_sub_field('buy_button');?></a>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mainPage_carousel-description">
            <div class="single-item">
                <?php if(get_field('products_properties', 5)): ?>
                    <?php while(the_repeater_field('products_properties', 5)): ?>

                        <div class="single-item_block">
                            <img src="<?php the_sub_field('image');?>" alt="">
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('description');?></p>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="mainPage_small-description mainPage_small-description-top">
            <div class="info">
                <h4>Зручний і вмісткий!</h4>
                <p>Ми робимо Papirgam таким чином, щоб в
                    нього з легкістю поміщались купюры будь-яких країн світу. Ми хочемо, щоб тобі було зручно в подорожах.  Окрім двох відділень для грошей та чеків, гаманець має дві вмістких секціх для візиток та пластикових карт.</p>
                <img src="<?php bloginfo("template_url")?>/assets/img/111111111.PNG" alt="">
                <div class="block">
                    <div class="block-item">
                        <span>16 карток</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>12 візиток</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>20 купюр</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                    <div class="block-item">
                        <span>Чеки</span>
                        <img src="<?php bloginfo("template_url")?>/assets/img/16cards.png" alt="">
                    </div>
                </div>
            </div>
            <div class="image-top"></div>
        </div>

        <div class="mainPage_small-description mainPage_small-description-bottom">
            <div class="image-bottom"></div>
            <div class="info">
                <h4>Легкий, тонкий та компактний</h4>
                <p>Завдяки унікальному матеріалу та дизайну Papirgam - це дуже легкий компактний та тонкий гаманець, який  зручно носити в кишені. І він точно не додає зайвої ваги до твоєї сумки.</p>
                <div class="block">
                    <div class="block-item big">
                        <h5>Довжина</h5>
                        <span>10.5 см</span>
                    </div>
                    <div class="block-item big">
                        <h5>Висота</h5>
                        <span>8 см</span>
                    </div>
                    <div class="block-item big">
                        <h5>Ширина</h5>
                        <span>5 мм</span>
                    </div>
                    <div class="block-item big">
                        <h5>Вага</h5>
                        <span>15 гр</span>
                    </div>
                    <img src="<?php bloginfo("template_url")?>/assets/img/2222222222.PNG" alt="">
                </div>
            </div>
        </div>

        <h2 class="choose-heading buy-wallet" id="buy-wallet"> <?php the_field('before_shop_title', 5); ?> </h2>

        <div class="products-container">

            <?php
            if ( woocommerce_product_loop() ) {

                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();
                        do_action( 'woocommerce_shop_loop' );
                        wc_get_template_part( 'content', 'product' );
                    }
                }
                woocommerce_product_loop_end();
                do_action( 'woocommerce_after_shop_loop' );
            } else {
                do_action( 'woocommerce_no_products_found' );
            }

            do_action( 'woocommerce_sidebar' );

            ?>

            <button id="loadMore">123</button>
        </div>

        <div class="reviews">

            <?php if(get_field('reviews', 5)): ?>
                <?php while(has_sub_field('reviews', 5)): ?>
                    <h2><?php the_sub_field('title');?></h2>
                    <?php while(has_sub_field('review_item')): ?>
                        <div class="reviews-block">
                            <div class="image">
                                <img src="<?php the_sub_field('image');?>" alt="">
                            </div>
                            <div class="comment">
                                <p><?php the_sub_field('review_text');?></p>
                                <h5><?php the_sub_field('reviewer_info');?></h5>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>

    <div class="subscribe">
        <p>Підпишись, щоб не пропустити цікаві пропозиції новини і натхнення! </p>
        <div class="send-email">
            <form action="">
                <input class="email" type="email" name="email" placeholder="Твій e-mail">
                <input class="button" type="submit" value="Го!">
            </form>
        </div>
    </div>
</div>


<?php get_footer( 'shop' ); ?>

<!--<header class="woocommerce-products-header">-->
<!--	--><?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--		<h1 class="woocommerce-products-header__title page-title">--><?php //woocommerce_page_title(); ?><!--</h1>-->
<!--	--><?php //endif; ?>

<!--	-->

