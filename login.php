<?php session_start(); ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    
    <script>
    function validate()
        {
            
            var a= document.f1.password.value;
            
            if(a=="")
                {
                    alert("Enter the Password");
                    return false;
                }
            if(a.length<5 || a.length>15)
                {
                    alert("length of password must be 5 to 15");
                    return false;
                }
            
        }
    
    </script>

</head>
    
<body>
   <div class="main">
       
        <div class="header">
            <h3>HOTEL M.D.</h3>
            <h4>ENJOY A LUXURY EXPERIENCE</h4>
            
        </div>
       
       
       
        <div class="nav">
            <ul>
                <li><a href="registeration.php">Registeration</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="home.php">home</a></li>
             </ul>
        </div>
       
    
<div class="container">    
        
<form name="f1" action="" method="post" onsubmit="return validate()" >
        
<h2 style="margin-top: 15px; text-align:center; font-size:30px;";>LOG IN</h2><br>
<p style="margin-left:16px;">Please fill details in this form to Log In .</p><br>
<hr><br><br><br><br><br>

      
<label >Username</label><br>
<input type="text" name="name" placeholder="Full Name" ><br><br>
    
<label >Email</label><br>
<input type="text" name="mail" placeholder="Email"><br><br>
        
<label >Password</label><br>
<input type="password" name="password" placeholder="Password" ><br><br><br><hr><br><br>
    
<p style="padding-left:50px; font-size:18px; ">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<input type="submit" name="submit" value="Login" style="height:40px; width:900px; font-size:15pt; color:black; margin-left: 50px; margin-top: 10px; border: 1px solid black; background-color:aliceblue;">
<br>
<br>
        

<p style="padding-left:16px; text-align:center; font-size:20px; ">Not have an account?<a href="registeration.php">Register Here</a></p>

</form>
</div>
        
       
<?php
    if (isset($_POST['submit']))
    {
        $con=mysqli_connect("localhost","root","","corona");
        $name=$_POST['name'];
        $password=$_POST['password'];
        
        $q="select * from covid where name='$name' and password='$password' ";
        $result=mysqli_query($con,$q);

        if($result)
        {
            if(mysqli_num_rows($result)>0)
            {
                $_SESSION['u']=$name;
                echo"<script>alert('Login Successfully......');window.location='home.php';</script>";
   
            }
            else
            {
                echo"<script>alert('Username and Password doesn't match...try again ');</script>";
            }
                    
        }
        else
        {
            echo"<script>alert('Something error...')</script>";
        }
                
    }
    
?>


    
    <div class="footer" style="height:80px;">
       
    </div>
       
    </div>
</body>
</html>


            
