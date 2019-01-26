<?php include "database.php" ?>
<?php 
if($_POST){
   $roll = $_POST['rollno'];
   $name = $_POST['name'];
   $num = $_POST['num'];
   $cgpa = $_POST['cgpa'];
   $sep = $_POST['sep'];
   $stream = $_POST['stream'];
   $pwd = $_POST['pwd'];
   $pwd_1 = $_POST['pwd_1'];
  
$query = "SELECT roll FROM user WHERE roll = '".$roll."'";
	   $select = $mysqli->query($query);
	   $row = $select->fetch_assoc();
		if ($row > 0){
			
				echo "Your id is already Register";
		}else{
   if($pwd==$pwd_1){
    
   	$query = "INSERT INTO user VALUES('','$name','$roll','$stream','$cgpa','$sep','$num','$pwd')";
    $select = $mysqli->query($query);
    header('location: login.html');
   }else{
   	 	header('location: signup.html');
   }}
}
 ?>