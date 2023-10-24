<?php
session_start();
require "connection.php";

$id = $_POST["id"];
$title = $_POST["t"];
$price = $_POST["p"];
$des = $_POST["d"];

if (empty($title)) {
    echo ("Please enter title");
} else if (strlen($title) > 50) {
    echo ("Title less than 50 characters!");
} else if (empty($price)) {
    echo ("Please enter Price");
} else if (empty($des)) {
    echo ("Please enter Description");
} else {

    $rs = Database::iud("UPDATE `offers` SET `title`='".$title."', `description`='".$des."', `price`='".$price."' WHERE `id` = $id " );
    echo ("Done");


    $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
    $valid_image_uploaded = false;
    for ($x = 0; $x < sizeof($_FILES); $x++) {
        if (isset($_FILES["image" . $x])) {
            $image_file = $_FILES["image" . $x];
            $file_extention = $image_file["type"];
            if (in_array($file_extention, $allowed_image_extentions)) {
                $valid_image_uploaded = true;

                $new_img_extention = "";
                if ($file_extention == "image/jpg") {
                    $new_img_extention = ".jpg";
                } else if ($file_extention == "image/jpeg") {
                    $new_img_extention = ".jpeg";
                } else if ($file_extention == "image/png") {
                    $new_img_extention = ".png";
                } else if ($file_extention == "image/svg+xml") {
                    $new_img_extention = ".svg";
                }

                $file_name = "resources//offerimg//" . uniqid() . $new_img_extention;
                move_uploaded_file($image_file["tmp_name"], $file_name);
                Database::iud("UPDATE `offers` SET `img`='".$file_name."' WHERE `id`=$id");
                
                
            } else {
                echo ("Not an allowed image type");
            }
        }
    }
    
    
}
?>