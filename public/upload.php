<?php
/**
 * Created by PhpStorm.
 * User: cory
 * Date: 3/4/2019
 * Time: 1:01 AM
 */

$target_dir = "uploads/";
$fileToUpload = $_FILES['fileToUpload']['name'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 1;
    }
}
?>
