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
<head>
<title>Shoes</title>

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
/*----------------------------- Brands-------------------------------*/

div.brands{
background-color:white;
width:920px;
height:1050px;
margin-left:20px;
margin-top:30px;

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
transition:transform 0.5s;
text-align:left;
}
div.bran:hover{
transform:translateY(-5px);
}

img.bds{
width:250px;
height:250px;
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
}
span.s1{
	font-size:18px;
	color:grey;
}
	
/* ---------------Footer---------------- */



.footer{
background:black;
color:white;
font-size:14px;
padding:40px 0 10px;
margin-top:80px;
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
<!--  <a href="index.php" class="btn1">LogIn</a> -->
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
<!--Brands-->

<center>
<div class="brands">


<div class="bran">

<a href="">  
<img class="bds" src="IMG_20200928_113223.jpg">
<p class="price"><b>HRX</b><br><span class="s1">Slip-on Sneakers</span><br><b> &#8377; 699</b>  </p>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="IMG_20200928_113249.jpg">
<p class="price"><b>AfroJack</b><br><span class="s1">Grey Slip-On Sneakers</span><br><b> &#8377; 598</b>  <span class="s1-1"> &#8377; 2819</span><span class="s1-2">(79% OFF)</span></p>

</div></a>

<a href="">
<div class="bran">

<img class="bds" src="IMG_20200928_113425.jpg">
<p class="price"><b>Shoetopia</b><br><span class="s1">Synthetic Walking Shoes</span><br><b>&#8377;799</b>  <span class="s1-1"> &#8377; 999</span><span class="s1-2"> (20% OFF)</span></p>


</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200928_113327.jpg">
<p class="price"><b>Skechers</b><br><span class="s1">Flex Appeal 2.0 Sneakers</span><br><b>&#8377;919</b> <span class="s1-1">&#8377;2299</span><span class="s1-2"> (60% OFF)</span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200928_113339.jpg">
<p class="price"><b>Campus</b><br><span class="s1">Mesh Running Shoes</span><br><b> &#8377;799</b> <span class="s1-1">&#8377;1999</span><span class="s1-2"> (60% OFF)</span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200928_113359.jpg">
<p class="price"><b>Puma</b><br><span class="s1">Women Running Shoes</span><br><b> &#8377;999</b> <span class="s1-1">&#8377;2499</span><span class="s1-2"> (60% OFF)</span></p>
</div></a>


<a href="">
<div class="bran">
<img class="bds" src="IMG_20200928_113411.jpg">
<p class="price"><b>Red Tape</b><br><span class="s1">Blue Mesh Walking Shoes</span><br><b> &#8377;899</b> <span class="s1-1">&#8377;679</span><span class="s1-2"> (60% OFF)</span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src=" IMG_20200928_113659.jpg">
<p class="price"><b>Mizuno</b><br><span class="s1">Maximizer Running Shoes</span><b><br> &#8377;849</b>  <span class="s1-1">&#8377;1699</span><span class="s1-2"> (50% OFF)</span></p>
</div></a>

<a href="">
<div class="bran">
<img class="bds" src="IMG_20200928_113646.jpg">
<p class="price"><b>Meriggiare</b><br><span class="s1">Mesh Gym Shoes</span><br><b> &#8377;689</b>  <span class="s1-1">&#8377;2299</span><span class="s1-2"> (70% OFF)</span></p></p>
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
