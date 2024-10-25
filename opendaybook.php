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
            $row = mysqli_fetch_assoc($result);
            $eventid = $row['eventid'];
            $date = $row['date'];
            $time = $row['time'];
            $location = $row['location'];
            $course = $row['course'];
            $price = $row['price'];
            ?>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <div>
            <h1><?php echo $course; ?> Open Day</h1>
            <p>Date: <?php echo $date; ?></p>
            <p>Time: <?php echo $time; ?></p>
            <p>Event Code: <?php echo $eventid; ?></p>
            <p>Location: <?php echo $location; ?></p>
            <p>Price: <?php echo $price; ?></p>
            <div>
                <p>To book onto this event you must create an account with us. if you are not logged inn or do not have an account the button will redirect you to do so before continuing</p>
                <button onclick="inlinebook()">Book Now</button>
                <script>
                    function inlinebook() {
                        <?php $_SESSION['redirect'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                        window.location.href = 'logininline.php';
                    }
                </script>
            </div>
        </div>
    </body>
</html>