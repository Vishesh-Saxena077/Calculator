<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CALCULATOR</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

    body{
      padding: 0px;
      margin: 0;
      box-sizing: border-box;
      background-image: linear-gradient(to bottom right, #013243,black, #22a7f0);
    }

    .calbase{
      padding-bottom: 10px;
      top: 5%;
      left: 38%;
      height: auto;
      width: 450px;
      background-color: black;
      box-shadow:  0px 5px 10px 5px white;
    }

    .display{
      margin-top: 10px;
      height: auto;
      width: 95%;
    }

    .screen
    {
      margin-top: 10px;
      outline: none;
      border: none;
      color:white;
      line-height: 100px;
      font-size: 60px;
      text-align: right;
      height: 100px;
      width: 99%;
      background-color: #24252a;
    }

    .btns
    {
      padding-bottom: 10px;
      margin-top: 10px;
      height: auto;
      width: 100%;
      background-color: #24252a;
    }
    table
    {
      height: auto;
      width: auto;
      border-collapse: separate;
      border-spacing: 7px;
      *border-collapse: expression('separate', cellSpacing='10px');
    }
    tr td {height: auto;
    width: auto;}

    .row_btn{
      height: 90px;
      width: 90px;
      background-image: linear-gradient(to bottom right, #013243, #22a7f0);
      border: none;
      outline: none;
      transition: 0.2s;
      color: black;
      font-size: 30px;
      border-radius: 1rem;
    }
    .row_btn:hover{
      background-image: linear-gradient(to bottom right, #013243, white);
    }
    .extra{
      line-height: 50px;
      height: 50px;
      width: 100%;
      font-size: 30px;
      border-radius: 1rem;
    }
    .extra:hover
    {
      background-color: #34495e;
    }
    .extra_btn{
      height: 100%;
      width: 20%;
      background-color: black;
      outline: none;
      border: none;
      color: #f03434;
      font-size: 40px;
      border-radius: 5rem;
    }
    .extra_btn:hover{
      background-color: #f22613;
    }

    .sintific_div
    {
      margin-top: 20px;
      height: 200px;
      width: 100%;
      background-color:#013243;
    }


    header{
      height: 200px;
      width: 100%;
      background-image: linear-gradient(to bottom right, aqua , black);
    }

    #sm
    {
      float:left;
    }
    </style>

  </head>
  <body>
    <center>

      <header>

        <div class="header_div1">
          <button id="sm" onclick="openFullscreen();">FSM</button>
          <button id="sm" onclick="closeFullscreen();">Ecs</button>
          <span style="font-size:50px;font-family: 'Roboto', sans-serif; font-weight:bolder;">
          ICY THEME<br> CALCULATOR
          </span>

        </div>

      </header>

              <div class="calbase">
                <center>
                  <div class="display">

                    <form name="form1">
                      <input class="screen" id = "calc" type ="text" name = "answer">

                      <div class="btns">
                        <table>
                          <tr>
                            <td> <input type = "button" value = "C" onclick = "form1.answer.value = ' ' " id= "clear" class="row_btn"><td>
                            <td> <input type = "button" value = "%" onclick = "form1.answer.value += '%' " class="row_btn"><td>
                            <td> <input type = "button" value = "back" onclick = "form1.answer.value += ' ' " class="row_btn"><td>
                            <td> <input type = "button" value = "/" onclick = "form1.answer.value += '/' " class="row_btn"> <td>
                          </tr>

                          <tr>
                            <td> <input type = "button" value = "7" onclick = "form1.answer.value += '7' " class="row_btn"> <td>
                            <td> <input type = "button" value = "8" onclick = "form1.answer.value += '8' " class="row_btn"> <td>
                            <td> <input type = "button" value = "9" onclick = "form1.answer.value += '9' " class="row_btn"> <td>
                            <td> <input type = "button" value = "*" onclick = "form1.answer.value += '*' "class="row_btn"> <td>
                          </tr>

                          <tr>
                            <td> <input type = "button" value = "4" onclick = "form1.answer.value += '4' " class="row_btn"> <td>
                            <td> <input type = "button" value = "5" onclick = "form1.answer.value += '5' " class="row_btn"> <td>
                            <td> <input type = "button" value = "6" onclick = "form1.answer.value += '6' " class="row_btn"> <td>
                            <td> <input type = "button" value = "-" onclick = "form1.answer.value += '-' " class="row_btn"> <td>
                          </tr>

                          <tr>
                            <td> <input type = "button" value = "1" onclick = "form1.answer.value += '1' " class="row_btn"> <td>
                            <td> <input type = "button" value = "2" onclick = "form1.answer.value += '2' " class="row_btn"> <td>
                            <td> <input type = "button" value = "3" onclick = "form1.answer.value += '3' " class="row_btn"> <td>
                            <td> <input type = "button" value = "+" onclick = "form1.answer.value += '+' " class="row_btn"> <td>
                          </tr>

                          <tr>
                            <td> <input type = "button" value = "00" onclick = "form1.answer.value += '00' " class="row_btn"><td>
                            <td> <input type = "button" value = "0" onclick = "form1.answer.value += '0' " class="row_btn"> <td>
                            <td> <input type = "button" value = "." onclick = "form1.answer.value += '.' " class="row_btn"> <td>
                            <td> <input type = "button" value = "=" onclick = "form1.answer.value = eval(form1.answer.value)"   class="row_btn"> <td>
                          </tr>

                        </table>
                      </form>

                      <!-- ONCLICK -->
                      <div class="extra">
                          <i class="fa fa-bars" style="color:white;" onclick="sintific()"></i>
                      </div>

                      <div class="sintific_div" id="sintific_div" style="display:none;">

                      </div>

                    </div>

                  </div>
                </center>
              </div>

              <div class="fo" style=" margin-top: 50px;height:300px; width:100%; background:black;">
              </div>

    </center>

    <script>
        var targetDiv = document.getElementById("sintific_div");

        function sintific()
        {
          if (targetDiv.style.display !== "none")
           {
             targetDiv.style.display = "none";
           }
           else
            {
              targetDiv.style.display = "block";
            }
          }
    </script>


    <script>
        function display()
        {
          var str = document.getElementById("btn");
          arr
        }
    </script>



    <script>
    /* Get the element you want displayed in fullscreen */
    var elem = document.documentElement;

    /* Function to open fullscreen mode */
    function openFullscreen()
    {
      if (elem.requestFullscreen)
       {
         elem.requestFullscreen();
       }
       else if (elem.mozRequestFullScreen)
       {
         /* Firefox */
         elem.mozRequestFullScreen();
       }
        else if (elem.webkitRequestFullscreen)
         {
            /* Chrome, Safari & Opera */
            elem.webkitRequestFullscreen();
          }
          else if (elem.msRequestFullscreen)
           {
              /* IE/Edge */
              elem = window.top.document.body;
              //To break out of frame in IE
              elem.msRequestFullscreen();
            }
          }
          /* Function to close fullscreen mode */
          function closeFullscreen()
          {
            if (document.exitFullscreen)
             {
              document.exitFullscreen();
             }
             else if (document.mozCancelFullScreen)
             {
               document.mozCancelFullScreen();
             }
             else if (document.webkitExitFullscreen)
             {
                   document.webkitExitFullscreen();
             }
              else if (document.msExitFullscreen)
              {
                window.top.document.msExitFullscreen();
              }
            }
            // Events
            var output = document.getElementById("myP");
            document.addEventListener("fullscreenchange", function() {
              output.innerHTML = "fullscreenchange event fired!"; });
            document.addEventListener("mozfullscreenchange", function() {
              output.innerHTML = "mozfullscreenchange event fired!"; });
            document.addEventListener("webkitfullscreenchange", function() {
              output.innerHTML = "webkitfullscreenchange event fired!"; });
            document.addEventListener("msfullscreenchange", function() {
              output.innerHTML = "msfullscreenchange event fired!"; });

          </script>

  </body>
</html>
