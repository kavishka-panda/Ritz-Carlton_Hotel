<div class="d-inline-flex justify-content-center align-items-center mt-3">
    <img src="../hotel_project/images/logo2.png" width="4%" class="mx-2" alt="..." data-aos="flip-left" data-aos-duration="2000">
    <span class="fs-1 text5 fw-bold text-uppercase"><span class="fs-1">Booking</span> <span class="fw-bold fs-1 text-white bg-black px-2">Rooms</span></span>
</div>

<?php
require "connection.php";

$room = Database::search("SELECT * FROM invoice;");

$room_num = $room->num_rows;
for ($z = 0; $z < $room_num; $z++) {
    $invoice = $room->fetch_assoc();

    if ($invoice["id"] > 0) {



?>


        <div class="d-flex justify-content-center">
            <div class="row p-2 m-1 mt-4 align-items-center " style=" width: 93%;">

                <div class="col-md-12 pt-2 row border border-primary border-opacity-25">
                    <p class="col-md-3 text5 fs-6 text-danger "><span class="fw-bold">Invoice ID : <?php echo $invoice["id"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Date : <?php echo $invoice["in_date"]; ?> to <?php echo $invoice["out_date"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6 "><span class="">Room ID : <?php echo $invoice["rooms_id"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Price : <?php echo $invoice["total"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Night : <?php echo $invoice["night"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Qty : <?php echo $invoice["qty"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Booking Time : <?php echo $invoice["booking_time"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Booking ID : <?php echo $invoice["booking_id"]; ?></span></p>
                </div>

            </div>
        </div>



    <?php
    } else {
    ?>

        <h1>Offer Not Available</h1>

    <?php
    }
    ?>

<?php
}
?>