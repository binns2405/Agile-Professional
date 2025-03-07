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
    
        <!-- First Section (CyberSecurity) -->
        <section id="FirstSection" class="red-section">
        <h2 class="Section-Title">What is DDOS</h2>
        <p>
            <strong>What is DDOS/DOS:</strong><br>
            Denial of service attacks are where a server is targeted with multiple requests to create traffic with the intention of affecting server performance, possibly leading to crashing the server.<br><br>
            A standard DOS (Denial of Service) attack involves one machine sending multiple requests to cause traffic, while a DDOS (Distributed Denial of Service) attack involves multiple machines sending requests instead of the attack originating from a single machine.<br><br>
            <strong>Key Differences:</strong><br>
            - DOS attacks are easier to detect and locate the source since the requests all originate from a single location.<br>
            - DDOS attacks are faster and more impactful as multiple machines remove any bottleneck limitations.<br>
            - DDOS attacks utilize malware-infected machines controlled by a Command-and-Control server.<br><br>
            A form of DDOS is using malware to create a botnet, allowing attackers to coordinate mass attacks while making it harder to trace the origin.<br><br>
            <strong>How does it work:</strong><br>
            A DDOS/DOS attack aims to create multiple connections with a web server, creating excess traffic for the TCP (Transmission Control Protocol) to process. By sending multiple packets with an empty payload, the TCP still recognizes the packet as a request and consumes resources to process it.<br><br>
            <strong>How to prevent DDOS/DOS:</strong><br>
            - **Reducing attack surface exposure:** Minimizing the number of vulnerable entry points can make it harder for attackers to exploit weak areas.<br>
            - **Using an Anycast network route:** Distributing traffic across multiple servers reduces the load and prevents overload.<br>
            - **Real-time adaptive threat monitoring:** Watching for anomalous server activity can help mitigate an attack before it becomes severe.<br>
            - **Caching:** Storing website data locally can minimize unnecessary data requests, reducing traffic impact.<br><br>
            <em>References:</em><br>
            - DoS Attack vs. DDoS Attack: Key Differences? | Fortinet<br>
            - TCP: How the Transmission Control Protocol works - IONOS<br>
            - How to prevent DDoS attacks | Methods and tools | Cloudflare<br>
            - What is an attack surface? | Cloudflare<br>
            - What is Anycast? | How does Anycast work? | Cloudflare<br>
        </p>
    </section>

    <!------Cursors--->
    <div class="inner-cursor"></div>
    <div class="outer-cursor"></div>

    <!-- Scripts -->
    <script src="mouse.js"></script>
    <script src="MainScript.js"></script>
</body> 
</html>