<?php
session_start();


if (isset($_SESSION["au"])) {

?>

    <div class="d-inline-flex justify-content-center align-items-center mt-3">
        <img src="../hotel_project/images/logo2.png" width="4%" class="mx-2" alt="..." data-aos="flip-left" data-aos-duration="2000">
        <span class="fs-1 text5 fw-bold text-uppercase"><span class="fs-1">Add New</span> <span class="fw-bold fs-1 text-white bg-black px-2">Rooms</span></span>
    </div>


    <div class="row p-4 rounded border-primary border-opacity-25 border m-1">
        <div class="col-12 d-none" id="msgdiv">
            <div class="alert alert-danger " role="alert" id="msg"></div>
        </div>
        <div class="col-12 col-lg-6 mb-4">
            <label class="form-label fw-bold">Room Name</label>
            <input type="text" class="form-control" id="name" placeholder="Must be less than 50 characters.">
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <label class="form-label fw-bold">Price</label>
            <div class="input-group">
                <span class="input-group-text ">USD</span>
                <input type="text" id="price" class="form-control" placeholder="0000.00">
            </div>
        </div>
        <div class="col-12 col-lg-3 mb-4">
            <label class="form-label fw-bold">QTY</label>
            <input type="text" id="qty" class="form-control" placeholder="">
        </div>
        <div class="col-12 col-lg-6 mt-4">
            <label class="form-label fw-bold">Description</label>
            <textarea cols="20" rows="5" id="description" class="form-control"></textarea>
        </div>
        <div class="col-12 col-lg-6 mt-4">
            <label class="form-label fw-bold">Room Size</label>
            <textarea cols="20" rows="5" id="size" class="form-control" placeholder="Must be less than 150 characters."></textarea>
        </div>

        <div class="col-12 col-lg-6 mt-4 ">
            <label class="form-label fw-bold col-12">Add Room Images</label>
            <div class="row col-12">
                <img src="images/cloud-library.png" class="img-fluid my-3 col-12 col-lg-6" style="width: 200px;" id="i0" />
                <p class="col-12 col-lg-6 mt-3">&starf; Recommended to include only <span class="fw-bold">16:9 / width:1920 height:1280</span> photos for a high quality finish. <br>&starf; Only <span class="fw-bold">One(01)</span> photo can be added.</p>
            </div>
            <div class="col-12 col-lg-6 ">
                <input type="file" class="d-none" id="imageuploader" multiple />
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-4">
            <label class="form-label fw-bold">Occupancy</label>
            <textarea cols="20" rows="5" id="occupancy" class="form-control" placeholder="Must be less than 150 characters."></textarea>
        </div>
        <div class="col-12   mt-3 mb-3 d-inline-flex justify-content-center">
            <label for="imageuploader" class="col-5  btn btn-dark mx-2 fw-bold" onclick="changeProductImage();">Upload Images</label>
            <button class="btn btn-info col-5 text-white mx-2 fw-bold" style="background-color:#0f4c81" onclick="addRooms();">Add Offer</button>
        </div>
    </div>

    <?php
    require "connection.php";

    $room = Database::search("SELECT * FROM rooms;");

    $room_num = $room->num_rows;
    for ($z = 0; $z < $room_num; $z++) {
        $room_data = $room->fetch_assoc();

        if ($room_data["id"] > 0) {
    ?>

            <div class="row p-2 rounded border-primary border-opacity-25 border m-1 mt-4 mb-5 align-items-center">
                <div class="col-12 col-lg-3">
                    <img src="<?php echo $room_data["img"]; ?>" class="" width="280px" alt="Offer Image">
                </div>
                <div class="col-12 col-lg-7">
                    <p class="col-12 text5 fs-5 fw-bold text-uppercase"><?php echo $room_data["room_name"]; ?></p>
                    <p class="col-12 text5 fs-6 my-0"><span class="fw-bold">Description: </span><?php echo $room_data["description"]; ?></p>
                    <p class="col-12 text5 fs-6 my-0"><span class="fw-bold">Size: </span><?php echo $room_data["size"]; ?></p>
                    <p class="col-12 text5 fs-6 my-0"><span class="fw-bold">Occupancy: </span><?php echo $room_data["occupancy"]; ?></p>
                    <p class="col-12 text5 fs-6 my-0"><span class="fw-bold">Price: </span><span class="fw-bold">USD </span><?php echo $room_data["price"]; ?></p>
                    <p class="col-12 text5 fs-6 my-0"><span class="fw-bold">Available: </span><span class="fw-bold"></span><?php echo $room_data["room"]; ?></p>
                </div>
                <div class="col-12 col-lg-2">
                    <button type="button" class="btn btn-outline-danger text-white fw-bold px-5 w-100" onclick='removeRoom(<?php echo $room_data["id"]; ?>);'>Delete</button>
                    <button type="button" class="btn btn-outline-success text-white fw-bold px-5 w-100 mt-2" onclick='window.location.href = "updateRooms.php?id=<?php echo $room_data["id"]; ?>";'>Update</button>
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


<?php
} else {
    echo ("You'r not valid admin");
}
?>