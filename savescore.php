<?php
header('location:snake.php');
session_start();

$con = mysqli_connect('localHost','root','');

mysqli_select_db($con,'userregistration');

//$gamescoreT = $_POST['tetrisscore'];
//$gameScoreS = $_POST['snakescore'];
//$name = 'victor';
$score = $_POST['finalScoreName'];
$username = $_POST['username'];
//$score =7;
//$s = "select * from usertable where name ='$name' && password = '$pass'";
$result = mysqli_query($con, "insert into gamescores (username, gamename, score, scoredate) values ('$username', 'Snake', $score, now())");
///////console_log("testing");

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

 ?>
