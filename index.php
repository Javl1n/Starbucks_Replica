<?php
//start session
session_start();

//redirect if logged in
if (isset($_SESSION['user'])) {
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Starbucks Log in</title>
</head>

<body>
    <div>
        <h1>LOGIN FORM</h1>
        <div>
            <div>
                <div>
                    <div>
                        <h3>Login</h3>
                    </div>
                    <div>
                        <form method="POST" action="login.php">
                            <fieldset>
                                <div>
                                    <input placeholder="Username" type="text" name="username" required>
                                </div>
                                <div>
                                    <input placeholder="Password" type="password" name="pass_word" required>
                                </div>
                                <button type="submit" name="login">Login</button>
                            </fieldset>
                        </form>
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
    ?>
        <div class="alert alert-info text-center">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php

        unset($_SESSION['message']);
    }
    ?>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
    ?>
        <div class="alert alert-info text-center">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php

        unset($_SESSION['message']);
    }
    ?>
    </div>
    </div>
    </div>
</body>

</html>