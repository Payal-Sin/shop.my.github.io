<?php

session_start();
header('location:home.php');
$con= mysqli_connect('localhost','root');
if($con){
	echo"connection successful";
}
else{
	echo"no connection";
}
mysqli_select_db($con,'registration');

$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
$q="select * from users where username='$name' && password='$pass' && email='$email'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
	echo"duplicate data";
}else{
	$qy="insert into users(username,password,email) values ('$name','$pass','$email')";
	mysqli_query($con,$qy);
}
?>