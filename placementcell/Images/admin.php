<?php include 'database.php'; ?>

<?php 
if($_POST){
   $user = $_POST['id'];
   $pwd = $_POST['pwd'];
  echo $roll;
  echo $pwd;
   $query = "SELECT * FROM admin WHERE user = '".$user."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['user']==$user && $select['password']==$pwd){ 
header("Location: add_company.php?user=$user");
}  

else{header("Location: company.html");

}
}else{header("Location: company.html");
}