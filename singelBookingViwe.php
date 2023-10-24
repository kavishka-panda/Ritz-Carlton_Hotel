<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signel Booking Viwe</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../hotel_project/images/logo2.png">
</head>

<body>
    <?php include "header.php"; ?>
    <?php

    require "connection.php";

    if (isset($_SESSION["u"])) {
        $data = $_SESSION["u"];
        $rid = $_GET["id"];
        $qty = $_GET["qty"];
        $indate = $_GET["indate"];
        $outdate = $_GET["outdate"];
        $room_rs = Database::search("SELECT * FROM rooms WHERE id = $rid");
        if (mysqli_num_rows($room_rs) > 0) {
            $room = $room_rs->fetch_assoc();
    ?>

            <?php

            ?>

            <div class="d-inline-flex justify-content-center align-items-center mt-3">
                <img src="../hotel_project/images/logo2.png" width="4%" class="mx-2" alt="..." data-aos="flip-left" data-aos-duration="2000">
                <span class="fs-1 text5 fw-bold text-uppercase"><span class="fs-1">Book</span> <span class="fw-bold fs-1 text-white bg-black px-2">Now</span></span>
            </div>
            <?php

            $indate_timestamp = strtotime($indate);
            $outdate_timestamp = strtotime($outdate);

            $nights = ($outdate_timestamp - $indate_timestamp) / (60 * 60 * 24);

            $price1 = ($room["price"] * $nights * $qty);
            $price = number_format($price1, 2);

            ?>

            <div class="d-flex justify-content-center">
                <div class="row p-2 m-1 mt-4 align-items-center " style="background-color: #f0f9ff; width: 93%;">

                    <div class="col-12 col-md-2 ">
                        <img src="<?php echo $room["img"]; ?>" class="" width="100%" alt="Offer Image">
                    </div>
                    <div class="col-md-10 pt-2 row">
                        <p class="col-md-4 text5 fs-6 "><span class="fw-bold">Room Qty : <span id="qty"><?php echo $qty; ?></span></span></p>
                        <p class="col-md-6 text5 fs-6"><span class="fw-bold">Date : &nbsp</span><span id="indate"><?php echo $indate ?></span><span class="fw-bold"> to </span> <span id="outdate"><?php echo $outdate ?></span><span class="fw-bold"> &nbsp ( Night <span id="days"></span><?php echo $nights ?></span> ) </span></span></p>
                        <p class="col-md-4 text5 fs-6 "><span class="fw-bold">Room Type : </span><?php echo $room["room_name"]; ?></p>
                        <p class="col-md-4 text5 fs-6"><span class="fw-bold">Price : $</span><?php echo $room["price"]; ?></p>
                        <p class="col-md-6 text5 fs-6"><span class="fw-bold">Occupancy : </span><?php echo $room["occupancy"]; ?></p>
                    </div>

                </div>
            </div>



            <hr class="mx-5 mt-5">

            <div class="d-flex justify-content-center">

                <div class="col-12 row container-fluid px-2 py-4 px-md-5 py-md-4 ">
                    <div class="col-12 col-md-8 row " style="padding-right: 100px;">
                        <h2>Guest Information</h2>

                        <div class="col-12 col-md-6">
                            <p class="m-0 text5 fs-6 fw-bold">Name</p>
                            <input type="text" class=" col-md-12 p-2 rounded-1 m-0 border" id="name" disabled value="<?php echo $data["name"]; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="m-0  text5 fs-6 fw-bold">Mobile</p>
                            <input type="text" class="col-md-12 p-2 rounded-1 m-0 border" id="mobile" disabled value="<?php echo $data["mobile"]; ?>">
                        </div>
                        <div class="col-md-12">
                            <p class="m-0 text5 fs-6 fw-bold">Email</p>
                            <input type="text" id="email" class="col-md-12 p-2 rounded-1 border m-0 pointer" value="<?php echo $data["email"]; ?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="m-0  text5 fs-6 fw-bold">Address</p>
                            <input type="text" class="col-md-12 p-2 rounded-1 m-0 border" id="address">
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="m-0  text5 fs-6 fw-bold">City</p>
                            <select class="form-control" id="city">

                                <?php
                                $rs = Database::search("SELECT * FROM `city`");
                                $n = $rs->num_rows;

                                for ($x = 0; $x < $n; $x++) {
                                    $d = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo $d["id_city"]; ?>"><?php echo $d["name"]; ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 px-lg-4 mt-4 mt-lg-0 ">
                        <h2>Charges</h2>

                        <div class="row">
                            <p class="col-lg-6 m-0 mt-0 mt-md-4 text5 fs-6 fw-bold">Nights</p>
                            <p class="col-lg-6 text-lg-end m-0 mt-lg-4 text5 fs-6 " id="night"><?php echo $nights ?></p>
                        </div>
                        <div class="row">
                            <p class="col-lg-6 m-0 mt-0 mt-md-3 text5 fs-6 fw-bold">Room Qty</p>
                            <p class="col-lg-6 text-lg-end m-0 mt-lg-4 text5 fs-6 "><?php echo $qty ?></p>
                        </div>
                        <div class="row">
                            <p class="col-lg-6 m-0 mt-0 mt-md-3 text5 fs-6 fw-bold">Room Charges</p>
                            <p class="col-lg-6 text-lg-end m-0 mt-lg-4 text5 fs-6 ">USD <?php echo $price ?></p>
                        </div>
                        <?php
                        $serviceCharge = $price1 * 6 / 100;
                        $formattedServiceCharge = number_format($serviceCharge, 2);
                        ?>
                        <div class="row">
                            <p class="col-lg-6 m-0 mt-3 text5 fs-6 fw-bold">Service Charge and Tax <br> <span class="opacity-50 fs-6">(6% of room charge)</span></p>
                            <p class="col-lg-6 text-lg-end m-0 mt-lg-3 text5 fs-6 ">USD <?php echo $formattedServiceCharge; ?></p>
                        </div>
                        <hr>
                        <div class="row">
                            <?php
                            $totleCharge1 = $price1 + $serviceCharge;
                            $totleCharge = number_format($totleCharge1, 2);
                            ?>
                            <p class="col-lg-6 m-0 mt-1 text5 fs-6 fw-bold">Total Charges</p>
                            <p class="col-lg-6 text-lg-end m-0 mt-lg-3 text5 fs-6 ">USD <span id=""><?php echo $totleCharge; ?></span></p>
                        </div>
                        <p class="d-none" id="total"><?php echo $totleCharge1; ?></p>
                        <button class="border-0 col-12 p-2 fw-bold mt-3 fs-5" type="submit" style="background-color: #ca8a04;" onclick="payNow(<?php echo $rid; ?>);">PayNow</button>

                    </div>
                </div>
            </div>

            <hr class="mx-5 mt-5">

            <div class="col-12 container-fluid px-2 py-4 px-md-5 py-md-4 ">
                <h2>Points to note before payment,</h2>
                <ul>
                    <li>Double-check the payment amount to ensure that it is correct.</li>
                    <li>Verify that the recipient's information, such as their name, email address, or bank account details, is accurate.</li>
                    <li>This reservation is subject to the Terms & Conditions found here.</li>
                    <li>The personal data you provide will be used, disclosed and (where appropriate) transferred overseas in accordance with our Privacy Policy and Cookies Policy found.</li>
                    <li>In order to proceed with this reservation, please indicate your agreement to the Terms & Conditions and the Privacy Policy by clicking above.</li>
                </ul>
            </div>

            <hr class="mx-5">

        <?php
        } else {
        ?>

        <?php
        }
        include "footer.php";
        ?>

    <?php
    } else {
    ?>
        <div class=" d-flex justify-content-center">
            <div class="mt-5 border py-5 border-5">
                <div class="flex-column text-center px-5">
                    <h2 class="text5 fs-1 m-0 p-0 text-uppercase ">Please Login,<br> </h2>

                    <h2 class="fs-4 text5 m-0 p-0 ">you are not logged in yet</h2>
                    <a class="btn mt-4 p-1 btn-dark fs-5 text-center px-2 " style=" background-color: #172554;" href="signIn.php">SIGN IN</a>

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