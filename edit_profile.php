<?php

include("includes/db.php");

session_start();
if (!isset($_SESSION['phone']) && !isset($_SESSION['password'])) {
    echo "<script> window.open('login.php','_self')</script>";
}

$member_id = $_SESSION['id'];
$member_name = $_SESSION['name'];

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $image = $_FILES['myFileInput']['tmp_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $occupation = $_POST['occupation'];
    $present_address = $_POST['present_address'];
    $permanent_address = $_POST['permanent_address'];
    $fb_id = $_POST['fb_id'];
    $insta_id = $_POST['insta_id'];
    $twitter_id = $_POST['twitter_id'];
    $linkedin_id = $_POST['linkedin_id'];
    $youtube_channel = $_POST['youtube_channel'];


    if ($image != "") {
        $image_binary = file_get_contents($image);
        $post_image = base64_encode($image_binary);

        $sql = "UPDATE bmsc13_members SET name='$name', image='$post_image', phone='$phone', email='$email', gender='$gender', blood_group='$blood_group', occupation='$occupation', present_address='$present_address', permanent_address='$permanent_address', fb_id='$fb_id', insta_id='$insta_id', twitter_id='$twitter_id', linkedin_id='$linkedin_id', youtube_channel='$youtube_channel' WHERE id='$member_id';";
    } else {
        $sql = "UPDATE bmsc13_members SET name='$name', phone='$phone', email='$email', gender='$gender', blood_group='$blood_group', occupation='$occupation', present_address='$present_address', permanent_address='$permanent_address', fb_id='$fb_id', insta_id='$insta_id', twitter_id='$twitter_id', linkedin_id='$linkedin_id', youtube_channel='$youtube_channel' WHERE id='$member_id';";
    }


    if ($conn->query($sql) === TRUE) {
        echo "<script> window.open('profile.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script> window.open('profile.php','_self')</script>";
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

    <form method="post" enctype="multipart/form-data">

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
                                                    <img src="images/pro_icon.jpg" id="preview" style="width: 100%; justify-content: center; align-items: center; border-radius: 50%;">
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
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PHONE : </h5>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">EMAIL : </h5>
                                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">GENDER : </h5>
                                    <input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">BLOOD GROUP : </h5>
                                    <input type="text" name="blood_group" class="form-control" value="<?php echo $row['blood_group']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">OCCUPATION : </h5>
                                    <input type="text" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PRESENT ADDRESS : </h5>
                                    <input type="text" name="present_address" class="form-control" value="<?php echo $row['present_address']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PERMANENT ADDRESS : </h5>
                                    <input type="text" name="permanent_address" class="form-control" value="<?php echo $row['permanent_address']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">FACEBOOK ID : </h5>
                                    <input type="text" name="fb_id" class="form-control" value="<?php echo $row['fb_id']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">INSTAGRAM ID : </h5>
                                    <input type="text" name="insta_id" class="form-control" value="<?php echo $row['insta_id']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">TWITTER ID : </h5>
                                    <input type="text" name="twitter_id" class="form-control" value="<?php echo $row['twitter_id']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">LINKEDIN ID : </h5>
                                    <input type="text" name="linkedin_id" class="form-control" value="<?php echo $row['linkedin_id']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">YOUTUBE CHANNEL : </h5>
                                    <input type="text" name="youtube_channel" class="form-control" value="<?php echo $row['youtube_channel']; ?>" />

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
                                    <button type="submit" name="submit" class="btn btn-black display-4" href="edit_profile.php"> Update Profile </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </form>

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