<?php
$gitpath     = "/var/www/glvthemes/";
$destination = "/home/credglv/test1.goldleaf-ventures.com/wp-content/themes/";
$branch      = "develop";

$repo = "glvthemes";
chdir( $gitpath );

$output = '';
$return = 1;
print_r( "git checkout develop && git pull origin develop" );
//test $_str = exec("sudo git checkout {$branch} && git pull", $output, $return);

$_str = exec( "sudo git checkout develop && sudo git pull origin develop", $output, $return );

if ( ! $return ) {
	$result = true;
	if ( empty( $output ) ) {
		$output = "Success update {$branch} of {$repo}" . $_str;
		print_r("rsync -avz ".$gitpath." ". $destination ." --exclude .git/ --exclude .gitignore");
		$_str = exec( "rsync -avz ".$gitpath." ". $destination ." --exclude .git/ --exclude .gitignore", $output, $return );

		echo '<pre>';
		print_r( $output );
		echo '</pre>';
		echo '<pre>';
		print_r( $return );
		echo '</pre>';
	} else {
		if ( is_array( $output ) ) {
			$output = implode( PHP_EOL, $output );
		}
		$output .= $_str;
	}
} else {
	$output = "Fail to update {$branch} of {$repo}";
}


echo $output;


?>

