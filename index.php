<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>UCLANCYBER | Home</title>
    
    <!-- Styles and Fonts -->
    <link rel="icon" href="uclansolowhitelogo.png" type="image/png">
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
            <li><a href="ddos.php">DDOS</a></li>
            <li><a href="SpearPhising.php">Spear Phising</a></li>
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
        <p>In todays world, we all have some form of information stored on an electronic device, your own medical records will be kept on a national database in the NHS after all. Therefore, the importance of security is progressively more and more critical. That is why we are here to teach you some techniques that can help you keep your own information and your family's information safe and secure from malicious people that intend to exploit you for money or to ruin your life.</p>	
			<a href="#DDOS"><button>Learn about DDOS</button></a>
			<a href="#SpearPhising"><button>Learn about Spear Phising</button></a>
    </section>

    <!-- Second Section (Learn About DDOS) -->
    <section id="DDOS" class="red-section">
        <h2 class="Section-Title">DDOS</h2>
        <p>Struggle logging onto Fortnite? Amazon not loading? Their servers may have been targeted by a DDOS attack. \n DOS (Denial of Service) and DDOS (Distributed Denial of Service) attacks both involve the mass increase in network traffic, with the intention of hindering performance and possibly bringing services to a halt.</p>
		<a href="ddos.php"><button>Learn more about DDos</button></a>
		<a href="#SpearPhising"><button>Learn about Spear Phising</button></a>
    </section>
	
	<!-- Third Section (Learn About Spear Phising) -->
	    <section id="SpearPhising" class="black-section">
        <h2 class="Section-Title">Spear Phising</h2>
        <p>Ever recieved an email, text or phonecall from an unknown address or number? Did they claim to be from a big company like Sky, Virgin or a bank? You may have been a target of a phishing attempt. An attack that aims to exploit human weaknesses to gather sensitive information such as addresses, login information and security questions.</p>
		<a href="SpearPhising.php"><button>Learn about Spear Phising</button></a>
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
