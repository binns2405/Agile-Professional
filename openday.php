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
        </div>
      </div>
  </body>