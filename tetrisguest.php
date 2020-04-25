<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="home.css">
  <head>
      <title>Omni Games - Tetris</title>
      <style>
        body {
          background: #262626;
          color: #fff;
          font-family: sans-serif;
          font-size: 2em;
          text-align: center;
        }

        canvas {
          border: solid .2em #fff;
          height: 90vh;
        }
       body div.relative {
          float: right;
          height: 160px;
          position: relative;
          right: 610px;
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
      					<a href="snake.php">Snake</a>
      					<a href="tetris.php" class="active">Tetris</a>

      					<!-- Right-aligned links -->
      					<div class="topnav-right">
                  <a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
      						<a href="news.php">News</a>
      						<a href="contact.php">About Us</a>
      					</div>
      				</div>
      			</div>
  </head>
  <body>
    <h1 style="position:absolute;left:39%;top:10px;font-size:70px; color:white">Tetris</h1>
    <hr style="margin-top:85px; color:white">
    <div class="relative">
    <div id="buttonAppear"></div>
    Level: <div id="level"></div>
    Score: <div id="score"></div>
    </div>
    <canvas id="tetris" width="240" height="400"></canvas>
    <script src="tetris1.js"></script>
  </body>
</html>
