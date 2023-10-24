<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Booking</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="../hotel_project/images/logo2.png">
</head>

<body class="bookignbg">

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

    <?php include "header.php"; ?>

    <div class="container-fluid">

        <div class="  bg-white mx-2 mt-4 mb-4 ">
            <div class=" row  d-flex justify-content-center py-5 justify-content-sm-center">
                <h1 class="text-center text3 fs-1  mb-5 text-uppercase" style="color: #0c4a6e;">Book A Room</h1>
                <div class=" col-5 col-lg-2">
                    <h5>Check-in date</h5>
                    <input type="date" id="indate">
                </div>
                <div class="col-5 col-lg-2">
                    <h5>Check-out date</h5>
                    <input type="date" id="outdate">
                </div>

                <div class="col-10 col-lg-2">
                    <h5>Members</h5>
                    <select class="form-select form-select-sm " aria-label=".form-select-sm example">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                        <option value="1">7</option>
                        <option value="2">8</option>
                        <option value="3">9</option>
                    </select>
                </div>
                <div class="col-10 col-lg-2">
                    <h5>Rooms</h5>
                    <select class="form-select form-select-sm " aria-label=".form-select-sm example" id="qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-12 col-lg-2 text-center">
                    <button type="button" class="btn btn-outline-info text-uppercase col-10  mt-3" onclick="find();">Find Rooms</button>
                </div>
            </div>

        </div>

        <div id="view_area">
            <div class="pbc col-12 justify-content-center ">
                <div class="offset-5 col-2 mt-5 text-center">
                    <span class="fw-bold text-black-50"><i class="bi bi-search" style="font-size:100px ;"></i></span>
                </div>
                <div class="offset-3 col-6 mt-3 mb-5 text-center">
                    <span class="h1 text-black-50 fw-bold">No Room Searched Yet...</span>
                </div>
            </div>
        </div>

    </div>


    <div class="">
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