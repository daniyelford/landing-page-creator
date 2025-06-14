<?php
	header('Content-Type: image/png');
	$img = imagecreatetruecolor('160', '70');
	$bg = imagecolorallocate($img, 255, 255, 255);
	$black = imagecolorallocate($img, 0, 0, 0);
	imagefill($img, 2, 3, $bg);
	$captcha = '';
	for ($i = 1; $i <= 8; $i++) {
		$char = rand(0, 9);
		$captcha .= $char;
		imagestring($img, 15, 10 + ($i * 15), 30, $char, $black);
	}
	$_SESSION['cap_frst']=$captcha;
	imagepng($img);
	imagedestroy($img);
?>