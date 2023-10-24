<?php

session_start();

require "connection.php";

if(isset($_SESSION["u"])){
    $u_id = $_SESSION["u"]["id"];
    $order_id = $_POST["orderId"];
    $room_id = $_POST["roomId"];
    $email = $_POST["email"];
    $total = $_POST["total"];
    $qty = $_POST["qty"];
    $indate = $_POST["indate"];
    $outdate = $_POST["outdate"];
    $night = $_POST["night"];

    $product_rs = Database::search("SELECT * FROM `rooms` WHERE `id`='".$room_id."';");
    $product_data = $product_rs->fetch_assoc();

    $cur_qty = $product_data["room"];
    $new_qty = $cur_qty-$qty;

    Database::iud("UPDATE `rooms` SET `room`='".$new_qty."' WHERE `id`='".$room_id."'");
    
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date=$d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `invoice` (`booking_id`,`total`,`in_date`,`out_date`,`booking_time`,`status`,`user_id`,`rooms_id`,`qty`,`night`,`ava_room`) VALUES 
    ('".$order_id."','".$total."','".$indate."','".$outdate."','$date','0','".$u_id."','".$room_id."','".$qty."','".$night."','".$new_qty."')");

    echo("1");

}

?>