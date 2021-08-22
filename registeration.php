<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    
    <script>
    function validate()
        {
            
            var a= document.f1.name.value;
            if(a=="")
                {
                    alert("Enter the Name");
                    return false;
                }
            
            var b= document.f1.password.value;
            var c= document.f1.cpassword.value;
            if(b=="")
                {
                    alert("Enter the Password");
                    return false;
                }
            if(b.length<5 || b.length>15)
                {
                    alert("length of password must be 5 to 15");
                    return false;
                }
            if(b !=c)
                {
                    alert("password does not matched");
                    return false;
                }
            
            var d= document.f1.mobile.value;
            if(d=="")
                {
                    alert("Enter the Mobile");
                    return false;
                }
            
            var e= document.f1.email.value;
            if(e=="")
                {
                    alert("Enter the Email");
                    return false;
                }
            
            var f= document.f1.city.value;
            if(f=="")
                {
                    alert("Enter the City");
                    return false;
                }
            

        }
    
    </script>


</head>
<body>
   <div class="main">
       
        <div class="header" >
            <h3>HOTEL M.D.</h3>
            <h4>ENJOY A LUXURY EXPERIENCE
</h4>
            
            
        </div>
       
       
       
        <div class="nav">
            <ul>
                <li><a href="registeration.php">Registeration</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="home.php">Home</a></li>
             </ul>
        </div>
       
    
    <div class="container">
        
    <form name="f1" method="post"   onsubmit="return validate()">
        
    <h2 style="margin-top: 15px; text-align:center; font-size:30px;";>REGISTERATION</h2><br>
    <p style="margin-left:16px;">Please fill in this form to create an account.</p><br>
    <hr><br>

          
    <label>Full Name:</label><br>
    <input type="text" name="name" ><br>
 
    
    <label >Password:</label><br>
    <input type="password" name="password" ><br>

    <label >Confirm password:</label><br>
    <input type="password" name="cpassword" ><br>

    <label >Mobile:</label><br>
    <input type="text" name="mobile"  ><br>
    
    <label >Email:</label><br>
    <input type="text" name="email"  ><br>

     
    <label >City:</label><br>
    <input type="text" name="city"  ><br>
    
    <p style="padding-left:50px; font-size:18px; ">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

   
    <input type="Submit" name="sub" value="Submit" required >
    <br>
    
        
    <p style="padding-left:16px; text-align:center; font-size:20px; ">Have an account?<a href="login.php" >Log In Here</a></p>

    </form>
        
        
    <?php
    if (isset($_POST['sub']))
    {
        $con=mysqli_connect("localhost","root","","corona");
        if($con)
        {
            if($_POST['sub']=="Submit")
            {
                $name=$_POST['name'];
                $password=$_POST['password'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $city=$_POST['city'];
                
                
                $query="insert into covid(name,password,mobile,email,city) values('$name', '$password', '$mobile', '$email','$city')";
                
                $result=mysqli_query($con,$query);
                
                if($result)
                {
                    echo"<script>alert('Registeration Successfully......');window.location='login.php';</script>";

                }
                else
                {
                    echo"<script>alert('Record Not Inserted...');mysqli_error($con);</script>";
                }
                
            }
        }
        else
        {
            
        }
    }
?>
    </div>

    
    <div class="footer">
        
    </div>
        
        </div>
</body>
</html>


            
