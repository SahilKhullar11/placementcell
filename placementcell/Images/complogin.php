<?php include 'database.php'; ?>

<?php 
if($_POST){
   $user = $_POST['cid'];
   $pwd = $_POST['pwd'];
  echo $roll;
  echo $pwd;
   $query = "SELECT * FROM company WHERE user = '".$user."'";
    $select = $mysqli->query($query);
    $select = $select->fetch_assoc();
if($select['user']==$user && $select['password']==$pwd){ 
header("Location: placement.php?company=$user");
}  

else{header("Location: company.html");

}
}else{header("Location: company.html");
}