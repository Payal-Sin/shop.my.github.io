<?php

session_start();
error_reporting(0);
?> 


<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>Kids</title>
<script src="https://kit.fontawesome.com/64666bdf31.js" crossorigin="anonymous"></script>
</head>
<style>
/*---------- Header-------------*/
body{
background-color:snow;

}

/*---------- Header-------------*/

div.navbar{
display:flex;
align-items:center;
padding:22px;
margin-left:10px;
background-color:white;
height:25px;
}
img.size{
height:40px;
width:120px;
margin-top:5px;
}
nav{
flex:1;
text-align:left;
}
nav ul{
display:inline-block;
list-style-type:none;
}
nav ul li{
display:inline-block;
margin-right:20px;
}
a{
text-decoration:none;
color:#555;
}
div.container{
width:1500px;
margin:auto;
padding-left:25px;
padding-right:25px;
background-color:white;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
/*nav ul li a:hover{
text-decoration:underline;
text-decoration-thickness:105px;
text-decoration-style:solid;
text-decoration-color:grey;
}*/
nav ul li a.under1:hover::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:15%;
top:73.3px;
transform:translateX(-50);
transition:0.5s ease;
}
nav ul li a.under2:hover::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:20.4%;
top:73.3px;
transform:translateX(-50);

}

nav ul li a.under3:hover::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:25.9%;
top:73.3px;
transform:translateX(-50);
transition:0.5s ease;
}
nav ul li a.under4:hover::after{
content:'';
background:#ff523b;
width:142px;
height:5px;
border-radius:5px;
position:absolute;
left:31.2%;
top:73.3px;
transform:translateX(-50);
transition:0.9s ease;
}
nav ul li a.under5:hover::after{
content:'';
background:#ff523b;
width:125px;
height:5px;
border-radius:5px;
position:absolute;
left:42%;
top:73.3px;
transform:translateX(-50);
transition:0.9s ease;
}
a.under5:hover{
color:#ff523b;
}
a.under4:hover{
color:#ff523b;
}

a.under3:hover{
color:#ff523b;
}
a.under2:hover{
color:#ff523b;
}

a.under1:hover{
color:#ff523b;
}
a.under3:visited{
	color:red;
}
input[type=search].search{
border:
width:15px;
left:860px;
float:right;
position:absolute;
top:25px;
height:38px;
padding-left:35px;
}
input[type=search].search:focus{
outline:none;
}
img.icon{
position:absolute;
width:23px;
height:23px;
left:865px;
top:33px;
}
a.btn1{

background-color:#ff523b;
border:none;
color:white;
width:7%;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:18px;
font-weight:bold;
border-radius:30px;
position:absolute;
top:18px;
left:1078px;
height:31px;
padding-top:9px;
}
a.btn1:hover{
background-color:tomato;
color:white;
}

img.cart{
position:absolute;
width:32px;
height:32px;
left:1250px;
top:28px;
}
a.bar{
position:absolute;
top:31px;
}

div.container{
display:block;
width:96%;

top:0;
}
div.cart-view{
	position:absolute;
	left:1275px;
	top:12px;
	
	
}
a.cart{
	color:tomato;
	font-size:23px;

}

/*-----------------------------username----------------------------*/
p.username{
	position:absolute;
	left:1130px;
	top:3px;
	font-size:20px;
}
img.profile-image{
	position:absolute;
	left:1090px;
	top:16px;
	width:32px;
	height:32px;
}
.dropdown{
position:absolute;
display:inline-block;
top:10px;
}
#drop-content {
	position :absolute;
	z-index:1;
	
	
}
#drop-content a{
	position:absolute;
	background:white;
	padding:10px 20px;
	margin-top:5px;
	left:1100px;
	top:50px;
	border-radius:
	
	
	text-align:center;
	border:1px solid grey;
}
a.bt1{
	color:tomato;
	font-weight:bold;
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    height:20px;
	width:80px;
	text-align:center;
	font-size:18px;
}
div.divi{
float:right;
margin-right:7px;
margin-top:1px;
}
icon{
width:50%;
}
img.imi{
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
float:right;
width:20%;
height:40px;
margin-top:0px;
margin-right:9px;
}
div.div6{
background-color:white;
width:100%;
height:250px;
left:1px;
}
div.div7{
float:left;
display:block;
background-color:white;
height:330px;
width:20%;
margin-left:270px;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
/*-------------------------------------------SLIDER--------------------------------------*/
.mySlides {
	display: none;
	background:;
	
	}
img {
	vertical-align: middle;
	}



/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin-top: 30px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
img{
	height:400px;
}


span.s1{
	color:grey;
	font-size:15px;
}
span.s1-1{
	text-decoration:line-through;
	color:grey;
}
span.s1-2{
	color:tomato;
}
p.p1{
	position:absolute;
	bottom:50px;
	font-size:40px;
	font-weight:bold;
	color:white;
	left:570px;
}
p.p2{
	position:absolute;
	bottom:10px;
	font-size:28px;
	font-weight:bold;
	color:white;
	left:599px;
}
</style>
<body>
<div class="div">
<div class="container">
  <div class="navbar">
  <div class="logo">
  <a href="home2.php">
  <img src="logo.jpg" class="size"></a>
  </div>
  <nav>
  <ul>
  <li><a class="under1" href="mens.php">MEN</a></li>
  <li><a class="under2" href="women.php">WOMEN</a></li>
  <li><a class="under3" href="mens.html">KIDS</a></li>
  <li><a class="under4" href="mens.html">HOME & LIVING</a></li>
  <li><a class="under5" href="mens.html">ESSENTIALS</a></li>
  </ul>
  </nav>
  </div>
  <input class="search" type="search" placeholder="search.....">
  <img class="icon" src="searchicon.jpg">
  

<a href="viewCart.php" >
<img class="cart" src="newcart.jpg">
<div class="cart-view">
        <a href="viewCart.php" title="View Cart" class="cart"><i class="icart"></i> <?php echo ($cart->total_items() > 0)?$cart->total_items().' ':''; ?></a>
    </div></a>

<div class="dropdown" onclick="show_hide()">
<img class="profile-image" src="IMG_20200903_123910.jpg">
<p class="username"><?php echo($_SESSION['username']);?></p>

<div style="display:none;"id="drop-content">
<a href="logout.php" class="bt1">Logout</a>
</div>
</div>

<a class="bar" href="#">
<i class="fas fa-bars"></i>
</a>
 <!-- <a class="search-btn" href="#">
  <i class="fas fa-search"></i>
</a>-->
<!--<i class="fas fa-shopping-cart"></i>-->
 <!-- <img class="icon"src="C:\Users\Windows 10\Desktop\New folder\IMG_20200814_150516.jpg">-->
  </div>
  <!--------------------------------------Slider---------------------------------------->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="IMG_20201126_195345.jpg" style="width:100%">
  <p class="p1">Up To 60% Off</p>
  <p class="p2">+EXPLORE</p>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
 
  <img src="IMG_20201126_185938.jpg" style="width:100%">
  
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="IMG_20201126_191857.jpg" style="width:100%">
  
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!-------mens----------

<div class="mens">
<img class="fash" src="mensimage.jpg">
<div class="menswear">
<p class="wear"> The Best of </p>
<h1 class="head"> MEN'S WEAR</h1>
<hr class="hr">
<h2 class="h2-wear">50% - 80% OF</h2>
</div>
</div>------------>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
function show_hide(){
	var click=document.getElementById("drop-content");
	if(click.style.display==="none"){
		click.style.display="block";
	}else{
		click.style.display="none";
	}
}

</script>
</body>
</html>