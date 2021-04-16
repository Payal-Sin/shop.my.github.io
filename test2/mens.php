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
<title>Mensfashion</title>
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
max-width:1300px;
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
a.under1:visited{
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

/*--------image---------*/

p.wear{
margin-left:1050px;
margin-top:75px;
font-size:25px;
position:absolute;
}
h1.head{
margin-left:1005px;
position:absolute;
margin-top:125px;
}
hr.hr{
width:100px;
background-color:black;
margin-left:1060px;
position:absolute;
margin-top:170px;
}
h2.h2-wear{
margin-left:1030px;
position:absolute;
margin-top:200px;
}
h1.h1-bag{
font-family:Arial;
margin-top:90px;
}
h1.tag1{
	position:absolute;
	margin-left:1040px;
	margin-top:120px;
}
p.tag2{
	position:absolute;
	margin-left:1045px;
	margin-top:170px;
	font-size:25px;
	color:grey;
}
img.hrx{
	position:absolute;
	width:130px;
	height:60px;
	margin-left:1090px;
	margin-top:210px;
}
img.levis{
	position:absolute;
	height:90px;
	width:160px;
	margin-left:1045px;
	margin-top:100px;
}
p.casual{
	position:absolute;
	margin-left:1000px;
	margin-top:210px;
	font-size:22px;
	
}
p.casual1{
	position:absolute;
	margin-left:1060px;
	margin-top:250px;
	font-size:25px;
	font-weight:bold;
}
	
/*----------to bag---------*/

div.big{
background-color:;
width:95%;
height:180px;
padding:20px;
}
div.box1{
display:block;
float:left;
width:140px;
color:white;
height:160px;
background-color:white;
margin-left:45px;
margin-right:60px;
border-radius:50%;
}

img.circle{
border-radius:50%;
width:160px;
height:160px;
padding-left:;

}
p.short{
color:black;
margin-top:2px;
margin-left:13px;
font-size:20px;
font-weight:;
font-family:Arial;
}

img.circle:hover{
width:162px;
height:162px;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}



/*-------------western wear----------------*/

h1.h1-trend{

font-family:Arial;
margin-top:90px;
}

div.main2{
background-color:;
padding:5px;
width:1300px;
height:365px;
display:block;
margin-top:30px;
overflow:auto;
white-space:nowrap;
}
div.western2{
background-color:white;
width:210px;
height:310px;
float:left;
padding:1px;
margin-left:24px;
margin-right:20px;
border:;
margin-top:1px;
text-align:left;
transition:transform 0.5s;
}
div.western2:hover{
transform:translateY(-5px);
}

img.wes2{
height:250px;
width:100%;
}
p.we2{
margin-left:5px;
font-family:arial;
font-weight:normal;
font-size:18px;
color:black;
}

/*---------------Indian Wear------------------*/

h1.h1-indian{

font-family:Arial;
margin-top:90px;
}

div.main3{
background-color:white;
padding:5px;
width:1300px;
height:365px;
display:block;
margin-top:30px;
overflow:auto;
white-space:nowrap;
}
div.western3{
background-color:white;
width:210px;
height:310px;
float:left;
padding:1px;
margin-left:24px;
margin-right:20px;
border:;
margin-top:1px;
font-weight:bold;
text-align:left;
transition:transform 0.5s;
}
div.western3:hover{
transform:translateY(-5px);
}

img.wes3{
height:250px;
width:100%;
}
p.we3{
margin-left:5px;
font-family:arial;
font-weight:normal;
font-size:18px;
}

/*---------------Sports Wear------------------*/

h1.h1-sports{

font-family:Arial;
margin-top:90px;
}

div.main4{
background-color:white;
padding:5px;
width:1300px;
height:365px;
display:block;
margin-top:30px;
overflow:auto;
white-space:nowrap;
}
div.western4{
background-color:white;
width:210px;
height:310px;
float:left;
padding:1px;
margin-left:24px;
margin-right:20px;

margin-top:1px;
font-weight:bold;
transition:transform 0.5s;
}
div.western4:hover{
transform:translateY(-5px);
}

img.wes4{
height:250px;
width:100%;
}
p.we4{
margin-left:5px;
font-family:arial;
font-weight:normal;
font-size:18px;
}


/* ---------------Footer---------------- */



.footer{
background:black;
color:white;
font-size:14px;
padding:40px 0 10px;
margin-top:50px;
}
.footer p{
color:#8a8a8a;
}
.footer h3{
color:#fff;
margin-bottom:20px;
}
div.footer-col-1{
float:left;
padding:35px;
padding-top:1px;

}
div.footer-col-2{
float:left;
width:10px;
height:70px;
}

div.footer-col-3{
float:left;
padding-left:100px;
}

div.footer-col-4
{
padding-top:1px;
padding-right:55px;
}
.footer-col-1,.footer-col-2,.footer-col-3,.footer-col-4{
min-width:250px;
margin-bottom:20px;
}
.footer-col-1{
flex-basis:30%;
}
.footer-col-2{
flex:1;
text-align:center;
}
.footer-col-2 img{
width:110px;

height:40px;
}
.footer-col-3,.footer-col-4{
flex-basis:12%;
text-align:center;
}
ul{
list-style-type:none;
}

.app-logo{
margin-top:20px;

width:285px;
float:left;
}
.app-logo img{

width:135px;
height:40px;

}
.footer hr{
border:none;
background:white;
height:1px;
margin-top:10px;

width:1280px;
}
.copyright{
text-align:center;
}
a.more{
margin-right:80px;
float:right;
font-size:20px;
}
a.more:hover{
color:tomato;
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
  <li><a class="under3" href="">KIDS</a></li>
  <li><a class="under4" href="">HOME & LIVING</a></li>
  <li><a class="under5" href="">ESSENTIALS</a></li>
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
  <p class="wear"> The Best of </p>
<h1 class="head"> MEN'S WEAR</h1>
<hr class="hr">
<h2 class="h2-wear">50% - 80% OF</h2>

  <img src="mensimage.jpg" style="width:70%">
  
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <h1 class="tag1"> Up To 50% Off </h1>
<p class="tag2"> Everyday Gym Wear</p>
<img class="hrx" src="wrogn.jpg">
  <img src="running.jpg" style="width:70%">
  
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="levis" src="levis.jpg">
  
 <b> <p class="casual"> Office Wear At Up To 60% Off</p></b>
  <p class="casual1">+SHOP NOW</p>
  <img src="istockphoto-692909952-612x612.jpg" style="width:70%">
  
  
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


<!-------To Bag------->


<h1 class="h1-bag"> CATEGORIES TO BAG </h1>
<center>
<div class="big">
<a href="" class="a1">
<div class="box1">

<img class="circle" src="mshirt.jpg"><center><p class="short">Shirts
</p></center>

</div></a>

<a href="" class="a1">
<div class="box1">

<img class="circle"  src="mtshirt.jpg"><center><p class="short">T-Shirts
</p>
</center>
</div><a>
<a href="" class="a1">
<div class="box1">

<img class="circle"  src="mensjeans.jpg"><center><p class="short">Jeans
</p>
</center>
</div><a>

<a href="" class="a1">
<div class="box1">

<img class="circle"  src="mshort.jpg"><center><p class="short">Shorts 
</p>
<center>
</div><a>

<a href="" class="a1">
<div class="box1">
<img class="circle"  src="mcasualshoes.jpg"><center><p class="short">Casual Shoes
</p>
</center>
</div></a>
</div>

<!-------------Western wear---------------->

<h1 class="h1-trend"> TRENDING IN WESTERN WEAR</h1>
<center>
<div class="main2">
<a href="index3.php">
 <div class="western2">
 <img class="wes2"src="IMG_20200926_113918.jpg"><p class="we2"><b>Campus Surta</b><br><span class="s1">Colourblocked Hooded Sweatshirt</span><br><b>&#8377; 815</b>
 <span class="s1-1">&#8377; 1599</span> <span class="s1-2">(49% OFF)</span>
 
 </div></a>

<div class="western2">
 <img class="wes2" src="mstriped.jpg"><p class="we2"><b>Classic Polo</b><br><span class="s1">Striped Casual Spread Shirt</span><br><b>&#8377; 799</b>

  </div>

<div class="western2">
 <img class="wes2" src="mjeans.jpg"><p class="we2"><b>H&M </b><br><span class="s1">Slim Men Black Jeans</span><br><b>&#8377; 399</b>
  
 </div>

<div class="western2">
 <img class="wes2" src="morangetshirt.jpg"><p class="we2"><b>INVICTUS</b><br><span class="s1">Round Neck Orange T-shirt</span><br><b>&#8377; 799</b>
 
 </div>

<div class="western2">
 <img class="wes2" src="mprintedshirt.jpg"><p class="we2"><b>Huetrap</b><br><span class="s1">Men Printed Casual Shirt</span><br><b>&#8377; 637</b>
 </div>
 </div>
 </center>
<!----------------Indian Wear------------------>

<h1 class="h1-indian"> TRENDING IN INDIAN WEAR</h1>
<center>
<div class="main3">

 <div class="western3">
 <img class="wes3"src="classykurta.jpg"><p class="we3"><b>Anouk</b><br><span class="s1">Classy Beige Kurta</span><br><b>&#8377; 637</b>
 
 </div>

<div class="western3">
 <img class="wes3" src="kurtawithcoat.jpg"><p class="we3"><b>Manyavar</b><br><span class="s1">Light Green Kurta With Coat</span><br><b>&#8377; 999</b>

 </div>
<a href="index3.php">
<div class="western3">
 <img class="wes3" src="ethnic casual.jpg"><p class="we3"><b>Hangup</b><br><span class="s1">Ethnic Casuals</span><br><b>&#8377; 807</b>
  
 </div></a>

<div class="western3">
 <img class="wes3" src="pathani.jpg"><p class="we3"><b>SOJANYA</b><br><span class="s1">Blue Printed Pathani</span><br><b>&#8377; 599</b>
 </div>

<div class="western3">
 <img class="wes3" src="trendy.jpg"><p class="we3"><b>Benstoke</b><br><span class="s1">Handpicked Trendy Styles</span><br><b>&#8377; 871</b>
 </div>
 </div>
</center>

<!----------------Sports Wear---------------------->

<h1 class="h1-sports"> TRENDING IN SPORTS WEAR</h1>
<div class="main4">

 <div class="western4">
 <img class="wes4"src="nike.jpg"><p class="we4">Exclusive Nike Styles
 
 </div>

<div class="western4">
 <img class="wes4" src="fitnesssuit.jpg"><p class="we4">
Fitness Suit Set
 </div>

<div class="western4">
 <img class="wes4" src="reebok.jpg"><p class="we4">Reebok Sports Shoes
  
 </div>

<div class="western4">
 <img class="wes4" src="activewear.jpg"><p class="we4">Best Of Active Wear
 </div>

<div class="western4">
 <img class="wes4" src="virat.jpg"><p class="we4">Virat Kohli one8 Collection
 </div>
 </div>

<!----------------- Footer------------------------->

<div class="footer">
<div class="container1">
<div class="row1">

<div class="footer-col-1">
<h3 class="foo">Download our App</h3>
<p>Download App for Android and ios mobile phone.</p>
<div class="app-logo">
<img src="appstore.jpg">
<img src="googleplay.jpg">
</div>
</div>
<div class="footer-col-2">
<img class="red" src="red.jpg">
<p>our purchase is to Sustainably Make the Pleasure and Benefits 
of Sports Accessible to the Many.</p>
</div>


<div class="footer-col-3">
<h3>Useful Links</h3>
<ul>
<li>Coupons</li>
<li>Blog Post</li>
<li>Return Policy</li>
<li>Join Affiliate</li>
</ul>
</div>
<div class="footer-col-4">
<h3>Follow us</h3>
<ul>
<li>Facebook</li>
<li>Twitter</li>
<li>Instagram</li>
<li>Youtube</li>
</ul>
</div>
</div>


<hr>
<p class="copyright">Copyright 2020 - Amazshop</p>
</div>

</div>
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