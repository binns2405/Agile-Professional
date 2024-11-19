// Wait for the window to load
window.onload = function() {
    console.log('Page loaded, creating grid...'); // Check if the script is running
    // Create the loading grid container
    const gridContainer = document.createElement('div');
    gridContainer.id = 'loadingGrid';
    document.body.appendChild(gridContainer);

    // Create a 5x5 grid
    const rows = 5;
    const cols = 5;

    for (let i = 0; i < rows * cols; i++) {
        const block = document.createElement('div');
        block.classList.add('grid-block');
        gridContainer.appendChild(block);
    }

    // Set a timeout to hide the loading grid after 3 seconds
    setTimeout(() => {
        gridContainer.style.display = 'none';
    }, 3000);
};
