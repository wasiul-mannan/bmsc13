<?php
include("includes/db.php");

session_start();
if (!isset($_SESSION['phone']) && !isset($_SESSION['password'])) {
    echo "<script> window.open('login.php','_self')</script>";
}

$member_id = $_SESSION['id'];
$member_name = $_SESSION['name'];

$post_text1 = $_POST['textarea_data'];
$post_text = mysqli_real_escape_string($conn, $post_text1);

$image = $_FILES['myFileInput']['tmp_name'];
$post_status = "Approved";

if ($image != "") {
    $image_binary = file_get_contents($image);
    $post_image = base64_encode($image_binary);
    $sql = "INSERT INTO bmsc13_status (member_id, post_text, post_image, post_status) VALUES ('$member_id', '$post_text', '$post_image', '$post_status')";
} else {
    $sql = "INSERT INTO bmsc13_status (member_id, post_text, post_status) VALUES ('$member_id', '$post_text', '$post_status')";
}


if ($conn->query($sql) === TRUE) {
    echo "<script> window.open('posts.php','_self')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script> window.open('posts.php','_self')</script>";
}
$conn->close();
