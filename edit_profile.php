<?php

include("includes/db.php");

session_start();
if (!isset($_SESSION['phone']) && !isset($_SESSION['password'])) {
    echo "<script> window.open('login.php','_self')</script>";
}

$member_id = $_SESSION['id'];
$member_name = $_SESSION['name'];

$name_error = "";
$phone_error = "";
$blood_group_error = "";
$present_address_error = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $image = $_FILES['myFileInput']['tmp_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $occupation = $_POST['occupation'];
    $present_address = $_POST['present_address'];
    $permanent_address = $_POST['permanent_address'];
    $fb_id = $_POST['fb_id'];
    $insta_id = $_POST['insta_id'];
    $twitter_id = $_POST['twitter_id'];
    $linkedin_id = $_POST['linkedin_id'];
    $youtube_channel = $_POST['youtube_channel'];
    $password = $_POST['password'];
    $share_with_males = $_POST['share_with_males'];
    
    if ($name == "" or $phone == "" or $blood_group == "" or $present_address == "") {
        if ($name == "")
            $name_error = "Insert your name";
        if ($phone == "")
            $phone_error = "Insert phone number";
        if ($blood_group == "")
            $blood_group_error = "Insert blood group";
        if ($present_address == "")
            $present_address_error = "Insert present address";
    } else {

        if ($image != "") {
            $image_binary = file_get_contents($image);
            $post_image = base64_encode($image_binary);

            $sql = "UPDATE bmsc13_members SET name='$name', image='$post_image', phone='$phone', email='$email', blood_group='$blood_group', occupation='$occupation', present_address='$present_address', permanent_address='$permanent_address', fb_id='$fb_id', insta_id='$insta_id', twitter_id='$twitter_id', linkedin_id='$linkedin_id', youtube_channel='$youtube_channel',password='$password',share_with_males='$share_with_males' WHERE id='$member_id';";
        } else {
            $sql = "UPDATE bmsc13_members SET name='$name', phone='$phone', email='$email', blood_group='$blood_group', occupation='$occupation', present_address='$present_address', permanent_address='$permanent_address', fb_id='$fb_id', insta_id='$insta_id', twitter_id='$twitter_id', linkedin_id='$linkedin_id', youtube_channel='$youtube_channel',password='$password',share_with_males='$share_with_males' WHERE id='$member_id';";
        }


        if ($conn->query($sql) === TRUE) {
            echo "<script> window.open('profile.php','_self')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script> window.open('profile.php','_self')</script>";
        }
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

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">NAME : <span style="color:red;"><?php echo $name_error; ?></span> </h5>
                                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PHONE : <span style="color:red;"><?php echo $phone_error; ?></span> </h5>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">EMAIL : </h5>
                                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">BLOOD GROUP : <span style="color:red;"><?php echo $blood_group_error; ?></span> </h5>
                                    <?php
                                    $blood_groups = array(
                                        'A(+)' => array('A(-)', 'B(+)', 'B(-)', 'O(+)', 'O(-)', 'AB(+)', 'AB(-)'),
                                        'A(-)' => array('A(+)', 'B(+)', 'B(-)', 'O(+)', 'O(-)', 'AB(+)', 'AB(-)'),
                                        'B(+)' => array('A(+)', 'A(-)', 'B(-)', 'O(+)', 'O(-)', 'AB(+)', 'AB(-)'),
                                        'B(-)' => array('A(+)', 'A(-)', 'B(+)', 'O(+)', 'O(-)', 'AB(+)', 'AB(-)'),
                                        'O(+)' => array('A(+)', 'A(-)', 'B(+)', 'B(-)', 'O(-)', 'AB(+)', 'AB(-)'),
                                        'O(-)' => array('A(+)', 'A(-)', 'B(+)', 'B(-)', 'O(+)', 'AB(+)', 'AB(-)'),
                                        'AB(+)' => array('A(+)', 'A(-)', 'B(+)', 'B(-)', 'O(+)', 'O(-)', 'AB(-)'),
                                        'AB(-)' => array('A(+)', 'A(-)', 'B(+)', 'B(-)', 'O(+)', 'O(-)', 'AB(+)'),
                                    );
                                    ?>
                                    <select name="blood_group" class="form-control">
                                        <option value="<?php echo $row['blood_group']; ?>"><?php echo $row['blood_group']; ?></option>
                                        <?php
                                        $my_blood_group = $row['blood_group'];
                                        foreach ($blood_groups[$my_blood_group] as $option) { ?>
                                            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                        <?php } ?>
                                    </select>



                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">OCCUPATION : </h5>
                                    <input type="text" name="occupation" class="form-control" value="<?php echo $row['occupation']; ?>" />

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PRESENT ADDRESS : <span style="color:red;"><?php echo $present_address_error; ?></span> </h5>
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

                                    <h5 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">PASSWORD : </h5>
                                    <input type="text" name="password" class="form-control" id="password-input" value="<?php echo $row['password']; ?>" />

                                    <?php
                                    if ($row['gender'] == "Female") {
                                    ?>
                                        <h5 style="margin-top: 5%; color:#FAD7A0;" class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-7">Do you want to share your contact info with male? </h5>
                                        <?php
                                        if ($row['share_with_males'] == "Yes") {
                                        ?>
                                            <input style="font-size: 18px; margin-left:5%;" type="radio" name="share_with_males" value="Yes" checked /><span style="font-size: 18px !important;  color:#FA0000;">Yes</span>
                                            <input style="font-size: 18px; margin-left:5%;" type="radio" name="share_with_males" value="No" /><span style="font-size: 18px !important; color:#66FA00;">No</span>
                                        <?php
                                        } else {
                                        ?>
                                            <input style="font-size: 18px; margin-left:5%;" type="radio" name="share_with_males" value="Yes" /><span style="font-size: 18px !important;  color:#FA0000;">Yes</span>
                                            <input style="font-size: 18px; margin-left:5%;" type="radio" name="share_with_males" value="No" checked /><span style="font-size: 18px !important; color:#66FA00;">No</span>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    } else {
                                    ?>
                                        <input style="font-size: 18px; margin-left:5%;" type="radio" name="share_with_males" value="Yes" checked hidden />
                                    <?php
                                    }
                                    ?>
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