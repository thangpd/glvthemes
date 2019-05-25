<div class="account-user circle" style="float: right; text-align: center">
	<span class="image mr-half inline-block">
	<?php 
	 	$current_user = wp_get_current_user();
	 	$user_id = $current_user->ID;
	 	$user_fullname = get_user_meta($user_id,'user_fullname',true); 
	 ?>
	<img src="<?php echo get_user_meta( $user_id,'avatar',true ) ? get_user_meta( $user_id,'avatar',true ) : get_avatar_url($user_id);?>" width="70" height="70" id="user_avatar"/>
		</span>
	<span class="user-name inline-block">
		<em class="user-id op-5"><?php echo '#'.$user_id;?></em>
		<?php 
			echo ' | '.mb_strtoupper($user_fullname,'UTF-8').'<br>'.strtoupper($current_user->user_login).'<br>';
		?>
	</span>
</div>