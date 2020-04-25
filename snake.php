<!DOCTYPE html>
	<html>
	<link rel="stylesheet" type="text/css" href="home.css">
		<head>
			<style>
			html {
				background-color: #262626;
			}
			button{
				float: right;
			}
			body div.relative {
				 float: right;
				 height: 160px;
				 position: relative;
				 right: 300px;
				 top: 320px;
			 }
			.content {
			padding: 16px;
			}
			/* The sticky class is added to the navbar with JS when it reaches its scroll position */
			.sticky {
				position: fixed;
				top: 0;
				width: 100%;
			}
			/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
			.sticky + .content {
				padding-top: 60px;
			}
			</style>

						<div id="box5">
							<div class="topnav" id= "navbar">
								<!-- Centered link -->
								<div class="topnav-centered">
									<a href="home.php"><img src="omnigames logo.png" width="60" height="37.5"></a>
								</div>

								<!-- Left-aligned links (default) -->
								<a href="pong.php">Pong</a>
								<a href="snake.php" class="active">Snake</a>
								<a href="tetris.php">Tetris</a>

								<!-- Right-aligned links -->
								<div class="topnav-right">
									<a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
									<a href="news.php">News</a>
									<a href="contact.php">About Us</a>
								</div>
							</div>
						</div>
			<title>Omni Games - Snake</title>
			<style>
			canvas {
				padding-left: 0;
				padding-right: 0;
        padding-bottom: 0 ;
				margin-left: auto;
				margin-right: auto;
				display: block;
				width: 800px;
			}
			</style>
		</head>
		<body>

      <h1 style="position:absolute;left:42.5%;top:10px;font-size:70px; color:white">Snake</h1>
			<hr style="margin-top:85px; color:white">
			<div class="relative">
			<?php
			$con = mysqli_connect('localHost','root','');
			mysqli_select_db($con,'userregistration');
			//$s = "select * from usertable where name ='$name' && password = '$pass'";
				$x=1;
				echo "<span style='color:white; text-align: center; width:100%;'>       Leaderboard:<br>";
			$result = mysqli_query($con, "SELECT * FROM gamescores ORDER BY score DESC LIMIT 5;");
			echo "<div class='center'>";
			while($row = $result->fetch_assoc()) {
				echo "<span style='color:white; text-align: center; width:100%;'> ". $x .": " . $row["username"]." - Score:" . $row["score"]. "<br>";
				$x++;
			}
			echo"</div>";
			$num = mysqli_num_rows($result);
			if($num == 1){
						$_SESSION['score'] = $score;
						echo $score;
					}
						 ?>
			</div>
			<canvas style="text-align:center; margin-left: 550px" id='c'></canvas>
			<script src='snake.js'>
			</script>


						<div id="saveButton" align="center">
							<form action = "savescore.php" method = "post" id="scoreform">
								<a href="snake.php">
									<input type="submit" style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;" onclick="saveScoreFunc()" value="Save Score" /></a><br /><br />
									<input type="hidden" value=""  id= "finalScore" name="finalScoreName"/>
									<input type="hidden" value="<?php echo $_SESSION['user']; ?>"  id= "nameOfUser" name="username"/>
									<table style= "color:white;" id = "scoretable" align = "center" name="tab1">
										<tr>
											<td>Score : </td>
											<td id="score" name="myscore">0</td>
											<td></td>

										</tr>
									</table>
							</form>
						</div>


		</body>


		<script>
			function saveScoreFunc() {
		    //document.getElementById('finalScore').value =document.getElementById('score').value;
				var tmpScore = document.getElementById('scoretable').rows[0].cells[1].innerHTML;
					tmpScore = (tmpScore == "")?0:tmpScore;
				//	alert ("tmpscore =" + (tmpScore == "") + "--" + tmpScore );
					document.getElementById('finalScore').value = tmpScore;
					alert("finalScore="  + document.getElementById('finalScore').value );
	        return false;
				}
		</script>
	</html>
