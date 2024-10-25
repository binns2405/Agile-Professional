<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <form action="logininline.php" method="post">
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
            <p>Don't have an account? <a href="signupinline.php">Register here</a></p>
        </div>
    </body>
</html>