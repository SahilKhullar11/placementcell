<?php
		$link=mysqli_connect("localhost","root","","ip");
		
		if($link===false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 $user = $_POST['cname'];
		 $pwd = $_POST['pwd'];
	$query = mysqli_query($link,"SELECT * from company WHERE cname='$user'"); 
	$table_users = "";
	$table_password = "";
	
		while($row = mysqli_fetch_assoc($query)) //display all rows from query
		{
			$table_users = $row['cname']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['pwd']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($user == $table_users) && ($pwd == $table_password)) // checks if there are any matching fields
		{
				if($pwd == $table_password)
				{
					$_SESSION['user'] = $user; //set the username in a session. This serves as a global variable
					header("location: placement.php?cname=$user"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("company.html");</script>'; // redirects to login.php
		}
?>