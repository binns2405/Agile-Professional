<!DOCTYPE html>
<!-- Made By Michael Denny 2024 -->
<html lang="en">
  <head>
	  
     <style>
		 
@font-face {
    font-family: 'Uni Thin';
    src: url("Assignment1/Fonts/UniSansThin.woff") format("woff");   /* THIN */
}

@font-face {
    font-family: 'Uni Heavy';
    src: url("Assignment1/Fonts/UniSansHeavy.woff") format("woff"); /* HEAVY */
}

body {
	margin: 0; /* Remove default margin */
  	padding: 0; /* Remove default padding */
  	width: 100%; /* Set width to 100% */
  	height: 100vh; /* Set height to 100% of the viewport height */
    background-color: #f4f4f4;
	background-image: url("Media/mountain.jpg");
	background-size: cover; /* This will make the background image cover the entire body */
    background-position: center; /* This will center the background image */
    background-repeat: no-repeat; /* This will prevent the background image from repeating */
	background-size: auto; /* Set background image size to its intrinsic size */
    background-attachment: fixed; /* Keep background image fixed while scrolling */
	transition: background-image 0.4s ease-out;
	cursor: none !important; /* Hide the default mouse cursor */

}

.container {
	position: fixed; /* Position the container */
    top: 50%; /* Align the top edge of the container to the vertical center of the viewport */
    left: 50%; /* Align the left edge of the container to the horizontal center of the viewport */
    transform: translate(-50%, -50%); /* Move the container back by half of its own width and height */
    max-width: 400px;
    margin: 0 auto; /* Center the container horizontally */
    padding: 50px;
    background-color: rgba(0, 0, 0, 0.7); /* Dark grey 50% opacity */
    border-radius: 12px;
    text-align: center;
}
		 
.listcontainer {
	border: 1px solid white; 
}

h1, h2, h3, h4{
    text-align: center;
    font-family: 'Uni Heavy', sans-serif;
	color: white;
}
		 
a, p{
    text-align: center;
	font-size: 105%;
    font-family: 'Uni Thin', sans-serif;
	color: white;
	text-decoration: none;
}
		 
a:hover{
	text-align: center;
	color: gray;
}
		 
p{
	font-family: 'Uni Thin', sans-serif;
	color: white;	
}

		 
a, ul, li, ol{
	text-decoration: none;
			
}
		 
li::marker {
   color: white;
}
		 
/* Change background image on hover */
.list-item1:hover ~ body {
    background-image: url("Media/Assignment1.PNG");
  }
		 
.list-item2:hover ~ body {
    background-image: url("Media/MountainPink.jpg");
  }
		 
.list-item3:hover ~ body {
    background-image: url("Media/OrangeMountains.jpg");
  }
		 
.inner-cursor{
  position: fixed;
  left: 10px;
  width: 10px;
  height: 10px;
  transform: translate(-50%, -50%);
  background-color: white;
  mix-blend-mode: difference;
  border-radius: 50%;
  pointer-events: none;
  transition: width 0.5s, height 0.5s;
  z-index:999999;
}

.inner-cursor.grow {
  width: 25px;
  height: 25px;
  transition: width 0.5s, height 0.5s;
  z-index:999999;
  position: fixed;
  /* Your other styles */
  display: block; /* Ensure the custom cursor is always visible */
}

.outer-cursor{
  position: fixed;
  left: 10px;
  width: 25px;
  height: 25px;
  transform: translate(-50%, -50%);
  border: 1px solid white;
  mix-blend-mode: difference;
  border-radius: 50%;
  pointer-events: none;
  transition: 0.1s;
  z-index:999999;
  position: fixed;
  /* Your other styles */
  display: block; /* Ensure the custom cursor is always visible */
}

a {
  cursor: none;
}

a.link {
    cursor: none;
}

a.img {
    cursor: none;
}

a.href {
    cursor: none;
}

.nocursor {
  cursor: none !important;
}
	 
    </style>
	  
    <!-- link to the stylesheet -->
    <meta charset="UTF-8">
    <meta name="description" content="Page Selection">
    <title>Agile Professional UCLAN Work</title>
  </head>

	<body>
		
		<div class="container">
		<h2>UCLAN Cybersecurity Prospects</h2>
		<h4>Please select a webpage via the options listed below:</h4>
			
		<div class="listcontainer">
			<ul>
				<li class="list-item1"><a href="openday.php">Open Days</a></li>
				<br>
				<li class="list-item2"><a href="applicant.php">Applicant Days</a></li> <!--- Code needs updating to support list item 2 css and javascript -->
				<br>
				<li class="list-item3"><a href="induction.php">First Year Induction</a></li><!--- Code needs updating to support list item 3 css and javascript -->
			</ul>
		</div>
			<p>Created by: Michael, Adam, Harvey, Charlie</p>
		</div>
		
		<div class="inner-cursor"></div>
		<div class="outer-cursor"></div>
		<div class="nocursor"></div>
		
		
		
		 <script>
    // Get the body element
    const body = document.body;

    // Get the list item
    const listItem1 = document.querySelector('.list-item1');
	const listItem2 = document.querySelector('.list-item2');
	const listItem3 = document.querySelector('.list-item3');

    // Add event listener for mouseenter event ONE (hover)
    listItem1.addEventListener('mouseenter', function() {
      // Change the background image of the body
      body.style.backgroundImage = "url('Media/Assignment1.PNG')";
    });

    // Add event listener for mouseleave event ONE (hover out)
    listItem1.addEventListener('mouseleave', function() {
      // Restore the original background image of the body
      body.style.backgroundImage = "url('Media/mountain.jpg')";
    });
			 
     // Add event listener for mouseenter event TWO (hover)
    listItem2.addEventListener('mouseenter', function() {
      // Change the background image of the body
      body.style.backgroundImage = "url('Media/MountainPink.jpg')";
    });

    // Add event listener for mouseleave event TWO (hover out)
    listItem2.addEventListener('mouseleave', function() {
      // Restore the original background image of the body
      body.style.backgroundImage = "url('Media/mountain.jpg')";
    });
			 
	     // Add event listener for mouseenter event THREE (hover)
    listItem3.addEventListener('mouseenter', function() {
      // Change the background image of the body
      body.style.backgroundImage = "url('Media/OrangeMountains.jpg')";
    });

    // Add event listener for mouseleave event THREE (hover out)
    listItem3.addEventListener('mouseleave', function() {
      // Restore the original background image of the body
      body.style.backgroundImage = "url('Media/mountain.jpg')";
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
