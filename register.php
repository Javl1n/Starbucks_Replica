<?php

include('bootstrap.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <?php echo $bootstrap; ?>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <br>
    <br>
    <br>
    <div>
        <h1>Create an account</h2>
    </div>
    <form action="dbregister.php" method="POST">

        <div class="form-group">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" placeholder="Username" required>
        </div>

        <div class="form-group">
            <label for="pass_word">Password:</label><br>
            <input type="password" name="pass_word" id="pass_word" placeholder="Password" required>
        </div>



        <div class="form-group">
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <label for="middle_initial">Middle initial:</label><br>
            <input type="text" name="middle_initial" id="middle_initial" placeholder="Middle Initial" required>
        </div>


        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>

        <div class="form-group">
            <label for="contact_number">Contact Number:</label><br>
            <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" required>
        </div>

        <div class="form-group">
            <label for="address_information">Address:</label><br>
            <textarea name="address_information" id="address_information" cols="45" rows="3" placeholder="Address">
            </textarea>
        </div>


        <button type="submit" class="nav-button green-button" name='submit'>Register</button>

        <p class="register">Already a member? <a href="index.php">Log in</a></p>
    </form>
    <br>
    <br>
    <br>
</body>

</html>