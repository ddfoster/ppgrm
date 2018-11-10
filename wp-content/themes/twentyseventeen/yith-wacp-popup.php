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

<div id="yith-wacp-popup" class="<?php echo $animation ?>">
    <div class="yith-wacp-overlay"></div>

    <div class="yith-wacp-wrapper">
        <div class="yith-wacp-main">
            <div class="popup-wrapper">
                <div class="popup">
                    <div class="popup-header">
                        <h2><?php _e( 'Гаманець додано до кошика!', 'custom-text' ) ?></h2>
                        <a href="#" class="yith-wacp-close delete-button"><?php echo __('', 'yith-woocommerce-added-to-cart-popup ') ?></a>
                    </div>
                    <div class="popup-body">
                        <div class="yith-wacp-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>