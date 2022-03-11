<!DOCTYPE html>
<HTML>
  <head>
    <meta charset="utf-8">
    <meta name= "description" content="Fahrettin baştürk blog.">
    <meta name ="author" content="Fahrettin">
    <meta name ="keywords" content= "Fahrettin Baştürk, Astroloji, Tarot">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Blog's Homepage </title>
    <link rel="stylesheet" type="text/css" href="css/newmyCss.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/MyProgram.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
    <script src="javaScript/javascriptCodes.js"></script>
  </head>
    <body>

    <ul class="topnav" id="myTopNavbar">
      <li><a href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a class="active" href="MyBlog.php">Blog</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Projects</a>
            <div class="dropdown-content">
                <a href="project1.php">Unity Tarot</a>
                <a href="project2.php">Tarot Drawer</a>
                <a href="project3.php">Dairy</a>
                <a href="LoginPanelHomework.php">Login panel Homework</a>
                <a href="ToDoList.php">To do list</a>
            </div>
    </li>
    <li class="right"><a href="#about">About</a></li>
    <li class="iconTop"><a style="font-size:15px;" href="javascript:void(0);" onclick="myFunctionTop()">&#9776;</a></li>
    </ul>


    <div class = "Program">
      <p class="contentMyText" >Anyway, there is my school schedule too, and please do not disturb me when I am at class:</p>
      <table class="MyProgram">
        <tbody>
          <tr>
          <th>&nbsp;</th>
          <th>9.30</th>
          <th>10.30</th>
          <th>11.30</th>
          <th>12.30</th>
          <th>13.30</th>
          <th>14.30</th>
          <th>15.30</th>
          <th>16.30</th>
        </tr>

        <tr>
          <th>Pazartesi</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="3" >ISE314</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
          <th>Salı</th>
            <td colspan="3" >ISE332 (cmpe226)</td>
            <td colspan="2" >IE220</td>
            <td>&nbsp;</td>
            <td colspan="2">SE346</td>
        </tr>
        
        <tr>
          <th>Çarşamba</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="3" >ENG302</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
          <th>Perşembe</th>
            <td>SE346</td>
            <td>SE346 Lab</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2" >MATH276</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
          <th>Cuma</th>
            <td colspan="2" >CMPE226</td>
            <td colspan="2" >MATH276</td>
            <td>IE220</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
          <th>Cumartesi</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
      </table>
      <br>
      <table class="MyProgramDetailed">
      <tbody>
        <tr>
          <th>Name</th>
          <th>Section/Lab</th>
          <th>Akts</th>
        </tr>

        <tr>
          <th>Cmpe226</th>
            <td>2</td>
            <td>8</td>
        </tr>
        <tr>
          <th>IE220</th>
            <td>1</td>
            <td>5</td>
        </tr>
        <tr>
          <th>MATH276</th>
            <td>6</td>
            <td>6</td>
        </tr>
        <tr>
          <th>SE346</th>
            <td>2 / 2</td>
            <td>6</td>
        </tr>
        <tr>
          <th>ISE332</th>
            <td>1</td>
            <td>5</td>
        </tr>
        <tr>
          <th>ISE314</th>
            <td>1</td>
            <td>5</td>
        </tr>
        <tr>
          <th>ENG302</th>
            <td>1</td>
            <td>3</td>
        </tr>
        <tr>
          <th colspan="2" >&nbsp;</th>
            <td>38</td>
        </tr>
        </tbody>
      </table>
    </div>
      <table>
          <caption><h3>List of Numbers</h3></caption>
          <tr>
            <th>num1</th>
            <th>num2</th>
            <th>num3</th>
          </tr>
        <tbody>
          <tr>
            <td colspan="1">one</td>
            <td>two</td>
            <td>tree</td>
          </tr>
          <tr>
            <td>four</td>
            <td>five</td>
            <td>six</td>
          </tr>
        </tbody>
      </table>
      <a href="#">link1</a>
      <a href="#">link2</a>
    <hr>
      <p>I agree with you.</p>
      <p>I will upgrade my website</p>
      <p>when I have time for doing it.</p>

      <span> hey <span>  </span> how are you  </span>
        <hr>
      <span>span1</span>
      <span>span2</span>
      <span>span3</span>
      <hr>

      <div>div</div>
      <div>hehe</div>
      <div>hehehe</div>
<div>
  <input type="text" value="Enter Your Username"/>
  <input type="date"/>
</div>
<div>
  <input type="password" name="password" id=""/>
</div>
<div>
  <textarea name="name" rows="5" cols="40">Enter an paragraph</textarea>
</div>
<br>
<div>
  <p>Would you want to you like to rate my website? <input type="checkbox" /></p>
  <input type="range" />
</div>
<div>
  <input type="file">
<div>
  <input name="btn" type="radio">
  <input name="btn" type="radio">
</div>
<div>
  <p>I hope you like my website</p>
  <span>If you want, you can turn on my first web page</span>
  <a href="index.html" target="_blank"> <input type="submit"> </a>
</div>
</div>
<p>which is that:</p>

          <script>
        function myFunction() {
          var x = document.getElementById("myNavbar");
          if (x.className === "botnav") {
            x.className += " responsive";
          } else {
            x.className = "botnav";
          }
        }
          </script>


      <iframe src="https://www.fahrettinbasturk.com" frameborder="0" height="500" width="400" >Sorry, you cannot see iframe
      </iframe>

      <div class="botnav" id="myNavbar">
        <a href="#home" class="active">Home</a>
        <a href="tarotCards.php">Tarot meanings</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      
    </body>
</HTML>
