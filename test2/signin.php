<?php require_once 'autoController.php'; ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>login</title>
<script src="https://kit.fontawesome.com/64666bdf31.js" crossorigin="anonymous"></script>
</head>
<style>
.header{
width:86.7%;
margin:0px auto 0px;
color:white;
background-image:linear-gradient(to right,tomato,#ff8080,#ff9999);

text-align:center;
border:
border-bottom:none;
border-radius:10px 10px 0px 0px;
padding:20px;
}

.input-group{
margin:20px 20px 10px 20px;
}
.input-group label{
display:block;
text-align:left;
margin:3px;
}
.input-group1 label{
display:block;
text-align:left;
padding-top:25px;
}

.input-group input{
height:30px;
width:93%;
padding:4px 5px;
font-size:16px;
border-left:none;
border-top:none;
border-right:none;
border-width:1px;

}

.input-group1 input{
height:30px;
width:93%;
padding:4px 5px;
font-size:16px;
border-left:none;
border-top:none;
border-right:none;
border-width:1px;

}

.input-group input:focus
{
outline:none;
}

.btn{
padding:10px;
font-size:15px;
color:white;
background:tomato;
border:none;
border-radius:5px;
}

.btn:focus{
outline:none;
border:none;
}
button[type=submit].btn:hover{
	background-color:#ff4d4d;
	cursor:pointer;
}

div.container{
background:white;
width:300px;
border:none;
border-radius:10px 10px 0px 0px;
box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
height:400px;

}
div.myaccount{
background:radial-gradient(#fff,#ffd6d6);
padding-top:50px;
height:550px;
}
img.size{
height:50px;
width:120px;
margin-top:10px;
margin-left:30px;
}
div.logo{
	background:radial-gradient(#fff,#ffd6d6);
}
</style>
<body>

<div class="logo">
  <a href="home.php">
  <img src="logo.jpg" class="size"></a>
  </div>


<center>
<div class="myaccount">
<div class="container">
<div class="header">
<h2>Login</h2>
</div>
<form method="post" action="signin.php">

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
<?php foreach($errors as $error):?>
<li><?php echo $error;?></li>
<?php endforeach;?>
</div>
<?php endif;?>

<div class="input-group">
<label>Username</label>
<input type="text" name="user" value="<?php echo $username;?>" 

</div>

<div class="input-group1">
<label>Password</label>
<input type="password" name="password">
</div>

<div class="input-group">

<button type="submit" name="login" class="btn">Log in</button>
</div>
<p>
Not yet a member?<a href="register.php">  Sign up</a>
</p>
</form>
</div></center>
</div>
</body>
</html>