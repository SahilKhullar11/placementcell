
 <?php
		$link=mysqli_connect("localhost","root","","ip");
		
		if($link===false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	if($_POST){
	$cname = mysqli_real_escape_string($link,$_POST['cname']);
	$contact = mysqli_real_escape_string($link,$_POST['contact']);
	$address = mysqli_real_escape_string($link,$_POST['address']);
	$datee = mysqli_real_escape_string($link,$_POST['datee']);
	$cgpa = mysqli_real_escape_string($link,$_POST['cgpa']);
	$stream = mysqli_real_escape_string($link,$_POST['stream']);
	$sep = mysqli_real_escape_string($link,$_POST['sep']);
	$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
	
		 $bool = true;
	$sql="Select * from company";
	$query = mysqli_query($link,$sql); //Query the users table
	while($row = mysqli_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['cname']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($cname == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Rollno has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("admin.html");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		$s="INSERT INTO company VALUES ('$cname','$contact','$address','$cgpa','$stream','$sep','$pwd','$datee')";
		mysqli_query($link,$s); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("add_company.html");</script>'; 
	}}
	?>