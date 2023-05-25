<html>

<head>
<link rel="stylesheet" href="CSS/slideshow.css">


</head>

<body bgcolor="#1b1b1b">

<div class="container">

<img class="mySlides" src="poze/slideshow/img1.jpg">
<img class="mySlides" src="poze/slideshow/img2.jpg">
<img class="mySlides" src="poze/slideshow/img3.jpg">
<img class="mySlides" src="poze/slideshow/img4.jpg">
<img class="mySlides" src="poze/slideshow/img5.jpg">
<img class="mySlides" src="poze/slideshow/img6.jpg">
<img class="mySlides" src="poze/slideshow/img7.jpg">
<img class="mySlides" src="poze/slideshow/img8.jpg">
<img class="mySlides" src="poze/slideshow/img9.jpg">
<img class="mySlides" src="poze/slideshow/img10.jpg">

</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>

</html>