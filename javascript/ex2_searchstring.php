<!--นายภูชิต ตั้งสิตาพร 58160678-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <center>Text Input: <textarea rows="4" cols="50" id="txt1"></textarea><br><br>
    Sensitive Case:<input type="radio" name="check" value="1" checked>Yes
    <input type="radio" name="check" value="2">No<br><br>
    Search: <input type="text" id="txt2"><br><br>
    <button type="button" id="click" onclick="Search()">Search</button><br><br>
    Result for Search: <span id="result"><span></center>
    </body>
    </html>
    <script>
    function Search(){
      var txt1 = document.getElementById('txt1').value;
      var txt2 = document.getElementById('txt2').value;
      var radio = document.querySelector('input[name="check"]:checked').value;
      if(radio==1){
        if(txt2==""||txt1==""){
          document.getElementById('result').innerHTML = "No input";
        }
        else{
          var re = new RegExp(txt2, 'g');
          var count = txt1.match(re);
          if(count==null){
            document.getElementById('result').innerHTML = "0";
          }
          else{
            document.getElementById('result').innerHTML = txt1.match(re).length;;
          }
        }
      }
      else if(radio==2){
        if(txt2==""||txt1==""){
          document.getElementById('result').innerHTML = "No input";
        }
        else{
          var re = new RegExp(txt2, 'gi');
          var count = txt1.match(re);
          if(count==null){
            document.getElementById('result').innerHTML = "0";
          }
          else{
            document.getElementById('result').innerHTML = txt1.match(re).length;;
          }
        }
      }
    }
    </script>
