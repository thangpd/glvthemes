<?php

if ( ! function_exists( 'glv_awesome_sidebar' ) ) {
	add_filter( 'storefront_sidebar_args', 'glv_awesome_sidebar' );
	function glv_awesome_sidebar( $sidebar_args ) {
		$sidebar_args['mycred'] = array(
			'name'        => 'Mycred Sidebar',
			'id'          => 'mmycred-area',
			'description' => 'Show cred information',
		);

		return $sidebar_args;

	}
}
if ( ! function_exists( 'glv_add_class_to_body' ) ) {
	add_filter( 'body_class', 'glv_add_class_to_body', 30 );
	function glv_add_class_to_body( $classes ) {

		if ( is_page( 'my-account' ) && is_user_logged_in() ) {
			foreach ( $classes as $index => $id ) {
				if ( $id == 'storefront-full-width-content' ) {
					unset ( $classes[ $index ] );
				}
			}
			global $wp;
			$request = explode( '/', $wp->request );
			// If NOT in My account dashboard page
			if( ( end($request) == '' && is_account_page() ) ){
				// add class only dashboard
				$classes[] = 'dashboard-class';

			}


		}

		return $classes;

	}
}


if ( ! function_exists( 'glv_add_my_currency' ) ) {
	/**
	 * Custom currency and currency symbol
	 */
	add_filter( 'woocommerce_currencies', 'glv_add_my_currency' );

	function glv_add_my_currency( $currencies ) {

		$currencies['GLV'] = __( 'Gold Leaf Ventures', 'storefront-child' );

		return $currencies;
	}
}
if ( ! function_exists( 'glv_add_my_currency_symbol' ) ) {
	add_filter( 'woocommerce_currency_symbol', 'glv_add_my_currency_symbol', 10, 2 );

	function glv_add_my_currency_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'GLV':
				$currency_symbol = 'GOLD';
				break;
		}

		return $currency_symbol;
	}
}


if ( class_exists( 'WC_Payment_Gateway' ) ) {
	/**
	 * Gold Payment Gateway.
	 *
	 * Provides a Gold Payment Gateway, mainly for testing purposes.
	 */
	class WC_Gateway_Gold extends WC_Payment_Gateway {

		public $domain;

		/**
		 * Constructor for the gateway.
		 */
		public function __construct() {


			$this->id                 = 'custom';
			$this->icon               = apply_filters( 'woocommerce_custom_gateway_icon', '' );
			$this->has_fields         = false;
			$this->method_title       = __( 'Gold', 'storefront-child' );
			$this->method_description = __( 'Allows payments with gold gateway.', 'storefront-child' );

			// Load the settings.
			$this->init_form_fields();
			$this->init_settings();

			// Define user set variables
			$this->title        = $this->get_option( 'title' );
			$this->description  = $this->get_option( 'description' );
			$this->instructions = $this->get_option( 'instructions', $this->description );
			$this->order_status = $this->get_option( 'order_status', 'completed' );

			// Actions
			add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array(
				$this,
				'process_admin_options'
			) );
			add_action( 'woocommerce_thankyou_custom', array( $this, 'thankyou_page' ) );

			// Customer Emails
			add_action( 'woocommerce_email_before_order_table', array( $this, 'email_instructions' ), 10, 3 );
		}

		/**
		 * Initialise Gateway Settings Form Fields.
		 */
		public function init_form_fields() {

			$this->form_fields = array(
				'enabled'      => array(
					'title'   => __( 'Enable/Disable', 'storefront-child' ),
					'type'    => 'checkbox',
					'label'   => __( 'Enable Gold Payment', 'storefront-child' ),
					'default' => 'yes'
				),
				'title'        => array(
					'title'       => __( 'Title', 'storefront-child' ),
					'type'        => 'text',
					'description' => __( 'This controls the title which the user sees during checkout.', 'storefront-child' ),
					'default'     => __( 'Gold Payment', 'storefront-child' ),
					'desc_tip'    => true,
				),
				'order_status' => array(
					'title'       => __( 'Order Status', 'storefront-child' ),
					'type'        => 'select',
					'class'       => 'wc-enhanced-select',
					'description' => __( 'Choose whether status you wish after checkout.', 'storefront-child' ),
					'default'     => 'wc-completed',
					'desc_tip'    => true,
					'options'     => wc_get_order_statuses()
				),
				'description'  => array(
					'title'       => __( 'Description', 'storefront-child' ),
					'type'        => 'textarea',
					'description' => __( 'Payment method description that the customer will see on your checkout.', 'storefront-child' ),
					'default'     => __( 'Payment Information', 'storefront-child' ),
					'desc_tip'    => true,
				),
				'instructions' => array(
					'title'       => __( 'Instructions', 'storefront-child' ),
					'type'        => 'textarea',
					'description' => __( 'Instructions that will be added to the thank you page and emails.', 'storefront-child' ),
					'default'     => '',
					'desc_tip'    => true,
				),
			);
		}

		/**
		 * Output for the order received page.
		 */
		public function thankyou_page() {
			if ( $this->instructions ) {
				echo wpautop( wptexturize( $this->instructions ) );
			}
		}

		/**
		 * Add content to the WC emails.
		 *
		 * @access public
		 *
		 * @param WC_Order $order
		 * @param bool $sent_to_admin
		 * @param bool $plain_text
		 */
		public function email_instructions( $order, $sent_to_admin, $plain_text = false ) {
			if ( $this->instructions && ! $sent_to_admin && 'custom' === $order->payment_method && $order->has_status( 'on-hold' ) ) {
				echo wpautop( wptexturize( $this->instructions ) ) . PHP_EOL;
			}
		}

		public function payment_fields() {

			if ( $description = $this->get_description() ) {
				echo __( "This payment requires gold only", 'domain' );
			}

		}

		/**
		 * Process the payment and return the result.
		 *
		 * @param int $order_id
		 *
		 * @return array
		 */
		public function process_payment( $order_id ) {

			if ( class_exists( 'myCRED_Core' ) ) :

				$settings = mycred_part_woo_settings();
				$user_id  = get_current_user_id();
				$mycred   = mycred( $settings['point_type'] );

				// Excluded from usage
				if ( $mycred->exclude_user( $user_id ) ) {
					wc_add_notice( __( 'You are not allowed to use this feature.', 'storefront-child' ), 'error' );
				}

				$balance = $mycred->get_users_balance( $user_id );
				$amount  = $this->get_order_total();

				// Invalid amount
				if ( $amount == $mycred->zero() ) {
					wc_add_notice( __( 'Amount can not be zero.', 'storefront-child' ), 'error' );
				}
				// Too high amount
				if ( $balance < $amount ) {
					wc_add_notice( __( 'Insufficient Funds.', 'storefront-child' ), 'error' );

				}
				if ( wc_get_notices( 'error' ) ) {
					return array(
						'result'   => 'fail',
						'redirect' => '',
					);
				}

				$order                 = wc_get_order( $order_id );
				$public_view_order_url = esc_url( $order->get_view_order_url() );
				// Deduct amount
				$mycred->add_creds(
					'partial_payment',
					$user_id,
					0 - $amount,
					__( 'Order: ', 'storefront-child' ) . '<a href="' . $public_view_order_url . '">' . $order_id . '</a>',
					$order_id,
					'',
					$settings['point_type']
				);

				//update success order

				$status = 'wc-' === substr( $this->order_status, 0, 3 ) ? substr( $this->order_status, 3 ) : $this->order_status;

				// Set order status
				$order->update_status( $status, __( 'Checkout with gold payment. ', 'storefront-child' ) );

				// Reduce stock levels
				wc_reduce_stock_levels( $order_id );

				// Remove cart
				WC()->cart->empty_cart();

				wc_clear_notices();

				// Return thankyou redirect
				return array(
					'result'   => 'success',
					'redirect' => $this->get_return_url( $order )
				);
			endif;

		}
	}
}

use credglv\models\OrderModel;
if( ! class_exists( 'myCRED_Custom_Widget_Wallet' ) ) {
	class myCRED_Custom_Widget_Wallet extends WP_Widget {

		/**
		 * Construct
		 */
		public function __construct() {

			parent::__construct(
				'mycred_widget_wallet',
				sprintf( __( '(%s) Wallet', 'mycred' ), mycred_label( true ) ),
				array(
					'classname'   => 'widget-my-wallet',
					'description' => __( 'Shows multiple balances.', 'mycred' )
				)
			);

		}

		/**
		 * Widget Output
		 */
		public function widget( $args, $instance ) {

			extract( $args, EXTR_SKIP );

			$mycred = mycred();

			// If we are logged in
			if ( is_user_logged_in() ) {

				if ( ! isset( $instance['types'] ) || empty( $instance['types'] ) )
					$instance['types'] = array( MYCRED_DEFAULT_TYPE_KEY );

				// Get Current Users Account Object
				$account = mycred_get_account();
				if ( $account === false ) return;

				// Excluded users have no balance(s)
				if ( ! isset( $account->point_types ) || empty( $account->point_types ) ) return;

				// Start
				echo $before_widget;

				// Title
				if ( ! empty( $instance['title'] ) )
					echo $before_title . $instance['title'] . $after_title;

				$current_user = wp_get_current_user();

				// Loop through balances
				foreach ( $account->balance as $point_type_id => $balance ) {

					if ( $balance === false ) continue;

					$point_type = mycred( $point_type_id );

					if($balance->point_type->cred_id == 'mycred_default')
						$link = 'mycred_default';
					elseif ($balance->point_type->cred_id == 'mycred_point') 
						$link = 'mycred_point';
					else {
						$link = 'mycred_cash';
						$order              = new OrderModel();
						$temp = $order->getTotalUserCash($current_user->ID);
						$balance->current = isset($temp->total) ? $temp->total : '0';
					}

					$layout     = $instance['row'];
					$layout 	= str_replace('%cred_f%', '<span style="float:right">%cred_f%<a href="'.$link.'" style="margin-left:10px"><img src="'. get_stylesheet_directory_uri() .'/images/arrow-left.png"></a></span>', $layout);
					$layout     = $point_type->template_tags_amount( $layout, $balance->current );
					$layout     = $point_type->template_tags_user( $layout, false, $current_user );
					$layout     = str_replace( '%label%', '<span>'.$balance->point_type->plural.'</span>', $layout );

					echo '<div class="myCRED-balance mycred-balance-' . esc_attr( $point_type_id ) . '">' . do_shortcode( $layout ) . '</div>';

				}

				// End
				echo $after_widget;

			}

			// Visitor
			elseif ( ! is_user_logged_in() && $instance['show_visitors'] ) {

				echo $before_widget;

				// Title
				if ( ! empty( $instance['title'] ) )
					echo $before_title . $instance['title'] . $after_title;

				$message = $instance['message'];
				$message = $mycred->template_tags_general( $message );

				echo '<div class="myCRED-wallet-message"><p>' . wptexturize( $message ) . '</p></div>';

				echo $after_widget;

			}

		}

		/**
		 * Outputs the options form on admin
		 */
		public function form( $instance ) {

			$mycred        = mycred();

			// Defaults
			$title         = isset( $instance['title'] )         ? $instance['title']         : 'My Wallet';
			$types         = isset( $instance['types'] )         ? $instance['types']         : array();
			$row_template  = isset( $instance['row'] )           ? $instance['row']           : '%label%: %cred_f%';
			$show_visitors = isset( $instance['show_visitors'] ) ? $instance['show_visitors'] : 0;
			$message       = isset( $instance['message'] )       ? $instance['message']       : '<a href="%login_url_here%">Login</a> to view your balance.';

?>
<!-- Widget Options -->
<p class="myCRED-widget-field">
	<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title', 'mycred' ); ?>:</label>
	<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
</p>

<!-- Point Type -->
<p class="myCRED-widget-field">
	<label for="<?php echo esc_attr( $this->get_field_id( 'types' ) ); ?>"><?php _e( 'Point Types', 'mycred' ); ?>:</label><br />
	<?php mycred_types_select_from_checkboxes( $this->get_field_name( 'types' ) . '[]', $this->get_field_id( 'types' ), $types ); ?>
</p>

<!-- Row layout -->
<p class="myCRED-widget-field">
	<label for="<?php echo esc_attr( $this->get_field_id( 'row' ) ); ?>"><?php _e( 'Row Layout', 'mycred' ); ?>:</label>
	<textarea name="<?php echo esc_attr( $this->get_field_name( 'row' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'row' ) ); ?>" rows="3" cols="20" class="widefat"><?php echo esc_attr( $row_template ); ?></textarea>
	<small><?php echo $mycred->available_template_tags( array( 'general', 'amount' ) ); ?></small>
</p>

<!-- Show to Visitors -->
<p class="myCRED-widget-field">
	<label for="<?php echo esc_attr( $this->get_field_id( 'show_visitors' ) ); ?>"><input type="checkbox" name="<?php echo esc_attr( $this->get_field_name( 'show_visitors' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'show_visitors' ) ); ?>" value="1"<?php checked( $show_visitors, 1 ); ?> class="checkbox" /> <?php _e( 'Show message when not logged in', 'mycred' ); ?></label>
</p>
<div id="<?php echo esc_attr( $this->get_field_id( 'show_visitors' ) ); ?>-details" class="mycred-hidden<?php if ( $show_visitors == 1 ) echo ' ex-field'; ?>">
	<p class="myCRED-widget-field">
		<label for="<?php echo esc_attr( $this->get_field_id( 'message' ) ); ?>"><?php _e( 'Message', 'mycred' ); ?>:</label>
		<textarea name="<?php echo esc_attr( $this->get_field_name( 'message' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'message' ) ); ?>" rows="3" cols="20" class="widefat"><?php echo esc_attr( $message ); ?></textarea>
		<small><?php echo $mycred->available_template_tags( array( 'general', 'amount' ) ); ?></small>
	</p>
</div>
<!-- Widget Admin Scripting -->
<script type="text/javascript">//<![CDATA[
jQuery(function($) {

	$( '#<?php echo esc_attr( $this->get_field_id( 'show_visitors' ) ); ?>' ).change(function(){
		$( '#' + $(this).attr( 'id' ) + '-details' ).toggleClass( 'ex-field' );
	});

});//]]>
</script>
<?php

		}

		/**
		 * Processes widget options to be saved
		 */
		public function update( $new_instance, $old_instance ) {

			$instance                  = $old_instance;

			$instance['title']         = wp_kses_post( $new_instance['title'] );
			$instance['types']         = (array) $new_instance['types'];
			$instance['row']           = wp_kses_post( $new_instance['row'] );
			$instance['show_visitors'] = ( isset( $new_instance['show_visitors'] ) ) ? 1 : 0;
			$instance['message']       = wp_kses_post( $new_instance['message'] );

			mycred_flush_widget_cache( 'mycred_widget_wallet' );

			return $instance;

		}

	}
}

if ( ! function_exists('glv_widgets_init') ) {
	//remove_action ('widgets_init',  array( myCRED_Core::instance(), 'widgets_init' ), 50);

	function remove_widgets_wallet() {
		unregister_widget( 'myCRED_Widget_Wallet' );

	}

	add_action( 'widgets_init' , 'remove_widgets_wallet' , 60 );
}

if ( ! function_exists('add_widgets_wallet') ) {

	function add_widgets_wallet () {
		register_widget('myCRED_Custom_Widget_Wallet');
	}

	add_action( 'widgets_init' , 'add_widgets_wallet' , 70 );
}

if ( ! function_exists( 'glv_add_custom_gateway_class' ) ) {
	add_filter( 'woocommerce_payment_gateways', 'glv_add_custom_gateway_class' );
	function glv_add_custom_gateway_class( $methods ) {
		$methods[] = 'WC_Gateway_Gold';

		return $methods;
	}
}

if ( ! function_exists( 'glv_login_logo' ) ) {
	function glv_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
                background-repeat: no-repeat;
                padding-bottom: 30px;
                background-size: 100%;
                margin: 0 auto;
                overflow: hidden;
                text-indent: -9999px;
                height: 52px;
                width: 200px;
            }
        </style>
	<?php }

	add_action( 'login_enqueue_scripts', 'glv_login_logo' );
}
if ( ! function_exists( 'glv_login_logo_url' ) ) {
	function glv_login_logo_url() {
		return home_url();
	}

	add_filter( 'login_headerurl', 'glv_login_logo_url' );
}
if ( ! function_exists( 'glv_login_logo_url_title' ) ) {
	function glv_login_logo_url_title() {
		return __( 'Gold Leaf Ventures', 'storefront-child' );
	}

	add_filter( 'login_headertitle', 'glv_login_logo_url_title' );
}


if ( ! function_exists( 'glv_expired_cookie_logged_in' ) ) {
	/**
	 * Fires immediately before the logged-in authentication cookie is set.
	 *
	 * @since 2.6.0
	 * @since 4.9.0 The `$token` parameter was added.
	 *
	 * @param string $logged_in_cookie The logged-in cookie.
	 * @param int $expire The time the login grace period expires as a UNIX timestamp.
	 *                                 Default is 12 hours past the cookie's expiration time.
	 * @param int $expiration The time when the logged-in authentication cookie expires as a UNIX timestamp.
	 *                                 Default is 14 days from now.
	 * @param int $user_id User ID.
	 * @param string $scheme Authentication scheme. Default 'logged_in'.
	 * @param string $token User's session token to use for this cookie.
	 */
//	add_action( 'set_logged_in_cookie', $logged_in_cookie, $expire, $expiration, $user_id, 'logged_in', $token );
	add_action( 'auth_cookie_expiration', 'glv_expired_cookie_logged_in', 10, 3 );

	function glv_expired_cookie_logged_in( $day, $user_id, $remember ) {

		$expire = 365 * DAY_IN_SECONDS;

		return $expire;
	}
}
/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 *
 * @return string
 */

if ( ! function_exists( 'glv_login_redirect' ) ) {
	function glv_login_redirect( $redirect_to, $request, $user ) {
		//is there a user to check?
		if ( class_exists( 'WooCommerce' ) ) {
			if ( WC()->cart->get_cart_contents_count() != 0 ) {
				$redirect_to = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );

//			 Do something fun
			}
		}

		return $redirect_to;
	}

	add_filter( 'login_redirect', 'glv_login_redirect', 30, 3 );
}
if ( ! function_exists( 'custom_remove_footer_credit' ) ) {
	add_action( 'init', 'custom_remove_footer_credit', 10 );
	function custom_remove_footer_credit() {
		remove_action( 'storefront_footer', 'storefront_credit', 20 );
		add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
	}

	function custom_storefront_credit() {
		?>
        <div class="site-info">
            <p>
				<?php if ( WP_DEBUG ) {
					$type = '';
				} else {
					$type = ' | O.';
				} ?>
            </p>

            <p>
                &copy; <?php echo '2018-' . date( "Y" ) . ' Gold Leaf Ventures Limited<br>'; ?>
            </p>
            <!-- <p class="footer_link">
                <a href="http://member.goldleaf-ventures.com">Open Beta
                    Version 0.1&nbsp;</a>
                	<a href="http://webapp1.goldleaf-ventures.com">&nbsp;|&nbsp;T.&nbsp;</a>
                <a href="http://google.com"
                >|&nbsp;G.<?php echo $type ?></a> -->
            </p>
        </div><!-- .site-info -->
		<?php
	}
}


if ( ! function_exists( 'glv_always_remember_choice' ) ) {
	add_action( 'wp_login', 'glv_always_remember_choice', 10, 2 );
	/*	Two parameters are not used, but must be specified for this Action */
	function glv_always_remember_choice( $user_login, $user ) {
		/*	Check first to be sure we are coming from a WordPress Login form,
			not some automated login process.
		*/
//		if ( empty( $_POST['rememberme'] ) ) {
		$_POST['rememberme'] = true;
//		}
	}
}

add_action( 'wp_enqueue_scripts', 'store_child_enqueue_assets' );
add_action( 'wp_enqueue_style', 'store_child_enqueue_assets' );
function store_child_enqueue_assets() {


	wp_enqueue_script(
		'store-temp',
		get_theme_file_uri( '/assets/js/store-temp.js' ), array( 'jquery' )
	);

	wp_enqueue_script(
		'classie',
		get_theme_file_uri( '/assets/js/classie.js' ), array( 'jquery' )
	);

	wp_enqueue_script(
		'modernizr.custom',
		get_theme_file_uri( '/assets/js/modernizr.custom.js' ), array( 'jquery' )
	);

	wp_enqueue_script(
		'store-child',
		get_theme_file_uri( '/assets/js/store-child.js' ), array(
		'jquery',
		'modernizr.custom',
	), true, true
	);
	wp_enqueue_style( 'store-hide', get_theme_file_uri( '/assets/css/store-child.css' ), [
		'storefront-child-style',
	], true, 'all' );

	if ( credglv_get_woo_myaccount() && ! is_user_logged_in() ) {
		wp_enqueue_style( 'login-register', get_theme_file_uri( '/assets/css/login-register.css' ), [
		], true, false );
	}
	/*
	 *
    Use this function to enqueue script
	wp_enqueue_script(
		'swipe-left-lib',
		get_theme_file_uri( '/assets/js/store-child.js' )
	);*/


}
