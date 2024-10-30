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
        <div class="formassets">
        <form action="signup.php" method="post">
            <div class="left">
            <label for="title">Title:</label>
            <select name="title" id="title">
                <option value="">Select a title</option>
                <?php
                    titles();
                ?>
            </select><br><br>
            
            <label for="sname">Surname:</label>
            <input type="text" id="sname" name="sname"><br><br>
            
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            
            <label for="mname">Middle Name(s):</label>
            <input type="text" id="mname" name="mname"><br><br>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob"><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="houseno">House Number:</label>
            <input type="text" id="houseno" name="houseno"><br><br>
            
            <label for="addr1">Address Line 1:</label>
            <input type="text" id="addr1" name="addr1"><br><br>
            
            <label for="addr2">Address Line 2:</label>
            <input type="text" id="addr2" name="addr2"><br><br>
            </div>
            
            <div class="right">
            <label for="town">Town:</label>
            <input type="text" id="town" name="town"><br><br>
            
            <label for="county">County/State:</label>
            <input type="text" id="county" name="county"><br><br>
            
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode"><br><br>
            
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">Select a country</option>
                <?php
                    countries();
                ?>
            </select><br><br>
            
            <label for="telno">Telephone Number:</label>
            <input type="text" id="telno" name="telno"><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
                        
            <label for="course">Course:</label>
            <select id="course" name="course">
                <option value="">Select a course</option>
                <?php
                    courses();
                ?>
            </select><br><br>
            
            <label for="applicant">Applicant:</label>
            <select id="applicant" name="applicant">
                <option value="">Select an option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select><br><br>
            </div>
            </div>
            
            <input id="signupbutton" type="submit" value="Sign Up">
        </form>
        <div>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </main>

    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = $_POST['title'];
                $sname = $_POST['sname'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $dob = $_POST['dob'];
                $email = $_POST['email'];
                $confemail = $_POST['confemail'];
                $houseno = $_POST['houseno'];
                $addr1 = $_POST['addr1'];
                $addr2 = $_POST['addr2'];
                $town = $_POST['town'];
                $county = $_POST['county'];
                $postcode = $_POST['postcode'];
                $country = $_POST['country'];
                $telno = $_POST['telno'];
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirmpassword'];
                $course = $_POST['course'];
                $applicant = $_POST['applicant'];
                $query = "SELECT * FROM `users` WHERE email = '$email'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    echo "<script>alert('Sorry, this account email already exists.');</script>";
                } else {
                    if ($email != $confemail) {
                        echo "<script>alert('Sorry, the email addresses you entered do not match.');</script>";
                    } else if ($password != $confirmpassword) {
                        echo "<script>alert('Sorry, the passwords you entered do not match.');</script>";
                    } else {
                        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                        $query = "INSERT INTO `users` (title, sname, fname, mname, dob, email, houseno, addr1, addr2, town, county, postcode, country, telno, password, course, applicant) VALUES ('$title', '$sname', '$fname', '$mname', '$dob', '$email', '$houseno', '$addr1', '$addr2', '$town', '$county', '$postcode', '$country', '$telno', '$hashedpassword', '$course', '$applicant')";
                        if (mysqli_query($conn, $query)) {
                            echo "<script>alert('Account created successfully.');</script>";
                            echo "<script>window.location = 'logininline.php';</script>";
                        } else {
                            echo "<script>alert('Sorry, there was an error creating your account.');</script>";
                        }
                    }
                }
            }
        ?>

    </body>
</html>