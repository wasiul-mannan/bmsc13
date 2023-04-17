<?php
session_start();
include("includes/db.php");





$connect = new PDO("mysql:host=localhost; dbname=bmsc_13", "root", "");



$query = "
SELECT * FROM user_status 
";

if ($_POST['query'] != '') {
    $query .= '
  WHERE 	text LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  or text LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  ';
}

$query .= 'ORDER BY id ASC ';




$run_admin = mysqli_query($conn, "SELECT COUNT(*)  from user_status");
$row = mysqli_fetch_array($run_admin);
$total_count = $row[0];



$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

if ($total_data > 0) {
    foreach ($result as $row) {

        $output = '
      <div class="card-item">
      <div class="card-bg"></div>
      <div class="card-border">
          <div class="card-box">
              <div class="iconfont-wrapper">
                  <img src="images/images-people1.jpg"
                      style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
              </div>
              <p class="card-title mbr-fonts-style mb-0 display-7">
                  <strong>' . $row["text"] . '</strong>
              </p>
              <p class="card-title mbr-fonts-style mb-0 display-7">
                  <strong>01777902703</strong>
              </p>
              <p class="card-title mbr-fonts-style mb-0 display-7">
                  Blood group : <strong style="color: wheat;">o(+)</strong>
              </p>
          </div>
      </div>
  </div>
    
    ';
        echo $output;
    }
} else {
    $output = '';
}
