<?php
session_start();
$con=mysqli_connect('s', '', '', '');
if($con){
	echo "connected";
}else{
	echo "no connection";
}

$user = $_POST['Username'];
$password = $_POST['Password'];

$q = "select * from userregistration  where User = '$user' && Password = '$password'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
	$_SESSION['Username'] = $user;
	header('location:home.php');
}else{
	header('location:login.html');
	
}

?>
