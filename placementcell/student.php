
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

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Login</title>
</head>
<body style="background-color: gainsboro">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a href="home.php" class="navbar-brand"><span  class="glyphicon glyphicon-home"></span></a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="home.php">Home</a></li>
<li><a href="campus-recruitment.php">Campus Recruitment</a></li>
<li><a href="rules-and-procedures.php">Rules And Procedures</a></li>
<li><a href="overview.php">Overview</a></li>
<li><a href="student.php">Comapnies</a></li>
<li><a href="myprofile.php">My Profile</a></li>
</ul>
</div>
<ul class="nav navbar-nav navbar-right">
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</div>
</nav>
    
<div class="container" style="background-color: #7092f0">
<center><h2>Dashboard</h2></center>
  <div class="jumbotron">


 <center><h3>Specification Wise</h3></center>
 <table align="center" height="15%" width="50%">
 <th>Name</th>
 <th>Specialisation</th>
 <th>Contact</th>
 <th>Location</th>
 <th>Written_test</th>
<?php 
$query = "SELECT * FROM users WHERE rollno = '".$user."'";
 $select = mysqli_query($link,$query);
    $sel = mysqli_fetch_assoc($select);
    $sep = $sel['sep'];
$d = date("Y-m-d");
$query = "SELECT * FROM company WHERE sep = '".$sep."' and coming_date >= '".$d."'";
 $select = mysqli_query($link,$query);
   
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['name'].' '; ?></span> :</td>
    <td><span style="color: brown;"><?php echo $row['sep'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['number'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['address'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['coming_date'].' '; ?></span> :</td></tr>

 <?php endwhile; ?>
</table>

<center><h3>CGPA</h3></center>
 <table align="center" height="15%" width="50%">
 <th>Name</th>
 <th>Specialisation</th>
 <th>Contact</th>
 <th>Location</th>
 <th>Written_test</th>
<?php 
$query = "SELECT * FROM users WHERE rollno = '".$user."'";
 $select = mysqli_query($link,$query);
    $sel = mysqli_fetch_assoc($select);
    $sep = $sel['cgpa'];
$d = date("Y-m-d");
$query = "SELECT * FROM company WHERE cgpa <= '".$sep."' and coming_date >= '".$d."'";
 $select = mysqli_query($link,$query);
   
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['cname'].' '; ?></span> :</td>
    <td><span style="color: brown;"><?php echo $row['sep'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['contact'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['address'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['coming_date'].' '; ?></span> :</td></tr>
 <?php endwhile; ?>
</table>

 <center><h3>All Companies</h3></center>
 <table align="center" height="15%" width="50%">
 <th>Name</th>
 <th>Specialisation</th>
 <th>Contact</th>
 <th>Location</th>
 <th>Written_test</th>
<?php 
 $d = date("Y-m-d");
$query = "SELECT * FROM company where coming_date >= '".$d."'";
 $select = mysqli_query($link,$query);
   
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['cname'].' '; ?></span> :</td>
    <td><span style="color: brown;"><?php echo $row['sep'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['contact'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['address'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['coming_date'].' '; ?></span> :</td></tr>

 <?php endwhile; ?>
</table>
 <center><h3>ELigibilty Criteria</h3></center>
 <table align="center" height="15%" width="50%">
 <th>Name</th>
 <th>Specialisation</th>
 <th>CGPA</th>
 <th>Stream</th>
 <th>Test</th>
<?php 
 $d = date("Y-m-d");
$query = "SELECT * FROM company where coming_date >= '".$d."'";
 $select = mysqli_query($link,$query);
   
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['cname'].' '; ?></span> :</td>
    <td><span style="color: brown;"><?php echo $row['sep'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: red;"><?php echo $row['coming_date'].' '; ?></span> :</td></tr>

 <?php endwhile; ?>
</table>

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