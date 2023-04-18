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
            <div class="row">
                <div class="col-12">
                    <div class="content-container">

                        <div class="info-container">
                            <div class="title-container">
                                <h1 class="mbr-section-title mbr-fonts-style mb-0 display-4">BMSC,Bogura SSC 13</h1>
                                <h2 class="mbr-section-subtitle mbr-fonts-style mb-0 display-7">BMSC, Bogura SSC
                                    BATCH'13 is a webplatform dedicated to bringing together all the friends of the
                                    13th batch of SSC from BIAM Model School and College,Bogura. This group serves as a
                                    platform for old classmates to
                                    reunite and reminisce about their shared experiences from their school days. Members
                                    can share updates on their lives, exchange memories and photos, and plan meetups to
                                    catch up with each other. The group aims to strengthen the bonds between batchmates
                                    and keep their friendship alive even after all these years. Join BMSC, Bogura SSC
                                    BATCH'13 and relive the memories with your long lost friends!</h2>
                            </div>
                        </div>

                        <div class="img-container">
                            <div class="image-wrapper">
                                <div class="img-bg"></div>
                                <div class="img-box">
                                    <img src="images/group1.jpg" alt="science iftar 2016">
                                    <img src="images/group2.jpg" alt="science iftar 2019">
                                    <img src="images/group3.jpg" alt="science iftar 2022">
                                </div>
                            </div>
                        </div>
                        <script>
                            var images = document.querySelectorAll('.img-box img');
                            var currentIndex = 0;

                            function showImage() {
                                for (var i = 0; i < images.length; i++) {
                                    images[i].style.display = 'none';
                                }
                                images[currentIndex].style.display = 'block';
                            }

                            function nextImage() {
                                currentIndex++;
                                if (currentIndex >= images.length) {
                                    currentIndex = 0;
                                }
                                showImage();
                            }

                            function startSlider() {
                                setInterval(nextImage, 5000);
                            }

                            showImage();
                            startSlider();
                        </script>
                    </div>
                </div>
            </div>
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
    $sql_post = "SELECT member_id, post_text, post_image FROM bmsc13_status ORDER BY id DESC LIMIT 2 ";
    $result_post = $conn->query($sql_post);

    if ($result_post->num_rows > 0) {

        while ($row = $result_post->fetch_assoc()) {

            $member_post_id = $row["member_id"];
            $sql_m = "SELECT name, image FROM bmsc13_members WHERE id='$member_post_id'";
            $result_post_m = $conn->query($sql_m);
            $row_m = $result_post_m->fetch_assoc();

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

    <section class="video2 bootcampm5 cid-taHSmqPdEQ mbr-parallax-background" id="aheader1-2">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="btn-container">
                        <div class="mbr-section-btn custom-mbr-section-btn align-center">
                            <div class="custom-section-btn">
                                <a class="btn btn-black display-4" href="posts.php"> See More Posts </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 5%;" class="features6 bootcampm5 cid-taHYSiP3wU" id="afeatures6-e">
        <div class="container">
            <div class="row">
                <div class="content-container col-12">
                    <div class="content-wrapper">
                        <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
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
                        <div class="card-container" id="dynamic_content">

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
    <script type="text/javascript" src="search-js/ajax-jquery.js"></script>

    <script>
        $(document).ready(function() {

            load_data(1);

            function load_data(page, query = '') {
                $.ajax({
                    url: "search_friends.php",
                    method: "POST",
                    data: {
                        page: page,
                        query: query
                    },
                    success: function(data) {
                        $('#dynamic_content').html(data);
                    }
                });
            }

            $(document).on('click', '.page-link', function() {
                var page = $(this).data('page_number');
                var query = $('#search_box').val();
                load_data(page, query);
            });

            $('#search_box').keyup(function() {
                var query = $('#search_box').val();
                load_data(1, query);
            });

        });
    </script>
</body>

</html>