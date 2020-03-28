<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PARTICIPANT DETAILS</h1>
	<P>Enter your email</P>
<form action="" method="POST">
	<input type="text" name="ide" placeholder="enter collegeid"><br>
	<input type="submit" name="search" value="search data"><br>
	
</form>
<form action="delete.php" method="POST">
	
	<input type="submit" name="delete" value="delete data"><br>
	
</form>

</body>
</html>










<?php
$connection=mysqli_connect("localhost","root");
$db=mysqli_select_db($connection,'wtuserdata');
$college=$_POST['ide'];
$que="select * from userinfodata where collegeid='$college' ";

$res=mysqli_query($connection,$que);



  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <table aling="center" border="1px" style="width:600px,line-height:40px;">
  <tr>
  	<th colspan="10"><h2>user record</h2></th>
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
  	
  	
  	<th>OPERATION:-</th>
</t>
<?php
if(isset($_POST['search']))
{
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
    <td><?php echo $row['collegeid']; ?></td>
     <td><?php echo $row['event']; ?></td>
    
    <td><a href="update.php">EDIT</a></td>
   
    

</tr>
<?php }
}
 ?>


  </table>


  


 
  </body>
  </html>