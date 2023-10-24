<?php
session_start();
require "connection.php";

$id = $_POST["id"];
$name = $_POST["n"];
$price = $_POST["p"];
$description = $_POST["d"];
$size = $_POST["s"];
$occupancy = $_POST["o"];
$qty = $_POST["qty"];

if (empty($name)) {
    echo ("Please enter Room Name");
} else if (strlen($name) > 50) {
    echo ("Room Name less than 50 characters!");
} else if (empty($price)) {
    echo ("Please enter Price");
} else if (empty($qty)) {
    echo ("Please enter qty");
} else if (empty($description)) {
    echo ("Please enter Description");
} else if (empty($size)) {
    echo ("Please enter Room Size");
} else if (strlen($size) > 150) {
    echo ("Room Size less than 150 characters!");
} else if (empty($occupancy)) {
    echo ("Please enter Occupancy");
} else if (strlen($occupancy) > 150) {
    echo ("Occupancy less than 150 characters!");
} else {


    $rs = Database::iud("UPDATE `rooms` SET `room_name`='".$name."', `size`='".$size."', `occupancy`='".$occupancy."', `description`='".$description."', `price`='".$price."', `room`='".$qty."'  WHERE `id` = $id " );
    echo ("Done");

    $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
    $valid_image_uploaded = false;
    for ($x = 0; $x < 1; $x++) {
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

                $file_name = "resources//roomimg//" . uniqid() . $new_img_extention;
                move_uploaded_file($image_file["tmp_name"], $file_name);

                Database::iud("UPDATE `rooms` SET `img`='".$file_name."' WHERE `id`=$id ");
               
            } else {
                echo ("Not an allowed image type");
            }
        }
    }
}
    
?>