<?php
$gitpath = "/home/apache/glvthemes";
$branch  = "master";

$repo = "glvthemes";
chdir( $gitpath );
$output = '';
$return = 1;
//print_r( "git checkout " . $branch . " && git pull origin " . $branch );
//           test                             $_str = exec("git checkout {$branch} && git pull", $output, $return);

$_str = exec( "git checkout " . $branch . " && git pull origin " . $branch, $output, $return );
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

