<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    
    <!-- Styles and Fonts -->
    <link rel="icon" href="images/websiteicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="MainStyleSheet.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="test.css">
    <style>
        body {
            font-family: 'Oswald', sans-serif;
            overflow: hidden;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: black !important;
        }
    </style>
</head>
<body> 

    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <a class="img" href="index.html">
                <img src="uclansolowhitelogo.png" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Projects.html">Projects</a></li>
            <li><a href="About.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <!-- Overlay With Video -->
    <section class="black-section">
		 <div class="image-overlay">
		<img src="white.png" alt="Overlay Image">
        </div>
        <video autoplay loop muted class="myVideo" style="width: 2500px; height: 2000px;">
            <source src="Videos/Free Static Glitch Screen - Red Retro TV.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </section>

    <!-- Red Section -->
    <section class="red-section">
        <h2>Red Background Section</h2>
        <p>This section has a red background.</p>
    </section>
	
	<!-- Black Section -->
	    <section class="black-section">
        <h2>Black Background Section</h2>
        <p>This section has a black background.</p>
    </section>

    <!-- Policy Bar -->
    <div class="text-bar">
        <a href="docs/privacypolicy.docx" download>PRIVACY POLICY</a>
        <a href="docs/termsofservice.docx" download>TERMS OF SERVICE</a>
        <a href="contact.html">CONTACT US</a>
        <p>© 2023 Epsilon Studios</p>
    </div>
	
	      <!------Cursors--->
      <div class="inner-cursor"></div>
      <div class="outer-cursor"></div>

    <!-- Scripts -->
	<script src="mouse.js"></script>
	<script src="test.js"></script>
    <script src="MainScript.js"></script>

</body> 
</html>
