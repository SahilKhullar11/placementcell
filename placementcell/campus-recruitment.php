<html>
<head>
<title>Campus Recruitment</title>
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
<li><a href="home.php">Home</a></li>
<li class="active"><a href="campus-recruitment.php">Campus Recruitment</a></li>
<li><a href="rules-and-procedures.php">Rules And Procedures</a></li>
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
        <br/>
        <div class="container">
        <div class="row">
            <center>
                <img src="Images/Recruitment-Banner.png" height="378" width="1148"></center>
            </div>
        </div>
        <br/>
        <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row">
            <div class="container">
            <div class="row">
                <h2><span>Campus Recruitment</span></h2>
                <p>Since Inception, Chitkara University Has A Path Breaking Recruitment Record For Graduates From Various Academic Programs. We offer our students comprehensive opportunities to occupy themselves with questions around their career planning right from the beginning of their studies. A broadly diversified choice of career activities accompanies them during their studies and offers numerous networking opportunities with company representatives and alumni.</p>
<p>Some of the prominent recruiters on campus are:</p>
<p>&nbsp;</p>
                <div style="margin-top: -10px;"><img class="alignnone size-full wp-image-6107" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/infosys1.jpg" alt="infosys" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/infosys1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/infosys1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6105" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/wipro1.jpg" alt="wipro" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/wipro1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/wipro1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6104" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/microsoft1.jpg" alt="microsoft" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/microsoft1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/microsoft1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6106" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/google1.jpg" alt="google" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/google1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/google1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6111" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/airtel1.jpg" alt="airtel" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/airtel1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/airtel1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6110" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/ibm1.jpg" alt="ibm" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/ibm1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/ibm1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6112" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/hcl1.jpg" alt="hcl" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/hcl1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/hcl1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6109" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/hindustan_lever_ltd..jpg" alt="hindustan_lever_ltd." width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/hindustan_lever_ltd..jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/hindustan_lever_ltd.-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6114" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/accenture1.jpg" alt="accenture" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/accenture1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/accenture1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6116" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/hdfc.jpg" alt="hdfc" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/hdfc.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/hdfc-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6115" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/citi_bank.jpg" alt="citi_bank" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/citi_bank.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/citi_bank-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6113" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/oracle1.jpg" alt="oracle" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/oracle1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/oracle1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6119" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/nVIDIA.jpg" alt="nVIDIA" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/nVIDIA.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/nVIDIA-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6120" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/texas_instrument.jpg" alt="texas_instrument" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/texas_instrument.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/texas_instrument-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6118" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/mtech_mahindra.jpg" alt="mtech_mahindra" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/mtech_mahindra.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/mtech_mahindra-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6117" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/dell.jpg" alt="dell" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/dell.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/dell-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6122" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/LT1.jpg" alt="LT" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/LT1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/LT1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6123" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/mahindra1.jpg" alt="mahindra" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/mahindra1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/mahindra1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6124" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/godrej.jpg" alt="godrej" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/godrej.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/godrej-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6121" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/ITC.jpg" alt="ITC" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/ITC.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/ITC-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6126" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/vodafone1.jpg" alt="vodafone" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/vodafone1.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/vodafone1-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6127" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/fortis.jpg" alt="fortis" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/fortis.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/fortis-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6128" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/reliance.jpg" alt="reliance" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/reliance.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/reliance-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6125" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/SAP.jpg" alt="SAP" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/SAP.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/SAP-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6132" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/pepsico.jpg" alt="pepsico" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/pepsico.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/pepsico-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6131" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/asian_paints.jpg" alt="asian_paints" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/asian_paints.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/asian_paints-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6130" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/tata_motors.jpg" alt="tata_motors" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/tata_motors.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/tata_motors-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-6129" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/taj.jpg" alt="taj" width="145" height="80" srcset="https://www.chitkara.edu.in/wp-content/uploads/2014/01/taj.jpg 145w, https://www.chitkara.edu.in/wp-content/uploads/2014/01/taj-100x55.jpg 100w" sizes="(max-width: 145px) 100vw, 145px" /><img class="alignnone size-full wp-image-17052" src="http://www.chitkara.edu.in/wp-content/uploads/2014/01/gemini_solutions.png" alt="gemini_solutions" width="145" height="80" /></div>
<h3>Focus on Careers</h3>
<p>Chitkara prepares students for the real world and fulfilling careers. With industry representation our course continues to keep pace with real world practice making our students work-ready the moment they graduate.</p>
<h3>Mentoring</h3>
<p>Sometimes a little advice and guidance from someone who has “been there and done that” can go a long way. Students have unlimited opportunities to interact with professionals from their field to build contacts and learn about new industry trends.</p>
<h3>Student Support Services</h3>
<p>Our Career Centre provides personal career counselling, extensive career development seminars and invaluable assistance in developing one&#8217;s resumes that showcase his/her skill and experiences.</p>
<h3>Networking</h3>
<p>Smart graduates require tapping into network of people, technology and information. At Chitkara, you are connected with world-class faculty, savvy technocrats and innovators. Technical workshops with guest speakers from the industry are held regularly to acquaint you with the latest happenings.</p>
<h3>Internships</h3>
<p>At the end of every academic year, most students are provided opportunities to pursue internships to gain some real world practical experience. Emphasis is placed on ensuring that students attending the program are placed in rewarding, real-world company assignments that extend the learning experience into areas that are not available at the University. Most of our degree programs offer the opportunity for practical, hands-on experience, internships and projects within the local community. This is why our graduates are in demand.</p>
<h3>If you want to get in touch with our training and placement team, please contact:</h3>
<p><b>Ms Cavita Taragi</b><br />
AVP, Office of External Affairs,<br />
Chitkara University.<br />
e-mail: <a href="mailto:cavita.taragi@chitkara.edu.in">cavita.taragi@chitkara.edu.in</a></p>
                </div>
            </div>
            </div>
        </div>
    			                
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