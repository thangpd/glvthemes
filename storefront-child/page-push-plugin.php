<?php echo 'push';
$gitpath = "/home/apache/credglv";
$branch  = "develop";

$repo = "credglv";
chdir( $gitpath );
$output = '';
$return = 1;




//           test                             $_str = exec("git checkout {$branch} && git pull", $output, $return);
echo '<pre>';
print_r("git checkout ".$branch." && git pull origin ".$branch);
echo '</pre>';
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

