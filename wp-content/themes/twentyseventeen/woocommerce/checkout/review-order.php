<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div class="calculator shop_table woocommerce-checkout-review-order-table">
    <?php
    do_action( 'woocommerce_review_order_before_cart_contents' );

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            ?>
            <div class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cartPage-item cart_item', $cart_item, $cart_item_key ) ); ?>">
                <div class="image">
                    <span class="number"><?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', sprintf($cart_item['quantity'] ) , $cart_item, $cart_item_key ); ?></span>
                    <?php echo $_product->get_image()?>
                </div>
                <div class="info">
                    <div>
                        <div class="price">
                            <?php echo $_product->price ?>
                        </div>
                        <div class="name">
                            <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>
        <h2><?php _e( 'Разом', 'custom-text' ) ?></h2>
        <div class="total-amount cart-subtotal">
            <div><?php _e( 'Всього', 'custom-text' ) ?></div>
            <div><?php wc_cart_totals_subtotal_html(); ?></div>
        </div>

        <div class="shipping-options">
            <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
                <?php do_action( 'woocommerce_review_order_before_shipping' ); ?>
                <?php wc_cart_totals_shipping_html(); ?>
                <?php do_action( 'woocommerce_review_order_after_shipping' ); ?>
            <?php endif; ?>
        </div>

        <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

        <div class="payment-amount order-total">
            <div><?php _e( 'До оплати', 'custom-text' ) ?></div>
            <div><?php wc_cart_totals_order_total_html(); ?></div>
        </div>

        <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
</div>
