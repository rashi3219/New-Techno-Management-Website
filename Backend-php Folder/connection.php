<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="email" placeholder="enter email">
	 <table aling="center" border="1px" style="width:600px,line-height:40px;">
  <tr>
  	<th colspan="4"><h2>user record</h2></th>
  </tr>
  <t>
  	<th>NAME:-</th>
  	<th>EMAIL:-</th>
  	<th>CONTACT:-</th>
  	<th>ADDRESS:-</th>
  	<th>GENDER:-</th>
  	<th>CAMPUS AMBASSASOR:-</th>
  	<th>COLLEGE:-</th>
  	<th>EVENTS:-</th>
</t>
<input type="submit" name="" value="search data">
</form>


$connection=mysqli_connect("localhost","root");
$db=mysqli_select_db($connection,'wtuserdata');
$email= $_POST['email'];
$que="select * from userinfodata where email='$email' ";
$res=mysqli_query($connection,$que);
while($row=mysqli_fetch_array($res))
{
 ?>
 <tr>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['email']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['camb']; ?></td>
    <td><?php echo $row['college']; ?></td>
    <td><?php echo $row['event']; ?></td>

</tr>
<?php }
 ?>
</table>





</body>
</html>
