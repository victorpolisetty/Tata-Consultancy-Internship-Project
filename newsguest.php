<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="home.css">
      <style>
        html{
          background: #262626;
        }
      </style>
      <script>
        function loadNews(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var newsjson = JSON.parse(this.responseText);
              for(var i=0; i<newsjson.articles.length-1; ++i){
                //if(newsjson.articles[i].source.name=="TechCrunch"){
                 arts= newsjson.articles[i].title;
                 document.getElementById("vergenews").innerHTML += "<div class='art-boxed'>" + newsjson.articles[i].title +"</div> <br>";

                //}
              }
            }
          };
          xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=the-verge&apiKey=091bc7dbcc53498eba20900e0f1974e5");
          xhttp.send();


          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var newsjson = JSON.parse(this.responseText);
              for(var i=0; i<newsjson.articles.length-1; ++i){
                //if(newsjson.articles[i].source.name=="TechCrunch"){
                 arts= newsjson.articles[i].title;
                 document.getElementById("polygonnews").innerHTML += "<div class='art-boxed'>" + newsjson.articles[i].title +"</div> <br>";

                //}
              }
            }
          };
          xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=polygon&apiKey=091bc7dbcc53498eba20900e0f1974e5");
          xhttp.send();
        }
      </script>
    </div>
      <div id="box5">
        <div class="topnav" id= "navbar">
          <!-- Centered link -->
          <div class="topnav-centered">
            <a href="guesthome.php" class="active"><img src="omnigames logo.png" width="60" height="37.5"></a>
          </div>

          <!-- Left-aligned links (default) -->
          <a href="pongguest.php">Pong</a>
          <a href="snakeguest.php">Snake</a>
          <a href="tetrisguest.php">Tetris</a>

          <!-- Right-aligned links -->
          <div class="topnav-right">
            <a href="newsguest.php">Hello user1</a>
            <a href="contactguest.php">About Us</a>
          </div>
        </div>
      </div>
    </head>

    <body onload="javascript:loadNews()">
      <h1 style="margin:auto; font-size:70px; color:white">Tech & Gaming News:</h1>
      <h2 style="color:white;">The Verge News:</h2>
      <div id="vergenews"></div>
      <hr style="margin-top:85px; color:white">
      <h2 style="color:white;">Polygon News</h2>
      <div id="polygonnews"></div>
    </body>
</html>
