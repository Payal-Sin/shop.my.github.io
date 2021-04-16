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
<html lang="en">
<head>
<title>Detail(4)</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->


<!-- Custom style -->


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
left:41.7%;
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

/*-----------------------------------*/
.single-product
{
margin-top:50px;
background:;
height:800px;
margin-left:50px;
width:1090px;


}
.single-product .col-2 img{
padding:0;
}
.single-product .col-2 {
padding:30px;
width:25%;
float:left;
margin-left:20px;
}
.single-product h4{
margin:20px 0;
font-size:22px;
font-weight:bold;
}
.single-product select{
display:block;
padding:10px;
margin-top:20px;
}
.single-product select{
outline:none;
}
.single-product input{
width:50px;
height:40px;
padding-left:10px;
font-size:20px
margin-right:10px;
border:1px solid grey;
margin-top:40px;
}
input:focus{
outline:none;
}
.single-product .fa{
color:red;
margin-left:10px;
}
div.col-2{
background-color:;
margin-left:100px;

}
small-img-row{
display:flex;
justify-content:space-between;

}
.small-img-col{
flex-basis:24%;
cursor:pointer;
margin-left:1px;

}
img.img{
float:left;

display:block;
}
img.imi{
float:left;

}
img.image{
width:100%;
height:330px;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

div.nav{
float:left;
background-color:;

margin-left:90px;
width:500px;
}
/*----------------- Similar Products------------------------ */

div.related-product{
background:white;
width:960px;
height:850px;
margin-top:5px;
padding:10px;
}
div.related{
background:white;
width:250px;
height:360px;
float:left;
margin-left:48px;
margin-top:50px;
border:;
transition:transform 0.5s;
}
div.related:hover{
transform:translateY(-5px);
}
img.product{
width:250px;
height:270px;
}
p.rel{
margin-top:2px;
font-size:21px;
margin-left:15px;
font-family:Baskerville Old Face;
}
p.similar{

margin-left:50px;
font-size:25px;
font-weight:bold;

}
a.more{
margin-right:80px;
float:right;
font-size:20px;
color:black;
}
a.more:hover{
color:red;
}
span.s1{
	color:grey;
	font-size:19px;
}
/*----------------------- Footer ------------------------------*/



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
	
	width:120px;
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
button[type=submit].buy {
	text-transform: uppercase;
    background: #F68B1E;
    border: 1px solid #F68B1E;
    cursor: pointer;
    color: #fff;
    padding: 8px 10px;
    position:absolute;
	left:585px;
	top:303px;
	width:150px;
	height:40px;
	font-size:15px;
	font-weight:bold;
	
}
button[type=submit].buy:focus{
	outline:none;
}
div.container-new{
	position:absolute;
	width:90px;
	height:40px;
	
	
}
button[type=submit].buy:hover {
	background: #f17e0a;
    border-color: #f17e0a;
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

span.span{
	text-decoration:line-through;
	color:grey;
	font-weight:normal;
}
span.span1{
	color:tomato;
	font-weight:normal;
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
  <li><a class="under2" href="">WOMEN</a></li>
  <li><a class="under3" href="">KIDS</a></li>
  <li><a class="under4" href="">HOME & LIVING</a></li>
  <li><a class="under5" href="">ESSENTIALS</a></li>
  </ul>
  </nav>
  </div>
  <input class="search" type="search" placeholder="search.....">
  <img class="icon" src="searchicon.jpg">
<!--  <a href="index.php" class="btn1">LogIn</a> -->
<a href="viewCart.php"><img class="cart" src="newcart.jpg"></a>
<div class="cart-view">
        <a href="viewCart.php" title="View Cart" class="cart"><i class="icart"></i> <?php echo ($cart->total_items() > 0)?$cart->total_items().' ':''; ?></a>
    </div>

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
  
 
  <div class="container-new">
    
	
    <!-- Cart basket -->
        
    <!-- Product list -->
    <div class="row col-lg-12">
        <?php 
        // Get products from database 
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
	
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="card col-lg-4">
            <div class="card-body">
                
                
                
         <a href="cartAction4.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary"> <button type="submit" class="buy">Add to Cart</button></a>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>

  
  
  <div class="small-container single-product">
<div class="row">
<div class="col-2">
<img class="image" src="IMG_20200923_124711.jpg" id="ProductImg">

<div class="small-img-row">

<div class="small-img-col">
  <img class="img" src="IMG_20200923_124711.jpg" width="50%" height="165px" onclick="myFunction(this)">
</div>
<div class="small-img-col">
<img src="IMG_20200926_114648.jpg" width="50%" height="165px" onclick="myFunction(this)"  >   
</div>

<div class="small-img-col">
  <img class="imi" src="IMG_20200926_114616.jpg" width="50%" onclick="myFunction(this)">
</div>

<div class="small-img-col">
  <img class="im"src="IMG_20200926_114602.jpg" width="50%" onclick="myFunction(this)">
</div>

</div>
</div>





<!--<div class="col-2">-->
<div class="nav">
 <h1 class="nam">GNIST</h1>
 <h2 class="name1">Women Black Solid Heels</h2>
 <h4 class="name2">&#8377; 699   <span class="span"> &#8377; 2199</span>  <span class="span1">(30% OFF)</span></h4>
 <select >
 <option >Select Size</option>
 <option>XXL</option>
 <option>XL</option>
 <option>Large</option>
 <option>Medium</option>
 <option>Small</option>
 </select>
 <input type="number" value="1">
<!---- <a href="optional2.php" class="btn">Add to Cart</a>------->
 <h3 class="detail">Product Detail<i class="fa fa-indent"></i></h3>
 <p>A pair of black open toe stilettos, has high-top styling,ankle loop detail<br>Synthetic upper<br>Cushioned footbed</p>
</p>
<h3>Size & Fit</h3>
<p>Heel height : 6 Inches (15.24cm)</p>
<h3>Material & Care</h3>
<p>Synthetic<br>
Wipe with a clean, dry cloth to remove dust</p>
<h3>Product Code: <span class="product-code"> 8529111</span></h3>
<h3>Sold by:<span class="product-code"> GNIST</span></h3>
</div>
<!--</div>-->
</div>
</div>

<!-----------------------similar products----------------------------->
<p class="similar">RELATED PRODUCTS</p>
<center>
<div class="related-product">

<div class="related">
<img class="product" src="IMG_20200923_124834.jpg"><p class="rel"><b>Meriggiare</b><br>
<span class="s1">Women Sandals</span><br><b>Rs.999</b></br></p>
</div>

<div class="related">
<img class="product"  src="IMG_20200923_124757.jpg"><b><p class="rel">Sherrif Shoes</b><br>
<span class="s1">Women Heels</span><br><b>Rs.689</b></p>
</div>

<div class="related">
<img class="product" src="IMG_20200923_124632.jpg"><p class="rel"><b>Shoetopia</b><br>
<span class="s1">Tan & Black Animal Print Stilettos</span><br><b>Rs.1139</b></br></p>
</div>

<div class="related">
<img class="product" src="IMG_20200923_124722.jpg"><p class="rel"><b>Mochi</b><br>
<span class="s1">Women Heels</span><br><b>Rs.1124</b></br></p>
</div>

<div class="related">
<img class="product" src="IMG_20200923_124617.jpg"><p class="rel"><b>CHARLES</b><br>
<span class="s1">Women Sandals</span><br><b>Rs.899</b></br></p>
</div> 

<div class="related">
<img class="product" src="IMG_20200923_124746.jpg"><p class="rel"><b>Meriggiare</b><br>
<span class="s1">Women Platforms</span><br><b>Rs.835</b></br></p>
</div>






</div></center>
<a class="more" href="page2.php" > View More >>></a>

<!-------------------------------------footer---------------------------------->
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
function myFunction(smallImg)
{
var fullImg=document.getElementById("ProductImg");
fullImg.src=smallImg.src;
}
</script>
<!-------------------------------->
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