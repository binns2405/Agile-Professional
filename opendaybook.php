<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
            if (!isset($_SESSION['loggedin'])) {
                $_SESSION['loggedin'] = false;
            }

            if (!isset($_GET['id']) || $_GET['id'] == "" || !is_numeric($_GET['id']) || $_GET['id'] < 1) {
                header("Location: openday.php");
                exit();
            }
            $_SESSION['opendayid'] = $_GET['id'];

            include 'connection.inc.php';
            $retreivequery = "SELECT * FROM `opendays` WHERE eventid = " . $_GET['id'];
            $result = mysqli_query($conn, $retreivequery);
            if (mysqli_num_rows($result) == 0) {
                echo "<script>alert('Sorry, this open day does not exist.');</script>";
                echo "<script>window.location = 'openday.php';</script>";
            }
            ?>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <p>test test test test test</p>
        <?php echo $_SESSION['opendayid']; ?>
    </body>
</html>