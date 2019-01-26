<?php include 'database.php'; ?>

<?php 
if($_POST){
   $roll = $_POST['roll'];
   $pwd = $_POST['pwd'];
  echo $roll;
  echo $pwd;
   $query = "SELECT * FROM user WHERE roll = '".$roll."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['roll']==$roll && $select['password']==$pwd){ 
	
header("Location: student.php?student=$roll");
}  

else{header("Location: login.html");

}
}else{header("Location: login.html");
}