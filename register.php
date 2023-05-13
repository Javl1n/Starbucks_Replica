<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <div>
        <h1>Registration Form</h2>
    </div>
    <form action="dbregister.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="pass_word">Password:</label><br>
        <input type="password" name="pass_word" id="pass_word" required><br><br>

        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label for="middle_initial">Middle initial:</label><br>
        <input type="text" name="middle_initial" id="middle_initial" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="contact_number" name="contact_number" id="contact_number" required><br><br>

        <label for="address_information">Address:</label><br>
        <textarea name="address_information" id="address_information" cols="30" rows="10"></textarea><br><br>


        <input type="submit" name="submit" id="submit">
    </form>
</body>

</html>