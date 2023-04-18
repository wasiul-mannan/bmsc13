<?php

include("includes/db.php");
session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $present_address = $_POST['present_address'];
    $gender = $_POST['gender'];

    if (isset($_POST['share_with_males'])) {
        $share_with_males = "No";
    } else {
        $share_with_males = "Yes";
    }

    $blood_group = $_POST['blood_group'];
    $password = $_POST['password'];


    $sql = "INSERT INTO bmsc13_members (name, phone, present_address, gender, share_with_males, blood_group, password) 
            VALUES ('$name', '$phone', '$present_address', '$gender', '$share_with_males', '$blood_group', '$password')";


    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successfull.')</script>";
        echo "<script> window.open('login.php','_self')</script>";
    } else {
        echo "<script>alert('Signin failed')</script>";
        echo "<script> window.open('login.php','_self')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.10, mobirise.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="favicons/images-logo.png" type="image/x-icon">
    <meta name="description" content="">
    <title>BMSC, Bogura, SSC13</title>
    <link rel="stylesheet" href="css/mobirise-icons2-mobirise2.css">
    <link rel="stylesheet" href="css/css-bootstrap.min.css">
    <link rel="stylesheet" href="css/css-bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/css-bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/parallax-jarallax.css">
    <link rel="stylesheet" href="css/css-style.css">
    <link rel="stylesheet" href="css/css-styles.css">
    <link rel="stylesheet" href="css/css-style.css">
    <link rel="stylesheet" href="css/assets-recaptcha.css">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@400;600;700&amp;display=swap&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@400;600;700&amp;display=swap&amp;display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="css/css-mbr-additional.css" type="text/css">
</head>

<body>
    <section class="video2 bootcampm5 cid-taHSmqPdEQ mbr-parallax-background" id="avideo2-3">
        <div class="align-center container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="content-wrapper">
                        <div class="text-wrapper">
                            <img src="images/2016.png" style="width: 250px;margin-bottom: 5%;">
                            <form action="" method="post" class="mbr-form form-with-styler mx-auto">
                                <div class="dragArea row">
                                    <div class="col-12 form-group mb-3" data-for="name">
                                        <div class="group-container">
                                            <div class="group-bg"></div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">NAME :</h5>
                                                <input type="text" name="name" placeholder="Your name" class="form-control">
                                            </div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PHONE NUMBER :</h5>
                                                <input type="text" name="phone" placeholder="Your phone number" class="form-control">
                                            </div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PRESENT ADDRESS :</h5>
                                                <input type="text" name="present_address" placeholder="Your present address" class="form-control">
                                            </div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">GENDER :</h5>
                                                <select class="form-control" name="gender" onchange="showCheckbox(this.value)">
                                                    <option>Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>

                                                <div id="checkbox-container" style="display:none;">
                                                    <label class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">
                                                        <input type="checkbox" value="No" name="share_with_males" onclick="updateCheckboxValue(this)" checked>I don't want to share my contact information with male.
                                                    </label>
                                                </div>

                                                <script>
                                                    function showCheckbox(value) {
                                                        var checkboxContainer = document.getElementById("checkbox-container");
                                                        if (value == "Female") {
                                                            checkboxContainer.style.display = "block";
                                                        } else {
                                                            checkboxContainer.style.display = "none";
                                                        }
                                                    }
                                                </script>
                                            </div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">BLOOD GROUP :</h5>
                                                <select class="form-control" name="blood_group">
                                                    <option>Select</option>
                                                    <option value="A(+)">A(+)</option>
                                                    <option value="A(-)">A(-)</option>
                                                    <option value="B(+)">B(+)</option>
                                                    <option value="B(-)">B(-)</option>
                                                    <option value="O(+)">O(+)</option>
                                                    <option value="O(-)">O(-)</option>
                                                    <option value="AB(+)">AB(+)</option>
                                                    <option value="AB(-)">AB(-)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-3" data-for="email">
                                        <div class="group-container">
                                            <div class="group-bg"></div>
                                            <div class="group-border">
                                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">ADD NEW PASSWORD FOR THIS ACCOUNT :</h5>
                                                <input type="password" name="password" placeholder="Your password" class="form-control" id="password-input">
                                                <span toggle="#password-input" class="field-icon toggle-password">Show</span>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .field-icon {
                                            float: right;
                                            margin-top: -25px;
                                            margin-right: 20px;
                                            position: relative;
                                            z-index: 2;
                                        }

                                        .fa-eye:before {
                                            content: "\f06e";
                                        }

                                        .fa-eye-slash:before {
                                            content: "\f070";
                                        }
                                    </style>
                                    <script>
                                        const passwordInput = document.querySelector("#password-input");
                                        const togglePassword = document.querySelector(".toggle-password");

                                        togglePassword.addEventListener("click", function() {
                                            const type = passwordInput.getAttribute("type") === "password" ?
                                                "text" : "password";
                                            passwordInput.setAttribute("type", type);
                                            this.textContent = this.textContent === "Show" ? "Hide" : "Show";

                                        });
                                    </script>
                                    <div class="col-auto mbr-section-btn custom-mbr-section-btn">
                                        <div class="custom-section-btn">
                                            <button class="btn btn-black display-4" type="submit" name="submit"> REGISTER
                                            </button>
                                        </div>
                                        <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7"><a href="login.php" class="form-control">Click here to log in into old account.</a></h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-video">
                            <div class="box">
                                <div class="box-bg">
                                </div>
                                <div class="mbr-media show-modal align-center">
                                    <img src="images/bmsc_S1.jpg" alt="Mobirise">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer2 bootcampm5 cid-taI1vrEVAM" once="footers" id="afooter2-l">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style align-center display-4">
                        &copy; Copyright 2023 BMSC,Bogura-2013 - Designed and Developed by <a href="https://atmotechisf.co">Atmotech IT and Software Firm</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/js-bootstrap.bundle.min.js"></script>
    <script src="js/parallax-jarallax.js"></script>
    <script src="js/smoothscroll-smooth-scroll.js"></script>
    <script src="js/ytplayer-index.js"></script>
    <script src="js/js-navbar-dropdown.js"></script>
    <script src="js/playervimeo-vimeo_player.js"></script>
    <script src="js/mbr-tabs-mbr-tabs.js"></script>
    <script src="js/mbr-switch-arrow-mbr-switch-arrow.js"></script>
    <script src="js/js-script.js"></script>
    <script src="js/7462-assets-formoid.min.js"></script>
</body>

</html>