// Get the body element
const body = document.body;

// Get the list item
const listItem1 = document.querySelector('.list-item1');
const listItem2 = document.querySelector('.list-item2');
const listItem3 = document.querySelector('.list-item3');

// Add event listener for mouseenter event (hover)
listItem1.addEventListener('mouseenter', function() {
  // Change the background image of the body
  body.style.backgroundImage = "url('Media/mountain.jpg')";
});

// Add event listener for mouseleave event (hover out)
listItem1.addEventListener('mouseleave', function() {
  // Restore the original background image of the body
  body.style.backgroundImage = "";
});

// Add event listener for mouseenter event (hover)
listItem2.addEventListener('mouseenter', function() {
    // Change the background image of the body
    body.style.backgroundImage = "url('Media/mountain.jpg')";
});
  
  // Add event listener for mouseleave event (hover out)
listItem2.addEventListener('mouseleave', function() {
    // Restore the original background image of the body
    body.style.backgroundImage = "";
});

// Add event listener for mouseenter event (hover)
listItem3.addEventListener('mouseenter', function() {
    // Change the background image of the body
    body.style.backgroundImage = "url('Media/mountain.jpg')";
});
  
  // Add event listener for mouseleave event (hover out)
listItem3.addEventListener('mouseleave', function() {
    // Restore the original background image of the body
    body.style.backgroundImage = "";
});

document.addEventListener("DOMContentLoaded", function() {
let innerCursor = document.querySelector(".inner-cursor");
let outerCursor = document.querySelector(".outer-cursor");

if (innerCursor && outerCursor) {
  document.addEventListener("mousemove", moveCursor);

  function moveCursor(e) {
    let x = e.clientX;
    let y = e.clientY;
    innerCursor.style.left = `${x}px`;
    innerCursor.style.top = `${y}px`;
    outerCursor.style.left = `${x}px`;
    outerCursor.style.top = `${y}px`;
  }

  let links = Array.from(document.querySelectorAll("a"));

  links.forEach((link) => {
    link.addEventListener("mouseover", () => {
      innerCursor.classList.add("grow");
    });
    link.addEventListener("mouseleave", () => {
      innerCursor.classList.remove("grow");
    });
  });
} else {
  console.error("Inner cursor or outer cursor elements not found.");
}
});
