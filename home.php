<html>
  <link rel="stylesheet" type="text/css" href="home.css">
  <style>
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
    <head>
      <title>Omni Games</title>
    </head>
    <body>
        <div id="box1">

            <h1 style="font-size: 60px;">
              <img src="omnigames logo.png" width="300" height="187.5"><br>
         Omni Games
      </h1>
      </div>
        <div id="box5">
          <div class="topnav" id= "navbar">
            <!-- Centered link -->
            <div class="topnav-centered">
              <a href="home.php" class="active"><img src="omnigames logo.png" width="60" height="37.5"></a>
            </div>

            <!-- Left-aligned links (default) -->
            <a href="pong.php">Pong</a>
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
        <!--
        <div id="box2">
            <h1><a href = "tetris.html"> Hardcore Tetris </a></h1>
        </div>
        <div id="box3">
            <h1><a href = "Snake.html">Snake</a></h1>
        </div>
        <div id="box4">
            <h1><a href = "pong.html">Pong</a></h1>
        </div>
        -->

        <div class="background_home">
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <a href = "pong.php">
          <img src="i4.jpg" style="width:80%; height:1000px">
          <div class="text" style = "color:White">Pong</div>
          </a>
        </div>

        <div class="mySlides fade">
          <a href = "snake.php">
          <div class="numbertext">2 / 3</div>
          <img src="i3.png" style="width:80%; height:1000px">
          <div class="text" style = "color:White">Snake</div>
          </a>
        </div>

        <div class="mySlides fade">
          <a href = "tetris.php">
          <div class="numbertext">3 / 3</div>
          <img src="i2.jpg" style="width:80%; height:1000px">
          <div class="text" style = "color:White">Hardcore Tetris</div>
          </a>
        </div>

        </div>
        </div>

        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <br>


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
    </body>
</html>
