<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'wtuserdata');

$name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$gen= $_POST['gen'];
$gel= $_POST['gl'];
$even= $_POST['even'];
$college= $_POST['ide'];
$address= $_POST['address'];
$password= $_POST['password'];
$cpassword= $_POST['cpassword'];
$b=implode(",", $even);



if($password==$cpassword)
{


$query ="insert into userinfodata(name, email, contact, gender, camb, collegeid,event ,address, password, confirmpassword)
values('$name', '$email', '$contact', '$gen', '$gel', '$college', '$b', '$address', '$password', '$cpassword') ";

$query1 ="insert into eventinfodata(collegeid, event)
values( '$college', '$b') ";



$result = mysqli_query($con, $query);
$result1 = mysqli_query($con, $query1);
echo '<script type="text/javascript"> alert("You are Successfully signed in")</script>';


}
else
{

	echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
}





 ?>