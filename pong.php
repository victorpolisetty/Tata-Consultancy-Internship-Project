<!doctype html>
<html>
<title>Omni Games - Pong</title>
<link rel="stylesheet" type="text/css" href="home.css">
<style>
html {
	background-color: #262626;
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
					<a href="pong.php" class="active">Pong</a>
					<a href="snake.php">Snake</a>
					<a href="tetris.php">Tetris</a>

					<!-- Right-aligned links -->
					<div class="topnav-right">
						<a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
						<a href="news.php">News</a>
						<a href="contact.php">About Us</a>
					</div>
				</div>
			</div>

<body onload="startBall()">
<h1 style="position:absolute;left:42.5%;top:10px;font-size:70px; color:white">Pong</h1>
<h1 style="position:absolute;left:30px;top:80px; color:white">Player 1: <span id="Player 1">0</span></h1>
<h1 style="position:absolute;right:30px;top:80px; color:white">Player 2: <span id="Player 2">0</span></h1>
<hr style="margin-top:150px; color:white">
<div id="paddle1"  style="position:absolute;left:0px;top:460px;width:10px;height:150px;background-color:blue;">
</div>
<div id="ball"  style="position:absolute;left:820px;top:510px;width:25px;height:25px;background-color:hotpink;border-radius:50%;">
</div>
<div id="paddle2"  style="position:absolute;right:0px;top:460px;width:10px;height:150px;background-color:red;">
</div>
</body>
<script>
var paddleHeight = 210;
var paddleWidth = 10;
var ballRadius = 25;
var halfPaddleHeight = paddleHeight / 2;
var speedOfPaddle1 = 0;
var positionOfPaddle1 = 460;
var speedOfPaddle2 = 0;
var positionOfPaddle2 = 460;
var topPositionOfBall = 510;
var leftPositionOfBall = 820;
var topSpeedOfBall = 0;
var leftSpeedOfBall = 0;
var score1 = 0;
var score2 = 0;
function startBall() {
	topPositionOfBall = 510;
	leftPositionOfBall = 820;
	if (Math.random() < 0.5) {
		var side = 1
	} else {
		var side = -1
	}
	topSpeedOfBall = Math.random() * 2 + 3;
	leftSpeedOfBall = side * (Math.random() * 2 + 3);
};
document.addEventListener('keydown', function (e) {
     if (e.keyCode == 87 || e.which == 87) { // W key
      speedOfPaddle1 = -10;
     }
     if (e.keyCode == 83 || e.which == 83) { // S Key
      speedOfPaddle1 = 10;
     }
     if (e.keyCode == 38 || e.which == 38) { // up arrow
      speedOfPaddle2 = -10;
     }
     if (e.keyCode == 40 || e.which == 40) { // down arrow
      speedOfPaddle2 = 10;
     }
}, false);
document.addEventListener('keyup', function (e) {
	if (e.keyCode == 87 || e.which == 87) {
		speedOfPaddle1 = 0;
	}
	if (e.keyCode == 83 || e.which == 83) {
		speedOfPaddle1 = 0;
	}
	if (e.keyCode == 38 || e.which == 38) {
		speedOfPaddle2 = 0;
	}
	if (e.keyCode == 40 || e.which == 40) {
		speedOfPaddle2 = 0;
	}
}, false);
function print() {
	console.log(positionOfPaddle1);
}
window.setInterval(function show() {
	positionOfPaddle1 += speedOfPaddle1;
	positionOfPaddle2 += speedOfPaddle2;
	topPositionOfBall += topSpeedOfBall;
	leftPositionOfBall += leftSpeedOfBall;
	if (positionOfPaddle1 <= 210) {
		positionOfPaddle1 = 210;
	}
	if (positionOfPaddle2 <= 210) {
		positionOfPaddle2 = 210 ;
	}
	if (positionOfPaddle1 >= window.innerHeight - paddleHeight) {
		positionOfPaddle1 = window.innerHeight - paddleHeight;
	}
	if (positionOfPaddle2 > window.innerHeight - paddleHeight) {
		positionOfPaddle2 = window.innerHeight - paddleHeight;
	}
	if (topPositionOfBall <= 210 || topPositionOfBall >= window.innerHeight - ballRadius) {
		topSpeedOfBall = -topSpeedOfBall
	}
	if (leftPositionOfBall <= paddleWidth) {
		if (topPositionOfBall > positionOfPaddle1 && topPositionOfBall < positionOfPaddle1 + paddleHeight) {
			leftSpeedOfBall = -leftSpeedOfBall;
		} else {
			score2++;
			startBall();
		}
	}
	if (leftPositionOfBall >= window.innerWidth - ballRadius - paddleWidth) {
		if (topPositionOfBall > positionOfPaddle2 && topPositionOfBall < positionOfPaddle2 + paddleHeight) {
			leftSpeedOfBall = -leftSpeedOfBall
		} else {
			score1++;
			startBall();
		}
	}
	document.getElementById("paddle1").style.top = (positionOfPaddle1) + "px";
	document.getElementById("paddle2").style.top = (positionOfPaddle2) + "px";
	document.getElementById("ball").style.top = (topPositionOfBall) + "px";
	document.getElementById("ball").style.left = (leftPositionOfBall) + "px";
	document.getElementById('Player 1').innerHTML = score1.toString();
	document.getElementById('Player 2').innerHTML = score2.toString();
}, 1000/60);
</script>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideIndex++;
	if (slideIndex > slides.length) {slideIndex = 1}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	setTimeout(showSlides, 5000); // Change image every 2 seconds
}
/*--------------------------------------------*/
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
	} else {
		navbar.classList.remove("sticky");
	}
}
</script>
