<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../hotel_project/images/logo2.png">
</head>

<body>
    <?php include "header.php"; ?>

    <?php

    require "connection.php";

    if (isset($_SESSION["u"])) {
        $user = $_SESSION["u"]["id"];
        $oredrid = $_GET["id"];

        $rs = Database::search("SELECT * FROM `invoice` WHERE `booking_id`='" . $oredrid . "'");
        $invoice = $rs->fetch_assoc();

        $us = Database::search("SELECT * FROM `user` WHERE `id`='" . $user . "'");
        $costomer = $us->fetch_assoc();

        $ps = Database::search("SELECT * FROM `rooms` WHERE `id`='" . $invoice["rooms_id"] . "'");
        $room = $ps->fetch_assoc();


    ?>

        <div class="d-flex  align-items-center container-fluid">
            <div class="col-12 ">
                <h1 class="text-center text5 text-uppercase" style="font-size: 45px;">You'r booking has <span class="fw-bold text-success">success !</span></h1>
                <div class="col-12 d-flex justify-content-center">
                    <img src=".//icon/welcome.gif" width="150px" alt="#">
                </div>
                <div class="mt-5 fs-5 " style="padding-left: 25%; padding-right: 25%;">

                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Costomer Name : </p>
                        <span class="  col-6  text-end fw-bold "><?php echo $costomer["name"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Costomer Email : </p>
                        <span class=" col-6  text-end fw-bold "><?php echo $costomer["email"]; ?></span>
                    </div>
                    <div class="row ">
                        <p class="my-0 col-6 text-start">Order ID : </p>
                        <span class="  col-6  text-end fw-bold "><?php echo $invoice["booking_id"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Room Name : </p>
                        <span class="col-6 text-end fw-bold "><?php echo $room["room_name"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">InDate : </p>
                        <span class="col-6 text-end fw-bold "><?php echo $invoice["in_date"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">OutDate : </p>
                        <span class="col-6 text-end fw-bold "><?php echo $invoice["out_date"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Room Qty : </p>
                        <span class=" col-6  text-end fw-bold "><?php echo $invoice["qty"]; ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Nights : </p>
                        <span class=" col-6 text-end fw-bold "><?php echo $invoice["night"]; ?></span>
                    </div>
                    <?php
                    $price = number_format($invoice["total"], 2,);
                    ?>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Total Payment : </p>
                        <span class="  col-6 text-end fw-bold "><?php echo $price ?></span>
                    </div>
                    <div class="row mt-1">
                        <p class="my-0 col-6 text-start ">Booking Date / Time : </p>
                        <span class="  col-6 text-end fw-bold "><?php echo $invoice["booking_time"]; ?></span>
                    </div>
                    <div class="">
                        <button class="btn btn-success px-5 text-center mt-5"><a class="nav-link" href="home.php">GO TO HOME BACK</a></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    } else {

    ?>

        <div class=" d-flex justify-content-center">
            <div class="mt-5 border w-50 py-5 border-5">
                <div class="flex-column col-12 text-center">
                    <h2 class="text5 fs-1 m-0 p-0 text-uppercase col-12">Please Login,<br> </h2>

                    <h2 class="fs-4 text5 m-0 p-0 ">you are not logged in yet</h2>
                    <a class="btn mt-4 p-1 btn-dark fs-5 text-center col-12 border-0" style="width: 20%; background-color: #172554;" href="signIn.php">SIGN IN</a>

                </div>
            </div>
        </div>


    <?php
    }
    ?>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</body>

</html>