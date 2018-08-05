<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( $order ) : ?>

    <?php if ( $order->has_status( 'failed' ) ) : ?>

        <p class="woocommerce-message"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

        <p class="woocommerce-message"><?php
            if ( is_user_logged_in() )
                _e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
            else
                _e( 'Please attempt your purchase again.', 'woocommerce' );
        ?></p>

        <p class="woocommerce-message">
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
            <?php endif; ?>
        </p>

    <?php else : ?>

        <p class="woocommerce-message"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

        <ul class="order_details clearfix">
            <li class="order">
                <span><?php _e( 'Order:', 'woocommerce' ); ?></span>
                <p><?php echo esc_html($order->get_order_number()); ?></p>
            </li>
            <li class="date">
                <span><?php _e( 'Date:', 'woocommerce' ); ?></span>
                <p><?php echo wc_format_datetime( $order->get_date_created() ); ?></p>
            </li>
            <li class="total">
                <span><?php _e( 'Total:', 'woocommerce' ); ?></span>
                <p>
					<?php echo wp_kses($order->get_formatted_order_total(), array(
						'span' => array(
							'class' => true,
							'id' => true,
							'title' => true
						)
					)); ?>
				</p>
            </li>
            <?php if ( $order->get_payment_method_title() ) : ?>
            <li class="method">
                <span><?php _e( 'Payment method:', 'woocommerce' ); ?></span>
                <p><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></p>
            </li>
            <?php endif; ?>
        </ul>
        <div class="clear"></div>

    <?php endif; ?>

    <div class="order-details-wrapper">
        <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
        <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
    </div>

<?php else : ?>

    <p class="message"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>