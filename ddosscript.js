let isDDoSRunning = false;
let intervalId;
let totalPacketsSent = 0;
let packetsPerSecond = 0;
let botnetSize = 0;

document.getElementById('ddos-button').addEventListener('click', function() {
    if (isDDoSRunning) {
        stopDDoS();
    } else {
        startDDoSPreAttackSequence();
    }
});

function startDDoSPreAttackSequence() {
    const cliOutput = document.getElementById('cli-output');
    cliOutput.textContent = ""; // Clear the CLI output

    // Step 1: Display target IP address
    cliOutput.textContent += "[+] Target IP Address: 203.0.113.45\n"; // Example public IP
    cliOutput.scrollTop = cliOutput.scrollHeight;

    // Step 2: Test connection to botnet
    setTimeout(() => {
        cliOutput.textContent += "[+] Testing connection to botnet...\n";
        cliOutput.scrollTop = cliOutput.scrollHeight;

        setTimeout(() => {
            // Randomize botnet size between 400 and 600
            botnetSize = Math.floor(Math.random() * 201) + 400;
            cliOutput.textContent += `[+] Botnet connection successful. ${botnetSize} bots online.\n`;
            cliOutput.scrollTop = cliOutput.scrollHeight;

            // Step 3: Start DDoS attack
            setTimeout(() => {
                cliOutput.textContent += "[+] Initiating DDoS attack...\n";
                cliOutput.scrollTop = cliOutput.scrollHeight;
                startDDoS(botnetSize);
            }, 1000); // Wait 1 second before starting the attack
        }, 1000); // Wait 1 second before testing botnet connection
    }, 1000); // Wait 1 second before displaying target IP
}

function startDDoS(botnetSize) {
    isDDoSRunning = true;
    document.getElementById('ddos-button').textContent = 'Stop DDoS';

    // Reset counters
    totalPacketsSent = 0;
    packetsPerSecond = 0;

    // Update status bar every second
    const statusInterval = setInterval(() => {
        document.getElementById('total-packets').textContent = `Total Packets Sent: ${totalPacketsSent}`;
        document.getElementById('packets-per-second').textContent = `Packets Per Second: ${packetsPerSecond}`;
        document.getElementById('total-bots').textContent = `Total Bots Connected: ${botnetSize}`;
        packetsPerSecond = 0; // Reset PPS counter every second
    }, 1000);

    // Start sending packets at a faster rate (e.g., every 10ms)
    intervalId = setInterval(() => sendPacket(botnetSize), 10);

    // Set target status to "Online" when DDoS starts
    document.getElementById('target-status').textContent = 'Target Online';
    document.getElementById('target-status').style.color = 'red';

    // Simulate target going offline after 5 seconds
    setTimeout(() => {
        document.getElementById('target-status').textContent = 'Target Offline';
        document.getElementById('target-status').style.color = 'darkred';
    }, 5000); // 5000ms = 5 seconds
}

function stopDDoS() {
    isDDoSRunning = false;
    document.getElementById('ddos-button').textContent = 'Start DDoS';
    clearInterval(intervalId);

    // Reset target status to "Online" when DDoS stops
    document.getElementById('target-status').textContent = 'Target Online';
    document.getElementById('target-status').style.color = 'red';
}

function generatePublicIp() {
    // Generate a random public IP address
    const firstOctet = Math.floor(Math.random() * 254) + 1; // 1-254
    const secondOctet = Math.floor(Math.random() * 256); // 0-255
    const thirdOctet = Math.floor(Math.random() * 256); // 0-255
    const fourthOctet = Math.floor(Math.random() * 254) + 1; // 1-254

    // Ensure the IP is not in a private range
    if (
        firstOctet === 10 ||
        (firstOctet === 172 && secondOctet >= 16 && secondOctet <= 31) ||
        (firstOctet === 192 && secondOctet === 168)
    ) {
        // If it's a private IP, generate a new one
        return generatePublicIp();
    }

    return `${firstOctet}.${secondOctet}.${thirdOctet}.${fourthOctet}`;
}

function sendPacket(botnetSize) {
    const cliOutput = document.getElementById('cli-output');

    // Generate random packet details
    const sourceIp = generatePublicIp(); // Generate a random public IP
    const packetSize = Math.floor(Math.random() * 1500) + 100; // Random size between 100 and 1600 bytes
    const protocol = ["TCP", "UDP", "ICMP"][Math.floor(Math.random() * 3)]; // Random protocol

    // Display packet details
    const packet = `[${new Date().toLocaleTimeString()}] Packet sent to target:
    Source IP: ${sourceIp}
    Packet Size: ${packetSize} bytes
    Protocol: ${protocol}\n`;
    cliOutput.textContent += packet;
    cliOutput.scrollTop = cliOutput.scrollHeight; // Auto-scroll to the bottom

    // Update counters
    totalPacketsSent++;
    packetsPerSecond++;
}