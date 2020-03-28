<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'wtuserdata');


$college= $_POST['ide'];
$even= $_POST['even'];

$b=implode(",", $even);


if($password==$cpassword)
{


$query ="insert into eventinfodata(collegeid, event)
values( '$college', '$b') ";



$result = mysqli_query($con, $query);
echo '<script type="text/javascript"> alert("You are Successfully signed in")</script>';


}
else
{

	echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
}





 ?>