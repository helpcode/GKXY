<?php

     /**
     * 绘制验证码
     */

    /* 开启session */
    session_start();

    /*建立画布*/
    $image = imagecreatetruecolor(100, 30);
    $bgcolor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $bgcolor);
    header('Content-type: image/png');

    $captchaCode = '';

    for($i = 0; $i < 4; $i++){
        $fontSize = 6;
        $fontColor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120));
        $data = 'qwerZXCVBNJKLtyQuioMpaWsdfghjkERTYUIOPlzxcvbnm012ASDFGH3456789';
        $fontContent = substr($data, rand(0, strlen($data)), 1);
        $captchaCode .= strtolower($fontContent);

        $x = ($i * 100 / 4) + rand(5, 10);
        $y = rand(0, 15);

        imagestring($image, $fontSize, $x, $y, $fontContent, $fontColor);
    }
    $_SESSION['captchaCode'] = $captchaCode;

    unset($captchaCode);

    for($i = 0; $i < 200; $i++){
        $pointColor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
        imagesetpixel($image, rand(1, 99), rand(1, 29), $pointColor);
    }

    for($i = 0; $i < 5; $i++){
        $lineColor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
        imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1,29), $lineColor);
    }

    imagepng($image);

    imagedestroy($image);