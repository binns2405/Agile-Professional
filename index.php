<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>UCLANCYBER | Home</title>
    
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
            <li><a href="index.php">Home</a></li>
            <li><a href="Projects.html">DDOS</a></li>
            <li><a href="SpearPhising.html">Spear Phising</a></li>
        </ul>
    </nav>

    <!-- Overlay With Video -->
    <section class="black-section">
		 <div class="image-overlay">
		<a href="#FirstSection"><button>Learn More</button></a>
		<img src="white.png" alt="Overlay Image">
			 		
        </div>
        <video autoplay loop muted class="myVideo" style="width: 2500px; height: 2000px;">
            <source src="Videos/Free Static Glitch Screen - Red Retro TV.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
		
    </section>
	
		<!-- First Section (CyberSecurity) -->
	    <section id="FirstSection" class="black-section">
        <h2 class="Section-Title">What is CYBERSECURITY</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
			<a href="#DDOS"><button>Learn about DDOS</button></a>
			<a href="#SpearPhising"><button>Learn about Spear Phising</button></a>
    </section>

    <!-- Second Section (Learn About DDOS) -->
    <section id="DDOS" class="red-section">
        <h2 class="Section-Title">DDOS</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<button>Learn more about DDOS</button>
		<a href="#SpearPhising"><button>Learn about Spear Phising</button></a>
    </section>
	
	<!-- Third Section (Learn About Spear Phising) -->
	    <section id="SpearPhising" class="black-section">
        <h2 class="Section-Title">Spear Phising</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<button>Learn more about Spear Phising</button>
		<a href="#DDOS"><button>Learn about DDOS</button></a>
    </section>

	<!------Cursors--->
      <div class="inner-cursor"></div>
      <div class="outer-cursor"></div>

    <!-- Scripts -->
	<script src="mouse.js"></script>
	<script src="test.js"></script>
    <script src="MainScript.js"></script>

</body> 
</html>
