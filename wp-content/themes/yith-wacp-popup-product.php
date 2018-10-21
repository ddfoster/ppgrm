<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 *
 */
/**
 * Popup product template
 *
 * @version 1.1.0
 */

/**
 * @type $product WC_Product
 */

// get cart info
$cart_info = yith_wacp_get_cart_info();
// get cart
$cart = WC()->cart->get_cart();
// get current cart item
$cart_item = WC()->cart->get_cart_item( $last_cart_item_key );

?>


<div class="popup-body">
    <div class="cartPage-item">
        <?php if( $thumb ) : ?>
            <div class="image">
                <?php
                $thumbnail = $product->get_image( 'yith_wacp_image_size' );

                if ( ! $product->is_visible() ) {
                    echo $thumbnail;
                } else {
                    printf( '<a href="%s">%s</a>', esc_url( $product->get_permalink() ), $thumbnail );
                }

                ?>
            </div>
        <?php endif; ?>

        <div class="info">
            <div>
                <div class="price">
                    <?php
                    if( $product->is_type( 'yith_bundle' ) && class_exists( 'YITH_WCPB_Frontend_Premium' ) && $last_cart_item_key ) {
                        $price = YITH_WCPB_Frontend_Premium()->calculate_bundled_items_price_by_cart( $cart_item );
                        echo wc_price( $price );
                    }
                    else {
                        echo WC()->cart->get_product_price($product);
                    }?>
                </div>
                <div class="name"><?php echo $product->get_title(); ?></div>
            </div>
<!--            <input type="number" placeholder="1">-->
        </div>
<!--        <div class="delete-button"></div>-->
    </div>
    <div class="popup-buttons">
        <a href="#" class="pay">Перейти в кошик</a>
        <a href="#" class="shopping">Продовжити покупки</a>
    </div>
</div>