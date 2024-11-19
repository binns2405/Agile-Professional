let slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  console.log(slides);
  slides[slideIndex - 1].style.display = "block";
}

console.log("changeSlide function called");

window.onload = function() {
  let slideIndex = 1;
  showSlides(slideIndex);

  function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
  }
  
  // Automatically change slide every 3 seconds
  setInterval(function() {
    showSlides(slideIndex);
  }, 3000);
};



