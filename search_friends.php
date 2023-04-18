<?php
session_start();
include("includes/db.php");

if (!isset($_SESSION['phone']) && !isset($_SESSION['password'])) {
    echo "<script> window.open('login.php','_self')</script>";
}

$member_id = $_SESSION['id'];
$member_name = $_SESSION['name'];
$member_gender = $_SESSION['gender'];


$connect = new PDO("mysql:host=localhost; dbname=fotoynsd_bmsc_13", "fotoynsd_bmsc_13", "fotoynsd_bmsc_13");



$query = "
SELECT * FROM bmsc13_members 
";

if ($_POST['query'] != '') {
    $query .= '
  WHERE name LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  or phone LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  or blood_group LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  or present_address LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  or occupation LIKE "%' . str_replace(' ', '%', $_POST['query']) . '%" 
  ';
}

$query .= 'ORDER BY name ASC ';




$run_admin = mysqli_query($conn, "SELECT COUNT(*)  from bmsc13_members");
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
        if ($member_gender == $row['gender']) {
            if ($row["image"] == "") {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="images/pro_icon.jpg"
                                    style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["phone"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            } else {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="data:image/png;base64,' . $row["image"] . '" id="preview" alt="group" style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["phone"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            }
        }
        if ($member_gender != $row['gender'] && $row['share_with_males'] == 'Yes') {
            if ($row["image"] == "") {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="images/pro_icon.jpg"
                                    style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["phone"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            } else {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="data:image/png;base64,' . $row["image"] . '" id="preview" alt="group" style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["phone"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            }
        }
        if ($member_gender != $row['gender'] && $row['share_with_males'] == 'No') {
            if ($row["image"] == "") {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="images/pro_icon.jpg"
                                    style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            } else {
                $output = '
                <div class="card-item" onclick="redirectToProfile(' . $row["id"] . ')">
                    <div class="card-bg"></div>
                    <div class="card-border">
                        <div class="card-box">
                            <div class="iconfont-wrapper">
                                <img src="data:image/png;base64,' . $row["image"] . '" id="preview" alt="group" style="width: 150px; justify-content: center; align-items: center; border-radius: 50%;">
                            </div>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                <strong>' . $row["name"] . '</strong>
                            </p>
                            <p class="card-title mbr-fonts-style mb-0 display-7">
                                Blood group : <strong style="color: wheat;">' . $row["blood_group"] . '</strong>
                            </p>
                        </div>
                    </div>
                </div>';
            }
        }
        echo $output;
    }
} else {
    $output = '
    <div class="card-item">
    <div class="card-bg"></div>
    <div class="card-border">
        <div class="card-box">
            <p class="card-title mbr-fonts-style mb-0 display-7">
                <strong>No data found</strong>
            </p>
        </div>
    </div>
</div>
  
  ';

    echo $output;
}
?>

<script>
    function redirectToProfile(profileId) {
        window.location.href = "view_profile.php?m_id=" + profileId;
    }
</script>