<?php echo 'push';
$gitpath = "/home/apache/credglv";
$branch  = "develop";

$repo = "credglv";
chdir( $gitpath );
$output = '';
$return = 1;

$str_gitpull = "git checkout " . $branch . " && git pull origin " . $branch;
//           test                             $_str = exec("git checkout {$branch} && git pull", $output, $return);

echo '<pre>';
print_r($str_gitpull);
echo '</pre>';
$_str = exec( $str_gitpull, $output, $return );

echo '<pre>';
print_r( $output );
echo '</pre>';

echo '<pre>';
print_r( $return );
echo '</pre>';


$_str = exec( "whoami", $output, $return );
echo '<pre>';
print_r($output);
echo '</pre>';
echo '<pre>';
print_r($return );
echo '</pre>';

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

