
<?php
session_start();

require 'C:\xampp\htdocs\test\db.php';

$errors=array();
$username="";


if (isset($_POST['login'])){
$username=$_POST['user'];
$password=$_POST['password'];

 
 
 if (empty($username)){
 $errors['username']="username required";
 }
 

if (empty($password)){
 $errors['password']="password required";
 }

if(count($errors)===0){
$sql="SELECT * FROM users WHERE email=? OR username=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ss',$username,$username);
$stmt->execute();
$result=$stmt->get_result();
$user=$result->fetch_assoc();


if(password_verify($password,$user['password'])){

$_SESSION['id']=$user['id'];
$_SESSION['username']=$user['username'];
$_SESSION['email']=$user['email'];
$_SESSION['verified']=$user['verified'];

$_SESSION['message']="you are now nogged in";
$_SESSION['alert-class']="alert-success";
header('location:home2.php');
exit();

}else{
$errors['login_fail']="Wrong Credentials";
}
}
}	


?>