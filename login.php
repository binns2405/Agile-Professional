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
    </body>
</html>