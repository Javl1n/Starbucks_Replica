<?php
//start session
session_start();

include('bootstrap.php');

//redirect if logged in
if (isset($_SESSION['user'])) {
  header('location:home.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Starbucks Log in</title>
  <?php echo $bootstrap; ?>
  <link rel="stylesheet" type="text/css" href="log.css">
</head>

<body>
  <!-- <div>
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
  </div> -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1>Log in or create an account</h1>
  <form action="login.php" method="POST">
    <!-- Headings for the form -->
    <div class="headingsContainer">
      <h3>Log in</h3>
    </div>

    <!-- Main container for all inputs -->
    <div class="mainContainer">
      <!-- Username -->
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Username" name="username" required>

      <br><br>

      <!-- Password -->
      <label for="pass_word">Password</label>
      <input type="password" placeholder="Password" name="pass_word" required>

      <!-- Submit button -->
      <button type="submit" name="login" class="nav-button green-button">Login</button>

      <!-- Sign up link -->
      <p class="register">Not a member? <a href="register.php">Sign in</a></p>

    </div>

  </form>
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