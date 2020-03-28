<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link  href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <a href="#" class="scrollto"><img src="images/Logo.png" alt="" title="Neutron'20"></a>
                <h1><a href="#"><span>neutron'20</span></a></h1>
            </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Sponsors</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="events.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Flagship Events</a>
          <a class="dropdown-item" href="#">Workshops</a>
          <a class="dropdown-item" href="#">Online Events</a>
          <a class="dropdown-item" href="#">Guest Lecture</a>
          <a class="dropdown-item" href="#">Pro Shows</a>
          
       
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item active">
      	<form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" ><a href="login.php">Login/Register</a></button>
    </form>

      </li>
    </ul>
    
  </div>
  
</nav>

	<section id="introd">
		<form class="boxi" action="userinfodata.php" method="post">
		<h1>SIGN UP</h1>

		<level>Name:</level><input type="text" name="name" placeholder="name"><br>
		<level>Email:</level><input type="text" name="email" placeholder="email"><br>
		<level>Contact No:</level><input type="text" name="contact" placeholder=" number"><br>
		<level>Do you want to register through Campus Ambassador: <level>
		<input type="radio" name="gl" value="yes " checked >Yes
		<input type="radio" name="gl" value="no" >No<br>
		<level>CollegeID:<level><input type="text" name="ide" placeholder="enter collageID"><br>
    <level>Events:<level><br><br>
        <input type="checkbox" name="even[]" value="Insight">Insight
        <input type="checkbox" name="even[]" value="Ekryptics">Ekryptics
        <input type="checkbox" name="even[]" value="Flagship">Flagship Event<br>
        <input type="checkbox" name="even[]" value="Workshop">Workshop
        <input type="checkbox" name="even[]" value="Hackatron">Hackatron
        <input type="checkbox" name="even[]" value="Maze Runner">Maze Runner
        <input type="checkbox" name="even[]" value="Guest Lecture">Guest Lecture

      <br><br>
		<level>Address:<level><input type="text" name="address" placeholder="enter address"><br>
			<level>Gender:</level>
		<input type="radio" name="gen" value="male" checked> Male
        <input type="radio" name="gen" value="female"> Female
        <input type="radio" name="gen" value="other"> Other<br> 
        <level>Password:</level><input type="password" name="password" placeholder="password"><br>
        <level>Confirm Password:</level><input type="password" name="cpassword" placeholder="password"><br>
		<input type="submit" name="" value="SignUp">
	</form>
</section>

</body>
</html>