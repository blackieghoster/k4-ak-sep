<!DOCTYPE html>
<html>
<title>AK SEP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="photos/favicon.ino" type="image/gif">
<link rel="icon" href="photos/favicon.ico" type="image/x-icon" />

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: black;
  line-height: 1.8;
}


body {
    background-image: url("photos/main2.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
  }

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

.iframe{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-padding-small" >
  <div class="w3-bar w3-white w3-animate-top" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-blue w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars" style="font-size:48px"></i>
    </a>
      <a href="pl.php#home" class="w3-bar-item w3-button  w3-hover-blue w3-large"><img src="photos/logosmall6.png"></a>
      <div class="w3-right w3-hide-small">
      <a href="pl.php#about" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-user"></i> O nas</a>
      <a href="pl.php#training" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-th"></i> Szkolenia</a>
      <a href="pl.php#projects" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-gear"></i> Projekty</a>
      <a href="pl.php#partners" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-black-tie"></i> Partnerzy</a>
      <a href="pl.php#contact" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-envelope"></i> Kontakt</a>
      <a href="rekrutacja.php" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-clipboard"></i> Rekrutacja</a>
      <a href="en.php" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><img src="photos/en.png"></a>
      </div>
      <a href="#" class="w3-bar-item w3-button w3-hide-large w3-right w3-hover-white w3-xlarge">
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-xlarge">
    <a href="#about" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">O nas</a>
    <a href="#training" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Szkolenia</a>
    <a href="#projects" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Projekty</a>
    <a href="#partners" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Partnerzy</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Kontakt</a>
    <a href="rekrutacja.php" class="w3-bar-item w3-button w3-hover-blue" onclick="toggleFunction()">Rekrutacja</a>
    <a href="en.php" class="w3-bar-item w3-hover-blue" onclick="toggleFunction()"><img src="photos/en.png"></a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-container w3-display-topmiddle" style="margin-top:200px">
    <iframe clss="iframe" src="https://docs.google.com/forms/d/e/1FAIpQLSce_me8_gQco7vKgQtcmJUP605KYz0RM-Os1zzRusKZTpzYjw/viewform?embedded=true" width="640" height="2175" frameborder="0" marginheight="0" marginwidth="0">Ładuję...</iframe>
    </div>
</div>

<script>

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>

</body>
</html>



