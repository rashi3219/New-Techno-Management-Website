<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="ide" placeholder="enter id"><br>
	<input type="submit" name="delete" value="delete data"><br>
	
</form>
</body>
</html>






<?php
$connection=mysqli_connect("localhost","root");
$db=mysqli_select_db($connection,'wtuserdata');
$college=$_POST['ide'];
$que="delete from eventinfodata where collegeid='$college' ";
$que1="delete from userinfodata where collegeid='$college' ";
$res=mysqli_query($connection,$que);
$res1=mysqli_query($connection,$que1);


  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <?php
if(isset($_POST['delete']))
{
	echo "record deleted";
}
else
{
	echo "failed";
}


    ?>
  </body>
  </html>