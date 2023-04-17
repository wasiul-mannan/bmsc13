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
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="posts.php">Posts</a></li>
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

    <section class="header2 bootcampm5 cid-taHRguy6vy" id="aheader2-1">
        <div class="container">
            <form method="post" action="insert_post.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="content-container">
                            <textarea class="form-control" placeholder="What's in your mind?" name="textarea_data"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content-container">
                            <img class="form-control" id="preview" src="#" alt="Preview Image" style="display:none; max-width: 500px; max-height: 500px; margin-top: 10px;">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 1%;">
                    <div class="col-12">
                        <div class="content-container">
                            <input class="form-control" type="file" id="myFileInput" name="myFileInput" accept="image/*" onchange="previewImage(event)" hidden>
                            <label for="myFileInput" class="btn btn-primary">Select Photo</label>
                            <script>
                                function previewImage(event) {
                                    var reader = new FileReader();
                                    reader.onload = function() {
                                        var output = document.getElementById('preview');
                                        output.style.display = "block";
                                        output.src = reader.result;
                                    };
                                    reader.readAsDataURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content-container">
                            <div class="custom-section-btn" style="margin-top: 5%;">
                                <button class="btn btn-black display-4" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="header1 bootcampm5 cid-taHS4cCyTH" id="aheader1-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="btn-container">
                        <div class="mbr-section-btn custom-mbr-section-btn align-center">
                            <!-- <div class="custom-section-btn">
                                <a class="btn btn-black display-4" href=""><span
                                        class="mobi-mbri mobi-mbri-to-local-drive mbr-iconfont mbr-iconfont-btn"></span>

                                    Download Syllabus
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $sql = "SELECT member_id, post_text, post_image FROM bmsc13_status  ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $member_post_id = $row["member_id"];
            $sql_m = "SELECT name, image FROM bmsc13_members WHERE id='$member_post_id'";
            $result_m = $conn->query($sql_m);
            $row_m = $result_m->fetch_assoc();

            if ($row["post_image"] != "") {
    ?>

                <section class="video2 bootcampm5 cid-taHSmqPdEQ mbr-parallax-background" id="avideo2-3">
                    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);"></div>
                    <div class="align-center container">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex align-items-center">
                                <?php if ($row_m["image"] == "") {
                                ?>
                                    <img src="images/pro_icon.jpg" style="width: 50px; border-radius: 50%;">
                                <?php
                                } else {
                                ?>
                                    <img src="data:image/png;base64,<?php echo $row_m["image"]; ?>" alt="group" style="width: 50px; border-radius: 50%;">
                                <?php
                                } ?>

                                <h4 class="mbr-section-title mbr-fonts-style mb-0 display-7 ml-2"><?php echo $row_m["name"]; ?></h4>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="content-wrapper">
                                    <div class="text-wrapper">
                                        <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7"><?php echo $row["post_text"]; ?></h5>
                                    </div>
                                    <div class="col-video">
                                        <div class="box">
                                            <div class="box-bg">
                                            </div>
                                            <div class="mbr-media show-modal align-center">
                                                <img src="data:image/png;base64,<?php echo $row["post_image"]; ?>" alt="group" style="height: 100%; width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php
            } else {
            ?>
                <section class="video2 bootcampm5 cid-taHSmqPdEQ mbr-parallax-background" id="avideo2-3">
                    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);"></div>
                    <div class="align-center container">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex align-items-center">
                                <?php if ($row_m["image"] == "") {
                                ?>
                                    <img src="images/pro_icon.jpg" style="width: 50px; border-radius: 50%;">
                                <?php
                                } else {
                                ?>
                                    <img src="data:image/png;base64,<?php echo $row_m["image"]; ?>" alt="group" style="width: 50px; border-radius: 50%;">
                                <?php
                                } ?>

                                <h4 class="mbr-section-title mbr-fonts-style mb-0 display-7 ml-2"><?php echo $row_m["name"]; ?></h4>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="content-wrapper">
                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7"><?php echo $row["post_text"]; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    <?php
            }
        }
    }
    ?>

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