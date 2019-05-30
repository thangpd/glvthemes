<?php echo 'push';
$gitpath = "/home/apache/credglv";
$branch  = "develop";

$repo = "credglv";
chdir( $gitpath );
$output = '';
$return = 1;

$_str = exec( "git checkout " . $branch . " && git pull origin " . $branch." && git push origin ".$branch, $output, $return );

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

