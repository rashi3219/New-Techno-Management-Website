<!DOCTYPE html>
<html>
<head>
	<title></title>
			 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="css/style.css" rel="stylesheet"/>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div id="logo" class="pull-left">
  <a class="navbar-brand" href="#"><img src="images/Logo.png" alt="" title="Neutron'20"></a>
   <h1><a href="#"><span>Neutron'20</span></a></h1>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="event.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Flagship Events</a>
          <a class="dropdown-item" href="#">Workshop</a>
          <a class="dropdown-item" href="#">Online Events</a>
          <a class="dropdown-item" href="#">Guest Lectures</a>
          <a class="dropdown-item" href="#">Pro Shows</a>
         
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><a href="login.php">Login/Register</a></button>
    </form>
  </div>
</nav>






	<section id="intro">
	<div class="intro-container wow fadeIn">
 <form class="box" action="validation.php" method="post">
 	<h1>LOGIN</h1>
 	<input type="text" name="email" placeholder="enter email">
 	<input type="password" name="password" placeholder="Password">
 	<input type="submit" name="" value="login">
 </form>
 <p>If you haven't register then <a href="register.php" class="lin" >SignUp</a> here.</p>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>