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
$id = apply_filters( 'wpml_object_id', 5, 'post' );
?>

<div class="mainPage">
    <div class="mainPage_product-description">
        <div class="background"></div>
        <div class="mainPage_product-description-welcome"></div>
        <div class="mainPage_product-description-about">
            <div class="container">
                <?php if(have_rows('shop_header', $id)): ?>
                    <?php while(the_repeater_field('shop_header', $id)): ?>
                        <h1 ><?php the_sub_field('title');?></h1>
                        <p><?php the_sub_field('description');?></p>
                        <div class="buttons">
                            <a href="#buy-wallet" class="buy"><?php the_sub_field('buy_button');?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>



            </div>
        </div>
    </div>

    <div class="container-small">
        <div class="mainPage_carousel-description">
            <div class="single-item">
                <?php if(get_field('products_properties', $id)): ?>
                    <?php while(the_repeater_field('products_properties', $id)): ?>
                        <div class="single-item_block">
                            <img src="<?php the_sub_field('image');?>" alt="">
                            <h3><?php the_sub_field('title');?></h3>
                            <p><?php the_sub_field('description');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
        <div class="mainPage_small-description mainPage_small-description-top">
            <div class="info">
                <?php if(get_field('about_1', $id)): ?>
                    <?php while(the_repeater_field('about_1', $id)): ?>
                        <h4><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('description');?></p>
                        <img src="<?php the_sub_field('background_image');?>" alt="">
                        <div class="block">
                            <?php while(the_repeater_field('about_properties', $id)): ?>
                                <div class="block-item">
                                    <span> <?php the_sub_field('title');?></span>
                                    <img src=" <?php the_sub_field('image');?>" alt="">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="image-top"></div>
        </div>

        <div class="mainPage_small-description mainPage_small-description-bottom">
            <div class="image-bottom"></div>
            <div class="info">
                <?php if(get_field('about_2', $id)): ?>
                    <?php while(the_repeater_field('about_2', $id)): ?>
                        <h4><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('description');?></p>
                        <div class="block">
                            <?php while(the_repeater_field('about_properties', $id)): ?>
                                <div class="block-item big">
                                    <h5><?php the_sub_field('title');?></h5>
                                    <span><?php the_sub_field('value');?></span>
                                </div>
                            <?php endwhile; ?>
                            <img src="<?php the_sub_field('background_image');?>" />
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="container">
        <h2 class="choose-heading buy-wallet" id="buy-wallet"> <?php the_field('before_shop_title', $id); ?> </h2>

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
                wp_reset_query();
            ?>

        </div>

        <div class="reviews">

            <?php $id = apply_filters( 'wpml_object_id', 5, 'post' );?>
            <?php if(have_rows('reviews', $id)): ?>
                <?php while(the_repeater_field('reviews', $id)): ?>
                    <h2><?php the_sub_field('title');?></h2>
                    <?php while(the_repeater_field('review_item', $id)): ?>
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
        <p><?php _e( 'Підпишись, щоб не пропустити цікаві пропозиції новини і натхнення!', 'custom-text' ) ?></p>
        <div class="send-email">
            <form action="">
                <input class="email" type="email" name="email" placeholder="Твій e-mail">
                <input class="button" type="submit" value="Го!">
            </form>
        </div>
    </div>

</div>


<?php get_footer( 'shop' ); ?>

