<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:women.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>active wear</title>

</head>

<style>
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
top:60px;
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
left:20.8%;
top:60px;
transform:translateX(-50);

}

nav ul li a.under3:hover::after{
content:'';
background:#ff523b;
width:80px;
height:5px;
border-radius:5px;
position:absolute;
left:26.4%;
top:60px;
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
left:31.8%;
top:60px;
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
left:42.7%;
top:60px;
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
img.icon{
position:absolute;
width:25px;
height:25px;
left:865px;
top:25px;
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
width:45px;
height:45px;
left:1190px;
top:23px;
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
/*-----------------------------username----------------------------*/
p.username{
	position:absolute;
	left:1100px;
	top:3px;
	font-size:20px;
}
img.profile-image{
	position:absolute;
	left:1050px;
	top:13px;
	width:40px;
	height:40px;
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
	left:1070px;
	top:50px;
	border-radius:
	
	width:120px;
	text-align:center;
	border:1px solid grey;
}
a.bt1{
	color:tomato;
	font-weight:bold;
	box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
h4.name2{
	color:green;
}
h2.name1{
	font-weight:normal;
	color:grey;
}
p{
	font-size:18px;
}
span.product-code{
	color:green;
}
h3.detail{
	color:tomato;
	font-size:24px;
}
/*----------------------------- Brands-------------------------------*/

div.brands{
background-color:white;
width:920px;
height:1180px;
margin-left:20px;
}
div.bran{
background-color:white;
width:200px;
height:270px;
float:left;
padding:20px;
margin-left:60px;
margin-top:80px;
padding-top:0;
padding-left:0;
margin-right:5px;
transition:transform 0.5s;
}
div.bran:hover{
transform:translateY(-5px);
}

img.bds{
width:220px;
height:230px;
}
p.bnds{
margin-top:50px;
font-size:25px;
font-weight:bold;
}
p.price{
	font-size:20px;
	margin-top:5px;
	color:black;
	text-align:left;
}
span.light{
	font-size:18px;
	color:grey;
}
span.dark{
	color:black;
}
span.off{
	color:red;
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
a:hover{
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
<!--  <a href="index.php" class="btn1">LogIn</a> -->
<img class="cart" src="newcart.jpg">

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
  
  <!--Brands-->
<center> <p class="bnds"> TRENDY ACTIVE WEAR</p></center>
<center>
<div class="brands">

<a href="">
<div class="bran">

<img class="bds" src="IMG_20200911_125505.jpg">
<p class="price"><b> Nike</b><br>
<span class="light">Black Printed Round Neck Running T-shirt</span>
<br><span class="dark"><b> &#8377; 2065</span><span class="off"> (10% OFF)</b></span></p>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="IMG_20200911_125147.jpg">
<p class="price"> <b>Unisex</b><br>
<span class="light">Black Mercedes Drift Cat 8 Running Shoes<span>
<br><span class="dark"> <b>&#8377; 799</b></span></p>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="IMG_20200911_130307.jpg">
<p class="price"><b>HRX</b><br>
<span class="light">Women Green Fit Running Tshirt</span>
<br> <span class="dark"><b> &#8377; 399</span> <span class="off">(30% OFF)</b></span></p>

</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_125637.jpg">
<p class="price"><b> ADIDAS</b><br>
<span class="light">Grey & Black Design Running Shoes</span><br> <span class="dark"><b> &#8377; 699</b></span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_130129.jpg">
<p class="price"><b> Rodzen</b><br>
<span class="light">Brown & Grey Print Joggers</span><br> <span class="dark"><b> &#8377; 999</b></span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_125732.jpg">
<p class="price"><b> Unisex</b><br>
<span class="light">Black & Grey 2.0 Smart Band<span><br><span class="dark"><b> &#8377; 799</b></span></p>
</div></a>


<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_130552.jpg">
<p class="price"><b> Club York</b><br>
 <span class="light">Grey & Teal Green Colourblocked Tracksuit<span><br> <span class="dark"><b> &#8377; 2399</span><span class="off">  (60% OFF)</b></span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_125603.jpg">
<p class="price"><b>HRX</b><br>
<span class="light">Orange Printed Yoga T-shirt</span><br> <span class="dark"> <b>&#8377; 524</span><span class="off">  (25% OFF)</b></span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200911_125812.jpg">
<p class="price"><b>Nike</b><br>
<span class="light">Black Solid Academy Soccer Tracksuit</span><br><span class="dark"><b>  &#8377; 3590</b></span></p>
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
