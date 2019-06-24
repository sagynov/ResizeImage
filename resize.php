<?php
try{
    $selectSize = $_POST['selectSize'];
    switch($selectSize){
        case 1080:
        $size[] = 1080;
        $size[] = 1080;
            break;
        case 720:
        $size[] = 720;
        $size[] = 480;
            break;
        case 320:
        $size[] = 320;
        $size[] = 240;
            break;
    }
    $input = $_FILES['fileSize'];
    $tmpName = $input['tmp_name'];
    $path = 'images/'.basename($input['name']);
    move_uploaded_file($tmpName, $path);
    // Resize
    $imagePath = imagecreatefrompng($path);
    $imagePathSize = getimagesize($path);

    $image = imagecreatetruecolor($size[0], $size[1]);
    imagealphablending($image, false);
    imagesavealpha($image, true);
    imagecopyresampled($image, $imagePath, 0, 0, 0, 0, $size[0], $size[1], $imagePathSize[0], $imagePathSize[1]);
    imagepng($image, $path);
    echo $path;
    imagedestroy($image);
    imagedestroy($imagePath);
} 
catch (Exception $ex) {
    //Выводим сообщение об исключении.
    echo $ex->getMessage();
}

?>
