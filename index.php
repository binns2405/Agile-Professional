<!DOCTYPE html>
<!-- Made By Michael Denny 2024 -->
<html lang="en">
  <head>
	<!-- link to the stylesheet -->
    <link rel="stylesheet" type="text/css" href="../CSS/MainStyleSheet.css">
    <meta charset="UTF-8">
    <meta name="description" content="Cyber test">
    <title>Main</title>
	  <script src="../JS/Navigation.js"></script>
  </head>

  <body class="fade-in">
    <div id="top"><a href="../../Webpages/top"></a></div>
	  
     <header>
        <!-- header bar that is going to appear at the top of the screen -->
        <img src="../Images/logo.svg" alt="UCLan logo" class="logo">
        <h2 style="color: white; font-size: 150%; width: 200px; margin-right: 20px;">Cyber Test</h2>
        <nav>
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="myNav">
                <li class="navList"><a href="index.php">Home</a></li>
                <li class="navList"><a href="#">TEST</a></li>
                <li class="navList"><a href="#">About us</a></li>
				<li class="navList" id="logout"><a href="#">Login</a></li>
				<li class="navList" id="logout"><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>
	  
	  

    <div class="wrapper">
      <!-- Main container to house all information -->
      <div>
		  
<h1 style="text-align: center;">Current Offers!</h1>
		  
		  <!---Image_Slide------>
<div class="slider">

    <div class="prev" onclick="changeSlide(-1)">&#10094;</div>
    <div class="next" onclick="changeSlide(1)">&#10095;</div>
</div>

        <h1>Test</h1>
        <p>
          TESTING
        </p>
        <p>
          Testing
        </p>
      </div>

      <main>
        <h1>TESTING</h1>
        <video controls class="video" width="500" height="350">
          <source src="../Videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <h1>TESTING</h1>
        <iframe
          class="video"
          width="500"
          height="350"
          src="https://www.youtube.com/embed/EI_lco-qdw8?si=kpAiop9YepciIc6P"
          title="YouTube video player"
          style="border: 0;"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </main>
    </div>

    <!-- Footer -->
    <footer>
      <div class="FooterCol-1">
        <h3><u>Links</u></h3>
        <p><a href="#">TESTING</a></p>
      </div>

      <div class="FooterCol-2">
        <h3><u>Contact</u></h3>
        <a href="#"
          >Email: TESTING@TESTING</a
        >
        <p>Phone: 01210 18021</p>
      </div>

      <div class="FooterCol-3">
        <h3><u>Location</u></h3>
        <p>University of Central Lancashire Students' Union</p>
        <p>Fylde Road, Preston , PR1 7BY</p>
      </div>
    </footer>
	  <script src="../JS/Slider.js" ></script>
  </body>
</html>
