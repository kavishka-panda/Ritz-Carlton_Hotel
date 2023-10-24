<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="col-12 animated-text3 bg-white">
    <nav class="navbar navbar-expand-lg bg-body-tertiary header ">
      <div class="container">
        <img src="../hotel_project/images/logo2.png" width="60px" class="px-2" alt="...">
        <a class="navbar-brand name" href="home.php">Ritz-Carlton</a>
        <button class="navbar-toggler justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav  text-center">
          <?php
          session_start();
          if (isset($_SESSION["u"])) {
              $data = $_SESSION["u"];
           

            ?>

            <span class="nav-link text-center text3  " ><b>Hello! </b><span class="text-uppercase"><?php echo $data["name"]; ?></span></span> 
            <?php
             }
              ?>
          <a class="nav-link fw-bold text3" aria-current="page" href="home.php">Home</a>
            <a class="nav-link fw-bold text3" href="about.php">About Us</a>

            <?php

            

            if (isset($_SESSION["u"])) {
              $data = $_SESSION["u"];
           

            ?>

            <!-- <span class="nav-link text-center text3  " ><b>Hello! </b><span class="text-uppercase"><?php echo $data["name"]; ?></span></span>  -->
            
            <span class="nav-link text3 fw-bold signout" onclick="signout();"> Sign Out</span> 

            <?php
             }else{
              ?>
              <a class="nav-link fw-bold text3" href="signIn.php">SignIn</a>
              <?php
             }
             ?>


           
            <button type="button" class="w-auto fw-bold text3 p-0 bookbtn px-2"> <a class="nav-link text-white " href="booking.php">Booking</a> </button>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <script src="script.js"></script>
  <script src="bootstrap.js"></script>

</body>

</html>