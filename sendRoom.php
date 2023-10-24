<?php

session_start();

require "connection.php";

$room_rs=Database::search("SELECT * FROM `rooms`");
$room_num=$room_rs->num_rows;

if($room_num==1){

    $room_data = $room_rs->fetch_assoc();
    $_SESSION["r"] = $room_data;
   
}

?>