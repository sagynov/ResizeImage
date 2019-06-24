<?php
try{
    $input = $_FILES['fileCenter'];
    $tmpName = $input['tmp_name'];
    $path = 'images/'.basename($input['name']);
    move_uploaded_file($tmpName, $path);

    $image1 = imagecreatefrompng($path);
    $imageSize = getimagesize($path);
    $imageType = $imageSize['mime'];
    switch($imageType){
        case 'image/png':
            //echo 'png';
            break;
        case 'image/jpeg':
            //echo 'jpeg';    
            break;    
    }

    $imageX = $imageSize[0] / 3;
    $imageY = $imageSize[1] / 3;
    $x = $imageX;
    $y = $imageY;
    $image = imagecreatetruecolor($x, $y);
    imagealphablending($image, false);
    imagesavealpha($image, true);
    imagecopyresampled($image, $image1, 0,0, $imageX,$imageY, $x, $y, $imageX,$imageY);
    imagepng($image, $path);
    echo $path;
    imagedestroy($image);
    imagedestroy($image1);
}
catch (Exception $ex) {
    //Выводим сообщение об исключении.
    echo $ex->getMessage();
}
?>
