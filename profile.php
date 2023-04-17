<?php

include("includes/db.php");

session_start();
if (!isset($_SESSION['phone']) && !isset($_SESSION['password'])) {
    echo "<script> window.open('login.php','_self')</script>";
}

$member_id = $_SESSION['id'];
$member_name = $_SESSION['name'];


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

    <section class="menu menu1 bootcampm5 cid-taHRfbmdPD" once="menu" id="amenu1-0">


        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container" style="width: 100%;">
                <div class="navbar-brand">
                    <img style="width: 150px;" src="images/2016.png">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="posts.php">Posts</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="friends.php">Friends</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="profile.php">Profile</a></li>
                    </ul>

                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-black display-4" href="logout.php">
                            Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>


    <?php
    $sql = "SELECT * FROM bmsc13_members WHERE id='$member_id' ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

        <section class="features6 bootcampm5 cid-taHYSiP3wU" id="afeatures6-e">
            <div class="container">
                <div class="row">
                    <div class="content-container col-12">
                        <div class="content-wrapper" style="background-color:white;">
                            <div class="card-container" style="justify-content: center !important; align-items: center !important;">
                                <div class="card-item">
                                    <div class="card-bg"></div>
                                    <div class="card-border">
                                        <div class="card-box">
                                            <?php
                                            if ($row['image'] == "") {
                                            ?>
                                                <img src="images/pro_icon.jpg" style="width: 100%; justify-content: center; align-items: center; border-radius: 50%;">
                                            <?php
                                            } else {
                                            ?>
                                                <img src="data:image/png;base64,<?php echo $row["image"]; ?>" id="preview" alt="group" style="width: 100%; justify-content: center; align-items: center; border-radius: 50%;">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features6 bootcampm5 cid-taHYSiP3wU" id="afeatures6-e">
            <div class="container">
                <div class="row">
                    <div class="content-container col-12">
                        <div class="content-wrapper">
                            <div class="card-container">

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">NAME : </h5>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PHONE : </h5>
                                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">EMAIL : </h5>
                                <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">BLOOD GROUP : </h5>
                                <input type="text" name="blood_group" class="form-control" value="<?php echo $row['blood_group']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">OCCUPATION : </h5>
                                <input type="text" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PRESENT ADDRESS : </h5>
                                <input type="text" name="present_address" class="form-control" value="<?php echo $row['present_address']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PERMANENT ADDRESS : </h5>
                                <input type="text" name="permanent_address" class="form-control" value="<?php echo $row['permanent_address']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">FACEBOOK ID : </h5>
                                <input type="text" name="fb_id" class="form-control" value="<?php echo $row['fb_id']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">INSTAGRAM ID : </h5>
                                <input type="text" name="insta_id" class="form-control" value="<?php echo $row['insta_id']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">TWITTER ID : </h5>
                                <input type="text" name="twitter_id" class="form-control" value="<?php echo $row['twitter_id']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">LINKEDIN ID : </h5>
                                <input type="text" name="linkedin_id" class="form-control" value="<?php echo $row['linkedin_id']; ?>" readonly />

                                <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">YOUTUBE CHANNEL : </h5>
                                <input type="text" name="youtube_channel" class="form-control" value="<?php echo $row['youtube_channel']; ?>" readonly />

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php
    }
    ?>
    <section class="video2 bootcampm5 cid-taHSmqPdEQ mbr-parallax-background" id="aheader1-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="btn-container">
                        <div class="mbr-section-btn custom-mbr-section-btn align-center">
                            <div class="custom-section-btn">
                                <a class="btn btn-black display-4" href="edit_profile.php"> Edit Profile </a>
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