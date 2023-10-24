<?php
session_start();
require "connection.php";

if (isset($_SESSION["au"])) {

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="../hotel_project/images/logo2.png">
    </head>

    <body class="text-white container-fluid" style="background-color: #111827;">



        <div class="row align-items-center container-fluid mt-3">
            <div class="col-12 col-lg-3">
                <div class="row bg-dark">
                    <div class="row g-1 text-center">
                        <div class="col-12 p-4">
                            <h4 class="text-white"> <?php echo $_SESSION["au"]["fname"] . " " . $_SESSION["au"]["lname"]; ?></h4>
                            <button type="button" class="btn btn3 text-white px-5" onclick="signout2();">SignOut</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-12 col-lg-9 p-4 d-inline justify-content-end">
                <div class="d-flex justify-content-center row gap-5 ">
                    <button type="button" class="btn btn2 col-lg-2 col-12 text-white p-3" onclick="adminaddRooms();">Add Rooms</button>
                    <button type="button" class="btn btn2 col-lg-2 col-12 text-white p-3" onclick="adminaddoffer();">Add Offer</button>
                    <button type="button" class="btn btn2 col-lg-2 col-12 text-white p-3" onclick="adminbooking();">View Booking</button>
                    <button type="button" class="btn btn2 col-lg-2 col-12 text-white p-3" onclick="admincostomers();">Costomer Info</button>
                </div>
            </div>

            <div id="booking">
                <div class=" col-12  mt-5">
                    <div class="text-start">
                        <h1 class="text-start mx-3">Admin Panel Instructions</h1>

                        <ol>
                            <li>Login to the admin panel using the provided username and password.</li>

                            <li>Once logged in, you will be redirected to the dashboard.</li>

                            <li>From the dashboard, you can perform the following tasks:</li>

                            <ol>
                                <li>Add, edit, or remove hotel listings:</li>

                                <ul>
                                    <li>Navigate to the "Hotel Listings" section.</li>
                                    <li>To add a new hotel listing, click on the "Add New Hotel" button and fill in the required information in the form.</li>
                                    <li>To edit an existing hotel listing, find the desired listing in the table and click on the "Edit" button.</li>
                                    <li>To remove a hotel listing, find the desired listing in the table and click on the "Remove" button.</li>
                                </ul>

                                <li>Manage reservations:</li>

                                <ul>
                                    <li>Navigate to the "Reservations" section.</li>
                                    <li>To view all reservations, browse the reservation list.</li>
                                    <li>To modify a reservation, click on the "Edit" button next to the respective reservation.</li>
                                    <li>To cancel a reservation, click on the "Cancel" button next to the respective reservation.</li>
                                </ul>

                                <li>Review customer feedback:</li>

                                <ul>
                                    <li>Navigate to the "Feedback" section.</li>
                                    <li>View and respond to customer feedback messages.</li>
                                </ul>

                                <li>Manage user accounts:</li>

                                <ul>
                                    <li>Navigate to the "User Accounts" section.</li>
                                    <li>To add a new user account, click on the "Add New User" button and fill in the required information in the form.</li>
                                    <li>To edit an existing user account, find the desired account in the table and click on the "Edit" button.</li>
                                    <li>To remove a user account, find the desired account in the table and click on the "Remove" button.</li>
                                </ul>

                                <li>Customize website settings:</li>

                                <ul>
                                    <li>Navigate to the "Settings" section.</li>
                                    <li>Update website settings such as logo, colors, contact information, etc.</li>
                                </ul>
                            </ol>
                        </ol>
                        <hr class="mt-5">
                    </div>
                </div>
            </div>
        </div>





        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
    </body>

    </html>


<?php
} else {
    echo ("You'r not valid admin");
}
?>