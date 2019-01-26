<html>

<title>Overview</title>
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
<li><a href="campus-recruitment.php">Campus Recruitment</a></li>
<li><a href="rules-and-procedures.php">Rules And Procedures</a></li>
<li class="active"><a href="overview.php">Overview</a></li>
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
    <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row" align="center">
            <div class="container">
                <div class="row">
                    <img src="Images/Campus1.jpg" align="center">
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="container-fluid" style="background-color: whitesmoke">
        <div class="row">
            <div class="container" style="background-color: whitesmoke">
                <div class="row" style="font-family: sans-serif">
                    <h1>Overview</h1>
                    <p>In the year 2002, Chitkara Educational Trust established its Punjab campus 30 kilometers from Chandigarh,
                        on the Chandigarh–Patiala National Highway. In the year 2010 Chitkara University was established
                        by the Punjab State Legislature under “The Chitkara University Act”.</p>
                    <p>Chitkara University, the best university in Punjab is a government-recognized university with the right
                        to confer degrees as per the Sections 2(f) and 22(1) of the UGC Act, 1956.</p>
                    <p>The sprawling campus of the University is equidistant from Chandigarh, Mohali, Panchkula, Ambala and
                        Patiala. The University offers multi-disciplinary programs, all of which are designed to be industry-relevant.
                        As a result of this student-centric approach, Chitkara University is renowned as one of the best
                        private universities in the North India region. From business management programs to programs in
                        nursing and medical laboratory technologies; and from computer science, electronics and mechanical
                        engineering programs, to hotel management and architecture—Chitkara University, Punjab is a veritable
                        cornucopia of educational services.</p>
                    <p>Curriculum is delivered in spacious, amphitheatre-style classrooms—fitted with modern information and
                        communication technology (ICT) equipment—and in well-equipped, modern laboratories. Additionally,
                        students are encouraged—and provided relevant facilities—to participate in co-curricular and extra-curricular
                        activities through various clubs and societies on the campus.</p>
                    <p>It is because of the cumulative effect of an elaborate in-campus academic infrastructure; strong national
                        and international collaborations; and a robust on-campus recruitment record—including regular recruitment
                        by reputed blue-chip companies—that the University finds favor with national as well as international
                        students.</p>
                    <p>A healthy number of foreign students regularly study at the campus and number of them also visit on exchange
                        programs, adding to the cultural diversity found on campus. The University in Punjab provides several
                        opportunities for local students, too, to visit foreign universities and institutions on such exchange
                        programs, thereby helping them receive invaluable international exposure.</p>
                    <p>The University has at the centre of its philosophical core the commitment to excellence in education.
                        It is the strong academic heritage of the University, and such firmness on matters of principles
                        that has seen it grow from strength to strength in such a short span of time.</p>
                    <h4>
                        <b>Vision</b>
                    </h4>
                    <p>To be a globally recognized organization promoting academic excellence through interdisciplinary applied
                        research and to expand realms of knowledge through innovation.</p>
                    <h4>
                        <b>Mission</b>
                    </h4>
                    <ul>
                        <li>To carry out the academic process for achieving excellence through active teacher-student-industry
                            participation</li>
                        <li>To promote research, innovation and enterpreneurship in collaboration with industries and laboratories</li>
                        <li>To inculcate high moral, ethical and professional standards amongst our students</li>
                        <li>To contribute to build a skillful society</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <br/>
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
                        <a href="https://www.chitkara.edu.in/chitkara-educational-trust/">
                            <p>Chitkara Educational Trust</p>
                        </a>
                        <a href="https://www.chitkara.edu.in">
                            <p>Chitkara University</p>
                        </a>
                        <a href="https://www.chitkara.edu.in/can/">
                            <p>Chitkara Alumini Network</p>
                        </a>
                        <a href="https:/curin.chitkara.edu.in">
                            <p>CURIN</p>
                        </a>
                        <a href="https://www.cuceed.org">
                            <p>CEED</p>
                        </a>

                    </div>
                    <div class="col-sm-3">
                        <br/>
                        <br/>
                        <h4>Our Institution</h4>
                        <br/>
                        <a href="https://www.chitkara.edu.in/engineering/">
                            <p>Engineering & Technology</p>
                        </a>
                        <a href="https://www.chitkara.edu.in/cbs/">
                            <p>Bussiness School</p>
                        </a>
                        <a href="https://www.chitkara.edu.in/ccae/">
                            <p>Applied Engineering</p>
                        </a>
                        <a href="https://www.chitkara.edu.in/architecture/">
                            <p>School of Planning and Architecture</p>
                        </a>
                        <a href="https://www.chitkara.edu.in/ihm/">
                            <p>College of Hotel Management</p>
                        </a>
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
