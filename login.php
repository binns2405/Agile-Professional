<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'connection.inc.php';
            include 'functions.inc.php';
            session_start();
        ?>
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
    <body>
    <header>
      <!-- header bar that is going to appear at the top of the screen -->
      <a href="openday.php">
        <img src="Media/logo.svg" alt="UCLan logo" class="logo">
      </a>
      <h2 style="color: white; font-size: 150%; padding-right: 30px; padding-top: 80px;">UCLAN Cybersecurity Prospects</h2>
      <nav>
        <div class="menu-toggle" id="mobile-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul class="myNav">
          <li class="navList"><a href="landing.php">Home</a></li>
          <li class="navList"><a href="openday.php">Open Days</a></li>
          <li class="navList"><a href="applicant.php">Applicant Days</a></li>
          <li class="navList"><a href="induction.php">Induction</a></li>
          <?php if ($_SESSION['loggedin']) { echo "<li class='navList'><a href='logout.php'>Logout</a></li>"; } else { echo "<li class='navList'><a href='login.php'>Login</a></li>"; } ?>
        </ul>
        <hr>
      </nav>
    </header>
    <main class="section-signup">
        <form action="login.php" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        <div>
            <p>Don't have an account? <a href="signup.php">Register here</a></p>
        </div>
    </main>

    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query = "SELECT * FROM `users` WHERE email = '$email'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) == 0) {
                    echo "<script>alert('Sorry, this account email does not exist.');</script>";
                } else {
                    $row = mysqli_fetch_assoc($result);
                    if (password_verify($password, $row['password'])) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['userid'] = $row['userid'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['firstname'] = $row['firstname'];
                        $_SESSION['lastname'] = $row['lastname'];
                        $_SESSION['course'] = $row['course'];
                        if (isset($_SESSION['redirect'])) {
                            header("Location: " . $_SESSION['redirect']);
                        } else {
                            header("Location: landing.php");
                        }
                    } else {
                        echo "<script>alert('Sorry, the password you entered is incorrect.');</script>";
                    }
                }
            }
        ?>

    </body>
</html>