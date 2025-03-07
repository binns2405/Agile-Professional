<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDoS Simulation</title>
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

.title {
    font-size: 12px; /* Smaller font size for ASCII art */
    margin-bottom: 10px;
    color: red;
    white-space: pre; /* Preserve formatting for ASCII art */
}

.status-container {
    margin-bottom: 10px;
    font-size: 18px;
    color: red;
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

#cli-output {
    white-space: pre-wrap;
    word-wrap: break-word;
    margin: 0;
}

.status-bar {
    display: flex;
    justify-content: space-between;
    width: 80%;
    max-width: 800px;
    margin-bottom: 20px;
    font-size: 14px;
    color: red;
}

.status-bar div {
    padding: 5px 10px;
    background-color: #222;
    border: 1px solid red;
    border-radius: 4px;
}

.button-container {
    text-align: center;
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
}
	</style>
</head>
<body>
    <body>
    <div class="title">
        <pre>
██████╗ ██████╗  ██████╗ ███████╗    ██████╗  ██████╗  ██████╗ ████████╗███████╗██████╗ 
██╔══██╗██╔══██╗██╔═══██╗██╔════╝    ██╔══██╗██╔═══██╗██╔═══██╗╚══██╔══╝██╔════╝██╔══██╗
██║  ██║██║  ██║██║   ██║███████╗    ██████╔╝██║   ██║██║   ██║   ██║   █████╗  ██████╔╝
██║  ██║██║  ██║██║   ██║╚════██║    ██╔══██╗██║   ██║██║   ██║   ██║   ██╔══╝  ██╔══██╗
██████╔╝██████╔╝╚██████╔╝███████║    ██████╔╝╚██████╔╝╚██████╔╝   ██║   ███████╗██║  ██║
╚═════╝ ╚═════╝  ╚═════╝ ╚══════╝    ╚═════╝  ╚═════╝  ╚═════╝    ╚═╝   ╚══════╝╚═╝  ╚═╝
        </pre>
    </div>
    <div class="status-container">
        <span id="target-status">Target Online</span>
    </div>
    <div class="cli-container">
        <pre id="cli-output"></pre>
    </div>
    <div class="status-bar">
        <div id="total-packets">Total Packets Sent: 0</div>
        <div id="packets-per-second">Packets Per Second: 0</div>
        <div id="total-bots">Total Bots Connected: 0</div>
    </div>
    <div class="button-container">
        <button id="ddos-button">Start DDoS</button>
    </div>
    <script src="ddosscript.js"></script>
</body>
</html>
