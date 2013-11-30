<?php
	if (!isset($_SESSION)) session_start();
	header("content-type:image/png");
	
	$image_width=100;   //验证码图像的长度 
	$image_height=30; 	// 验证码图像的高度 	
	$random_dots=300;  	// 干扰点的数量 
	srand(microtime()*100000);	 //设置随机数种子，microtime返回时间戳
	$new_number = '';
	for($i=0;$i<4;$i++)		//十六进制的4为验证码的生成
	{
		$new_number.=dechex(rand(0,15));
	}
	$_SESSION["checkcode"]=$new_number;
	
	//验证码的输出
	$num_image=imagecreate($image_width,$image_height);
	imagecolorallocate($num_image,240,240,240);
	for($i=0;$i<strlen($_SESSION["checkcode"]);$i++)
	{
		$font=mt_rand(6,8);
		$x=mt_rand(1,8)+$image_width*$i/4;
		$y=mt_rand(1,$image_height/4);	
		$color=imagecolorallocate($num_image,mt_rand(0, 255),mt_rand(0, 255),mt_rand(0, 255));
		imagestring($num_image, $font, $x, $y, $_SESSION["checkcode"][$i], $color);
	}
	
	//干扰点的输出
	for($i=0;$i<$random_dots;$i++)
	{
		$randcolor=imagecolorallocate($num_image,rand(200,255),rand(200,255),rand(200,255));
		imagesetpixel($num_image,rand(0,$image_width),rand(0,$image_height),$randcolor);
	}
	
	//输出至网页并清理内存
	imagepng($num_image);
	imagedestroy($num_image);
?>