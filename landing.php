<!-- 
CO2403
The Agile Professional
Assessment 1
Academic Year: 2024/2025

Backend Web Development:
Adam Binns

Frontend Web Development:
Michael Denny

Research and support:
Charlie Lightfoot
Harvey Buckel

File: login.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="UTF-8">
    <meta name="description" content="Page Selection">
    <title>Agile professional</title>
  </head>

	<body>
		
		<div class="container">
		<h2>UCLAN Work</h2>
		<h4>Please select a webpage via the options listed below:</h4>
			
		<div class="listcontainer">
			<ul>
				<li class="list-item1"><a href="Assignment1/Webpages/login.php">Assignment Webpage</a></li>
				<br>
				<li><a href="Introduction_PHP/index.php">Introduction to PHP Webpages</a></li>
			</ul>
		</div>
			<p>Created by: Michael Denny (2024)</p>
		</div>
		
		<div class="inner-cursor"></div>
		<div class="outer-cursor"></div>
		<div class="nocursor"></div>
		
		
		
		 <script>
    // Get the body element
    const body = document.body;

    // Get the list item
    const listItem1 = document.querySelector('.list-item1');

    // Add event listener for mouseenter event (hover)
    listItem1.addEventListener('mouseenter', function() {
      // Change the background image of the body
      body.style.backgroundImage = "url('Assignment1/Images/BackgroundImages/Assignment1.PNG')";
    });

    // Add event listener for mouseleave event (hover out)
    listItem1.addEventListener('mouseleave', function() {
      // Restore the original background image of the body
      body.style.backgroundImage = "url('Assignment1/Images/BackgroundImages/MountainBackground.jpg')";
    });
  </script>
		
<script>
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
</script>

		
		
		
	</body>
</html>
