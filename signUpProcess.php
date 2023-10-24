<?php

require "connection.php";

$name = $_POST["n"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$email = $_POST["e"];

if (empty($name)) {
    echo ("Please enter your Name!");
} else if (strlen($name) > 50) {
    echo ("First Name must have LESS THAN 50 characters!");
}else if(empty($email)){
    echo("Please enter your Email address!");
}else if(strlen($email)>100){
    echo ("Email must have LESS THAN 100 characters!");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email address!");
}else if(empty($password)){
    echo ("Please enter your Password!");
}else if(strlen($password)<5 || strlen($password)>20){
    echo ("Password length must be between 5 and 20!");
}else if(empty($mobile)){
    echo ("Please enter your Mobile Number!");
}else if(strlen($mobile) != 10){
    echo ("Mobile Number must contain 10 characters");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo ("Invalid Mobile Number!");
}else{

$rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' OR 
`mobile`='".$mobile."'");
$n = $rs->num_rows;

if($n > 0){
    echo ("User with the same Email or Mobile already exists.");
}else{

    Database::iud("INSERT INTO `user` 
    (`name`,`email`,`password`,`mobile`,`validation_code`) VALUES ('".$name."','".$email."','".$password."','".$mobile."','')");

echo ("success");

}
    
}

?>