<html>
<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: login.html"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
		$link=mysqli_connect("localhost","root","","ip");
		
		if($link===false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
			}
		?>	

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Sign Up</title>
</head>
<body style="background-color:gainsboro">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><span  class="glyphicon glyphicon-home"></span></a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="campus-recruitment.php">Campus Recruitment</a></li>
                <li><a href="rules-and-procedures.php">Rules And Procedures</a></li>
                <li><a href="overview.php">Overview</a></li>
				<li><a href="student.php">Companies</a></li>
				<li><a href="myprofile.php">My Profile</a></li>
            </ul>
        </div>
        <div>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="background-color: #7092f0">
    <center><h2>Dashboard</h2></center>
    <div class="jumbotron">
    <div class="form-group">
    <label for="name">Full Name:<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['name'].' '; ?></span>
	</label>
    </div>
    <div class="form-group">
    <label for="rollno">Roll Number:
	<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['rollno'].' '; ?></span>
	</label>
    </div>
    <div class="form-group">
        <label for="stream">Stream:
		<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['stream'].' '; ?></span></label>
    </div>
    <div class="form-group">
        <label for="stream">SEPCIALIZATION:
		<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['sep'].' '; ?></span>
		</label>
    </div>
     <div class="form-group">
    <label for="rollno">CGPA:
	<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['cgpa'].' '; ?></span>
	</label>
    </div>
	<div class="form-group">
    <label for="rollno">Contact:
	<?php $query="select * from users where rollno='$user'";
	  $select=mysqli_query($link,$query);
	  $row=mysqli_fetch_assoc($select);?>
	  <span style="color: green;"><?php echo $row['num'].' '; ?></span>
	</label>
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
</body>
</html>