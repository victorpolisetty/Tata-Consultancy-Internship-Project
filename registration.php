<?php

session_start();
header('location:sgnup.php');
$con = mysqli_connect('localHost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['username'];
$password = sha1($_POST['pass']);
$emailaddress = $_POST['email'];

$s = " select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
      echo" Usename Already Taken";
}else{
      $reg= " insert into usertable(name , password, emailaddress) values ('$name' , '$password' , '$emailaddress')";
      mysqli_query($con, $reg);
      echo" Registration Successful";
}
?>
