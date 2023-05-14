<?php

$connection = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($connection, "starbucks");
$delete = $_GET['del'];


$sql = "delete from menu where item_id = '$delete'";


if (mysqli_query($connection, $sql)) {

    echo '<script> location.replace("Manage.php")</script>';
} else {
    echo "Some thing Error" . $connection->error;
}
