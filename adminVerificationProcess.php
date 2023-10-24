<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["e"])){
    $email = $_POST["e"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."'");+
    $admin_num = $admin_rs->num_rows;

    if($admin_num > 0){

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `validation_code`='".$code."' WHERE `email`='".$email."'");

        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'kavishkarashanga111@gmail.com';
            $mail->Password = 'ftwvucbgsuotvcwr';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('kavishkarashanga111@gmail.com', 'Admin Verification');
            $mail->addReplyTo('kavishkarashanga111@gmail.com', 'Admin Verification');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'The Ritz-Carlton Hotel Admin Verification';
            $bodyContent = '<h1 style="color: #0284c7; font-family:Arial, Helvetica, sans-serif; text-align: center;">The Ritz-Carlton Hotel Admin Verification</h1>
<p style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif; text-align: center; margin-top: 50px;">We received your request for a verification-use code to use with your admin account.</p>
<h1 style="color: #0284c7; font-family:Arial, Helvetica, sans-serif; text-align: center;  ">'.$code.'</h1>
<p style="font-family: \'Gill Sans\', \'Gill Sans MT\', Calibri, \'Trebuchet MS\', sans-serif; text-align: center; margin-top: 0px;">If you didn\'t request this code, you can safely ignore this email. Someone else might have typed your email address by mistake.<br>Thanks,<br>The Ritz-Carlton Hotel team.</p>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed';
            } else {
                echo 'Success';
            }

    }else{
        echo ("You are not a valid user");
    }

}else{
    echo ("Email field should not be empty.");
}
