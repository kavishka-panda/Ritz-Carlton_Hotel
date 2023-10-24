<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ritz-Carlton Hotel</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="images/logo2.png">
</head>

<body class="">
    <!-- <div id="preloader" ></div> -->

    <div class="preloader" id="preloader">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
        </div>
        <p class="loading-text">Wait for loading...</p>
    </div>

    <div class="">
        <?php include "header.php"; ?>
    </div>

    <div class="d-block d-sm-none position-relative">
        <img src="images/photo7.jpg" class="w-100 mb-3" alt="...">
        <img src="images/logo2.png" class="position-absolute top-40 start-50 translate-middle w-50 " alt="...">
        <!-- <h1 class="name2 text-white position-absolute w-100 justify-content-center top-70 start-40">Ritz-Carlton</h1> -->
    </div>

    <div class="position-relative ">
        <!-- The video -->
        <video autoplay muted loop id="myVideo" class="d-none d-sm-block">
            <source src=".//videos/v2.mp4" class="" type="video/mp4">
        </video>

        <!-- Optional: some overlay text to describe the video -->

        <div class="content d-none d-sm-block">
            <div class="d-flex flex-column align-items-center justify-content-start ">
                <h1 class="text-center text-white fw-bold carousel-text  d-none d-md-block">Welcome <span style=" font-weight: bold;" class="namef ">Ritz-Carlton Hotel.</span></h1>

                <p class="text-white py-0 pb-2 fs-6 d-none d-md-block p1">We are ready to provide excellent service for you. Come enjoy our service for free.</p>

                <button type="button" class="btn btn-outline-info text-white px-5 animated-text text-uppercase animated-text2 "><a class="text-white nav-link" href="booking.php">Booking Now</a></button>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="col-12 text-center row d-flex justify-content-center  mt-4">

            <div class="col-12   col-md-4">
                <div class="col-12 ">
                    <img src=".//icon/support.gif" width="110px" alt="#">
                </div>
                <div class="col-12 p-0 text-center my-2" data-aos="zoom-in" data-aos-duration="2000">
                    <h5 class="m-0 p-0">Customer Service Excellence.</h5>
                </div>
            </div>
            <div class="col-12  col-md-4">
                <div class="col-12 ">
                    <img src=".//icon/location.gif" width="110px" alt="#">
                </div>
                <div class="col-12 p-0 text-center my-2 " data-aos="zoom-in" data-aos-duration="2000">
                    <h5 class="m-0 p-0">A Convenient Place For You.</h5>
                </div>
            </div>
            <div class="col-12  col-md-4">
                <div class="col-12 ">
                    <img src=".//icon/verified.gif" width="110px" alt="#">
                </div>
                <div class="col-12 p-0 text-center my-2 " data-aos="zoom-in" data-aos-duration="2000">
                    <h5 class="m-0 p-0">Verified and Trusted.</h5>
                </div>
            </div>
        </div>

        <!-- Image1 -->

        <div class="col-12 px-lg-5 px-md-5 px-sm-auto div3">
            <div class="row second p-4 align-items-center ">

                <div class="col-12  col-md-6 px-5 justify-content-md-end d-flex" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="images/foods.jpg" alt="#" class="img-fluid" width="300" height="100">
                </div>

                <div class="col-12 col-md-6 text-center text-md-start  py-sm-4 " >
                    <p class="text-uppercase text1" data-aos="zoom-in" data-aos-duration="1000">The Ultimate Dining Experience</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">The Ritz-Carlton Hotel is home to some of the best dining in Las Vegas. From world-renowned chefs to award-winning restaurants, there’s something for everyone.</p>
                </div>
            </div>
        </div>
        <!-- Image1 -->

        <!-- Image2 -->
        <div class="col-12 px-lg-5 px-md-5 px-sm-auto">
            <div class="row second p-4 align-items-center ">

                <div class="col-12 col-md-6 text-center text-md-end  d-none d-sm-block" >
                    <p class="text1 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">The SPA At Ritz-Carlton</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">The Ritz-Carlton Spa is the ultimate destination for luxury and wellness. Our spa spans over 15,000 square feet and features three levels of relaxation, including 15 treatment sanctuaries, a full-service salon, a world-class fitness center, and a Zen Studio for yoga, meditation, and retreats. Whether you're seeking a rejuvenating massage, a soothing facial, or simply some time to unwind in our stunning hammam, we have everything you need to escape the everyday and indulge in some well-deserved pampering. Our skilled therapists will customize each treatment to your individual needs, ensuring that you leave feeling refreshed, relaxed, and utterly spoiled.</p>
                </div>

                <div class="col-12  col-md-6  px-5  justify-content-md-start d-flex  " data-aos="zoom-in" data-aos-duration="1000">
                    <img src="images/spa.jpg" alt="#" class="img-fluid" width="300" height="100">
                </div>

                <div class="col-12 col-md-6 text-center text-md-end  d-block d-sm-none " >
                    <p class="text1 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">THE SPA AT Ritz-Carlton</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">The Ritz-Carlton Spa is the ultimate destination for luxury and wellness. Our spa spans over 15,000 square feet and features three levels of relaxation, including 15 treatment sanctuaries, a full-service salon, a world-class fitness center, and a Zen Studio for yoga, meditation, and retreats. Whether you're seeking a rejuvenating massage, a soothing facial, or simply some time to unwind in our stunning hammam, we have everything you need to escape the everyday and indulge in some well-deserved pampering. Our skilled therapists will customize each treatment to your individual needs, ensuring that you leave feeling refreshed, relaxed, and utterly spoiled.</p>
                </div>
            </div>
        </div>
        <!-- Image2 -->

        <!-- Image3 -->

        <div class="col-12 px-lg-5 px-md-5 px-sm-auto">
            <div class="row second p-4 align-items-center ">

                <div class="col-12  col-md-6 px-5 justify-content-md-end d-flex " data-aos="zoom-in" data-aos-duration="1000">
                    <img src="images/photo4.jpg" alt="#" class="img-fluid" width="300" height="100">
                </div>

                <div class="col-12 col-md-6 text-center text-md-start  py-sm-4 " >
                    <p class="text1 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">CLUB ESCAPE</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">Experience the ultimate indulgence at The Ritz-Carlton, Millenia Singapore, where you can treat yourself to an unparalleled stay in one of our luxurious Club rooms. Immerse yourself in a world of opulence and sophistication, where every detail has been carefully crafted to ensure your comfort and satisfaction. From the plush bedding and elegant furnishings to the breathtaking views of the city skyline, our Club rooms offer a truly indulgent escape.</p>
                </div>
            </div>
        </div>
        <!-- Image3 -->

        <!-- Image4 -->
        <div class="col-12 px-lg-5 px-md-5 px-sm-auto">
            <div class="row second p-4 align-items-center ">

                <div class="col-12 col-md-6 text-center text-md-end  d-none d-sm-block" >
                    <p class="text1 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">SOCIAL CELEBRATIONS</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">Let us take care of your special occasions and create unforgettable memories for you and your loved ones. Our team will handle all the details, so you can relax and enjoy a hassle-free celebration. From birthdays and anniversaries to weddings and family reunions, we'll ensure that every moment is filled with joy and happiness. Our goal is to create an experience that will be cherished for a lifetime, with personalized touches that reflect your unique style and preferences. So why stress over the details when you can leave it to us? Let us host your next celebration and make it a truly unforgettable experience.</p>
                </div>

                <div class="col-12  col-md-6  px-5  justify-content-md-start d-flex  " data-aos="zoom-in" data-aos-duration="1000">
                    <img src="images/photo5.jpg" alt="#" class="img-fluid" width="300" height="100">
                </div>

                <div class="col-12 col-md-6 text-center text-md-end  d-block d-sm-none ">
                    <p class="text1 text-uppercase"  data-aos="zoom-in" data-aos-duration="1000">SOCIAL CELEBRATIONS</p>
                    <p class="text2"  data-aos="zoom-in" data-aos-duration="2000">Let us take care of your special occasions and create unforgettable memories for you and your loved ones. Our team will handle all the details, so you can relax and enjoy a hassle-free celebration. From birthdays and anniversaries to weddings and family reunions, we'll ensure that every moment is filled with joy and happiness. Our goal is to create an experience that will be cherished for a lifetime, with personalized touches that reflect your unique style and preferences. So why stress over the details when you can leave it to us? Let us host your next celebration and make it a truly unforgettable experience.</p>
                </div>
            </div>
        </div>
        <!-- Image4 -->

        <!-- Image5 -->

        <div class="col-12 px-lg-5 px-md-5 px-sm-auto">
            <div class="row second p-4 align-items-center ">

                <div class="col-12  col-md-6 px-5 justify-content-md-end d-flex " data-aos="zoom-in" data-aos-duration="1000">
                    <img src="images/photo6.jpg" alt="#" class="img-fluid" width="300" height="100">
                </div>

                <div class="col-12 col-md-6 text-center text-md-start  py-sm-4 " >
                    <p class="text1 text-uppercase" data-aos="zoom-in" data-aos-duration="1000">Weddings</p>
                    <p class="text2" data-aos="zoom-in" data-aos-duration="2000">
                        The Ritz-Carlton Hotel is the perfect venue for your dream wedding. Our luxurious hotel offers elegant ballrooms and breathtaking views of the city, accommodating up to 300 guests. Our experienced wedding planners will work with you to create a personalized wedding package that meets your every need, from the ceremony to the reception. Let us help you create the wedding of your dreams at The Ritz-Carlton Hotel. Contact us today to learn more about our wedding packages and to schedule a tour of our beautiful hotel.</p>
                </div>
            </div>
        </div>
        <!-- Image5 -->


        <div class="row gap-md-5 gap-sm-5 d-flex justify-content-center my-5 div5">


            <h1 class="text1 fs-1 text-center ">Of<span class="thick">fers </span></h1>



            <?php
            require "connection.php";

            $card = Database::search("SELECT * FROM offers;");

            $card_num = $card->num_rows;
            for ($z = 0; $z < $card_num; $z++) {
                $card_data = $card->fetch_assoc();

                if ($card_data["id"] > 0) {
            ?>



                    <div class="col-10 col-md-3 text-center card1 my-3" data-aos="zoom-in" data-aos-duration="1000">


                        <img src="<?php echo $card_data["img"]; ?>" class="my-2  card-img1" alt="">

                        <p class="text-center fs-5 text3 color1"><?php echo $card_data["title"]; ?></p>
                        <p class="text-center text5 hset1"><?php echo $card_data["description"]; ?></p>
                        <p class="text-center text3">From <span class="fw-bold">USD <?php echo $card_data["price"]; ?></span> Average Per Night</p>
                        <button type="button" class="btn btn-outline-info px-5 get">Get Offer</button>

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
        </div>

        <div class="col-12">
            <div class="row align-items-center ">
                <div class="col-12 col-lg-4 text-center text-md-end px-5">
                    <div class="justify-content-center ">
                        <h4 class="text1 text-uppercase">Destination</h4>
                        <p class="text2">You can contact our transport service through <span class="fw-bold fs-6">+0248 513 821</span>. Our aim is to provide convenient and safe service.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-8 justify-content-end d-flex mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985070.0966956787!2d79.45357312246158!3d6.928442894808347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bdb2b0473d7%3A0x25dd59a03ad76bb4!2sColombo%2004%2C%20Colombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2ssg!4v1682943247722!5m2!1sen!2ssg" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <hr>
    </div>
    <div class="col-12">
        <?php include "footer.php"; ?>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>