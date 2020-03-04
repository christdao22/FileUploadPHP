<?php
// validates the image size
function validateImageSize($arr){
    return $arr > 10000000? true : false;
}

function validateImageFIleExist($arr){
    $destination = "upload/".basename($arr);
    return file_exists($destination)? true : false; 
}

//validates the image type
function validateImageType($arr){
    $allowed = array('jpeg', 'png');
    $strArray = explode("/", $arr);
    return in_array(end($strArray), $allowed)? false : true;
}

function upload($name,  $tmp){
    $destination = "upload/".basename($name);
    move_uploaded_file($tmp, $destination);
}


?>