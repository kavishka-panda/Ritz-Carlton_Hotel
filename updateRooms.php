<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rooms</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../hotel_project/images/logo2.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
<h1 class="text-center my-3 text-uppercase">Update <span class="bg-black text-white fw-bold px-3">room</span></h1>
    <div class="col-12 d-none" id="msgdiv2">
        <div class="alert alert-danger text-center fw-bold" role="alert" id="msg2"></div>
    </div>
    <div class="col-12 d-none align-items-center row " id="donediv">
        <div class="alert alert-success text-center fw-bold position-relative" role="alert" id="done"></div>
    </div>

    <?php
    require "connection.php";

    $id = $_GET['id'];
    $room = Database::search("SELECT * FROM rooms WHERE id = $id");
    if (mysqli_num_rows($room) > 0) {
        $row = $room->fetch_assoc();
    ?>

        <div class="row p-4 rounded border-3 border m-1">

            <div class="col-12 col-lg-6 mb-4">
                <label class="form-label fw-bold">Room Name</label>
                <input type="text" class="form-control" id="name" value="<?php echo $row['room_name']; ?>" placeholder="Must be less than 50 characters.">
            </div>
            <div class="col-12 col-lg-3 mb-4">
                <label class="form-label fw-bold">Price</label>
                <div class="input-group">
                    <span class="input-group-text ">USD</span>
                    <input type="text" id="price" class="form-control" value="<?php echo $row['price']; ?>" placeholder="0000.00">
                </div>
            </div>
            <div class="col-12 col-lg-3 mb-4">
            <label class="form-label fw-bold">QTY</label>
            <input type="text" id="qty" class="form-control" value="<?php echo $row['room']; ?>">
        </div>
            <div class="col-12 col-lg-6 mt-4">
                <label class="form-label fw-bold">Description</label>
                <textarea cols="20" rows="5" id="description" class="form-control"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="col-12 col-lg-6 mt-4">
                <label class="form-label fw-bold">Room Size</label>
                <textarea cols="20" rows="5" id="size" class="form-control" placeholder="Must be less than 150 characters."><?php echo $row['size']; ?></textarea>
            </div>

            <div class="col-12 col-lg-6 mt-4 ">
                <label class="form-label fw-bold col-12">Add Room Images</label>
                <div class="row col-12">
                    <img src="<?php echo $row['img']; ?>" class="img-fluid my-3 col-12 col-lg-6" style="width: 200px;" id="i0" />
                    <p class="col-12 col-lg-6 mt-3">&starf; Recommended to include only <span class="fw-bold">16:9 / width:1920 height:1280</span> photos for a high quality finish. <br>&starf; Only <span class="fw-bold">One(01)</span> photo can be added.</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <input type="file" class="d-none" id="imageuploader" multiple />
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4">
                <label class="form-label fw-bold">Occupancy</label>
                <textarea cols="20" rows="5" id="occupancy" class="form-control" placeholder="Must be less than 150 characters."><?php echo $row['occupancy']; ?></textarea>
            </div>
            <div class="col-12   mt-3 mb-3 d-inline-flex justify-content-center">

                <label for="imageuploader" class="col-5  btn btn-primary mx-2 fw-bold" onclick="changeProductImage();">Upload Images</label>
                <input type="hidden" id="room_id" value="<?php echo $id; ?>">
                <button class="btn btn-info col-5 text-white mx-2 fw-bold" style="background-color:#0f4c81" onclick="updateRoom();">Update Room</button>
            </div>
        </div>

    <?php
    } else {
    ?>

        <h1>Offer Not Available</h1>

    <?php
    }
    ?>




    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>