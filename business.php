<html>
<head>
<link rel="stylesheet" href="style1.css">
<style>  
img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 33%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right:46%;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: brown;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 10%;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

</head>


<body>
<div class="main" style="height:920px;">
    
<div class="nav" >
    <div class="navL">
    <h3>HOTEL  ROYAL HILLS</h3>
    </div> 
    
    
    <div class="navR">
    <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="facilities.php">Facilities</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="booking.php">Booking</a></li> 
    <li><a href="contactus.php">Contact Us</a></li> 
    </ul>        
    </div>
    
</div>  
  
<div class="container" style="width:100%; height:820px;">
<div class="1st" style="width:100%; height:60px; text-align:center;padding-top:10px;
background: linear-gradient(180deg,  dodgerblue, white); /* Standard syntax (must be last) */
">
<h3 style="text-align:center; font-size:25px; color:#800000">BUSINESS SERVICES</h3> 
</div>
   
<div class="m" style="height:360;">
<div class="m1" style="height:360px; width:700px; float:left;">
<div class="mySlides">
    <div class="numbertext">1 / 7</div>
    <img src="bu1.webp" width="700" height="360">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 7</div>
    <img src="b12.jpeg" width="700" height="360">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 7</div>
    <img src="b13.jpeg" width="700" height="360">
  </div>
    
  
    <div class="mySlides">
    <div class="numbertext">4 / 7</div>
    <img src="b7.jpeg" width="700" height="360">
  </div>
    
    <div class="mySlides">
    <div class="numbertext">5 / 7</div>
    <img src="b8.jpeg" width="700" height="360">
  </div>
    
    
    <div class="mySlides">
    <div class="numbertext">6 / 7</div>
    <img src="b10.jpeg" width="700" height="360">
  </div>
    
    <div class="mySlides">
    <div class="numbertext">7 / 7</div>
    <img src="b11.jpeg" width="700" height="360">
  </div>

    
  <a class="prev" onclick="plusSlides(-1)" style=" font-size:60px;">❮</a>
  <a class="next" onclick="plusSlides(1)" style=" font-size:60px;">❯</a>

  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</div>
    
<div class="m1" style="height:360px; width:580px; float:right; ">
<p style="padding-left:5px;width:530px; text-align:justify;font-style: italic;">In a busy working day, you may well need to have a quiet place where you can sit and work, read the day's newspapers, watch TV or concentrate on a good book.

</p><br>
    
<p style="padding-left:5px; width:530px; text-align:justify; font-style: italic;">In the hotel's business lounge, which is located to the right of the hotel's reception, you will find a quiet environment with office space, relaxation area, national and international newspapers as well as computers and printers that can be freely used.We provide following business services.

</p><br>
    
<p style="padding-left:5px; width:530px; text-align:justify; font-style: italic;">We provide following business services:</p>
<ul style="margin-left:43px; font-size:19px; font-style: italic;">   
<li>Executive Lounge</li>
<li>Meeting and conference rooms
</li>
<li>Faxing, printing and copying service
</li>
<li>iPads with internet access
</li>
</ul>
    
</div>
</div>

<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:10px;">Fax and Photocopying
</h2>
    
<p style="padding-left:20px; width:1200px; text-align:justify; font-size:20px;font-style: italic;margin-right:100px; padding-top:5px;">If you need assistance to send a fax, or you need a few documents photocopied, our professional reception staff are ready to help you. The only thing you need to do is enquire at the hotel's reception and we will take care of the rest.

</p>

<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:15px;">Executive Lounge</h2>
    
<p style="padding-left:20px; width:1200px; text-align:justify; font-size:20px;font-style: italic;margin-right:100px; padding-top:5px;"> When you book an Executive room, you have automatic access to our lounge. Hot and cold drinks as well as snacks are served in the lounge, which, situated on the 6th floor, affords views over the city, and in good weather, you can sit out on the terrace.

There is free access to the business lounge for all guests who have booked an Executive room or Arp Gold Loyalty members. If you have booked online, access can be purchased in reception.
</p>

<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:15px;">Meeting and conference rooms
</h2>
    
<p style="padding-left:20px; width:1200px; text-align:justify; font-size:20px;font-style: italic;margin-right:100px; padding-top:5px;">At the top of the hotel, The Square has two exclusive meeting rooms, each seating 25. Both rooms offer a fantastic view over the towers and rooftops of Copenhagen.
</p>

<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:15px;">iPads with internet access
</h2>
    
<p style="padding-left:20px; width:1200px; text-align:justify; font-size:20px;font-style: italic;margin-right:100px; padding-top:5px;">In addition, we have two iPads with Internet access for free use. It is possible to print from both iPads via the two wireless printers. Naturally, this is also possible if you have your own equipment with you.
</p><br>


</div>
    
    
<div class="footer" style="width:100%;height:50px;
background-color:black ;">
    
<h3 style="text-align:left; vertical-align: center;
color:blueviolet; float:left; width:200px;">HOTEL ROYAL HILLS</h3>
    
<h5 style="font-size:20px; text-align:center; float:right;padding-right:200px;width:800px; padding-top:15px; color:white;">@2021. All Rights Reserved. Privacy Policy</h5>    
</div>
   
</div>   
</body>
</html>

    
