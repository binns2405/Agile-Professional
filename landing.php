<!-- 
CO2403
The Agile Professional
Assessment 1
Academic Year: 2024/2025

Backend Web Development:
Adam Binns

Frontend Web Development:
Michael Denny

Research and support:
Charlie Lightfoot
Harvey Buckel

File: login.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="landing.css">
    <meta charset="UTF-8">
    <meta name="description" content="Page Selection">
    <title>Agile professional</title>
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
      <h4>Please select a webpage via the options listed below:</h4>
        
      <div class="listcontainer">
        <ul>
          <li class="list-item1"><a href="openday.php">Open Days</a></li>
          <br>
          <li class="list-item2"><a href="applicant.php">Applicant Days</a></li>
          <br>
          <li class="list-item3"><a href="induction.php">First Year Induction Information</a></li>
        </ul>
      </div>
		</div>
		
		<div class="inner-cursor"></div>
		<div class="outer-cursor"></div>
		<div class="nocursor"></div>
	
    <script src="landing.js"></script>
  </body>
</html>
