<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="pagal.css">
<style>
.mySlides {display:none;}
</style>

  </head>
<body>
<nav class="navbar-inverse" style="display: block; ">
  <div class="container-fluid">
    <div class="navbar navbar-header">
      <a class="navbar-brand" href="#">Srank Portal</a>
    </div>
    <ul class="nav navbar-header" style="color:white;" id="linkk">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">OFFICIAL WEBSITE</a></li>
      <li class=""><a href="ABOUTUS.HTML">ABOUT US</a></li>
      <li class=""><a href="Contactus.html">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-right" style="color:white;">
      <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-4">
    <h2 class="w3-center">Manual Slideshow</h2>

  <div class="w3-content w3-display-container">
    <img class="mySlides" src="img_snowtops.jpg" style="width:100%">
    <img class="mySlides" src="img_lights.jpg" style="width:100%">
    <img class="mySlides" src="img_mountains.jpg" style="width:100%">
    <img class="mySlides" src="img_forest.jpg" style="width:100%">

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div>

  <script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
  }
  </script>

    </div>
</div>
</div>


</body>
</html>