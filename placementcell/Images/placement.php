
<?php include "database.php"; 


if($_GET['company'] != "")
    {    $user = $_GET['company'];   

      

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
<div class="navbar-header">
<a href="index.php" class="navbar-brand"><span  class="glyphicon glyphicon-home"></span></a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="main.html">Home</a></li>
<li><a href="campus-recruitment.html">Campus Recruitment</a></li>
<li><a href="#">Option 3</a></li>
<li><a href="rules-and-procedures.html">Rules And Procedures</a></li>
<li><a href="overview.html">Overview</a></li>
</ul>
</div>
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
$query = "SELECT * FROM company WHERE user = '".$user."'";
 $select = $mysqli->query($query);
    $sel = $select->fetch_assoc();
    $sep = $sel['sep'];

$query = "SELECT * FROM user WHERE spe = '".$sep."'";
 $select = $mysqli->query($query);
    
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['roll'].' '; ?></span> :</td>
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
$query = "SELECT * FROM company WHERE user = '".$user."'";
 $select = $mysqli->query($query);
$sel = $select->fetch_assoc();
    $sep = $sel['cgpa'];
$query = "SELECT * FROM user WHERE cgpa >= '".$sep."'";
 $select = $mysqli->query($query);
 
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['roll'].' '; ?></span> :</td>
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
$query = "SELECT * FROM company WHERE user = '".$user."'";
 $select = $mysqli->query($query);
    $sel = $select->fetch_assoc();
    $sep = $sel['stream'];
$query = "SELECT * FROM user WHERE stream = '".$sep."'";
 $select = $mysqli->query($query);
 
    while($row = $select->fetch_array()): ?>

  <tr><td><span style="color: green;"><?php echo $row['roll'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['name'].' '; ?></span> :</td>
  <td><span style="color: black;"><?php echo $row['stream'].' '; ?></span> :</td>
  <td><span style="color: brown;"><?php echo $row['cgpa'].' '; ?></span> :</td></tr>
 
 
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