<?php
$validImage=array();
if(isset($_FILES["imageToUpload"])){
    $arr_array = $_FILES["imageToUpload"];
    $name_Arr=$arr_array['name'];
    $type_Arr=$arr_array['type'];
    $size_Arr=$arr_array['size'];
    $tmp_Arr=$arr_array['tmp_name'];
    


    for($a=0; $a<count($name_Arr); $a++){
        if(validateImageSize($size_Arr[$a])){
            echo '<div class="alert alert-danger text-danger p-2">'.$name_Arr[$a].' >> Image should not more than 10mb to upload<br></div>';
        }        
        else {
            if(validateImageFIleExist($name_Arr[$a])){
                echo '<div class="alert alert-danger text-danger p-2">'.$name_Arr[$a]." >> file already exists.<br></div>";
            }
            else{
                if(validateImageType($type_Arr[$a])){
                    echo '<div class="alert alert-danger text-danger p-2">'.$name_Arr[$a]." >> Invalid Type.<br></div>";
                }
                else{
                    array_push($validImage, $name_Arr[$a]);
                    upload($name_Arr[$a], $tmp_Arr[$a]);
                }
            }
        }
    }
    for($a=0; $a<count($validImage); $a++){
        echo '<div class="alert alert-success text-success p-2">'.$validImage[$a]." >> file succesfully uploaded.<br></div>";
    
    }
}
    //scan "uploads" folder and display them accordingly
    $folder = "upload";
    $results = scandir('upload');
    // foreach ($results as $result) {
    //     if ($result === '.' or $result === '..') continue;

        for($a=0; $a<count($validImage); $a++){
            if (is_file($folder . '/' . $validImage[$a])) {
                echo '<img class="mt-3" src="'.$folder.'/'.$validImage[$a].'" alt="..." style="width:250px; margin:5px; border: 1px dashed white; padding:5px">';
            }
        }
        unset($validImage);
        $validImage = array();
    // }

?>