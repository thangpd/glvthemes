<?php
use Endroid\QrCode\QrCode;

if ($_GET['text']) {
	$qrCode = new QrCode($_GET['text']);
} else {
	$data = $_GET;
	$qrCode = new QrCode(json_encode($data));
}
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
