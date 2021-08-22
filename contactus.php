<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>


<body>
<div class="main" style="height:710px; ">
    
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
  
    
<div class="container" style="height:610px; background-image:url(unsplash11.jpg);
background-size:cover;
">

<div class="r">
    
<div class="r3"> 
<h5 style="width:600px; font-size:40px;">We'd Love To Hear From You</h5> 
     
<p style="padding-left:60px; font-size:20px; width:600px;padding-top:30px;">We're Here To Help And Answer Any Question You</p>
    
<p style="padding-left:80px; font-size:20px; width:600px;padding-top:10px;"> Might Have.  We Look Forward To Hearing</p>
        
<p style="padding-left:120px; font-size:20px; width:600px;padding-top:10px;"> From You...! </p>

</div>
    
<div class="r1">
<br>
<h2 style="text-align:center; color:black; font-style:italic ; font-size:25px;">CONTACT US</h2><br>
  
<div class="r2">
<form name="f1" method="post"   onsubmit="return validate()">
        
<input type="text" name="Fname" placeholder="First Name" required style="width: 250px;height:30px; margin: 10px 10px 10px 0px; display: inline-block; border:0px;  font-size:18px;"><hr><br>
 
<input type="text" name="Lname" placeholder="Last Name" required  style="width: 250px;height:30px;margin: 10px 10px 10px 0px;display: inline-block; border: 0px; font-size:18px;"><hr><br>

     
<input type="text" name="Email" placeholder="Email" required style="width: 250px;height:30px;margin: 10px 10px 10px 0px;display: inline-block; border:0px;  font-size:18px;"><hr><br>

<textarea name="Queries" placeholder="Enter Your Queries" required style="width: 250px;height:30px;margin: 10px 10px 10px 0px;display: inline-block; border: 0px; font-size:20px;"></textarea><hr><br>
  
<input type="Submit" name="sub" value="Contact Us" required style="height:40px; width:200px; font-size:15pt; color:black; margin: 10px 10px 10px 50px; border: 0px; background: linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);">

</form> 
    
<?php
    if (isset($_POST['sub']))
    {
        $con=mysqli_connect("localhost","root","","hotel");
        if($con)
        {
            if($_POST['sub']=="Contact Us")
            {
                $Fname=$_POST['Fname'];
                $Lname=$_POST['Lname'];
                $Email=$_POST['Email'];
                $Queries=$_POST['Queries'];
                
                $query="insert into contactus(Fname,Lname,Email,Queries) values('$Fname','$Lname','$Email','$Queries')";
                
                $result=mysqli_query($con,$query);
                
                if($result)
                {
                    echo"<script>alert('Query Sent successfully..')</script>";
                }
                else
                {
                    echo"<script>alert('Query Not Sent..')</script>";
                }
                
            }
        
        }
    }
    ?>
    
</div>
</div>

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

    
