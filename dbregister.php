<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'starbucks') or die("Connection Failed:" . mysqli_connect_error());
    if (
        isset($_POST['username']) &&
        isset($_POST['pass_word']) &&
        isset($_POST['first_name']) &&
        isset($_POST['last_name']) &&
        isset($_POST['middle_initial']) &&
        isset($_POST['email']) &&
        isset($_POST['contact_number']) &&
        isset($_POST['address_information'])
    ) {
        $username = $_POST['username'];
        $pass_word = $_POST['pass_word'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_initial = $_POST['middle_initial'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_number'];
        $address_information = $_POST['address_information'];

        $sql = "INSERT INTO users 
        (
            username, 
            pass_word, 
            first_name, 
            last_name, 
            middle_initial, 
            email, 
            contact_number, 
            address_information) 
        VALUES 
        (
            '$username', 
            '$pass_word', 
            '$first_name', 
            '$last_name', 
            '$middle_initial', 
            '$email', 
            '$contact_number', 
            '$address_information')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo 'Entry Successful <br>';
            echo "<a href = 'index.php'>Log in page</a>";
        } else {
            echo 'Error Occurred';
        }
    }
}
