<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>


<body>
<div class="main" style="height:1080px;">
    
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
  
    
<div class="container" style="height:980px;">

<div class="f6" style="width:100%; height:70px; text-align:center;padding-top:10px;
background: linear-gradient(180deg,  dodgerblue, white); /* Standard syntax (must be last) */
">
   
<div class="f7">
<h5 style="text-align:center; font-size:25px; color:#800000">INDIAN CUSINES</h5>
<p style="padding-left:250px; font-size:20px;">GREAT LUNCH DEALS</p>    
</div> 
</div>    

<div class="f8">
<div class="left">
<img src="f2.png" width="310" height="350" style="float:left;"> 
<img src="f6.jpeg" width="310" height="350" style="float:left;"> 
<div class="r" style="width:300px; height:350px;text-align:center;float:right;
background: linear-gradient(90deg,#964B00,#666666,#392613); /* Standard syntax (must be last) */">
    

<h3 style="text-align:center; color:black; font-size:20px; color:white">ORDER ONLINE</h3>
        
<div class="d" style="width:300px; text-align:center; padding-right:25px; height:350px">  
    
<form name="f1" method="post"   onsubmit="return validate()">

<input type="text" name="Fname" placeholder="First Name" required style="width: 250px;height:30px; margin: 10px; 10px 10px 10px; display: inline-block; border: 1px solid black; background-color:aliceblue; padding-left:10px; font-size:18px;"><br>
 
<input type="text" name="Lname" placeholder="Last Name" required  style="width: 250px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue; padding-left:10px; font-size:18px;"><br>

<input type="text" name="RoomNumber" placeholder="Room Number" required  style="width: 250px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue; padding-left:10px; font-size:18px;"><br>

     
<select name="Menu" required style="width: 250px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black;color:grey; background-color:aliceblue; padding-left:10px; font-size:18px;">

<option name="r1" value="Coconut Crab Curry">Coconut Crab Curry</option> 
<option  name="r1" value="Chiken Biryani">Chiken Biryani</option>  
<option  name="r1" value="Chiken Fried Rice">Chiken Fried Rice</option>  
<option  name="r1" value="Prawns Fried Rice">Prawns Fried Rice</option>  
<option  name="r1" value="Chiken Noodles">Chiken Noodles</option>  
<option  name="r1" value="Grill Chiken">Grill Chiken</option><br>
<option  name="r1" value="Chiken 65">Chiken 65</option>
<option  name="r1" value="Chiken Kabab">Chiken Kabab</option>
<option  name="r1" value="Fish Curry">Fish Curry</option>
    

<option  name="r1" value="Mango Lassi">Mango Lassi</option>
<option  name="r1" value="Lemon Mint Tea">Lemon Mint Tea</option>
<option  name="r1" value="Mojito">Mojito</option>
<option  name="r1" value="Dalgona Coffee">Dalgona Coffee</option>
<option  name="r1" value="Lemonade">Lemonade</option>
<option  name="r1" value="Cold Drinks">Cold Drinks</option><br> 

<option  name="r1" value="Puran Poli">Puran Poli</option>  
<option  name="r1" value="Lithi Choka">Lithi Choka</option>  
<option  name="r1" value=" Pav Bhaji"> Pav Bhaji</option>  
<option  name="r1" value="Sondesh">Sondesh</option>  
<option  name="r1" value="Shahi paneer">Shahi paneer</option>  
<option  name="r1" value="Jalebi-Rabri">Jalebi-Rabri</option> 
<option  name="r1" value="Shejwan Fried Rice">Shejwan Fried Rice</option>  
<option  name="r1" value="Veg Thali">Veg Thali</option>  
<option  name="r1" value="South Indian Food Platter">South Indian Food Platter</option>  
<option  name="r1" value="Pani Puri">Pani Puri</option>  
<option  name="r1" value="Dal Makhani">Dal Makhani</option>  
<option  name="r1" value="Kadhai Mushroom">Kadhai Mushroom</option>  
<option  name="r1" value="Malai Kofta">Malai Kofta</option>  
<option  name="r1" value="Veg Keema Pav"></option>  
</select><br>

    
<input type="text" name="PhoneNumber"  placeholder="Phone Number" required  style="width: 250px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue;padding-left:10px; font-size:18px; "><br>
    
    
<input type="Submit" name="sub" value="Order Now" required style="height:30px; width:250px; font-size:15pt; color:black; margin: 10px 10px 10px 10px; border: 1px solid black; background-color:aliceblue; border-radius: 25px;">


</form>
</div>

<?php
    if (isset($_POST['sub']))
    {
        $con=mysqli_connect("localhost","root","","hotel");
        if($con)
        {
            if($_POST['sub']=="Order Now")
            {
                $Fname=$_POST['Fname'];
                $Lname=$_POST['Lname'];
                $RoomNumber=$_POST['RoomNumber'];
                $Menu=$_POST['Menu'];
                
                $query="insert into food(Fname,Lname,RoomNumber,Menu) values('$Fname','$Lname','$RoomNumber','$Menu')";
                
                $result=mysqli_query($con,$query);
                
                if($result)
                {
                    echo"<script>alert('Order Sent successfully..')</script>";
                }
                else
                {
                    echo"<script>alert('Order Not Sent..')</script>";
                }
                
            }
        
        }
    }
    ?>

    
</div> 

</div>

<div class="right">
<img src="chief.jpg" width="360" height="350" style="float:left;"> 
</div>
    
</div>
 
<div class="f10">   
<h3 style="font-style:italic; font-size:24px;color:black">FEATURED MENU</h3>
<p><b>FOOD IS NOT RATIONAL. FOOD IS CULTURE, HABIT CRAVING AND IDENTITY...</b></p>

<div class="slider">
    
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>
      <span id="slide-4"></span>
      <span id="slide-5"></span>
      <span id="slide-6"></span>
      <span id="slide-7"></span>
      <div class="image-container">
        <img src="z1.jpeg" class="slide" width="200" height="200" style="border-radius:50%" />
        <img src="z2.jpeg" class="slide" width="200" height="200"  style="border-radius:50%" />
        <img src="f4.jpeg" class="slide" width="200" height="200"  style="border-radius:50%" />
        <img src="z3.jpeg" class="slide" width="200" height="200" style="border-radius:50%" />
        <img src="z4.jpeg" class="slide" width="200" height="200"  style="border-radius:50%" />
        <img src="z6.jpeg" class="slide" width="200" height="200"  style="border-radius:50%"/>
        <img src="z7.jpeg" class="slide" width="200" height="200"  style="border-radius:50%"/>
        <img src="z5.jpeg" class="slide" width="200" height="200"  style="border-radius:50%"/>
        <img src="z8.jpeg" class="slide" width="200" height="200"  style="border-radius:50%" />
        
        </div>
        <div class="buttons">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
        <a href="#slide-4"></a>
        <a href="#slide-5"></a>
        <a href="#slide-6"></a>
        <a href="#slide-7"></a>
          
      </div>

</div>

</div>


<div class="f9" style=" padding-top:20px;background: linear-gradient(90deg,#2F4F4F,#8B7B8B,#2F4F4F); /* Standard syntax (must be last) */">
<h3 style="color:black; font-family:cursive; font-size:30px; font-style:italic;">SPICE UP YOUR DAY</h3>  
<p><b>ONE CANNOT THINK WELL, LOVE WELL, SLEEP WELL, IF ONE HAS NOT DINED WELL...</b></p>
<p style="padding-left:30px;padding-top:20px; font-size:18px; width:850px;">When We Have The Best And Tastiest Ingriedients,We Can Cook Very Simply And The Food Will Be Extraordinary </p>
<p style="padding-left:100px; font-size:18px; width:850px;">Because It Tastes Like What Ist Is And We Deliver Incredible Quality Food To Your Table At Any Time.</p>

</div>
    
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

    
