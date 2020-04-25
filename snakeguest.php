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
			.content {
			padding: 16px;
			}

			table{
				color: white;
			}

			.center{
				color:White;
        text-align: center;
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
									<a href="guesthome.php"><img src="omnigames logo.png" width="60" height="37.5"></a>
								</div>

								<!-- Left-aligned links (default) -->
								<a href="pongguest.php">Pong</a>
								<a href="snakeguest.php" class="active">Snake</a>
								<a href="tetrisguest.php">Tetris</a>

								<!-- Right-aligned links -->
								<div class="topnav-right">
									<a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
									<a href="guestnews.html">News</a>
									<a href="guestcontact.html">About Us</a>
								</div>
							</div>
						</div>
			<title>Omni Games - Snake</title>
			<style>
			canvas {
				padding-left: 0;
				padding-right: 0;
				margin-left: auto;
				margin-right: auto;
				display: block;
				width: 800px;
			}

			</style>
		</head>
		<body>

            <h2 class="center" text-align: center;>**Guest User Access Denied**</h2>
            <h2 class="center" text-align: center;>**Please make an account to access Tetris and the global leaderboard**</h2>
			<canvas id='c'></canvas>


			</script>



		      <canvas id='c'></canvas>

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
