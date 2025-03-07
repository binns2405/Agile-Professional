<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spear Phishing Simulator</title>
    <style>
	body {
    background-color: black;
    color: red;
    font-family: monospace;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.cli-container {
    width: 80%;
    max-width: 800px;
    border: 1px solid red;
    padding: 20px;
    background-color: #000;
    overflow-y: auto;
    height: 400px;
    margin-bottom: 20px;
}
		.title {
    font-size: 12px; /* Smaller font size for ASCII art */
    margin-bottom: 10px;
    color: red;
    white-space: pre; /* Preserve formatting for ASCII art */
}


#cli-output {
    white-space: pre-wrap;
    word-wrap: break-word;
    margin: 0;
}

.button-container {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
}

button {
    background-color: red;
    color: black;
    border: none;
    padding: 10px 20px;
    font-family: monospace;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: darkred;
    color: white;
}
	</style>
</head>
<body>
	
	<div class="title">
        <pre>
		
███████╗██████╗ ███████╗ █████╗ ██████╗     ██████╗ ██╗  ██╗██╗███████╗██╗  ██╗███████╗██████╗ 
██╔════╝██╔══██╗██╔════╝██╔══██╗██╔══██╗    ██╔══██╗██║  ██║██║██╔════╝██║  ██║██╔════╝██╔══██╗
███████╗██████╔╝█████╗  ███████║██████╔╝    ██████╔╝███████║██║███████╗███████║█████╗  ██████╔╝
╚════██║██╔═══╝ ██╔══╝  ██╔══██║██╔══██╗    ██╔═══╝ ██╔══██║██║╚════██║██╔══██║██╔══╝  ██╔══██╗
███████║██║     ███████╗██║  ██║██║  ██║    ██║     ██║  ██║██║███████║██║  ██║███████╗██║  ██║
╚══════╝╚═╝     ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝    ╚═╝     ╚═╝  ╚═╝╚═╝╚══════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
                                                                                               

        </pre>
    </div>
    <div class="cli-container">
        <pre id="cli-output"></pre>
    </div>
    <div class="button-container">
        <button id="step1-button">1. Select Target</button>
        <button id="step2-button">2. Research Target</button>
        <button id="step3-button">3. Craft Email</button>
        <button id="step4-button">4. Send Email</button>
        <button id="step5-button">5. Simulate Target Interaction</button>
    </div>
    <script src="spearphisingsim.js"></script>
</body>
</html>