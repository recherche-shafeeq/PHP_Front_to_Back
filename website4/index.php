<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title></title>
    <script>
      function showSuggestion(str){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "suggest.php?q="+str,true);
        xmlhttp.send();
      }
    </script>
  </head>
  <body>
  <div class="container">
    <h1>Search Users</h1>
    <form>
        Search User: <input type="text" name="" value="" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
  </div>
  </body>
</html>
