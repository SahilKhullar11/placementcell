<?php 
	$link=mysqli_connect("localhost","root","","ip");
	
	if($link===false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			
	
	$name = mysqli_real_escape_string($link,$_POST['name']);
	$rollno = mysqli_real_escape_string($link,$_POST['rollno']);
	$stream = mysqli_real_escape_string($link,$_POST['stream']);
	$sep = mysqli_real_escape_string($link,$_POST['sep']);
	$cgpa = mysqli_real_escape_string($link,$_POST['cgpa']);
	$num = mysqli_real_escape_string($link,$_POST['num']);
	$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
    $bool = true;
	$sql="Select * from users";
	$query = mysqli_query($link,$sql); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['rollno']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($rollno == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Rollno has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("signup.html");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		$s="INSERT INTO users (name,rollno,stream,sep,cgpa,num,pwd) VALUES ('$name','$rollno','$stream','$sep','$cgpa','$num','$pwd')";
		mysqli_query($link,$s); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("login.html");</script>'; // redirects to register.php
	}
	?>