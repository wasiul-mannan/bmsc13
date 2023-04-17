<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmsc_13";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the textarea data and image file
$text = $_POST['textarea_data'];
$image = $_FILES['myFileInput']['tmp_name'];

if ($image != "") {
    $image_binary = file_get_contents($image);
    $image_base64 = base64_encode($image_binary);
    $sql = "INSERT INTO user_status (text, image_base64) VALUES ('$text', '$image_base64')";
} else {
    $sql = "INSERT INTO user_status (text) VALUES ('$text')";
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
