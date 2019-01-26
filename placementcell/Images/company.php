<?php include "database.php" ?>
<?php 
if($_POST){
   $user = $_POST['cid'];
   $name = $_POST['cname'];
   $num = $_POST['contact'];
   $address = $_POST['address'];
   $sep = $_POST['sep'];
   $stream = $_POST['stream'];
   $pwd = $_POST['pwd'];
  $cgpa = $_POST['cgpa'];
$query = "SELECT * FROM company WHERE user = '".$user."'";
	   $select = $mysqli->query($query);
	   $row = $select->fetch_assoc();
		if ($row > 0){
			
				echo "Company is already Register";
		}else{
  
   	$query = "INSERT INTO company VALUES('','$user','$name','$num','$address','$stream','$sep','$pwd',NOW(),'$cgpa')";
    $select = $mysqli->query($query);
   header('location: company.html');
   }
   }else{
      header('location: admin.html');
    }

 ?>