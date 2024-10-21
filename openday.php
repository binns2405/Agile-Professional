<!DOCTYPE html>
<!-- Made By Michael Denny 2024 -->
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="openday.css">
    <!-- link to the stylesheet -->
    <meta charset="UTF-8">
    <meta name="description" content="Uclan Cyber Prospects - Where opportunity creates success">
    <title>Uclan Cyber Prospects</title>
  </head>

  <body class="fade-in">
    <div id="top"><a href="../../Webpages/top"></a></div>
	  
     <header>
        <!-- header bar that is going to appear at the top of the screen -->
		<a href="openday.php">
        <img src="Media/logo.svg" alt="UCLan logo" class="logo">
		</a>
        <h2 style="color: white; font-size: 150%; padding-right: 30px; padding-top: 80px;">UCLAN Cybersecurity Prospects</h2>
        <nav>
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="myNav">
                <li class="navList"><a href="landing.php">Home</a></li>
                <li class="navList"><a href="products.php">Induction</a></li>
                <li class="navList"><a href="cart.php">Login</a></li>
				<li class="navList" id="logout"><a href="#">Logout</a></li>
            </ul>
			<hr>
        </nav>
    </header>
	  
	      <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        $_SESSION['loggedin'] = false;
      }
    ?>
	  

    <div class="wrapper">
      <!-- Main container to house all information -->
        <h1>Open Day Information</h1>
        <p>
			Open days are a great way to get a feel for the university and the course you are interested in. You can meet the tutors, see the facilities and get a feel for the campus. You can also ask any questions you may have about the course or the university.
		</p>
        <p>
          Our cybersecurity courses are held in the C and T building on our Preston campus.
        </p>
		<p>
          You can browse our upcoming open days below and book your place. We look forward to seeing you there!
        </p>
		  
		  
		  <!---Image_Slide------>

		  <div class="carousel">
			<div class="slides">
				<img src="Media/uclaniage1.webp" alt="slide image" class="slide">
				<img src="Media/uclanimage2.webp" alt="slide image" class="slide">
				<img src="Media/uclanimage3.webp" alt="slide image" class="slide">
			</div>
  			<div class="controls">
    			<div class="control prev-slide">&#9668;</div>
    			<div class="control next-slide">&#9658;</div>
  			</div>
		</div>
		


		
      </div>

      <main>
		  <div class="wrapperOpendays">
        <h2>Upcoming Open Days</h2>
		  <p>
		 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat nulla enim, pellentesque dignissim ligula aliquam vitae. Aenean varius dolor leo. Vivamus pretium mi id dictum eleifend. Morbi eleifend velit tempor purus lacinia, in venenatis sapien tempor. Morbi eget interdum turpis. 
		  </p>
		  <p>
		 Fusce nec ornare augue, quis placerat velit. Curabitur pulvinar, nulla id rutrum sollicitudin, mi lorem mollis sapien, non feugiat felis dolor et odio. Etiam tincidunt libero vel arcu efficitur, a iaculis nibh porttitor. Pellentesque semper diam eu tellus maximus, ut dictum dui vestibulum. Praesent vestibulum ornare ornare. Nunc dictum lectus in ligula facilisis, quis consequat metus fermentum.
		</p>
		<p>
		 Fusce ultrices sem a orci molestie, a ultricies purus elementum. Duis gravida porttitor laoreet. Etiam eu fermentum sem. Integer elementum justo nec eros laoreet eleifend. Quisque sollicitudin turpis a urna consectetur, sed ornare quam ultrices. Donec a bibendum tortor, ac rutrum nulla. Cras posuere euismod lacus in dignissim. Sed dui metus, condimentum sed scelerisque sed, lacinia quis lorem. Maecenas imperdiet lectus luctus, pharetra libero sit amet, egestas urna.
		  </p>
			  
			<?php
            include 'connection.inc.php';
            $sql = "SELECT * FROM opendays";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='openday'>";
                echo "<h4>" . $row['date'] . "</h4>";
                echo "<p>Time: " . $row['time'] . "</p>";
                echo "<p>" . $row['location'] . "</p>";
                echo "<p>Course: " . $row['course'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
                if ($row['booked'] == $row['maxCap']) {
                  echo "<p>Sorry, this open day is fully booked.</p>";
                } else {
                  echo "<button onclick='popup(\"opendaybook.php?id=" . $row['eventid'] . "\")'>Book</button>";
                }
                
                echo "</div>";
              }
            } else {
              echo "Sorry, there are no avaliable open days at the moment. Check out this page again soon and look on our socials for more info.";
            }
          ?>
			  
		<script src="iframepop.js"></script>

      </main>
    </div>

    <!-- Footer -->
    <footer>
      <div class="FooterCol-1">
        <h3><u>Links</u></h3>
        <p><a href="https://www.uclansu.co.uk/">Students' Union</a></p>
      </div>

      <div class="FooterCol-2">
        <h3><u>Contact</u></h3>
        <a href="mailto:suinformation@uclan.ac.uk"
          >Email: suinformation@uclan.ac.uk</a
        >
        <p>Phone: 01772 89 3000</p>
      </div>

      <div class="FooterCol-3">
        <h3><u>Location</u></h3>
        <p>University of Central Lancashire Students' Union</p>
        <p>Fylde Road, Preston , PR1 7BY</p>
        <p>Registered in England</p>
        <p>Company Number: 7623917</p>
      </div>
    </footer>
	  <script src="../JS/Slider.js" ></script>
	<script>
		document.querySelector('.menu-toggle').addEventListener('click', function() {
    this.classList.toggle('rotate');
});

	  
	  </script>
		<script>
		const delay = 3000; //ms

const slides = document.querySelector(".slides");
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;

function changeSlide(next = true) {
  if (next) {
    current += current > maxLeft ? -100 : current * -1;
  } else {
    current = current < 0 ? current + 100 : maxLeft;
  }

  slides.style.left = current + "%";
}

let autoChange = setInterval(changeSlide, delay);
const restart = function() {
  clearInterval(autoChange);
  autoChange = setInterval(changeSlide, delay);
};

// Controls
document.querySelector(".next-slide").addEventListener("click", function() {
  changeSlide();
  restart();
});

document.querySelector(".prev-slide").addEventListener("click", function() {
  changeSlide(false);
  restart();
});
	</script>
	  
<script>
		  document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuToggle = document.getElementById('mobile-menu');
            const navList = document.querySelector('.myNav');

            mobileMenuToggle.addEventListener('click', function () {
                navList.classList.toggle('active');
            });
        });
	  </script>

	
  </body>
</html>