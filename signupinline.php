<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
        <?php
            include 'connection.inc.php';
            include 'functions.inc.php';
            session_start();
        ?>
        <script>
            function validateForm() {
                //gets the values from the form
                var email = document.forms["signup"]["email"].value;
                var password = document.forms["signup"]["password"].value;
                var confirmPassword = document.forms["signup"]["confirmPassword"].value;

                if (password.length < 8) { //checks if the password is at least 8 characters long
                    alert("Password must be at least 8 characters long.");
                    return false;
                }

                if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(){}[\]-_=+;:'@#~,<.>/?¬`|\\])/.test(password)) { //checks the password meets all the rules - adapted from https://www.codexworld.com/how-to/check-special-characters-using-javascript/
                    alert("Password does not meet the requirements. Passwords must contain at least one uppercase letter, one lowercase letter, one number and one special character.");
                    return false;
                }

                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { //checks if the email is valid - regex from https://stackoverflow.com/a/9204568
                    alert("Email is not valid.");
                    return false;
                }

                return true;
            }
        </script>
    </head>
    <body>
        <form action="signupinline.php" method="post" autocomplete onsubmit="return validateForm()">
            <label for="title">Title:</label>
            <select name="title" id="title">
                <option value="">Select a title</option>
                <?php
                    titles();
                ?>
            </select><br><br>
            
            <label for="sname">Surname:<span class="required"> *</span></label>
            <input type="text" id="sname" name="sname"><br><br>
            
            <label for="fname">First Name:<span class="required"> *</span></label>
            <input type="text" id="fname" name="fname"><br><br>
            
            <label for="mname">Middle Name(s):</label>
            <input type="text" id="mname" name="mname"><br><br>
            
            <label for="dob">Date of Birth:<span class="required"> *</span></label>
            <input type="date" id="dob" name="dob"><br><br>
            
            <label for="email">Email:<span class="required"> *</span></label>
            <input type="email" id="email" name="email"><br><br>

            <label for="confemail">Confirm Email:<span class="required"> *</span></label>
            <input type="email" id="confemail" name="confemail"><br><br>
            
            <label for="houseno">House Number:<span class="required"> *</span></label>
            <input type="text" id="houseno" name="houseno"><br><br>
            
            <label for="addr1">Address Line 1:<span class="required"> *</span></label>
            <input type="text" id="addr1" name="addr1"><br><br>
            
            <label for="addr2">Address Line 2:</label>
            <input type="text" id="addr2" name="addr2"><br><br>
            
            <label for="town">Town:<span class="required"> *</span></label>
            <input type="text" id="town" name="town"><br><br>
            
            <label for="county">County/State:<span class="required"> *</span></label>
            <input type="text" id="county" name="county"><br><br>
            
            <label for="postcode">Postcode:<span class="required"> *</span></label>
            <input type="text" id="postcode" name="postcode"><br><br>
            
            <label for="country">Country:<span class="required"> *</span></label>
            <select id="country" name="country">
                <option value="">Select a country</option>
                <?php
                    countries();
                ?>
            </select><br><br>
            
            <label for="telno">Telephone Number:<span class="required"> *</span></label>
            <input type="text" id="telno" name="telno"><br><br>
            
            <label for="password">Password:<span class="required"> *</span></label>
            <input type="password" id="password" name="password"><br><br>

            <label for="confirmpassword">Confirm Password:<span class="required"> *</span></label>
            <input type="password" id="confirmpassword" name="confirmpassword"><br><br>
                        
            <label for="course">Course:<span class="required"> *</span></label>
            <select id="course" name="course">
                <option value="">Select a course</option>
                <?php
                    courses();
                ?>
            </select><br><br>
            
            <label for="applicant">Applicant?<span class="required"> *</span></label>
            <select id="applicant" name="applicant">
                <option value="">Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select><br><br>
            
            <input type="submit" value="Sign Up">
        </form>
        <div>
            <p>Already have an account? <a href="logininline.php">Login here</a></p>
        </div>
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