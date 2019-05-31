<div class="account-user circle" style="float: right; text-align: center">
	<span class="image mr-half inline-block">
	<?php 
	 	$current_user = wp_get_current_user();
	 	$user_id = $current_user->ID;
	 	$user_fullname = get_user_meta($user_id,'user_fullname',true); 
	 ?>
	<img src="<?php echo get_user_meta( $user_id,'avatar',true ) ? get_user_meta( $user_id,'avatar',true ) : get_avatar_url($user_id);?>" id="user_avatar" style="display: block; margin:0 auto; width: 70px; height: 70px; object-fit: cover;" onclick="window.location.href='<?php echo esc_html( home_url('/')).'profile' ?>'"/>
		</span>
	<span class="user-name inline-block">
		<em class="user-id op-5"><?php echo '#'.$user_id;?></em>
		<?php 
			echo '<br>'.strtoupper($current_user->user_login).'<br>'.mb_strtoupper($user_fullname,'UTF-8');
		?>
	</span>
</div>