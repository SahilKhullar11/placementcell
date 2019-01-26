<?php
	session_start();
	$link=mysqli_connect("localhost","root","","ip");
	
	if($link===false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	$id = mysqli_real_escape_string($link,$_POST['id']);
	$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
	$query = mysqli_query($link,"SELECT * from admin WHERE id='$id'"); //Query the users table if there are matching rows equal to $username
	//$exists="select COUNT(id) from users where id='$id'";
	//$exists = mysql_num_rows($query); //Checks if username exists
	$table_users = "";
	$table_password = "";
	//if($exists >= 0) //IF there are no returning rows or no existing username
	//{
		while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['id']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['pwd']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($id == $table_users) && ($pwd == $table_password)) // checks if there are any matching fields
		{
				if($pwd == $table_password)
				{
					$_SESSION['user'] = $id; //set the username in a session. This serves as a global variable
					header("location: add_company.html"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("admin.html");</script>'; // redirects to login.php
		}
	//}
	//else
	//{
	//	Print '<script>alert("Incorrect id!");</script>'; //Prompts the user
	//	Print '<script>window.location.assign("login.html");</script>'; // redirects to login.php
	//}
?>