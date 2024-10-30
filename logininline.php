<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'connection.inc.php';
            session_start();
        ?>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <form name="login" action="logininline.php" method="post" autocomplete>
            <div>
                <label for="email">email:</label>
                <input type="text" id="email" name="email" required>
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
            <p>Don't have an account? <a href="signupinline.php">Register here</a></p>
        </div>

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