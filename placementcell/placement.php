
<?php $link=mysqli_connect("localhost","root","","ip");
		if($link===false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 session_start();
		if($_GET['cname'] != "")
    {    $user = $_GET['cname'];   

      

      }else{
    header("Location: company.html");
}
 ?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Dashboard</title>
</head>
<body style="background-color: gainsboro">
<nav class="navbar navbar-inverse">
<div class="container-fluid">

 <ul class="nav navbar-nav navbar-right">
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</div>
</nav>
    
<div class="container" style="background-color: #7092f0">
<center><h2>Dashboard</h2></center>
  <div class="jumbotron">


<br/>
  <center><h3>Specification Wise</h3></center>
 <table align="center" height="15%" width="40%">
 <th>Roll no.</th>
 <th>Name</th>
 <th>Dept</th>
 <th>CGPA</th>
<?php 
$query = "SELECT * FROM company WHERE cname = '$user'";
 $select = mysqli_query($link,$query);
 if($select=== FALSE) { 
    die(mysqli_error($link)); // TODO: better error handling
}
    $sel = mysqli_fetch_assoc($select);
    $sp = $sel['sep'];

$query = "SELECT * FROM users WHERE sep = '".$sp."'";
 $select = mysqli_query($link,$query);
    
    while($row = mysqli_fetch_assoc($select)): ?>

  <tr><td><span style="color: green;"><?php echo $row['rollno'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['name'].' '; ?></span> :</td>
  <td><span style="color: black;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td></tr>
 
 
 <?php endwhile; ?>
</table>



<br/>
 <center><h3>CGPA Wise</h3></center>
<table align="center" height="15%" width="40%">
<th>Roll no.</th>
 <th>Name</th>
 <th>Dept</th>
 <th>CGPA</th>
<?php 
$query = "SELECT * FROM company WHERE cname = '".$user."'";
 $select = mysqli_query($link,$query);
 $sel=mysqli_fetch_assoc($select);
    $sp = $sel['cgpa'];
 
$query = "SELECT * FROM users WHERE cgpa >= '".$sp."'";
 $select = mysqli_query($link,$query);
 
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['rollno'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['name'].' '; ?></span> :</td>
  <td><span style="color: black;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td></tr>
 
 
 <?php endwhile; ?>
</table>




<br/>
 <center><h3>Branch Wise</h3></center>
<table align="center" height="15%" width="40%">
<th>Roll no.</th>
 <th>Name</th>
 <th>Dept</th>
 <th>CGPA</th>
<?php 
$query = "SELECT * FROM company WHERE cname = '".$user."'";
 $select = mysqli_query($link,$query);
    $sel = mysqli_fetch_assoc($select);
    $sp = $sel['stream'];
$query = "SELECT * FROM users WHERE stream = '".$sp."'";
 $select = mysqli_query($link,$query);
 
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['rollno'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['name'].' '; ?></span> :</td>
  <td><span style="color: black;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td></tr>
 
 
 <?php endwhile; ?>
</table>


<br/>
 <center><h3>OverAll Qualifications</h3></center>
<table align="center" height="15%" width="40%">
<th>Roll no.</th>
 <th>Name</th>
 <th>Dept</th>
 <th>CGPA</th>
 
<?php 
$query = "SELECT * FROM company WHERE cname = '".$user."'";
 $select = mysqli_query($link,$query);
    $sel = mysqli_fetch_assoc($select);
    //$sp = $sel['stream'];
$query = "SELECT * FROM users WHERE sep='$sel[sep]' and cgpa>='$sel[cgpa]'";
 $select = mysqli_query($link,$query);
 
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['rollno'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['name'].' '; ?></span> :</td>
  <td><span style="color: black;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td></tr>
 
 
 <?php endwhile; ?>
</table>


<br/>
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