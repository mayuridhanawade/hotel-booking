<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>


<body>
<div class="main" style="height:870px;">
    
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
      
<div class="container" style="height:770px;">
<div class="1st" style="width:100%; height:70px; text-align:center;padding-top:10px;
background: linear-gradient(180deg,  dodgerblue, white); /* Standard syntax (must be last) */
">
<h3 style="text-align:center; font-size:32px; color:#800000">Book Your Hotel And Enjoy Your Time...</h3> 
</div>
        
<div class="l" style="width:680px; height:700px; background-image:url(h5.jpeg);background-size:cover; float:left;">

<div>
<p class="p2" style="font-family:cursive; font-size:18px; text-align:justify; padding-right:70px">
Our hotel has wide variety of greatly furnished and fully equipped rooms for every guest. Whether you are travelling on business or with family, we have what you need to enjoy your stay.
</p>    
</div>
    
</div>

<div class="r" style="width:600px; height:700px; float:right; 
background: -webkit-linear-gradient(180deg, #323232, #A7c7e7); /* For Safari 5.1 to 6.0 */
background: linear-gradient(180deg, plum,#ecbcb4, #fbf1de,plum); /* Standard syntax (must be last) */
   ">
<h3 style="text-align:center; color:black; font-size:20px; color:aliceblue">Hotel Booking</h3>
<hr>
<form name="f1" method="post"   onsubmit="return validate()">
        
<p style="padding-left:5px; padding-top:2px; height:30px; font-size:18px; color:aliceblue">Please fill in this form for booking.</p>
<hr><br>

<div class="d" style="width:450px; ">  
<label style="font-family: Arial, Helvetica, sans-serif; font-size:17px; padding-left:5px;">Full Name:</label><br>
<input type="text" name="Name"  style="width: 400px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue;  "><br>
 
    
<label style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Email:</label><br>
<input type="text" name="Email"  style="width: 400px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue; "><br>

     
<label style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Room Type:</label><br>
<select name="RoomType" style="width: 400px; height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue; ">
<option name="r1" value="Standard Single Room">Standard single Room</option> 
<option  name="r1" value="Suite Room">Suite Room</option>  
<option  name="r1" value="Double Room">Double Room</option>    
</select><br>
    
<label style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Number of Guest:</label><br>
<input type="number" name="GuestNumber"  style="width: 400px;height:30px;margin: 10px 10px 10px 10px;display: inline-block; border: 1px solid black; background-color:aliceblue; "><br>
    
<label style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Arrival Date:</label><br>
<input type="date" name="ArrivalDate" style="height:30px;  width:400px; margin-top:5px; margin: 10px 10px 10px 10px;font-family: Arial, Helvetica, sans-serif;"><br>
        
<label style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Departure Date:</label><br>
<input type="date" name="DepartureDate" style="height:30px;  width:400px; margin-top:5px; margin: 10px 10px 10px 10px;font-family: Arial, Helvetica, sans-serif;"><br>

<label name="Pickup" style="padding: 10px;font-family: Arial, Helvetica, sans-serif; font-size:17px;">Free pickup?</label><br><br>
    
<input type="radio" name="Pickup" value="YES" style="margin-left:12px;font-family: Arial, Helvetica, sans-serif; font-size:17px;"> Yes Please!- Pick me up on arrival<br><br>
<input type="radio" name="Pickup" value="NO" style="margin-left:12px;font-family: Arial, Helvetica, sans-serif; font-size:17px;"> No Thanks - i'll make my own way there
    

<input type="Submit" name="sub" value="Book Now" required style="height:30px; width:400px; font-size:15pt; color:black; margin-left: 15px; margin-top: 10px; border: 1px solid black; background-color:aliceblue;">
    <br>
    <br>
</div>
</form>
        
    <?php
    if (isset($_POST['sub']))
    {
        $con=mysqli_connect("localhost","root","","hotel");
        if($con)
        {
            if($_POST['sub']=="Book Now")
            {
                $Name=$_POST['Name'];
                $Email=$_POST['Email'];
                $RoomType=$_POST['RoomType'];
                $GuestNumber=$_POST['GuestNumber'];
                $ArrivalDate=$_POST['ArrivalDate'];
                $DepartureDate=$_POST['DepartureDate'];
                $Pickup=$_POST['Pickup'];
                
                
                $query="insert into booking(Name,Email,RoomType,GuestNumber,ArrivalDate,DepartureDate,Pickup) values('$Name','$Email','$RoomType','$GuestNumber','$ArrivalDate','$DepartureDate','$Pickup')";
                
                $result=mysqli_query($con,$query);
                
                if($result)
                {
                    echo"<script>alert('booking successfully..')</script>";
                }
                else
                {
                    echo"<script>alert('booking unsuccessfull..')</script>";
                }
                
            }
        
        }
    }
    ?>
    
    
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


    
