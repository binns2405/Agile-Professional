document.addEventListener('DOMContentLoaded', function() {
    // Disable scrolling while the grid is active
    document.body.style.overflow = 'hidden';



    // Create the SVG image and center it on the screen
    const svgImage = document.createElement('img');
    svgImage.id = 'centerImage';
    svgImage.src = 'UCLANCYBERWhiter.svg';
    svgImage.alt = 'Center SVG';
    document.body.appendChild(svgImage);

    // Create the loading grid container
    const gridContainer = document.createElement('div');
    gridContainer.id = 'loadingGrid';
    document.body.appendChild(gridContainer);

    // Calculate the number of blocks needed to fill the screen
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    const rectWidth = 285;
    const rectHeight = 395;

    // Calculate the number of columns and rows to fill the screen
    const numCols = Math.ceil(screenWidth / rectWidth);
    const numRows = Math.ceil(screenHeight / rectHeight);

    // Set the grid-template-columns and grid-template-rows
    gridContainer.style.gridTemplateColumns = `repeat(${numCols}, ${rectWidth}px)`;
    gridContainer.style.gridTemplateRows = `repeat(${numRows}, ${rectHeight}px)`;

    // Create the grid blocks
    for (let row = 0; row < numRows; row++) {
        for (let col = 0; col < numCols; col++) {
            const block = document.createElement('div');
            block.classList.add('grid-block');
            gridContainer.appendChild(block);

            // Randomly assign black or red as the starting color
            const startColor = Math.random() < 0.5 ? 'black' : 'red';
            block.style.backgroundColor = startColor;

            // Apply animation delay based on the position of each block for staggered effect
            const delay = `${Math.random() * 2}s`;  // Random delay between 0 and 2 seconds
            block.style.animationDelay = delay;

            // Apply fade animation class to each block
            block.classList.add('fade-animation');
        }
    }

    // Set a timeout to fade out the grid after 3 seconds and re-enable scrolling
    setTimeout(() => {
        // Start fading out the entire grid by changing its opacity
        gridContainer.style.transition = 'opacity 1s ease-out';  // Smooth transition for opacity
        gridContainer.style.opacity = '0';  // Fade out the grid

        // After a small delay (to let the fade-out take effect), hide the grid
        setTimeout(() => {
            gridContainer.style.display = 'none';  // Hide the grid
            document.body.style.overflow = 'auto';  // Re-enable scrolling

            // Wait for 1.5 seconds before starting to fade out the red background and SVG
            setTimeout(() => {

                // Fade out the SVG
                svgImage.style.transition = 'opacity 1s ease-out';  // Smooth transition for opacity
                svgImage.style.opacity = '0';  // Fade out the SVG

                // After the red background and SVG fade out, hide them completely
                setTimeout(() => {
                    svgImage.style.display = 'none';  // Hide the SVG
                }, 500);  // Wait for the fade-out transition to complete
            }, 1);  // Delay of 1.5 seconds before fading out the red background and SVG

        }, 1000);  // Wait for 1 second after grid fade-out to ensure the effect is visible

    }, 3000);  // The animation runs for 3 seconds before starting to fade out the entire grid
});
