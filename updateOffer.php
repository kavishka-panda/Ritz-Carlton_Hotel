<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer Update</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../hotel_project/images/logo2.png">
</head>

<body>
    <h1 class="text-center my-3 text-uppercase">Update <span class="bg-black text-white fw-bold px-3">Offer</span></h1>

    <?php
    require "connection.php";

    $id = $_GET['id'];
    $offer = Database::search("SELECT * FROM offers WHERE id = $id");
    if (mysqli_num_rows($offer) > 0) {
        $row = $offer->fetch_assoc();
    ?>

        <div class="row p-4 rounded border-3 border m-1">
            <div class="col-12 d-none" id="msgdiv">
                <div class="alert alert-danger " role="alert" id="msg"></div>
            </div>
            <div class="col-12 col-lg-6 mb-4">
                <label class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="title" value="<?php echo $row['title']; ?>" placeholder="Must be less than 50 characters.">

            </div>
            <div class="col-12 col-lg-6 mb-4">
                <label class="form-label fw-bold">Price</label>
                <div class="input-group">
                    <span class="input-group-text ">From USD</span>
                    <input type="text" id="price" class="form-control" placeholder="0000.00" value="<?php echo $row['price']; ?>">
                    <span class="input-group-text ">Average Per Night</span>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4">
                <label class="form-label fw-bold">Description</label>
                <textarea cols="30" rows="10" id="des" class="form-control"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="col-12 col-lg-6 mt-4 ">
                <label class="form-label fw-bold col-12">Add Offer Images</label>
                <div class="row col-12">
                    <img src="<?php echo $row['img']; ?>" class="img-fluid my-3 col-12 col-lg-6" style="width: 200px;" id="i0" />
                    <p class="col-12 col-lg-6 mt-3">&starf; Recommended to include only <span class="fw-bold">width:1920 height:1280</span> photos for a high quality finish. <br>&starf; Only <span class="fw-bold">One(01)</span> photo can be added.</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <input type="file" class="d-none" id="imageuploader" multiple />
                    <label for="imageuploader" class="col-12 btn btn-primary" onclick="changeProductImage();">Upload Images</label>
                </div>
            </div>
            <input type="hidden" id="offer_id" value="<?php echo $id; ?>">
            <div class="col-12 col-lg-6  d-grid mt-3 mb-3">
                <button class="btn btn-info" onclick="updateOffer();">Update Offer</button>
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