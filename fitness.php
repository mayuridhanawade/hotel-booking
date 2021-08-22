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
  top: 37%;
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
  font-size: 19px;
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
<div class="main" style="height:720px;">
    
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
  
<div class="container" style="width:100%; height:650px;">
<div class="1st" style="width:100%; height:60px; text-align:center;padding-top:10px;
background: linear-gradient(180deg,  dodgerblue, white); /* Standard syntax (must be last) */
">
<h3 style="text-align:center; font-size:25px; color:#800000">FITNESS</h3> 
</div>

<div class="m1" style="height:380px; width:700px; float:left;">
<div class="mySlides">
    <div class="numbertext">1 / 5</div>
    <img src="gym1.jpeg" width="700" height="380">
  </div>

  
  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <img src="gym2.jpeg" width="700" height="360">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <img src="gym3.jpeg" width="700" height="360">
  </div>
    
    <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <img src="gym4.jpeg" width="700" height="360">
  </div>
    
    <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <img src="gym5.jpeg" width="700" height="360">
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
<p style="padding-left:5px;width:530px; text-align:justify;font-style: italic;">The Fitness centre / Gymnasium is intended for the exclusive use of in-house guests of HOTEL ROYAL HILLS herein called the “Hotel”. No visitor is allowed to access and to use the equipment.
</p><br>
   
<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:10px;">Opening Hours:
</h2>

<p style="padding-left:5px; width:530px; text-align:justify; font-style: italic;">The Gymnasium opens 24 hours daily.

The Hotel reserves the right to suspend the use of any facilities at any time for the organization of private classes and activities or for the arrangement of maintenance or cleaning without prior notice.</p><br>
    
<h2 style="padding-left:23px;font-family:none;font-size:20px;color:black;margin-top:10px;">Dress Code:
</h2>

<p style="padding-left:5px; width:530px; text-align:justify; font-style: italic;">All users should wear appropriate apparel and footwear to comply with the requirements of the Gymnasium, otherwise the access to and use of such facilities will be refused.</p><br>
    
</div>
  
    
<div class="m2" style="width:1250px; padding-left:10px;">
<h2 style="padding-left:5px;font-family:none;font-size:20px;color:black;margin-top:10px; ">Access To Gym:
</h2>
    
<ul style="margin-left:25px; font-size:19px; font-style: italic; margin-top:10px; height:150px; margin-right:60px;">  
<li>The Gymnasium is for the entry and use of persons of the age of 16 or above only.</li>
<li>Presence in the Fitness area is those limited using to the equipment. People who are not making use of the gym are not allowed in the area.</li>
<li>The maximum number of people who can be in the gym is 12 [Mention the maximum number here as per your hotel Gym</li>
<li>The use of personal towel is required in order to avoid possible contagions and the deterioration of the machines. Once you have finished your session, leave the towel in the basket.</li>
<li>In case of any doubt, complaints on using Gym equipment or equipment breakdowns, we requested that you immediately contact the Front Desk.
</li>
</ul>
    
</div>
</div>

    

    
    
<div class="footer" style="width:100%;height:50px;
background-color:black ;">
    
<h3 style="text-align:left; vertical-align: center;
color:blueviolet; float:left; width:200px;margin-top:0px;">HOTEL ROYAL HILLS</h3>
    
<h5 style="font-size:20px; text-align:center; float:right;padding-right:200px;width:800px; padding-top:10px; color:white;">@2021. All Rights Reserved. Privacy Policy</h5>    
</div>
   
</div>   
</body>
</html>

    
