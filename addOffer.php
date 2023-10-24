<?php
session_start();


if (isset($_SESSION["au"])) {

?>
    
        <div class="d-inline-flex justify-content-center align-items-center mt-3">
            <img src="../hotel_project/images/logo2.png" width="4%" class="mx-2" alt="..." data-aos="flip-left" data-aos-duration="2000" >
            <span class="fs-1 text5 fw-bold text-uppercase"><span class="fs-1">Add New</span> <span class="fw-bold fs-1 text-white bg-black px-2">Offers</span></span>
        </div>


        <div class="row p-4 rounded border border-primary border-opacity-25 m-1">
            <div class="col-12 d-none" id="msgdiv">
                <div class="alert alert-danger " role="alert" id="msg"></div>
            </div>
            <div class="col-12 col-lg-6 mb-4">
                <label class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Must be less than 50 characters.">

            </div>
            <div class="col-12 col-lg-6 mb-4">
                <label class="form-label fw-bold">Price</label>
                <div class="input-group">
                    <span class="input-group-text ">From USD</span>
                    <input type="text" id="price" class="form-control" placeholder="0000.00">
                    <span class="input-group-text ">Average Per Night</span>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4">
                <label class="form-label fw-bold">Description</label>
                <textarea cols="30" rows="10" id="des" class="form-control"></textarea>
            </div>
            <div class="col-12 col-lg-6 mt-4 ">
                <label class="form-label fw-bold col-12">Add Offer Images</label>
                <div class="row col-12">
                    <img src="images/cloud-library.png" class="img-fluid my-3 col-12 col-lg-6" style="width: 200px;" id="i0" />
                    <p class="col-12 col-lg-6 mt-3">&starf; Recommended to include only <span class="fw-bold">width:1920 height:1280</span> photos for a high quality finish. <br>&starf; Only <span class="fw-bold">One(01)</span> photo can be added.</p>
                </div>
                <div class="col-12 col-lg-6 ">
                    <input type="file" class="d-none" id="imageuploader" multiple />
                    <label for="imageuploader" class="col-12 btn btn-dark" onclick="changeProductImage();">Upload Images</label>
                </div>
            </div>
            <div class="col-12 col-lg-6  d-grid mt-3 mb-3">
                <button class="btn btn-info" onclick="addOffer();">Add Offer</button>
            </div>
        </div>

        <?php
        
        require "connection.php";

        $card = Database::search("SELECT * FROM offers;");

        $card_num = $card->num_rows;
        for ($z = 0; $z < $card_num; $z++) {
            $card_data = $card->fetch_assoc();

            if ($card_data["id"] > 0) {
        ?>

                <div class="row p-2 border border-primary border-opacity-25 m-1 mt-4 align-items-center">

                    <div class="col-12 col-lg-2">
                        <img src="<?php echo $card_data["img"]; ?>" class="" width="180px" alt="Offer Image">
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="col-12 text5 fs-6 fw-bold"><?php echo $card_data["title"]; ?></p>
                        <p class="col-12 text5 fs-6"><?php echo $card_data["description"]; ?></p>
                        <p class="col-12 text5 fs-6"><span>USD </span><?php echo $card_data["price"]; ?></p>
                    </div>

                    <div class="col-12 col-lg-2">
                        <button type="button" class="btn btn-outline-danger textw text-white fw-bold px-5 w-100" onclick='removeOffer(<?php echo $card_data["id"]; ?>);'>Delete</button>
                        <button type="button" class="btn btn-outline-success text-white fw-bold px-5 w-100 mt-2 " onclick='window.location.href = "updateOffer.php?id=<?php echo $card_data["id"]; ?>";'>Update</button>
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