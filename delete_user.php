<?php

$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "starbucks");
$delete = $_GET['del'];


$sql = "delete from users where user_id = '$delete'";


if (mysqli_query($connection, $sql)) {

    echo '<script> location.replace("users_manage.php")</script>';
} else {
    echo "Some thing Error" . $connection->error;
}
