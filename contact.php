<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="home.css">
  <head>
      <title>Omni Games - Contact</title>
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

        table{
          width: 600px;
          border: 15px solid white;
          padding: 50px;
          text-align: center;
          margin-left: auto;
          margin-right: auto;
        }

        .box2{
          width: 300px;
          border: 15px solid white;
          padding: 50px;
          margin: 500px;
          float: left;
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
      /* Three columns side by side */
      .float_center {
        float: right;

        position: relative;
        left: -50%; /* or right 50% */
        text-align: left;
      }
      .float_center > .child {
        position: relative;
        left: 50%;
      }

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
      					<a href="tetris.php" >Tetris</a>

      					<!-- Right-aligned links -->
      					<div class="topnav-right">
                  <a> Hello <?php session_start(); echo $_SESSION['user']; ?></a>
      						<a href="news.php">News</a>
      						<a href="contact.php" class="active">About Us</a>
      					</div>
      				</div>
      			</div>
  </head>
  <body>
    <table>
      <td>
        About Us
      </td>
    </table>
    <div class="row">
  <div class="column">
    <div class="card">
      <img src="img2.jpg" alt="Victor Polisetty" style="width:20%">
      <div class="container">
        <h2>Victor Polisetty</h2>
        <p class="title">Student (12th Grade)</p>
        <p>Currently attending Ponte Vedra High School, Victor Polisetty plans to attend a top 20 university majoring in Computer Science</p>
        <p>Feel free to contact me: victorpolisetty@gmail.com</p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="img3.jpg" alt="Sonu Venu" style="width:20%">
      <div class="container">
        <h2>Sonu Venu</h2>
        <p class="title">Student (12th Grade)</p>
        <p>Currently attending Ponte Vedra High School, Sonu Venu plans to attend the University of Florida and is currently undecided on his major</p>
        <p>Feel free to contact me: sonu.venu@gmail.com</p>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
