<?php

require "connection.php";

if(isset($_GET["id"])){

    $Offerid = $_GET["id"];

    $offer_rs = Database::search("SELECT * FROM `offers` WHERE `id`='".$Offerid."'");
    $offer_data = $offer_rs-> fetch_assoc();

    Database::iud("DELETE FROM `offers` WHERE `id`='".$Offerid."'");

    echo ("Offer has been removed");

}else{
    echo ("something went wrong");
}

?>