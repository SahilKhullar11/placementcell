<html>
<?php include 'database.php';
if($_GET['user'] == "admin")
    {}else{
    header("Location: admin.html");
}
 ?>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body style="background-color: gainsboro">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href=index.php class="navbar-brand"><span  class="glyphicon glyphicon-home"></span></a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="campus-recruitment.html">Campus Recruitment</a></li>
                <li><a href="rules-and-procedures.html">Rules And Procedures</a></li>
                <li><a href="overview.html">Overview</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="background-color: #7092f0">
    <center><h2>Add Company Details</h2></center>
    <div class="jumbotron">
        <form action="company.php" method="post">
            <div class="form-group">
                <label for="cid">Company ID:</label>
                <input type="text" class="form-control" id="cid" placeholder="Enter company Id" name="cid"  required>
            </div>
            <div class="form-group">
                <label for="cname">Company Name:</label>
                <input type="text" class="form-control" id="cname" placeholder="Enter company name" name="cname" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="number" class="form-control" id="contact" placeholder="Enter contact number" name="contact" required>
            </div>
            <div class="form-group">
                <label for="address">Company Office Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter company Office Address" name="address" required>
            </div>
             <div class="form-group">
                <label for="address">CGPA Required:</label>
                <input type="text" class="form-control" id="cgpa" placeholder="Enter company Office Address" name="cgpa" required>
            </div>
            <div class="form-group">
                <label for="stream">Stream:</label>
                <select class="form-control" name="stream" id="stream"> 
                    <option value="CSE" >CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EE">EE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="special">Specialization Required:</label>
                 <select class="form-control" name="sep" id="sep">
            <option value="UCA" >UCA</option>
            <option value="FULL STACK">FULL STACK</option>
            <option value="JAVA">JAVA</option>
            <option value="DATA SCIENCE">DATA SCIENCE</option>
             <option value="MICRO PROCESSING">MICRO PROCESSING</option>
        </select>
            </div>
<div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
            </div>

            <center><button type="submit" class="btn btn-default btn-primary">Submit</button></center>
        </form>
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