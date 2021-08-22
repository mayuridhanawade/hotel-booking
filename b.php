<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.c7{
  position: relative;
  width:360px;
}

.image1 {
  opacity: 1;
  display: block;
  width: 360;
  height: 270px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.c7:hover .image1 {
  opacity: 0.3;
}

.c7:hover .middle {
  opacity: 1;
}

.btn {
background-color: #ccccff;
border: 1px solid #ccccff;
font-size: 16px;
position: absolute;
margin-left:;
height:25px;
width:90px;
border-radius: 10%;
}
</style>
</head>
<body>

<h2>Opacity with Box</h2>
<p>Hover over the image to see the effect.</p>

<div class="c7">
<img src="cook.jpeg" alt="image" class="image1">
<div class="middle">
<form name="f1" action="facilities.php" method="get">
<input type="submit" name="submit" value="Read more" class="btn">
</form>
</div>
</div>
  
</body>
</html>
