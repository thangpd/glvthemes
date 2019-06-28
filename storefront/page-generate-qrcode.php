<?php
use Endroid\QrCode\QrCode;
use credglv\models\UserModel;

$referral       = new UserModel();
$code = wp_get_current_user();
$user_id = get_current_user_id();
$code = $code->data->user_login;

$query = '';
$fullQuery = '';

if ($referral->check_actived_referral($user_id)) {
	$query = 'ref='.$code;
	$fullQuery = $query;
} else {
	$query = 'username='.$code;
	$fullQuery = $query . '&amount=20';
}

$data = [];
$data['Share'] = $referral->get_url_share_link();
$data['Register'] = home_url('register') . '?'.$query;
$data['Transfer'] = home_url('vi-dien-tu') . '?'.$fullQuery;
$data['3DTouch'] = home_url('3dtouch'). '?'.$fullQuery;


$qrCode = new QrCode(json_encode($data));
$qrCode->setSize(300);

// Set advanced options
$qrCode->setWriterByName('png');
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
$qrCode->setLogoPath(__DIR__.'/assets/images/logo-qrcode.png');
$qrCode->setLogoWidth(50);
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
?>

