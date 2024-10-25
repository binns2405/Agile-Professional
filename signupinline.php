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
    </head>
    <body>
        <form action="signupinline.php" method="post">
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
            
            <input type="submit" value="Sign Up">
        </form>
        <div>
            <p>Already have an account? <a href="logininline.php">Login here</a></p>
        </div>
    </body>
</html>