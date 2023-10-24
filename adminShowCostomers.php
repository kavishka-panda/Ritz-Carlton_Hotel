<div class="d-inline-flex justify-content-center align-items-center mt-3">
    <img src="../hotel_project/images/logo2.png" width="4%" class="mx-2" alt="..." data-aos="flip-left" data-aos-duration="2000">
    <span class="fs-1 text5 fw-bold text-uppercase"><span class="fs-1">Costomer</span> <span class="fw-bold fs-1 text-white bg-black px-2">list</span></span>
</div>

<?php
require "connection.php";

$room = Database::search("SELECT * FROM user;");

$room_num = $room->num_rows;
for ($z = 0; $z < $room_num; $z++) {
    $user = $room->fetch_assoc();

    if ($user["id"] > 0) {



?>


        <div class="d-flex justify-content-center">
            <div class="row p-2 m-1 mt-4 align-items-center " style=" width: 93%;">

                <div class="col-md-12 pt-2 row border border-primary border-opacity-25">
                    <p class="col-md-3 text5 fs-6 text-danger "><span class="fw-bold">User ID : <?php echo $user["id"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Name : <?php echo $user["name"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6 "><span class="">Mobile : <?php echo $user["mobile"]; ?></span></p>
                    <p class="col-md-3 text5 fs-6"><span class="">Email : <?php echo $user["email"]; ?></span></p>
                </div>

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