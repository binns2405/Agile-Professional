function popup(url) {
    // Create overlay
    var overlay = document.createElement('div');
    overlay.style.position = 'fixed';
    overlay.style.top = 0;
    overlay.style.left = 0;
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    overlay.style.zIndex = 90;
    document.body.appendChild(overlay);

    // Create iframe
    var iframe = document.createElement('iframe');
    iframe.src = url;
    iframe.style.width = '80%';
    iframe.style.height = '80%';
    iframe.style.position = 'fixed';
    iframe.style.top = '50%';
    iframe.style.left = '50%';
    iframe.style.transform = 'translate(-50%, -50%)';
    iframe.style.zIndex = 999; // Ensure the iframe is above the overlay
    overlay.appendChild(iframe);

    // Create close button
    var closeButton = document.createElement('button');
    closeButton.innerHTML = 'Close';
    closeButton.style.position = 'absolute';
    closeButton.style.top = '10px';
    closeButton.style.right = '10px';
    closeButton.style.padding = '10px 20px';
    closeButton.style.fontSize = '16px';
    closeButton.style.zIndex = 10001;  // Ensure button is above the iframe
    closeButton.style.backgroundColor = 'red';
    closeButton.style.color = 'white';
    closeButton.style.border = 'none';
    closeButton.style.cursor = 'pointer';
    overlay.appendChild(closeButton);
    closeButton.id = 'closeButton';

    // Debugging - Check if close button is created and clickable
    console.log("Overlay and button created");

    // Handle closing popup
    function closePopup() {
        console.log("Close button clicked"); // Debugging log
        overlay.remove();
        closeButton.remove();
        iframe.remove();
        contentWrapper.style.filter = 'none'; // Remove blur effect
    }

    // Attach close functionality to the close button
    closeButton.addEventListener('click', function() {
        console.log('Button clicked');
        closePopup();
    });
    document.body.appendChild(overlay);
    console.log("Overlay appended:", overlay); // Verify if overlay is added

    
}
