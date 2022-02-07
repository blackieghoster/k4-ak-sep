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
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-white w3-xxxlarge w3-wide w3-animate-opacity"><img src="photos/logo.png"><span class="w3-hide-small w3-xxxlarge" style="color: #0072b7;">Akademickie Koło SEP</span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-48" id="about">
  <h3 class="w3-center w3-xxlarge"><b>O nas</b></h3>
    <p style="text-align: justify; text-justify: inter-word;">Akademickie Koło SEP przy Politechnice Wrocławskiej zrzesza studentów kreatywnych, chętnych do zaangażowania się w działalność naukową i społeczną. Naszym głównym celem jest poszerzanie wiedzy z zakresu szeroko pojętej elektrotechniki.</p>
    <p style="text-align: justify; text-justify: inter-word;">Zależy nam na doskonaleniu i podnoszeniu kwalifikacji zawodowych, co odzwierciedla się w organizacji konferencji, szkoleń, kursów i spotkań z przedstawicielami firm z branży. Odwiedzając szkoły, szerzymy wiedzę elektryczną wśród uczniów.</p>
    <p style="text-align: justify; text-justify: inter-word;">Często nagradzano nas przez główny Zarząd SEP. Członkowie naszego Koła byli wielokrotnie zwycięzcami ligi podczas Ogólnopolskiego Dnia Młodych Elektryków. Jesteśmy aktywnymi działaczami Oddziału Wrocławskiego SEP. Dbamy także o integrację w środowisku elektrotechnicznym.</p>
    <p style="text-align: justify; text-justify: inter-word;">Zatem, jeśli jesteś osobą pełną ambicji, chcącą poszerzać swoją wiedzę w młodym, dynamicznym i zorganizowanym zespole, to zapraszamy do naszego grona. Gwarantujemy, że z nami konstruktywnie spędzisz czas. Czekamy właśnie na CIEBIE!</p>
    <br>
</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-row w3-section">
    <span class="w3-xlarge">Ponad 10 lat działalności!</span><br>

  </div>
</div>

<!-- Second Parallax Image with Training Text -->
<div class="bgimg-2 w3-display-container" id="training">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"><b>Szkolenia</b></span>
  </div>
</div>

<!-- Container (Training Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center w3-xxlarge"><b>Zapraszamy do zapoznania się z nasza ofertą.</b></h3><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
  
    <a class="w3-col m4 w3-hover-opacity">
        <h3>AutoCad</h3>
        <img src="photos/courses/autocad2.jpg" style="width:100%; height:275.89px;">
        <p>Zapisz się już dziś!</p>
    </a>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Uprawnienia SEP</h3>
        <img src="photos/courses/sep2.jpg" style="width:65%">
        <p>Zapisz się już dziś!</p>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Solidworks</h3>
        <img src="photos/courses/solidworks1.jpg" style="width:100%; height:275.89px;">
        <p>Zapisz się już dziś!</p>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Solidworks Electrical</h3>
        <img src="photos/courses/swelectrical.png" style="width:100%; height:275.89px;">
        <p>Zapisz się już dziś!</p>
    </div>
  
    <div class="w3-col m4 w3-hover-opacity">
        <h3>Eplan</h3>
        <img src="photos/courses/eplan.png" style="width:100%; height:275.89px;">
        <p>Zapisz się już dziś!</p>
    </div>

    <div class="w3-col m4 w3-hover-opacity">
        <h3>Catia V5</h3>
        <img src="photos/courses/catia1.jpg" style="width:100%; height:275.89px;">
        <p>Zapisz się już dziś!</p>
    </div>

    <button onclick="myFunction('Demo1')" class="w3-button w3-padding-large w3-hover-blue w3-large" style="margin-top:64px; border-style: solid; border-width: 3px;">
    Pokaż zaplanowane kursy!</button>
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
        <h3>Lutowanie</h3>
        <img src="photos/courses/lut.jpg" style="width:100%">

    </div>

  </div>
  </div>
  </div>
</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10 000+</span><br>
    Przeszkolonych osób
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">300+</span><br>
    Zrealizowanych szkoleń
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">20+</span><br>
    Oferowanych kursów
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10+</span><br>
    Lat doświadczenia
  </div>
</div>

<!-- Third Parallax Image with Projects -->
<div class="bgimg-3 w3-display-container" id="projects">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide"><b>Projekty</b></span>
  </div>
</div>

<!-- Container (Projects Section) -->
<div class="w3-content w3-container w3-padding-64">

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-column-padding w3-center">

    <div class="w3-col s6 w3-row-padding" style="padding-bottom:32px"><br>
        <h3 class="w3-xxlarge"><b>Projekty Techniczne</b></h3>    
    </div>

    <div class="w3-col s6 w3-row-padding"style="padding-bottom:32px"><br>
        <h3 class="w3-xxlarge"><b>Projekty Organizacyjne</b></h3>    
    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>Gokart elektryczny</h3>
        <img src="photos/tech_projects/gokart2.jpg" style="width:100%">

    </div>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>Bal elektryka</h3>
        <img src="photos/org_projects/bal2.png" style="width:96%;">

    </div>

    <a><div class="w3-col s6 w3-row-padding w3-hover-opacity" >
        <h3>Hulajnoga elektryczna</h3>
        <img src="photos/tech_projects/hulajnoga2.jpg" style="width:100%">

    </div></a>

    <div class="w3-col s6 w3-row-padding w3-hover-opacity">
        <h3>WSL / ZSL</h3>
        <img src="photos/org_projects/wslzsl.png" style="width:100%;">

    </div>
  <!--
    <button class="w3-button w3-padding-large w3-blue" style="margin-top:64px">POKAŻ WIĘCEJ</button>-->
  </div>
</div>

<div class="w3-row w3-center w3-black w3-padding-16">
  <div class="w3-rest w3-section">
    <span class="w3-xlarge">100+</span><br>
    Zrealizowanych projektów
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
     <span class="w3-xxlarge w3-text-white w3-wide"><b>Partnerzy</b></span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64" >

  <h3 class="w3-center w3-xxlarge"><b>Organizacje</b></h3><br>

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

  <h3 class="w3-center w3-xxlarge"><b>Firmy</b></h3><br>

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
     <span class="w3-xxlarge w3-text-white w3-wide"><b>Kontakt</b></span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center w3-xxlarge">Gdzie nas znaleźć</h3>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="photos/d202wyz.png" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Janiszewskiego 8, bud. D-20, pok. 312<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tel: 71 320 44 20<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: k4sepwroclaw@gmail.com<br>
        <i class="fa fa-facebook-official fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="https://www.facebook.com/AKSEPPWr/">facebook.com/AKSEPPWr/</a><br>
        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="https://www.instagram.com/aksep_wroclaw/">instagram.com/aksep_wroclaw/</a><br>
      </div>
      <p>Skontaktuj się z nami:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Imię" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Wiadomość" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Wyślij wiadomość
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Na górę</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/AKSEPPWr/" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/aksep_wroclaw/" class="fa fa-instagram w3-hover-opacity"></a>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <p>Copyright by © AK SEP. Wszystkie prawa zastrzeżone.</p>
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
function myFunction() {
  var z = document.getElementById("Demo1");
  if (z.className.indexOf("w3-show") == -1) {
    z.className += " w3-show";
  } else { 
    z.className = x.className.replace(" w3-show", "");
  }
}

</script>

</body>
</html>