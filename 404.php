<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>404 | Page Not Found</title>
    
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
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .error-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            z-index: 2;
        }

        .error-container h1 {
            font-size: 5rem;
            margin: 0;
        }

        .error-container p {
            font-size: 1.5rem;
        }

        .error-container a button {
            background: red;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .error-container a button:hover {
            background: darkred;
        }

        .video-container video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
    </style>
</head>
<body> 
    <div class="error-container">
        <h1>404</h1>
        <p>Page Not Found</p>
        <a href="index.php"><button>Return Home</button></a>
    </div>

    <!-- Overlay With Video -->
    <div class="video-container">
        <video autoplay loop muted>
            <source src="Videos/Free Static Glitch Screen - Red Retro TV.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Cursors -->
    <div class="inner-cursor"></div>
    <div class="outer-cursor"></div>

    <!-- Scripts -->
    <script src="mouse.js"></script>
    <script src="MainScript.js"></script>
</body> 
</html>
