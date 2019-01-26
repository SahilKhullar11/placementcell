<html>
<head>
<title>Rules and Procedures</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: login.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>
    <body>
    <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a href="home.php" class="navbar-brand"><span  class="glyphicon glyphicon-home"></span></a>
</div>
<div>
<ul class="nav navbar-nav">
<li ><a href="home.php">Home</a></li>
<li ><a href="campus-recruitment.php">Campus Recruitment</a></li>
<li class="active"><a href="rules-and-procedures.php">Rules And Procedures</a></li>
<li><a href="overview.php">Overview</a></li>
<li><a href="student.php">Companies</a></li>
<li><a href="myprofile.php">My Profile</a></li>
</ul>
</div>
<div>
 <ul class="nav navbar-nav navbar-right">
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>

</div>

</div>
</nav>
        <div class="container">
        <div class="row">
            <center><h1>Rules And Procedures</h1></center>
            </div>
        </div>
        <br/>
        <div class="container-fluid" >
            <div class="row">
            <center><img src="Images/Training.png"></center>
            </div>
        </div>
        <br/>
        <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row">
            <div class="container">
            <h2>Step-1</h2>
			<h3>Register Yourself by signing up and providing your info.The info you provide will be checked by the dept. for genuieness.</h3>
            </div> 
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="container">
            <h2>Step-2</h2>
			<h3>You Can Log in To see your Dashboard to check if you got have selected for any company's interview.</h3>
            </div> 
            </div>
        </div>
        <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row">
            <div class="container">
            <h2>Step-3</h2>
			<h3>If you got Selected contact to placement dept immidiately.</h3>
            </div> 
            </div>
        </div>
        <br/>
        <div class="container-fluid" style="background-color: whitesmoke">
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <br/>
        <br/>
        <img src="Images/logo.png">
      </div>
      <div class="col-sm-3">
        <br/>
        <br/>
        <h4>Explore</h4>
        <br/>
        <a href="https://www.chitkara.edu.in/chitkara-educational-trust/"><p>Chitkara Educational Trust</p></a>
        <a href="https://www.chitkara.edu.in"><p>Chitkara University</p></a>
        <a href="https://www.chitkara.edu.in/can/"><p>Chitkara Alumini Network</p></a>
        <a href="https:/curin.chitkara.edu.in"><p>CURIN</p></a>
        <a href="https://www.cuceed.org"><p>CEED</p></a>

      </div>
      <div class="col-sm-3">
        <br/>
        <br/>
        <h4>Our Institution</h4>
        <br/>
        <a href="https://www.chitkara.edu.in/engineering/"><p>Engineering & Technology</p></a>
        <a href="https://www.chitkara.edu.in/cbs/"><p>Bussiness School</p></a>
        <a href="https://www.chitkara.edu.in/ccae/"><p>Applied Engineering</p></a>
        <a href="https://www.chitkara.edu.in/architecture/"><p>School of Planning and Architecture</p></a>
        <a href="https://www.chitkara.edu.in/ihm/"><p>College of Hotel Management</p></a>
      </div>
      <div class="col-sm-3">
        <br/>
        <br/>
<h4>Contact Us</h4>
        <h5>Chitkara University (Punjab)</h5>
        <p>Chandigarh-Patiala National Highway</p>
        <p>Punjab 140 401</p>
        <br/>
        <h4>Chandigarh information centre</h4>
        <p>SCO 160-161, Sector 9-C</p>
        <p>Chandigarh 160 009</p>

      </div>
    </div>
  </div>
</div>
</div>
        <br/>
    </body>
</html>