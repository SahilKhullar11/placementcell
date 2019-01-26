<?php
	session_start();
	$link=mysqli_connect("localhost","root","","ip");
	
	if($link===false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	$rollno = mysqli_real_escape_string($link,$_POST['roll']);
	$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
	$query = mysqli_query($link,"SELECT * from users WHERE rollno='$rollno'"); //Query the users table if there are matching rows equal to $username
	$exists="select COUNT(rollno) from users where rollno='$rollno'";
	//$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";
	$table_password = "";
	if($exists >= 0) //IF there are no returning rows or no existing username
	{
		while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['rollno']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['pwd']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($rollno == $table_users) && ($pwd == $table_password)) // checks if there are any matching fields
		{
				if($pwd == $table_password)
				{
					$_SESSION['user'] = $rollno; //set the username in a session. This serves as a global variable
					header("location: home.php"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.html");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect rollno!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.html");</script>'; // redirects to login.php
	}
?>