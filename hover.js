<script>
  // Get the image element
  const img = document.getElementById('myImage');
  
  // Add a mouseover event listener to the image
  img.addEventListener('mouseover', function() {
    img.style.filter = 'grayscale(0%)';
  });
  
  // Add a mouseout event listener to the image
  img.addEventListener('mouseout', function() {
    img.style.filter = 'grayscale(100%)';
  });
</script>// JavaScript Document