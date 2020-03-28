<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'wtuserdata');

$email= $_POST['email'];
$password= $_POST['password'];

$q= "select * from userinfodata where email='$email' ";

$result = mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['email']=$email;
	header('location:edit.php');
}
else{
	header('location:login.php');
}
