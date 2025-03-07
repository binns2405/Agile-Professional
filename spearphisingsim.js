const cliOutput = document.getElementById('cli-output');
const steps = [
    {
        title: "Selecting target...",
        details: "Target: John Doe (john@example.com)\nRole: IT Manager at FakeCorp\nInterests: Technology, cybersecurity, hiking...",
    },
    {
        title: "Researching target...",
        details: "Gathered information from LinkedIn, company website, and social media.\nIdentified common email subjects and writing style.",
    },
    {
        title: "Crafting phishing email...",
        details: `Email Content:
-----------------------------
From: support@fake-software-update.com
To: john@example.com
Subject: Urgent: Update Your Software Immediately!

Dear John,

We have detected a critical security vulnerability in your software. To protect your system, please update your software immediately by clicking the link below:

[Update Now](#)

Failure to update within 24 hours may result in system compromise.

Best regards,
Very Real Software Support Team
-----------------------------`,
    },
    {
        title: "Sending email...",
        details: "Email sent to john@example.com.",
    },
    {
        title: "Waiting for target interaction...",
        details: "Target clicked the link!",
    },
];

let currentStep = 0;

document.getElementById('step1-button').addEventListener('click', () => executeStep(0));
document.getElementById('step2-button').addEventListener('click', () => executeStep(1));
document.getElementById('step3-button').addEventListener('click', () => executeStep(2));
document.getElementById('step4-button').addEventListener('click', () => executeStep(3));
document.getElementById('step5-button').addEventListener('click', () => executeStep(4));

function executeStep(stepIndex) {
    if (stepIndex !== currentStep) return; // Ensure steps are executed in order

    const step = steps[stepIndex];
    cliOutput.textContent += `[Step ${stepIndex + 1}] ${step.title}\n`;
    cliOutput.textContent += `${step.details}\n\n`;
    cliOutput.scrollTop = cliOutput.scrollHeight; // Auto-scroll to bottom
    currentStep++;

    // Simulate attack success 
    if (stepIndex === 4) {
        setTimeout(() => {
            cliOutput.textContent += `[!] Target's credentials stolen. Data breach initiated.\n`;
            cliOutput.scrollTop = cliOutput.scrollHeight;
        }, 2000);
    }
}