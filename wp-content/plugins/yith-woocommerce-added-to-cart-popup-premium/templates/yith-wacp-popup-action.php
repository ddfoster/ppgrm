<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */
?>

    <div class="popup-buttons">
        <?php if( $cart ) : ?>
            <a class="<?php echo apply_filters( 'yith_wacp_go_cart_class', 'pay' ) ?>" href="<?php echo $cart_url; ?>"><?php _e( 'Перейти до кошику', 'custom-text' ) ?></a>
        <?php endif ?>
        <?php if( $checkout ) : ?>
            <a class="<?php echo apply_filters( 'yith_wacp_go_checkout_class', 'button go-checkout' ) ?>" href="<?php echo $checkout_url; ?>"><?php echo get_option( 'yith-wacp-text-go-checkout', '' ) ?></a>
        <?php endif ?>
        <?php if( $continue ) : ?>
            <a class="<?php echo apply_filters( 'yith_wacp_continue_shopping_class', 'continue-shopping shopping' ) ?>" href="<?php echo $continue_shopping_url ?>"><?php _e( 'Продовжити покупки', 'custom-text' ) ?></a>
        <?php endif; ?>
    </div>
</div>