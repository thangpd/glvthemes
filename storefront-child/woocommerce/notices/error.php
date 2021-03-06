<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

?>
<ul class="alert alert-danger" role="alert" style="margin: 0;">
	<i class="fa fa-times"></i>
	<p class="alert-close">x</p>
	<?php foreach ( $messages as $message ) : ?>
		<?php
			echo wc_kses_notice( $message );
		?>
		<br>
	<?php endforeach; ?>
</ul>
