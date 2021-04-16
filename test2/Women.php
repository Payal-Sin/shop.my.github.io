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
<title>women</title>
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
a.under2:visited{
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
/*
img.img4{
height:300px;
width:100%;
}
div.div8{
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
float:left;
background-color:white;
height:330px;
width:20%;
margin-left:150px;
}
img.img5{
height:300px;
width:100%;
}
div.div9{

margin-top:450px;
background-color:white;
height:330px;
width:20%;

box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
img.img6{

height:300px;
width:100%;
}
div.div11{
width:20%;
height:350px;
background-color:white;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
margin-top:3px;
margin-left:700px;
}
img.img8{

height:300px;
width:50%;

}*/
/* ------------------ Best Buys----------------------- */

div.div15{
background:white;
width:570px;
height:750px;
margin-top:20px;
padding:20px;
margin:auto;
}
div.box{
background:white;
float:left;
margin-left:13px;
margin-top:30px;
border:1px solid lightgrey;
transition:transform 0.5s;
margin-right:40px;
transition:transform 0.5s;

}
div.box:hover{
transform:translateY(-5px);
}

img.best-buys{
width:230px;
height:270px;
padding-top:0;
padding-left:0;
}
h3.para{
margin-top:0;
text-decoration:none;
color:black;
}
a.anchor{
text-decoration:none;
}
div.di{
background-color:white;
margin-top:2px;
width:22%;
margin-left:40px;
position:absolute;
}

p.par{
font-size:25px;
margin-left:25px;
font-weight:bold;
font-family:Lucida Calligraphy;
margin-top:50px;

}
p.par::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:48%;
top:850px;
transform:translateX(-50);
}


a.bar{
position:absolute;
top:31px;

}
div.container{
display:block;

width:95%;
top:0;
}
div.big{
background-color:white;
max-width:100%;
height:140px;
padding:30px;
margin-top:20px;
}
div.box1{
display:block;
float:left;
width:135px;
color:white;
height:160px;
background-color:white;
margin-left:90px;
margin-right:10px;

}

img.circle{
border-radius:50%;
width:150px;
height:150px;
padding-left:0px;

}
p.short{
color:black;
margin-top:2px;
}

img.circle:hover{
width:152px;
height:152px;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
div.main{
background-color:white;
padding:5px;
width:1290px;
height:365px;
display:block;
margin-top:80px;
}
div.western{
background-color:white;
width:210px;
height:320px;
float:left;
padding:1px;
margin-left:25px;
margin-right:18px;
border:1px solid lightgrey;
margin-top:1px;
font-weight:bold;
}
img.wes{
height:250px;
width:100%;
}
p.trend{
margin-top:30px;
font-size:25px;
font-weight:bold;

}

/* Indian*/

div.main1{
background-color:white;
padding:5px;
width:1300px;
height:365px;
display:block;
margin-top:80px;
}
div.western1{
background-color:white;
width:210px;
height:320px;
float:left;
padding:1px;
margin-left:24px;
margin-right:20px;
border:1px solid lightgrey;
margin-top:1px;
font-weight:bold;

}
img.wes1{
height:250px;
width:100%;
}
p.trend1{
margin-top:50px;
font-size:25px;
font-weight:bold;
}

/* Footwear*/


div.main2{
background-color:white;
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
border:1px solid lightgrey;
margin-top:1px;
font-weight:bold;

}
img.wes2{
height:250px;
width:100%;
}

/*----------------------------- Brands-------------------------------*/
p.trend2{
margin-top:50px;
font-size:25px;
font-weight:bold;
}

div.brands{
background-color:white;
width:920px;
height:750px;
margin-left:20px;
}
div.bran{
background-color:white;
width:200px;
height:270px;
float:left;
padding:20px;
margin-left:60px;
margin-top:50px;
padding-top:0;
padding-left:0;
margin-right:5px;
color:black;
font-size:20px;
}
div.bran:hover{
opacity:0.8;
}
div.bran:active{
opacity:0.5;
transform:translateY(4px);
}
img.bds{
width:220px;
height:210px;
}
img.logo{
width:160px;
height:30px;
padding-left:10px;
padding-bottom:4px;
}

p.bnds{
margin-top:50px;
font-size:25px;
font-weight:bold;
}

/*-------------------------- Footer---------------------------------- */



.footer{
background:black;
color:white;
font-size:14px;
padding:40px 0 10px;

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

/*------------------------------------slider css-------------------------------------*/
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin-top: 30px;
  background:#f1dae0;

}
img{
	height:400px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 25px;
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}


img.mast-logo{
	position:absolute;
	width:180px;
	height:60px;
	bottom:170px;
	left:590px;

}
.text1 {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  top:200px;
  width: 100%;
  text-align: center;
  left:400px;
}
span.special{
	font-size:32px;
}
.text2 {
  color: #f2f2f2;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  top:230px;
  width: 100%;
  text-align: center;
  left:400px;
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
  
 <!--------------------------SLIDER------------------------------------->
 
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="woman-with-shopping-bags-studio-yellow-background-isolated_1303-14294.jpg" style="width:100%">
  <div class="text1">
   <img  class="mast-logo"src="anouk.jpg">
  Up Tp 60% Off<br><span class="special">
  +SHOP NOW</span>
  <p> Decode Your Style</p>
 </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="woman-doing-stretching-exercise_137573-1467.jpg" style="width:100%">
  <div class="text">
  
 <p> Trendy Active Wear<br><span class="special">
  +SHOP NOW</span></p>
  <p> </p>
  </div>
</div>

<div class="mySlides fade">
<a href="page2.php">
  <div class="numbertext">3 / 3</div>
  <img src="istockphoto-942924282-612x612.jpg" style="width:100%">
  <div class="text2">
  DressBerry<br>
  Women Solid Heels<br>
<span class="special">  +SHOP NOW</span></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

 <!--
 <div class="div1">
<img class="img1" src="shocked-two-women-friends-holding-shopping-bags-using-mobile-phone_171337-5718.jpg">
<div class="div2">Welcome to India's Biggest Fashion Store!</div>
<div class="div3"><center> <p class="p1">Flat &#8377; 300 Off</center></p></div>
<b><p class="p2">+ Free Delivery on your first order</p></b>
<div class="feat">
<table class="table1">
<tr>
<th class="th">100% <br>Original</th>
<th class="th">Easy <br>Returns</th>
<th class="th">Sale <br> Payments</th>
<th>500+ <br>Brands</th>
</tr></table>
</div>-->

 
  
<!--<img class="img2" src="C:\Users\Windows 10\Desktop\New folder\IMG_20200813_181408.jpg">
<img class="img3" src="C:\Users\Windows 10\Desktop\New folder\IMG_20200813_184411.jpg">
<img class="img2" src="C:\Users\Windows 10\Desktop\New folder\IMG_20200813_201018.jpg">
<img class="img2" src="C:\Users\Windows 10\Desktop\New folder\IMG_20200813_201458.jpg">-->
<!--
<div class="div6">

<p class="p3">Clothing<hr class="hr1"></p>

<p class="p3"> Footwear<hr class="hr1"></p>

<p class="p3" > Accessories<hr class="hr1"></p>

<p class="p3"> Beauty&Personal Care<hr class="hr1"></p>
</div>-->
<div class="big">
<a href="viewMore.php" class="a1">
<div class="box1">

<img class="circle" src="IMG_20200817_153006.jpg"><center><p class="short">CLOTHING
</p></center>

</div></a>

<a href="page2.php" class="a1">
<div class="box1">

<img class="circle"  src="footwear.jpg"><center><p class="short">FOOTWEAR
</p>
</center>
</div><a>
<a href="" class="a1">
<div class="box1">

<img class="circle"  src="handbags.jpg"><center><p class="short">HANDBAGS
</p>
</center>
</div><a>

<a href="" class="a1">
<div class="box1">

<img class="circle"  src="beautycare1.jpg"><center><p class="short">BEAUTY CARE
</p>
<center>
</div><a>

<a href="" class="a1">
<div class="box1">
<img class="circle"  src="watches.jpg"><center><p class="short">WATCHES
</p>
</center>
</div></a>
</div>


<center><p class="par">BEST BUYS</p></center>
<center>
<div class="div15">
<a href="index2.php" class="anchor">
<div class="box">
<img class="best-buys" src="kurta2.jpg"><h3 class="para">Kurtas <br>Under  &#8377; 799</br></h3>
</div></a>

<a href="" class="anchor">
<div class="box">
<img class="best-buys" src="hoodedtop.jpg"><h3 class="para">Hooded Neck T-shirt <br> Under &#8377; 499</br></h3>
</div></a>

<a href="index.php" class="anchor">
<div class="box">
<img class="best-buys" src="bluetop.jpg"><h3 class="para">Printed Blue Top <br> Under &#8377; 599</br></h3>
</div></a>

<a href="" class="anchor">
<div class="box">
<img class="best-buys" src="dress.jpg"><h3 class="para">Dresses <br>Under &#8377; 699</br></h3>
</div></a>
</div>

 </center>
<center> <p class="trend"> TRENDING IN WESTERN WEAR</p></center>
<div class="main">

 <div class="western">
 <img class="wes"src="img3.jpg"><center><p class="we">BurGundy Solid Biker Jacket<br>
 under Rs.249</br></center>
 </div>

<div class="western">
 <img class="wes" src="new.jpg"><center><p class="we">Navy Blue Solid Denim Jacket<br>
 under Rs.249</br></center>
 </div>

<div class="western">
 <img class="wes" src="croptop.jpg"><center><p class="we">Crop Tops <br>
 under Rs.249</br></center>
 </div>

<div class="western">
 <img class="wes" src="jumpsuit.jpg"><center><p class="we">Striped Basic
Jumpsuit <br>
 under Rs.698</br></center>
 </div>

<div class="western">
 <img class="wes" src="img8.jpg"><center><p class="we">Designer Jeans <br>
 under Rs.599</br></center>
 </div>
 
</div>

<!------------------------- indian wear----------------------------------->
<center> <p class="trend1"> TRENDING IN INDIAN WEAR</p></center>
<div class="main1">

 <div class="western1">
 <img class="wes1"src="img13.jpg"><center><p class="we1">Inddus Pink Lehenga <br>
 under Rs.249</br></center>
 </div>

<div class="western1">
 <img class="wes1" src="indo.jpg"><center><p class="we1">Indowestern saree <br>
 under Rs.249</br></center>
 </div>

<div class="western1">
 <img class="wes1" src="salwarsuit.jpg"><center><p class="we1">Designer 
 Salwar Suit <br>
 under Rs.249</br></center>
 </div>

<div class="western1">
 <img class="wes1" src="img10.jpg"><center><p class="we1">Blue& Peach-Colored Lehenga <br>
 under Rs.249</br></center>
 </div>

<div class="western1">
 <img class="wes1" src="rufflesaree.jpg"><center><p class="we1">Ruffle Saree 
 Style
 <br>
 under Rs.599</br></center>
 </div>
 
</div>

<!---- footwear-->

<center> <p class="trend2"> TRENDING IN FOOT WEAR</p></center>
<div class="main2">

 <div class="western2">
 <img class="wes2"src="img19.jpg"><center><p class="we2">Blue Solid Heels
 <br>
 under Rs.249</br></center>
 </div>

<div class="western2">
 <img class="wes2" src="sneakers.jpg"><center><p class="we2">
 Sneakers for Dancers <br>
 under Rs.249</br></center>
 </div>

<div class="western2">
 <img class="wes2" src="opentoe.jpg"><center><p class="we2">Open Toe Flats 
  <br>
 under Rs.249</br></center>
 </div>
<a href="page2.php">
<div class="western2">
 <img class="wes2" src="footwear.jpg"><center><p class="we2">Ethnic Heels <br>
 under Rs.249</br></center>
 </div></a>

<div class="western2">
 <img class="wes2" src="comfort foot.jpg"><center><p class="we2">Comfort Foot Wear
<br>
 under Rs.599</br></center>
 </div>
 </div>

<!--Brands-->
<center> <p class="bnds"> MOST  WANTED  BRANDS</p></center>
<center>
<div class="brands">

<a href="">
<div class="bran">
<center><img class="logo" src="roadster.jpg"></center>
<img class="bds" src="two-sexy-young-women_118342-568.jpg">
<p>Up to 50% Off<br>Ethnic Wear</p>
</div></a>

<a href="">
<div class="bran">
<center><img class="logo" src="IMG_20200828_124432.jpg"></center>
<img class="bds" src="jellery.jpg">
<p>Priyaasi<br>
Starting At Rs.299</p>
</div></a>

<a href="">
<div class="bran">
<center><img class="logo" src="images (2)-n.jpg"></center>
<img class="bds" src="original.jpg">
<p>Up To 30% Off<br> Organic Products</p>
</div></a>

<a href="">
<div class="bran">
<center><img class="logo" src="check-n.jpg"></center>
<img class="bds" src="athletic-woman-drinking-water-after-training_58466-11736.jpg">
<p>Min 30% Off<br>Sports Wear</p>
</div></a>

<a href="">
<div class="bran">
<center><img class="logo" src="images-n.jpg"></center>
<img class="bds" src="hand-bags.jpg">
<p>Up To 50% Off<br>Hand Bags</p>
</div></a>

<a href="">
<div class="bran">
<center><img class="logo" src="crocs-n.jpg"></center>
<img class="bds" src="IMG_20200827_124533.jpg">
<p>40-70% Off<br>Casual Shoes</p>
</div></a>
</center>

<!--- Footer-->

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
  var dots = document.getElementsByClassName("dot");
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