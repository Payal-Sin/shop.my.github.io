<?php require_once 'autoController.php'; ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>registration</title>
<script src="https://kit.fontawesome.com/64666bdf31.js" crossorigin="anonymous"></script>
</head>
<style>
.header{
width:88%;
margin:0px auto 0px;
color:white;
background-image:linear-gradient(to right,tomato,#ff8080,#ff9999);
text-align:center;
border:1px solid lightgrey;
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
margin:3px;
padding-top:28px;
}

.input-group input{
height:30px;
width:93%;
padding:4px 5px;
font-size:16px;
border-left:none;
border-right:none;
border-top:none;
border-width:1px;

}
.input-group input:focus
{
outline:none;
}
.input-group1 input{
height:30px;
width:93%;
padding:4px 5px;
font-size:16px;
border-left:none;
border-right:none;
border-top:none;
border-width:1px;

}
.input-group2 input{
height:30px;
width:93%;
padding:4px 5px;
font-size:16px;
border-left:none;
border-right:none;
border-top:none;
border-width:1px;

}

.btn{
padding:10px;
font-size:15px;
color:white;
background:tomato;
border:none;
border-radius:5px;
}
button[type=submit].btn:hover{
	background-color:#ff4d4d;
	cursor:pointer;
}
div.container{
background:white;
width:350px;
border:none ;
border-radius:10px 10px 0px 0px;
box-shadow:0 0 20px 0px rgba(0,0,0,0.1);
height:583px;

}
div.myaccount{
background:radial-gradient(#fff,#ffd6d6);
height:640px;
padding-top:50px;
}
form.form{
margin-top:40px;
}


</style>
<body>
<center>
<div class="myaccount">
<div class="container">
<div class="header">
<h2>Register</h2>
</div>
<form method="post" action="register.php">
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
<label>Email</label>
<input type="email" name="email" value="<?php echo $email;?>"
</div>

<div class="input-group2">
<label>Password</label>
<input type="password" name="password">
</div>


<div class="input-group2">
<label>Confirm Password</label>
<input type="password" name="pass">
</div>

<div class="input-group">
<button type="submit" name="register" class="btn">Register</button>
</div>
<p>
Already  a member?<a href="signin.php">  Sign in</a>
</p>
</form>
</div></center>
</div>
</body>
</html>