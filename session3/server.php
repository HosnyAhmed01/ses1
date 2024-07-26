<?php
echo "hello from server";
print_r($_POST);
print_r($_FILES);

$target_dir = "images/";
if (!is_dir($target_dir)) {
    mkdir($target_dir);
};


function uploadImage ($fileArray , $target_dir) {
    $oneMegaByte = 1024;
    // check file type and size
    
    if ($fileArray['userimage']['size'] > $oneMegaByte && !str_contains($fileArray['userimage']['type'] , 'image')) {
        echo "<h1 color='red'>either file size or type is not valid<h1>";
        header("Location: http://localhost:3000/session3_register.php");
        return;
    }

    if (move_uploaded_file($fileArray['userimage']["tmp_name"]  ,  $target_dir . $fileArray['userimage']['name'])) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload failure!\n";
    }
}

uploadImage($_FILES, $target_dir)
?>