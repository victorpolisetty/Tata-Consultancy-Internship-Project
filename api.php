<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="home.css">
      <script>
        function loadNews(){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
              var newsjson = JSON.parse(this.responseText);
              for(var i=0; i<newsjson.articles.length-1; ++i){
                //if(newsjson.articles[i].source.name=="TechCrunch"){
                 arts= newsjson.articles[i].title;
                 document.getElementById("articles").innerHTML += "<div class='art-boxed'>" + newsjson.articles[i].title +"</div> <br>";
                //}
              }
            }
          };
          xhttp.open("GET", "https://newsapi.org/v2/top-headlines?sources=TechCrunch&apiKey=091bc7dbcc53498eba20900e0f1974e5");
          xhttp.send();
        }
      </script>
    </head>
    <body onload="javascript:loadNews()">
      Tech & Gaming News:
      <div id="articles"></div>
    </body>
</html>
