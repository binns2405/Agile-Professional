<!DOCTYPE html>
<html>
    <head>
        <script src="functions.js"></script>
        <?php
            include 'connection.inc.php';
            session_start();
            if (!isset($_SESSION['loggedin'])) {
                $_SESSION['loggedin'] = false;
                echo "<script>alert('You must be logged in to access this page.');</script>";
                echo "<script>closePopup()</script>";
                echo "<script>window.location = 'login.php';</script>";
            }
        ?>
        <style>
            body {
                background-color: #FFFFFF;
            }
        </style>
    </head>
    <body>
        <?php
            if ($_GET['event'] == "open") {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $guests = $_POST['guests'];
                    $total = $guests + 1;
                    $query = "INSERT INTO `opendaybookings` (userid, eventid, guests, total) VALUES (" . $_SESSION['userid'] . ", " . $_SESSION['opendayid'] . ", $guests, $total)";
                    if (mysqli_query($conn, $query)) {
                        $query2 = "SELECT * FROM `opendaybookings` WHERE userid = " . $_SESSION['userid'] . " AND eventid = " . $_SESSION['opendayid'] . " AND guests = $guests AND total = $total";
                        $result = mysqli_query($conn, $query2);
                        $row = mysqli_fetch_assoc($result);
                        $confno = $row['bookingid'];
                        $query3 = "UPDATE `opendays` SET booked = booked + 1 WHERE eventid = " . $_SESSION['opendayid'];
                    } else {
                        echo "<script>alert('Booking failed.');</script>";
                        echo "<script>closePopup()</script>";
                    }
                }
            }
        ?>
        <div id="confirm">
            <?php
                echo "<h1>Booking Confirmed</h1><hr><p>Your booking has been confirmed. You will receive an email with your booking details shortly.</p><hr><p>Your Booking Reference: " . $confno . "</p><br><p>number of guests: " . $guests;
            ?>
        </div>
    </body>
</html>