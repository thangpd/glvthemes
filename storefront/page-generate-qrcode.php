<?php
use Endroid\QrCode\QrCode;

if ($_GET['text']) {
	$qrCode = new QrCode($_GET['text']);
} else {
	$data = $_GET;
	$qrCode = new QrCode(json_encode($data));
}

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();