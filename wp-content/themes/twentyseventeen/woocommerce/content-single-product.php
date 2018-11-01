<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
global $post;
global $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
$attachment_ids = $product->get_gallery_attachment_ids();
defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
//do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<section id="product-<?php the_ID(); ?>" class="productPage" <?php wc_product_class(); ?>>
    <div class="productPage__carousel">
        <div class="slider-for">
            <a href="#"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
            <?php
            foreach( $attachment_ids as $attachment_id ) {
                $image_link = wp_get_attachment_url( $attachment_id );

                echo '<a href="#"><img src="'.  $image_link .'" alt=""></a>';
            }
            ?>
        </div>
        <div class="slider-nav">
            <a href="#"><img src="<?php the_post_thumbnail_url();?>" alt=""></a>
            <?php
            foreach( $attachment_ids as $attachment_id ) {
                $image_link = wp_get_attachment_url( $attachment_id );

                echo '<a href="#"><img src="'.  $image_link .'" alt=""></a>';
            }
            ?>
        </div>
    </div>

    <div class="productPage__info">
        <div class="productPage__info-text">
            <div>
                <div class="name"><?php the_title(); ?></div>
                <div class="price"><?php echo $product->get_price_html(); ?></div>
                <div class="availability">
                    <?php if( $product->get_stock_quantity()):
                        echo "In Stock";
                    else:
                        echo "Out of stock";
                    endif;
                    ?>
                </div>
            </div>
            <div>
                <p>Доставка: <span><?php the_field('delivery'); ?></span></p>
                <p>Оплата: <span><?php the_field('payment'); ?></span></p>
            </div>
        </div>
        <div class="productPage__info-button">
            <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );?>
        </div>
    </div>

    <div class="productPage__details">
        <?php if(get_field('product_info')): ?>
            <?php while(has_sub_field('product_info')): ?>

                <img src="<?php the_sub_field('wallet_scheme_image');?>" alt="">
                <h2><?php the_sub_field('property_title');?></h2>

                <div class="description">
                    <?php while(has_sub_field('property_items')): ?>
                        <p><span><?php the_sub_field('title');?></span> — <?php the_sub_field('description');?></p>
                    <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php
    /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    //do_action( 'woocommerce_before_single_product_summary' );
    ?>

<!--    <div class="sdfdsfsdfg  ">-->
<!--        123-->
<!--        --><?php //the_title(); ?>
<!--        <p class="price">--><?php //echo $product->get_price_html(); ?><!--</p>-->
<!--        <div class="woocommerce-product-details__short-description">-->
<!--            --><?php //echo $short_description; ?>
<!--        </div>-->
<!--        --><?php //do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );?>
<!---->
<!--        <hr />-->
<!---->
<!--        --><?php
//        foreach( $attachment_ids as $attachment_id ) {
//            echo $image_link = wp_get_attachment_url( $attachment_id ) . "\n";
//        }
//        ?>
<!--        <hr />-->
<!--        --><?php //the_post_thumbnail_url();?>
<!--        <hr />-->
<!---->
<!---->
<!---->
<!--        --><?php
//        /**
//         * Hook: woocommerce_single_product_summary.
//         *
//         * @hooked woocommerce_template_single_title - 5
//         * @hooked woocommerce_template_single_rating - 10
//         * @hooked woocommerce_template_single_price - 10
//         * @hooked woocommerce_template_single_excerpt - 20
//         * @hooked woocommerce_template_single_add_to_cart - 30
//         * @hooked woocommerce_template_single_meta - 40
//         * @hooked woocommerce_template_single_sharing - 50
//         * @hooked WC_Structured_Data::generate_product_data() - 60
//         */
//        //do_action( 'woocommerce_single_product_summary' );
//        ?>
<!--    </div>-->

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    //do_action( 'woocommerce_after_single_product_summary' );
    ?>
</section>
</div>
<div class="container">
<section class="popularWallets">
    <h2>Популярні гаманці</h2>
    <div class="popularWallets__carousel products-container">
        <ul class="products-wrapper">
        <?php
        $args = array(
            'post_type' => 'product',
            'meta_key' => 'total_sales',
            'orderby' => 'meta_value_num',
            'posts_per_page' => 5,
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            $attachment_ids = $product->get_gallery_attachment_ids() ?>
            <li class="product-item">
                <div class="product-item_carousel">
                    <div class="single-item_block">
                        <a class="image" href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail( $loop->post->ID ))
                                echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                            else echo '<img src="'.get_the_post_thumbnail().'" alt="product placeholder Image"'; ?>
                        </a>
                    </div>

                    <?php  foreach( array_slice( $attachment_ids, 0,2 ) as $attachment_id ) {
                        $thumbnail_url = wp_get_attachment_image_src( $attachment_id, "full" )[0];
                        echo '<div class="single-item_block">
                                <a class="image" href="'. get_the_permalink() .'">
                                    <img src="' . $thumbnail_url . '" />
                                </a>
                              </div>';
                    }?>
                </div>
                <div class="info">
                    <a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="price"><?php echo $product->price; ?></a>
                        <?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' );?>
                    </div>
                </div>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        </ul>
    </div>
</section>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
