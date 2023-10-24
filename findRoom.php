<?php

require "connection.php";

$indate = $_POST["indate"];
$outdate = $_POST["outdate"];
$qty = $_POST["qty"];

$room = Database::search("SELECT * FROM rooms WHERE room >= '".$qty."'");
$room_num = $room->num_rows;
for ($z = 0; $z < $room_num; $z++) {
    $room_data = $room->fetch_assoc();
?>

    <div class="bg-white mx-2 mt-4 mb-4" data-aos="zoom-in" data-aos-duration="2000">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-3">
                <img src="<?php echo $room_data["img"] ?>" class="w-100" alt="#">
            </div>
            <div class="col-12 col-lg-9 gap-0 p-4 p-lg-0">
                <h3 class="fs-3  mt-2 mb-0 mb-1 text-uppercase" style="color: #1e40af;"><?php echo $room_data["room_name"] ?></h3>
                <h5 class=" fs-5 text3 mt-2"></h5>
                <h6 class="text5" style="padding-right: 20px;">
                    <?php echo $room_data["description"] ?>
                </h6>
                <div class="row mt-0 p-0 ">
                    <div class="col-6">
                        <h5 class=" fs-5 text3">Size:</h5>
                        <p class="text5 "><?php echo $room_data["size"] ?></p>
                    </div>
                    <div class="col-6">
                        <h5 class=" fs-5 text3">Occupancy:
                        </h5>
                        <p class="text5 "><?php echo $room_data["occupancy"] ?></p>
                    </div>

                </div>

                <script>
                    var room_id = <?php echo $room_data["id"]; ?>;
                </script>

                <div class="row col-12 justify-content-center justify-content-lg-start">

                    <div class="col-6 col-lg-2 mx-0 text-center">
                        <p class="text5 fs-6 px-4 py-2 mx-0 " style="background-color: #dcfce7; color: #1e40af; border-radius: 5px;">Available&nbsp;<span class="fw-bold fs-5 "><?php echo $room_data["room"] ?></span></p>
                    </div>
                    <div class="col-6 col-lg-2 mx-0 text-center">
                        <p class="text5 fs-6 px-4 py-2  mx-0 " style="background-color: #e0f2fe; color: #1e40af; border-radius: 5px;">$&nbsp;<span class="fw-bold fs-5 pt-1"><?php echo $room_data["price"] ?></span></p>
                    </div>

                    <div class="col-6 col-lg-3 mx-0">
                        <a class="justify-content-center text-white fw-bold btn mb-2 mx-0 px-2 py-1 px-md-5 fs-5" style="background-color: #1e40af; border-radius: 5px;" onclick="redirectToNextPage(<?php echo $room_data['id']; ?>);">Book Now</a>
                    </div>
                </div>



            </div>
        </div>

    </div>
<?php
}
?>


