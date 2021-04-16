<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:women.php');
}
?>
<?php


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
<title>Myproject2</title>
<script src="https://kit.fontawesome.com/64666bdf31.js" crossorigin="anonymous"></script>
</head>
<style>
body{
background-color:snow;

}
div.div1{
	margin-top:30px;
}

img.img1{
         box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
         width:100%;
		 height:500px;
         }
div.div2{
         position:absolute;
         top:20%;
         left:10%;
         font-size:50px;
         color:white;
}
div.div3{
         position:absolute;
         top:30%;
         left:30%;
         color:snow;
         font-size:70px;
}
p.p2{
     position:absolute;
	 top:50%;
	 left:30%;
	 color:snow;
	 font-size:25px;
	 }
table.table1{
        border:none;
		position:absolute;
		top:400px;
		left:400px;
		color:white;
		font-size:20px;
		}
th.th{
    border-right:1px solid white;
	border-width:2px;
	padding-left:20px;
	padding-right:20px;
	
	}
div.div4{
    font-size:20px;
	position:absolute;
	background-color:skyblue;
	left:1%;
	color:white;
	width:40%;
	height:50px;
	}

 div.div5{
background-color:lightgrey;
margin-top:1px;
width:100%;
height:20px;
left:1px;

}
p.p3{
margin-left:98px;
}

/*
img.img2{
float:left;
border-radius:50%;
height:250px;
width:18%;
padding-top:10px
margin-right:-1px;
}
img.img3{
float:left;
border-radius:50%;
height:250px;
width:18%;
padding-top:10px
padding-left:50%;
*/
hr.hr1{
width:auto;
}

p.p3{
top:10px;
font-size:20px;
}
input[type="text"].search{
padding-top:0px;
border:none;
height:28px;
}
input[type="text"].search:hover{
border:none;
outline:none;
border-radius:none;
}
button.search1{
border:none;
margin-top:-1px;
height:29px;

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
/*  Best Buys */

div.div15{
background:white;
width:570px;
height:700px;
margin-top:20px;
padding:70px;
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

img{
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


}
p.par::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:48%;
top:865px;
transform:translateX(-50);
}
/*---------------------bar--------------------*/
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
color:black;
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
margin:;
padding-left:25px;
padding-right:40px;
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
input[type=search].search{
border:
width:15px;
left:860px;
float:right;
position:absolute;
top:18px;
height:38px;
padding-left:35px;
}
input[type=search].search:focus{
outline:none;
}
/*
.search-btn{
float:right;
width:50px;
height:50px;
border-radius:50%;
position:absolute;
left:850px;
top:50px;
align-items:center;
}
div.cart{
position:absolute;
left:1050px;
top:33px;
width:40px;
height:40px;
background-color:pink;
}
*/
img.icon{
position:absolute;
width:25px;
height:25px;
left:865px;
top:25px;
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

a.btn1{

background-color:#ff523b;
border:none;
color:black;
width:7%;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:18px;
font-weight:bold;
border-radius:30px;
position:absolute;
top:50px;
left:1120px;
height:31px;
padding-top:9px;
}
a.btn1:hover{
background-color:tomato;
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

width:95%;
top:0;
}
/*-------------------Best Deals-----------------*/
h1.deals{
margin-top:50px;
}
div.best-deals{
background:;
width:730px;
height:630px;


}
div.best{
background:;
width:190px;
height:250px;
float:left;
padding:20px;
margin-left:5px;
margin-top:5px;
font-size:20px;
transition:transform 0.5s;
color:black;
}
div.best:hover{
transform:translateY(-5px);
color:black;
}

img.deals{
width:100%;
height:210px;

}

/*---------------sale Image----------------*/

div.sale{
height:380px;
background-image:linear-gradient(#fff,#ffd6d6);
}
img.sale-image{
width:70%;
height:380px;
float:left;

}
div.tex{
background:;
padding-top:70px;
color:palevioletred;
}
h1.tex1{
margin-left:1000px;
}
h3.tex2{
margin-left:1025px;
}
h2.tex3{
margin-left:980px;
}

/*------------------Deals Of The Day------------------*/

h1.deals-day{

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
/*overflow-x:auto;
white-space:nowrap;*/

}
div.western3{
background-color:white;
width:210px;
height:310px;
float:left;
padding:1px;
margin-left:24px;
margin-right:20px;
display:inline-block;
margin-top:1px;
font-weight:bold;

}
img.wes3{
height:220px;
width:100%;
}
p.we3{
margin-left:5px;
font-family:arial;
font-weight:normal;
}
img.log{
width:100px;
height:50px;
}
h1.of{
margin-top:2px;
color:grey;
font-family:Footlight MT;
}
img.log1{
width:100px;
height:30px;
}
h2.of1{
pedding-top:2px;
color:grey;
font-family:Footlight MT;
}
p.sp{
margin-top:2px;
color:grey;
font-size:25px;
font-family:Footlight MT;
}
span.spp{
color:grey;
font-size:34px;
}
div.western3:hover{
opacity:0.8;
}

/*---------------------*/
div.image2{
margin-top:50px;
max-width:2000px;
background:white;

}
img.div-image2{
width:70%;
height:400px;
}
p.arrivals{
	position:absolute;
	left:1050px;
	color:black;
	top:3770px;
	font-size:30px;
	font-weight:bold;
}
p.arrivals1{
	position:absolute;
	left:1000px;
	top:3850px;
	font-size:23px;
	color:black;
}

p.arrivals2{
	position:absolute;
	left:1100px;
	top:3920px;
	font-size:20px;
	color:black;
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


/*-----------------------slider css-------------------------*/



.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 2000px;
  position: relative;
  margin-top: 30px;
  
}

/* Caption text */
.text1 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
 bottom: 200px; 
  width: 100%;
  text-align: center;
  right:80px;
}

.text2 {
  color: #f2f2f2;
  font-size:25px;
  padding: 8px 12px;
  position: absolute;
 bottom: 60px; 
 width: 68%;
 height:360px;
  text-align:center ;
  left:190px;
  
  top:8px;
}

.text3 {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
top:280px; 
  width: 100%;
  text-align: center;
  left:340px;
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
mySlides fade{
	
}

p.pp{
	font-size:30px;
	font-family:
	word-spacing:10px;
	
}
span.caption1{
	font-size:40px;
}
img.slide-logo{
	position:absolute;
	width:100px;
	height:60px;
	bottom:120px;
	left:640px;
}
p.title2{
	
	font-size:60px;
	text-align:center;
	
}
h1.title{
	position:
	font-weight:normal;
	
}
p.title3{
	font-size:30px;
	text-align:center;
	position:absolute;
	top:200px;
	left:250px;
	
}
table.table1{
        border:none;
		position:absolute;
		left:260px;
		right:500px;
		top:300px;
		color:white;
		font-size:20px;
		}
th.th{
    border-right:1px solid white;
	border-width:2px;
	padding-left:20px;
	padding-right:20px;
	
	}
.numbertext2 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 110px;
}
span.active-wear{
	bottom:10px;
	font-size:25px;
	background:none;
}

<!------------------------------------->
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
width:210px;
height:60px;
padding-left:5;
}
p.bnds{
margin-top:50px;
font-size:25px;
font-weight:bold;
}
/*-------------------------------alert box-----------------------------------*/

#customalert{
display:none;
position:fixed;
top:0;
left:0;
right:0;
bottom:0;
z-index:999;
background-color:rgba(255,255,255,0.75);
}
#box{
	border-radius:5px;
	margin-top:100px;
	margin-left:400px;
	height:183px;
	width:500px;
	text-align:center;
	/*box-shadow:2px 2px 8px black;*/
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	background:white;
}
#alert{
	background:#cc0044;
	color:white;
	font-size:30px;
	padding:12px;
	
}
.content{
	margin-top:30px;
	font-size:25px;
}
#confirmbtn{
	height:35px;
	width:80px;
	border:none;
	border-radius:8px;
	background:#cc0044;
	cursor:pointer;
	margin-top:1px;
	margin-left:400px;
	font-size:18px;
	color:white;
}
#confirmbtn:focus{
	outline:none;
	box-shadow:0px 15px 25px -5px rgba(darken(dodgerblue,40%));
	transform:scale(1.03);
	
}
#confirmbtn:active{
	box-shadow:0px 4px 8px  rgba(darken(dodgerblue,30%));
	transform:scale(.98);
}


/*-------------------------username--------------------------*/

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
/*---------------------------------------Categories-To-Bag-------------------------------------*/
div.categories-to-bag{
	max-width:2000px;
	background:white;
	height:500px;
	padding-left:20px;
	
	
}
div.categories{
	float:left;
	border-radius:50%;
	background:pink;
	height:175px;
	width:175px;
	margin-right:40px;
	margin-left:40px;
	margin-top:50px;
	text-align:center;
	font-size:20px;
	font-weight:normal;
	font-family:arial;
	color:black;

}
img.cate{
	border-radius:50%;
	height:180px;
	width:180px;
}
p.heading{
	font-size:30px;
	font-weight:bold;
	font-family:arial;
	margin-top:40px;
}
img.cate:hover{
	height:182px;
	width:182px;
	transition:0.2s;
}
/*-------------------------------------------Trending-western-wear---------------------------------*/
div.Trending-western-wear{
	max-width:2000px;
	height:280px;
	padding:20px;
	background:white;
}
div.western-wear{
	float:left;
	margin-left:23px;
	margin-right:20px;
	font-size:20px;
	transition:transform 0.5s;
}
div.western-wear:hover{
transform:translateY(-5px);
}

img.trending-wear{
	height:230px;
	width:215px;
}

/*-------------------------------------------Trending-Indian-wear---------------------------------*/
div.Trending-indian-wear{
	max-width:2000px;
	height:280px;
	padding:20px;
	background:white;
}
div.indian-wear{
	float:left;
	margin-left:23px;
	margin-right:20px;
	transition:transform 0.5s;
}
div.indian-wear:hover{
transform:translateY(-5px);
}

img.trending-wear{
	height:230px;
	width:215px;
}
span.s1{
	color:grey;
	font-size:18px;
}
p.p1{
	margin-left:8px;
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
 <b> <li><a class="under1" href="mens.php">MEN</a></li></b>
 <b> <li><a class="under2" href="women.php">WOMEN</a></li></b>
 <b> <li><a class="under3" href="kids.php">KIDS</a></li></b>
 <b> <li><a class="under4" href="mens.html">HOME & LIVING</a></li></b>
 <b> <li><a class="under5" href="mens.html">ESSENTIALS</a></li></b>
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
  
  <!--------------- slider image---------------->
 
 <div class="slideshow-container">

<div class="mySlides fade">
<a href="slidedetail(1).php">
  <div class="numbertext">1 / 3</div>
  <img src="shocked-two-women-friends-holding-shopping-bags-using-mobile-phone_171337-5718.jpg" style="width:100%" >
  <div class="text2">
  <h1 class="title"> Welcome to India's Biggest Fashion Store!</h1>
  <p class="title2">Flat &#8377; 300 Off</p>
  <p class="title3">+ Free Delivery on your first order</p>
  
  <table class="table1">
  <tr>
<th class="th">100% <br>Original</th>
<th class="th">Easy <br>Returns</th>
<th class="th">Sale <br> Payments</th>
<th>500+ <br>Brands</th>
</tr></table>

   </div></a>
   </div>
  </div>

<div class="mySlides fade">
<a href="page3.php" onClick="showcustom()">

  <div class="numbertext2">2 / 3</div>
  <img src="girls-taking-selfie-self-portrait-photos-smartphone-models-posing-near-blue-wall-studio-female-showing-positive-face-emotions_158538-3716.jpg" style="width:100%">
  <div class="text3">
  <img  class ="slide-logo" src="levis.jpg">
  <p class="pp">Up To 70% Off
  <br>
  <span class="caption3">+SHOP NOW<span> </p></div></a>
  </div>
</div>

<div class="mySlides fade">
<a href="slidedetail(3).php">

  <div class="numbertext2">3 / 3</div>
  <img src="240_F_301953320_57ylg9G74aqKRCQEuibgxb7M3ghLNrxI.jpg" style="width:100%">
  <div class="text1">
  <p class="pp">Trendy Activewear<br><span class="caption1">
  +SHOP NOW</span><br><span class="active-wear"> SWEAT TODAY, FIT TOMORROW </span></p></div>
</div></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!----------------------------------------------------------------------->
<div id ="customalert">
<div id="box">
<div id="alert">Alert</div>
<div class="content">
<p>Please Login First</p>
<button type="button" id="confirmbtn" onclick="hidealert()">OK</button>
</div>
</div>
</div>


<!---------------Best Deals-------------->

<center><h1 class="deals"> Best Deals On Style Essentials</h1></center>

<center><div class="best-deals">
<a href="shoes.php">
<div class="best">
<img class="deals" src="home image 2.jpg">Casual Shoes<br>Under<b> Rs. 599</b>
</div></a>
<div class="best">
<img class="deals" src="image 5.jpg">Dresses<br> Under <b> Rs.899</b>
</div>
<div class="best">
<img class="deals" src="home image 3.jpg">Watches <br> Under<b>  Rs. 600</b>
</div>
<div class="best">
<img class="deals" src="mshirt.jpg">Shirts <br> Under<b>  Rs. 799</b>
</div>
<div class="best">
<img class="deals" src="image 6.jpg">Bags<br> Under<b> Rs. 399</b>
</div>
<div class="best">
<img class="deals" src="home image 4.jpg">Bracelets<br> Under <b>Rs.299</b>
</div>
</div>
</center>
<!------------ Sale--------------->
<a href="page1.php">
<div class="sale">
<img class="sale-image" src="image2.jpg">
<div class="tex">
<h1 class="tex1"> Min. 60% Off</h1>
<h2 class="tex3"> STYLE UP MOVE UP </h2>

<h3 class="tex2"> +SHOP NOW</h3>
</div>
</div>
</a>
<!------------Deals of the day---------------->
<center><h1 class="deals-day"> Deals Of The Day</h1></center>
<div class="main3">

 <div class="western3">
 <img class="wes3"src="flipflop.jpg">
 <center><img class="log" src="levis.jpg"></center>
 <p class="sp"><span class="spp">Under Rs. 499</span>
 <br>Trendy Flip Flop</p>
 </div>

<div class="western3">
 <img class="wes3" src="deepika.jpg">
 <center> <img class="log" src="anouk.jpg"></center>
 <p class="sp"><span class="spp">Flat 50% Off</span>
 <br>On Kurtas</p>
 </div>

<div class="western3">
 <img class="wes3" src="style.jpg">
 <center>  <img class="log" src="roadster.jpg"></center>
 <p class="sp"><span class="spp">Best Of Styles</span>
<br> Top Brands</p>
 </div>

<div class="western3">
 <img class="wes3" src="fossil watch.jpg"><p class="we3">
 <center> <img class="log1" src="IMG_20200828_124409.jpg"></center>
 <p class="sp"><span class="spp">Min. 50% Off</span>
 <br> On Watches</p>
 </div>

<div class="western3">
 <img class="wes3" src="bags.jpg"><p class="we3">
 <center> <img class="log1" src="IMG_20200828_124344.jpg"></center>
 <p class="sp"><span class="spp">Flat 55% Off</span>
 <br>+ Extra 10% Off</p>
 </div>
 </div>
<!----------------------------------------CATEGORIES TO BAG----------------------------->

<p class="heading"> CATEGORIES TO BAG </p>
<div class="categories-to-bag">
<a href="shoes.php">
<div class="categories">
<img class="cate" src="sneakers.jpg">Casual Shoes
</div></a>

<a href="">
<div class="categories">
<img  class="cate" src="deepika.jpg">Kurtas
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="IMG_20200927_125750.jpg">Sarees
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="IMG_20200927_125806.jpg">Dresses
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="IMG_20200923_124659.jpg">Flats & Heels
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="handbags.jpg">Handbags
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="mshort.jpg">Shorts
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="IMG_20200927_125823.jpg">Shirts
</div></a>

<a href="">
<div class="categories">
<img class="cate"  src="morangetshirt.jpg">T-Shirts
</div></a>

<a href="">
<div class="categories">
<img class="cate" src="original.jpg">Beauty Products
</div></a>
</div>

<!--------------------------------------------------Trending-western-wear------------------------------------>
<p class="heading"> TRENDING IN WESTERN WEAR </P>
<div class="Trending-western-wear">
 <div class="western-wear">
 <img class="trending-wear" src="mhooded.jpg"><p class="p1"><b>Roadster</b><br><span class="s1">Navy Blue Hooded T-shirt</span></p>
 </div>
 <div class="western-wear">
 <img class="trending-wear" src="tshirt.jpg"><p class="p1"><b>Elevate</b><br><span class="s1">The Linen Collection</span></p>
 </div>
<div class="western-wear">
 <img class="trending-wear" src="img3.jpg"><p class="p1"><b>Burgundy</b><br><span class="s1">Solid Biker Jacket</span></p>
 </div>

<div class="western-wear">
 <img class="trending-wear" src="jumpsuit1.jpg"><p class="p1"><b>Vishudh</b><br><span class="s1">Striped Basic Jumpsuit</span></p>
 </div>

<div class="western-wear">
 <img class="trending-wear" src="IMG_20200923_225902.jpg"><p class="p1"><b>Nykaa</b><br><span class="s1">Blue Floral Peplum Top</span></p>
 </div>
</div>

<!--------------------------------------------------Trending-INDIAN-wear------------------------------------>
<p class="heading"> TRENDING IN INDIAN WEAR </p>
<div class="Trending-indian-wear">
 <div class="indian-wear">
 <img class="trending-wear" src="IMG_20200819_114433.jpg"><p class="p1"><b>Vishudh</b><br><span class="s1">Trendy Tunic Kurtas</span></p>
 </div>
 <div class="western-wear">
 <img class="trending-wear" src="IMG_20200819_112405.jpg"><p class="p1"><b>Nykaa</b><br><span class="s1">Designer Salwar Suit</span></p>
 </div>
<div class="western-wear">
 <img class="trending-wear" src="ethnic casual.jpg"><p class="p1"><b>Hangup</b><br><span class="s1">Ethnic Casuals</span></p>
 </div>

<div class="western-wear">
 <img class="trending-wear" src="img12.jpg"><p class="p1"><b>Vishudh</b><br><span class="s1">Heritage Sarees</span></p>
 </div>

<div class="western-wear">
 <img class="trending-wear" src="mensdhoti.jpg"><p class="p1"><b>Manyavar</b><br><span class="s1">Mens Dhoti Kurtas</span></p>
 </div>
</div>

<!----------------------------------------------------------------------------------->
<a href="page3.php">
<div class="image2">
<div class="new-arrivals"><p class="arrivals"> NEW ARRIVALS</p><p class="arrivals1"> FROM THE BEST OF BRANDS</p>
 <p class="arrivals2">+EXPLORE</p></div>
<img class="div-image2" src="istockphoto-994087524-612x612.jpg">
 
</div> </a>

 
 <!---------------------------------------------------Brands-------------------------------------->
<center> <p class="bnds"> BEST OF BRANDS</p></center>
<center>
<div class="brands">

<a href="">
<div class="bran">

<img class="bds" src="roadlogo.jpg">
<center><img class="logo" src="roadster.jpg"></center>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="anouklogo.jpg">
<center><img class="logo" src="anouk.jpg"></center>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="mast logo.jpg">
<center><img class="logo" src="mast.jpg"></center>

</div></a>

<a href="">
<div class="bran">
<img class="bds" src="levislogo.jpg">
<center><img class="logo" src="levis.jpg"></center>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="hrxlogo.jpg">
<center><img class="logo" src="hrx.jpg"></center>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="wrognlogo.jpg">
<center><img class="logo" src="wrogn.jpg"></center>
</div></a>
</center>

 
 <!-----------------------Footer------------------------->
 
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

 </div>
 
 <!---------------------slider javascript------------------------>
 
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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
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