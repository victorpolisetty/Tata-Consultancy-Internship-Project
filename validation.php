<?php

session_start();

$con = mysqli_connect('localHost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = sha1($_POST['password']);

//$s = "select * from usertable where name ='$name' && password = '$pass'";

$result = mysqli_query($con, "select * from usertable where name ='$name' && password = '$pass'");

$num = mysqli_num_rows($result);
if($num == 1){
      $_SESSION['user'] = $name;
      echo "string"  && $_SESSION['user'];
      header('location:home.php');
}else{
      header('location:logn.php');
}


?>
