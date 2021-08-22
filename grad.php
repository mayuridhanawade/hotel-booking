
<html>
<head>
<style>
    
.box {
  margin:5px;
  width:300px;
  height:200px;
  background:
   linear-gradient(to bottom right,#FF1794 0%, #FFF037 7.41%, #39ED94 13.72%, #00B0EC 25.23%, #FF1794 34.56%, #FFF037 40.76%, #39ED94 50%) bottom right,
   linear-gradient(to bottom left, #FF1794 0%, #FFF037 7.41%, #39ED94 13.72%, #00B0EC 25.23%, #FF1794 34.56%, #FFF037 40.76%, #39ED94 50%) bottom left,
   linear-gradient(to top left,    #FF1794 0%, #FFF037 7.41%, #39ED94 13.72%, #00B0EC 25.23%, #FF1794 34.56%, #FFF037 40.76%, #39ED94 50%) top left,
   linear-gradient(to top right,   #FF1794 0%, #FFF037 7.41%, #39ED94 13.72%, #00B0EC 25.23%, #FF1794 34.56%, #FFF037 40.76%, #39ED94 50%) top right;
   
  background-size:50% 50%;
  background-repeat:no-repeat;
}
    
    
.box1 {
  margin:5px;
  width:300px;
  height:200px;
  background:
   linear-gradient(to right, #FF1794 0%, #FFF037 14.81%, #39ED94 27.72%, #00B0EC 50.23%, #FF1794 67.56%, #FFF037 81.76%, #39ED94 100%) right,
   linear-gradient(to left,  #FF1794 0%, #FFF037 14.81%, #39ED94 27.72%, #00B0EC 50.23%, #FF1794 67.56%, #FFF037 81.76%, #39ED94 100%) left;
   
  background-size:50% 100%;
  background-repeat:no-repeat;
  position:relative;
}
.box1:before {
  content:"";
  position:absolute;
  background:
   linear-gradient(to bottom,#FF1794 0%, #FFF037 14.81%, #39ED94 27.72%, #00B0EC 50.23%, #FF1794 67.56%, #FFF037 81.76%, #39ED94 100%) bottom,
   linear-gradient(to top,   #FF1794 0%, #FFF037 14.81%, #39ED94 27.72%, #00B0EC 50.23%, #FF1794 67.56%, #FFF037 81.76%, #39ED94 100%) top;
  background-size:100% 50%;
  background-repeat:no-repeat;
  top:0;
  bottom:0;
  right:0;
  left:0;
  -webkit-clip-path: polygon(0% 0%, 50% 50%, 0% 100%, 100% 100%, 50% 50%, 50% 50%, 100% 0%);
  clip-path: polygon(0% 0%, 50% 50%, 0% 100%, 100% 100%, 50% 50%, 50% 50%, 100% 0%);
}
    
.box2 {
  margin:5px;
  width:300px;
  height:200px;
  background:
    linear-gradient(to bottom right, #FF1794 0%, #FFF037 25%, #b21067 50%) bottom right,
   linear-gradient(to bottom left, #FF1794 0%, #FFF037 25%, #b21067 50%)bottom left,
   linear-gradient(to top left,    #FF1794 0%, #FFF037 25%, #b21067 50%) top left,
   linear-gradient(to top right,  #FF1794 0%, #FFF037 25%, #b21067 50%) top right;
   
  background-size:50% 50%;
  background-repeat:no-repeat;
}

.box3 {
  margin:5px;
  width:300px;
  height:200px;
  background:
    linear-gradient(to bottom right, #f10732 0%, #a32160 35%, #864b8a 50%) bottom right,
   linear-gradient(to bottom left,#f10732 0%, #a32160 35%, #864b8a 50%)bottom left,
   linear-gradient(to top left, #f10732 0%, #a32160 35%, #864b8a 50%) top left,
   linear-gradient(to top right, #f10732 0%, #a32160 35%, #864b8a 50%) top right;
   
  background-size:50% 50%;
  background-repeat:no-repeat;
}

.box4 {
  margin:5px;
  width:300px;
  height:200px;
  background:
    linear-gradient(to bottom right, #FF1794 0%, #ff1794 30%,#FFF037 49%, #b21067 50%) bottom right,
    linear-gradient(to bottom left, #FF1794 0%, #ff1794 30%,#FFF037 49%, #b21067 50%)bottom left,
   linear-gradient(to top left, #FF1794 0%, #ff1794 30%,#FFF037 49%, #b21067 50%) top left,
   linear-gradient(to top right, #FF1794 0%, #ff1794 30%,#FFF037 49%, #b21067 50%) top right;
   
  background-size:50% 50%;
  background-repeat:no-repeat;
}

</style>
 
<body>

<div class="box">

</div><br><br>

<div class="box1">

</div><br><br>
    
<div class="box2">
    
</div>

<div class="box3">
    
</div>

<div class="box4">
    
</div>


</body>
 