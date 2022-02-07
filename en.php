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

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4,.bgimg-5 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url("photos/main10.jpg");
  min-height: 100%;
}

/* Second image (Training) */
.bgimg-2 {
  background-image: url("photos/training.png");
  min-height: 400px;
}

/* Third image (Projects) */
.bgimg-3 {
  background-image: url("photos/nor3.jpg");
  min-height: 400px;
}
/* Fourth image (Partners) */
.bgimg-4 {
  background-image: url("photos/partners2.jpg");
  min-height: 400px;
}

/* Fifth image (Contacts) */
.bgimg-5 {
  background-image: url("photos/contact.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1300px) {
  .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-padding-small" >
  <div class="w3-bar w3-white w3-animate-top" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-blue w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars" style="font-size:48px"></i>
    </a>
      <a href="en.php#home" class="w3-bar-item w3-button w3-hover-blue w3-large"><img src="photos/logosmall6.png"></a>
      <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-user"></i> About us</a>
      <a href="#training" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-th"></i> Trainings</a>
      <a href="#projects" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-gear"></i> Projects</a>
      <a href="#partners" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-black-tie"></i> Partners</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-envelope"></i> Contact</a>
      <a href="rekrutacja.php" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><i class="fa fa-clipboard"></i> Recruitment</a>
      <a href="pl.php" class="w3-bar-item w3-button w3-hover-blue w3-hide-small w3-hide-medium w3-xlarge"><img src="photos/pl.png"></a>
      </div>
      <a href="#" class="w3-bar-item w3-button w3-hide-large w3-hide-small w3-right w3-hover-white w3-xlarge">
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-xlarge">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">About us</a>
    <a href="#training" class="w3-bar-item w3-button" onclick="toggleFunction()">Trainings</a>
    <a href="#projects" class="w3-bar-item w3-button" onclick="toggleFunction()">Projects</a>
    <a href="#partners" class="w3-bar-item w3-button" onclick="toggleFunction()">Partners</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
    <a href="rekrutacja.php" class="w3-bar-item w3-button" onclick="toggleFunction()">Recruitment</a>
    <a href="pl.php" class="w3-bar-item" onclick="toggleFunction()"><img src="photos/pl.png"></a>

  </div>
</div>



<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-white w3-xxxlarge w3-wide w3-animate-opacity"><img src="photos/logo.png"><span class="w3-hide-small w3-xxxlarge" style="color: #0072b7;">Akademickie Koło SEP</span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-48" id="about">
  <h3 class="w3-center w3-xxlarge"><b>About us</b></h3>
    <p style="text-align: justify; text-justify: inter-word;">Academic SEP club at the Wrocław University of Science and Technology associates creative students who are willing to engage in scientific and social activities. Our main goal is to broaden our knowledge of widely understood electrical engineering.</p>
    <p style="text-align: justify; text-justify: inter-word;">We care about improving and acquiring new professional qualifications, which is reflected in the organization in conferences, trainings, courses and meetings with representatives of companies in the industry. Visiting schools, we're spreading electrical knowledge among students.</p>
    <p style="text-align: justify; text-justify: inter-word;">We were often rewarded by the main Board of SEP. many times, our members have been the winners during the National Day of Young Electricalian. We are active activists of the Wrocław Branch of SEP. We also care about integration in the electrotechnical environment.</p>
    <p style="text-align: justify; text-justify: inter-word;">So, if you are a person full of ambition, wanting to expand your knowledge in a young, dynamic and organized team, then we invite you to join us. We guarantee that you will spend time with us constructively. We are waiting just for YOU!</p>
    <br>

</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-row w3-section">
    <span class="w3-xlarge">10 years of activity!</span><br>

  </div>
</div>

<!-- Second Parallax Image with Training Text -->
<div class="bgimg-2 w3-display-container" id="training">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"><b>Trainings</b></span>
  </div>
</div>

<!-- Container (Training Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center w3-xxlarge"><b>We invite you to familiarize yourself with our offer.</b></h3><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
  
    <div class="w3-col m4 w3-hover-opacity">
        <h3>AutoCad</h3>
        <img src="photos/courses/autocad2.jpg" style="width:100%; height:275.89px;">
        <p>Enlist today!</p>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Permissions SEP</h3>
        <img src="photos/courses/sep2.jpg" style="width:65%">
        <p>Enlist today!</p>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Solidworks</h3>
        <img src="photos/courses/solidworks1.jpg" style="width:100%; height:275.89px;">
        <p>Enlist today!</p>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Solidworks Electrical</h3>
        <img src="photos/courses/swelectrical.png" style="width:100%; height:275.89px;">
        <p>Enlist today!</p>
    </div>
  
    <div class="w3-col m4 w3-hover-opacity">
        <h3>Eplan</h3>
        <img src="photos/courses/eplan.png" style="width:100%; height:275.89px;">
        <p>Enlist today!</p>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Catia V5</h3>
        <img src="photos/courses/catia1.jpg" style="width:100%; height:275.89px;">
        <p>Enlist today!</p>
    </div>

    <button onclick="myFunction('Demo1')" class="w3-button w3-padding-large w3-hover-blue w3-large" style="margin-top:64px; border-style: solid; border-width: 3px;">
    Show planned courses!</button>
  </div>

  <div id="Demo1" class="w3-hide w3-container w3-center">
    <div class="w3-content w3-container" id="portfolio">
 
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center w3-section w3-animate-right">
  
    <div class="w3-col m4">
        <h3>Photoshop</h3>
        <img src="photos/courses/photoshop.png" style="width:100%">

    </div>

    <div class="w3-col m4">
        <h3>Python</h3>
        <img src="photos/courses/python.png" style="width:100%">

    </div>

    <div class="w3-col m4">
        <h3>Soldering</h3>
        <img src="photos/courses/lut.jpg" style="width:100%">

    </div>

  </div>
  </div>
  </div>
</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10 000+</span><br>
    Trained people
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">300+</span><br>
    Copleted trainings
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">20+</span><br>
    Offered courses
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10+</span><br>
    Years of experience
  </div>
</div>

<!-- Third Parallax Image with Projects -->
<div class="bgimg-3 w3-display-container" id="projects">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"><b>Projects</b></span>
  </div>
</div>

<!-- Container (Projects Section) -->
<div class="w3-content w3-container w3-padding-64">

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-column-padding w3-center">

    <div class="w3-col s6 w3-row-padding" style="padding-bottom:32px"><br>
        <h3 class="w3-xxlarge"><b>Technical Projects</b></h3>    
    </div>

    <div class="w3-col s6 w3-row-padding"style="padding-bottom:32px"><br>
        <h3 class="w3-xxlarge"><b>Event Projects</b></h3>    
    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>Electric cart</h3>
        <img src="photos/tech_projects/gokart2.jpg" style="width:100%">

    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>Electrician ball</h3>
        <img src="photos/org_projects/bal2.png" style="width:96%;">

    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>Electric scooter</h3>
        <img src="photos/tech_projects/hulajnoga2.jpg" style="width:100%">

    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>WSL / ZSL</h3>
        <img src="photos/org_projects/wslzsl.png" style="width:100%;">

    </div>

     <!--<button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">SHOW MORE</button>-->
  </div>
</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-rest w3-section">
    <span class="w3-xlarge">100+</span><br>
    Completed projects
  </div>
  <!--
  <div class="w3-half w3-section">
    <span class="w3-xlarge">100+</span><br>
    Zrealizowanych ??
  </div>-->

</div>

<!-- Fourth Parallax Image with Partners Text -->
<div class="bgimg-4 w3-display-container" id="partners">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><b>Partners</b></span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" >

  <h3 class="w3-center w3-xxlarge"><b>Organisations</b></h3><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">

    <div class="w3-col m3 w3-hover-opacity">
        <a href="http://www.sep.wroc.pl/"><img src="photos/partners/sepwroclaw.jpg" style="width:50%;"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
        <a href="https://pwr.edu.pl/"><img src="photos/partners/pwr.png" style="width:40%"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
    <a href="http://www.not.pl"><img src="photos/partners/not.jpg" style="width:50%;"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
    <a href="https://sep.com.pl/"><img src="photos/partners/sep.png" style="width:50%;"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m4 w3-hover-opacity">
    <a href="http://weny.pwr.edu.pl/"><img src="photos/partners/w5.jpg" style="width:38%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href=""><img src="photos/partners/konsorcjum.jpg" style="width:100%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href="https://fut.edu.pl/"><img src="photos/partners/fut.png" style="width:52%;"></a>
    </div>
  </div>

  <h3 class="w3-center w3-xxlarge"><b>Companies</b></h3><br>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m6 w3-hover-opacity">
    <a href="http://www.procomsystem.pl/"><img src="photos/partners/procom.png" style="width:105%;"></a>
    </div>

    <div class="w3-col m6 w3-hover-opacity">
    <a href="http://www.elektrotim.pl/"><img src="photos/partners/tim.png" style="width:95%;"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m4 w3-hover-opacity">
    <a href="https://botland.com.pl/pl/"><img src="photos/partners/botland.png" style="width:70%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href="http://legrand.pl/"><img src="photos/partners/legrand.png" style="width:70%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href="http://tespol.com.pl/"><img src="photos/partners/tespol.png" style="width:70%;"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m4 w3-hover-opacity">
    <a href="https://www.gkpge.pl/"><img src="photos/partners/pge.png" style="width:70%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href="https://www.sonel.pl/pl/"><img src="photos/partners/sonel.png" style="width:70%;"></a>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
    <a href="https://new.abb.com/"><img src="photos/partners/abb.png" style="width:70%;"></a>
    </div>
  </div>
  
  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m12 w3-hover-opacity">
    <a href="http://radiotechnika.com.pl"><img src="photos/partners/radiotechnika2.jpg" style="width:33%;"></a>
    </div>

  </div>

  <h3 class="w3-center w3-xxlarge"><b>Media</b></h3><br>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m3 w3-hover-opacity">
    <a href="https://www.facebook.com/mlodyelektryk/"><img src="photos/partners/mlodyele.png" style="width:75%;"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
    <a href="https://www.facebook.com/zak.pwr/"><img src="photos/partners/zak.png" style="width:75%;"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
    <a href="http://styk.pwr.edu.pl/"><img src="photos/partners/styk.jpg" style="width:105%;"></a>
    </div>

    <div class="w3-col m3 w3-hover-opacity">
    <a href="https://www.radiowroclaw.pl/"><img src="photos/partners/radiowr.png" style="width:70%;"></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

  <div class="w3-col m6 w3-hover-opacity">
  <a href="https://www.dlastudenta.pl/"><img src="photos/partners/dla.png" style="width:85%;"></a>
  </div>

  <div class="w3-col m6 w3-hover-opacity">
  <a href="http://pe.org.pl/"><img src="photos/partners/przeglad.jpg" style="width:60%;"></a>
  </div>
  </div>

</div>

<!-- Fifth Parallax Image with Contact Text -->
<div class="bgimg-5 w3-display-container" id="contact">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><b>Contact</b></span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center w3-xxlarge">Where to find us</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="photos/d202wyz.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Janiszewskiego 8, bud. D-20, room 312<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +48 71 320 44 20<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: k4sepwroclaw@gmail.com<br>
        <i class="fa fa-facebook-official fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="https://www.facebook.com/AKSEPPWr/">facebook.com/AKSEPPWr/</a><br>
        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="https://www.instagram.com/aksep_wroclaw/">instagram.com/aksep_wroclaw/</a><br>
      </div>
      <p>Contact us:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Send message
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Up</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/AKSEPPWr/" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/aksep_wroclaw/" class="fa fa-instagram w3-hover-opacity"></a>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <p>Copyright by © AK SEP. All rights reserved.</p>
  <p>Created by Maciej Lech</p>
</footer>
 
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
// Acordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>

</body>
</html>