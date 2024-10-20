<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="openday.css">
    <meta charset="UTF-8">
    <meta name="description" content="Open Day">
    <title>Open Day</title>
    <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        $_SESSION['loggedin'] = false;
      }
    ?>
  </head>

    <body>
        <div class="content-wrapper">
        <div class="container">
            <h2>UCLAN Cybersecurity Prospects</h2>
            <h4>Open Day Information</h4>
            <p>Open days are a great way to get a feel for the university and the course you are interested in. You can meet the tutors, see the facilities and get a feel for the campus. You can also ask any questions you may have about the course or the university.
                <br>Our cybersecurity courses are held in the C and T building on our Preston campus.
                <br>You can browse our upcoming open days below and book your place. We look forward to seeing you there!
            </p>
        </div>

      <div>
        <h3>Upcoming Open Days</h3>
        <div class="upcoming">
          <?php
            include 'connection.inc.php';
            $sql = "SELECT * FROM opendays";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='openday'>";
                echo "<h4>" . $row['date'] . "</h4>";
                echo "<p>Time: " . $row['time'] . "</p>";
                echo "<p>" . $row['location'] . "</p>";
                echo "<p>Course: " . $row['course'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                if ($row['booked'] == $row['maxCap']) {
                  echo "<p>Sorry, this open day is fully booked.</p>";
                } else {
                  echo "<button onclick='popup(\"openday.php?id=" . $row['eventid'] . "\")'>Book</button>";
                }
                
                echo "</div>";
              }
            } else {
              echo "Sorry, there are no avaliable open days at the moment. Check out this page again soon and look on our socials for more info.";
            }
          ?>
        </div>
      </div>
    </div>
    <script src="iframepop.js"></script>
  </body>
</html>