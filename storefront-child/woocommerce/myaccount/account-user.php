<div class="account-user circle">
	<span class="image mr-half inline-block">
	<?php 
	 	$current_user = wp_get_current_user();
	 	$user_id = $current_user->ID;
	 	$user_fullname = get_user_meta($user_id,'user_fullname',true);
		echo get_avatar( $user_id, 70 );
	?>
		</span>
	<span class="user-name inline-block">
		<?php 
			echo mb_strtoupper($user_fullname,'UTF-8').' | '.strtoupper($current_user->display_name).' | ';
		?>
		<em class="user-id op-5"><?php echo '#'.$user_id;?></em>
	</span>
</div>