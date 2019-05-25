<?php echo 'push';
$gitpath = "/home/glvahost/credglv";
$branch  = "develop";

$repo = "credglv";
chdir( $gitpath );
$output = '';
$return = 1;
//           test                             $_str = exec("git checkout {$branch} && git pull", $output, $return);
$_str = exec( "git checkout ".$branch." && git pull origin ".$branch, $output, $return );


print_r( $output );

print_r( $return );
if ( ! $return ) {
	$result = true;
	if ( empty( $output ) ) {
		$output = "Success update {$branch} of {$repo}" . $_str;
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

