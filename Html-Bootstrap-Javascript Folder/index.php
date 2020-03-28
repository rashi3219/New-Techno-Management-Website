<?php

session_start();
if(!isset($_SESSION['email']))



  ?>








<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="events.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="events.php">Flagship Events</a>
          <a class="dropdown-item" href="events.php">Workshop</a>
          <a class="dropdown-item" href="events.php">Online Events</a>
          <a class="dropdown-item" href="events.php">Guest Lectures</a>
          <a class="dropdown-item" href="events.php">Pro Shows</a>
         
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#spon">Sponsors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><a href="login.php">Login/Register</a></button>
    </form>
  
  </div>
</nav>
<section id="intro">
	<div class="intro-container wow fadeIn">
		<h1 class="mb-4 pb-0">The Annual<br><span>Tech-Fest</span><br>of BIT Sindri</h1>
		<p class="mb-4 pb-0">21-23 February<br>BIT Sindri,Dhanbad</p>
	</div>
</section>







<!---------Gallery-------->

           <section id="gallery">


                <div class="section-header">
                    <h2>Gallery</h2>
                   
                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event1.jpg" class="img-fluid pb-3">
                    </div>
                       <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event2.jpg" class="img-fluid pb-3">
                    </div>
                       <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event5.jpg" class="img-fluid pb-3">
                       </div>
                       <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event6.jpg" class="img-fluid pb-3">
                       </div>
                       <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event7.jpg" class="img-fluid pb-3">
                       </div>
                       <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/event8.jpg" class="img-fluid pb-3">
                       </div>
                        <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/hack.jpg" class="img-fluid pb-3">
                       </div>
                        <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/i3.jpg" class="img-fluid pb-3">
                       </div>
                        <div class="col-lg-4 col-mid-4 col-12">
                      <img src="images/work.jpg" class="img-fluid pb-3">
                       </div>


                      
                  </div>
                </div>



            
            
           </section>


          <!-------Sponsors------->


           <section id="spon">
  <div><h1>Sponsors</h1></div>
    <div class="container">
  <div class="row"> 
  <div class="col-lg-4">
    <div class="sponlogo"><img src="images/p1.png" ></div>
    <div class="sponlogo"><img src="images/p2.png"></div>
    <div class="sponlogo"><img src="images/p3.png" ></div>
  </div>
  <div class="col-lg-4">
    <div class="sponlogo"><img src="images/p4.png" ></div>
    <div class="sponlogo"><img src="images/p5.png" ></div>
    <div class="sponlogo"><img src="images/p6.png" ></div>
  </div>  
  <div class="col-lg-4">
    <div class="sponlogo"><img src="images/p7.png"></div>
    <div class="sponlogo"><img src="images/p8.png" ></div>
    <div class="sponlogo"><img src="images/p9.png" ></div>
  </div>
</div>
</div>
</section>






<!-------About------->


<section id="about">
        <div class="container">
            <div class="row">
                <div class="about-inno row">
                    <h2 class="col-lg-12">About The Fest</h2>
                    <p class="col-lg-6">
                        Neutron, the annual techno-management fest of BIT Sindri is organized in the third week of February spanning over three days and three nights. Commenced with a motto of providing technocrats all over the country a platform to showcase their technical
                        skills and talent, Neutron has come a long way over the years since its inception.
                    </p>
                    <p class="col-lg-6">
                        It is one of the largest technical fests which has made an impact on several college going students across the country. With different, captivating themes each year, the fest has recorded an immense
                        participation in the past and this year will be no different.
                    </p>
                    <p class="col-lg-4 offset-lg-4">Brace yourselves as the much awaited fest, Neutron 2K20 with ‘A Space Opera’ as its theme, takes off this February!
                    </p>
                </div>
                <div class="info col-lg-4">
                    <h3>Where</h3>
                    <p>BIT Sindri, Dhanbad, Jharkhand.</p>
                </div>
                <div class="info col-lg-4 offset-lg-4">
                    <h3>When</h3>
                    <p>21-23 February,2k20</p>
                </div>
            </div>
        </div>
    </section>




   
    <!-------Contact------->


    <section id="contact">
    	<div class="container">
    		<h2>Contact Us</h2>
        <div class="row">
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.5340285875145!2d86.47187591497958!3d23.656853084635557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f696e95958a6d5%3A0x7c14e668e6f2feea!2sBIT%20Sindri!5e0!3m2!1sen!2sin!4v1573580840004!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
          <div class="col-md-6 contact-info">
            <strong>Technical Club Student Center</strong> <br>
        
            <strong>Birsa Institute of Technology</strong> <br>
            <strong>Sindri, Dhanbad</strong> <br>


        <strong>Phone:</strong> +91 9668081541 <br>
                            <strong>Email:</strong> <a href="mailto:contactus.neutron@gmail.com">contactus.neutron@gmail.com</a> <br>

                            <div class="social-links">
                              
                                <a href="#" target="blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="blank"><i class="fa fa-instagram"></i></a>
                                <a href="#" target="blank"><i class="fa fa-youtube"></i></a>
                              
                            
                           
                        </div>

    		
      </div>
    </div>
  </div>
    </section>


 <!-------Footer------->


    <section id="footer">
     <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Birsa Institute Of Technology, Sindri</strong>.
            </div>
            <div class="credits">
                Designed by <a href="#" >Neutron Tech Team</a>
                <!-- Trigger the modal with a button -->
                <a style="display:block;"  data-toggle="modal" data-target="#myModal">Privacy Policy</a> 

</div>
</div>
</section>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>