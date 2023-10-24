<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignIn</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #111827;">

    <div class="">
        <div class="mt-3 text-white">
            <div class="col-12 row justify-content-center py-0"> <img src="../hotel_project/images/logo2.png" class=" d-none d-sm-block w2" data-aos="flip-left" data-aos-duration="2000" alt="..."> </div>
            <h1 class="text-center col-12">Welcome Ritz-Carlton Admin </h1>
        </div>

        <div class="col-12 justify-content-center d-flex text-white">
            <div class="d-grid  div7 ">
                <div class="col-12 ">
                    <h1 class="text3 fs-3 text-center">Sign In to your Account</h1>
                    <label class="form-label mt-3">Email :</label>
                    <input type="email" class="form-control" placeholder="Enter you'r email" id="e" />
                </div>
                <div class=" row mt-2 ">
                    <div class="col-12 col-lg-6 d-grid">
                        <button class="btn btn2 text-white" onclick="adminVerification();">Send Verify Code</button>
                    </div>
                    <div class="col-12 col-lg-6 d-grid ">
                        <button class="btn btn3"> <a class="text-white nav-link" href="signIn.php">Costomer Login Page</a> </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal " tabindex="-1" id="verificationModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Admin Verification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label class="form-label">Enter Your Verification Code</label>
                        <input type="text" class="form-control" id="vcode">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="verify();">Verify</button>
                    </div>
                </div>
            </div>
        </div>



    </div>





    <script src="script.js"></script>
    <script src="bootstrap.js"></script>

</body>

</html>