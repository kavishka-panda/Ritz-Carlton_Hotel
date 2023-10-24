<?php

require "connection.php";

$qty = $_POST["qty"];
$indate = $_POST["indate"];
$outdate = $_POST["outdate"];
$total = $_POST["total"];
$address = $_POST["address"];
$city = $_POST["city"];
$night = $_POST["night"];
$id = $_POST["id"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
 
$cityName = Database::search("SELECT `name` FROM `city` WHERE `id_city`=$city");
$row = $cityName->fetch_assoc();
$cityName = $row['name'];

$amount = $total;
$merchant_id = 1221049;
$order_id = uniqid();
$merchant_secret = "MzI5NzkyNjI2NDM1NjIxNTQ0NDIxNTgxNDg4NTkwNDIzMjM5MDM0Ng==";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array ["amount"] = $amount;
$array ["merchant_id"] = $merchant_id;
$array ["order_id"] = $order_id;
$array ["currency"] = $currency;
$array ["hash"] = $hash;
$array ["first_name"] = $name;
$array ["last_name"] = "";
$array ["email"] = $email;
$array ["phone"] = $mobile;
$array ["address"] = $address;
$array ["city"] = $cityName;

$jsonObj = json_encode($array);

echo($jsonObj);

?>