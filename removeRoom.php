<?php

require "connection.php";

if(isset($_GET["id"])){

    $roomid = $_GET["id"];

    $room_rs = Database::search("SELECT * FROM `rooms` WHERE `id`='".$roomid."'");
    $room_data = $room_rs-> fetch_assoc();

    Database::iud("DELETE FROM `rooms` WHERE `id`='".$roomid."'");

    echo ("Offer has been removed");

}else{
    echo ("something went wrong");
}

?>