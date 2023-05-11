<?php
require_once("../Backend/general.php");
session_start();
assertLogin();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../Styles/profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </head>

    <body style="margin-top:0px">
        <nav class="navbar navbar-expand-lg bg-carbon navbar-dark">
            <div class="container-fluid my-white-text">
                <a class="navbar-brand" href="#">MarioUltimate</a>
                <button onclick="window.location.href='homie.php';"
                    class="btn btn-primary btn btn-danger btn-block text-white" type="button">
                    Go To Homepage
                </button>
            </div>
        </nav>

        <br> <br>

        <div class="container">
            <div class="main-body">
                <div class="row" id="changestatus">
                    
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">

                                    <img src="../Images/blank-profile-picture-973460_1280.webp" alt="Image"
                                        class="image rounded-circle p-1 bg-primary" width="110" height="110"
                                        onclick="expandImage(this)" style="max-width: 100%;">

                                    <div class="mt-3">
                                        <h4 id="username"></h4>
                                        <br>
                                        <button class="btn btn-primary btn btn-danger btn-block text-white"
                                            id="signout" onclick="window.location.href = '../index.php';">Sign Out</button>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="links list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class=" mb-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-twitter me-2 icon-inline text-info">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>
                                            Twitter
                                        </h6>

                                        <!-- fill with php -->
                                        <input type="url" class="form-control" name="link" id="twitter">

                                    </li>
                                    <li
                                        class="links list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class=" mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-instagram me-2 icon-inline text-danger">
                                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                            </svg>Instagram</h6>

                                        <!-- fill with php -->
                                        <input type="url" class="form-control" name="link" id="instagram">

                                    </li>
                                    <li
                                        class="links list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class=" mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-facebook me-2 icon-inline text-primary">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>Facebook</h6>

                                        <!-- fill with php -->
                                        <input type="url" class="form-control" name="link" id="facebook">

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">First Name</h6>
                                    </div>
                                    <!-- fill with php -->
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <!-- fill with php -->
                                        <h6 class="mb-0">Last Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <!-- fill with php -->
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <!-- fill with php -->
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <!-- fill with php -->
                                        <h6 class="mb-0">Birthday</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" class="form-control" id="bday">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="button" class="btn btn-primary btn btn-danger btn-block text-white"
                                            id="saveinfo" value="Save Changes">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            // define some divs to be used later for user alerts
            let changesuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your changes have been saved successfully<button type = "button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            
            let changefailed = '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="changefailed">Something went wrong!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                
            function expandImage(img) {
                var expandedImg = document.createElement("div");
                var imgCopy = img.cloneNode(true);
                expandedImg.appendChild(imgCopy);
                expandedImg.classList.add("expanded");
                document.body.appendChild(expandedImg);
            }

            document.addEventListener("click", function (event) {
                if (event.target.classList.contains("expanded")) {
                    event.target.parentElement.removeChild(event.target);
                }
            });


            $(document).ready(function () {
                // get the profile info from the backend as soon as the page loads
                $.ajax({
                    url: "../Backend/profile/get.php",
                    method: "GET",
                    dataType: "json",
                    success: function (info) {
                        // set the info into the fields from the get request
                        $("#username").html(info[0]);
                        $("#email").val(info[1]);
                        $("#fname").val(info[2]);
                        $("#lname").val(info[3]);
                        $("#phone").val(info[4]);
                        $("#bday").val(info[5]);
                    },
                    error: function (err) {
                        console.log(err);
                    }
                })

                $("#saveinfo").click(function () {

                    // create a js object from the data
                    var info = {
                        first_name: $("#fname").val(),
                        last_name: $("#lname").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val(),
                        birthdate: $("#bday").val()
                    };

                    // json-ify the info
                    var jsonInfo = JSON.stringify(info);

                    // send the info to the backend via ajax
                    $.ajax({
                        url: "../Backend/profile/update.php",
                        method: "POST",
                        dataType: "json",
                        data: { new_info: jsonInfo },

                        // display appropriate alert
                        success: function (response) {
                            $("#changestatus").append(changesuccess);
                        },
                        error: function (xhr, status, error) {
                            console.log("error: " + error);
                            $("#changestatus").append(changefailed);
                        }
                    })
                })
            })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </body>

</html>

<!-- jalal & rayane -->