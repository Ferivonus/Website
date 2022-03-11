<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name= "description" content="This is an awesome website">
  <meta name ="author" content="Fahrettin">
  <meta name ="keywords" content= "Fahrettin Baştürk, Astroloji, Tarot">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Fahrettin's website </title>
  <link rel="stylesheet" type="text/css" href="css/myGridProjects.css?<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
  <script src="javaScript/javascriptCodes.js"></script>
</head>
<body>
  <ul class="topnav" id="myTopNavbar">
      <li><a href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a href="MyBlog.php">Blog</a></li>
      <li class="dropdown">
      <a href="javascript:void(0)" class="active dropbtn">Projects</a>
            <div class="dropdown-content">
                <a class="active" href="project1.php">Unity Tarot</a>
                <a href="project2.php">Tarot Drawer</a>
                <a href="project3.php">Dairy</a>
                <a href="project4.php">study schedule creator</a>
                <a href="LoginPanelHomework.php">Login panel Homework</a>
                <a href="ToDoList.php">To do list</a>
            </div>
    </li>
    <li class="right"><a href="#about">About</a></li>
    <li class="iconTop"><a style="font-size:15px;" href="javascript:void(0);" onclick="myFunctionTop()">&#9776;</a></li>

    </ul>
    
    <div class="site">
        <h1 class="page-title">Everything will be better in future</h1>

        <div class="definition">
              <h3 class="contentTitle">My Tarot Code In unity</h3>
              <p class="contentMyText">I worte a unity code to making card draws with in computer </p>
              <p class="contentMyText">The code is using random number generator for taking cards an it takes them as an array for checking for similar generated numbers every turn, and if code sees a similarity between cards, it will generate new number till find a new different one.</p>
              <p class="contentMyText">After taking numbers, code is printing cards by their attended numbers.</p>
        </div>

        
        <div class="codeSide">
          <div class="justifyMiddle"> 
            <a  href="index.html" style="color: pink;" target="_blank" >you can click here <br> but, it's broke for website right now.</a> 
          </div>           
        </div>  
           
    

        <div class="gitCodeAddress">
              <p class="contentMyText"> I didn't update the code right now, I will upload soon.</p>
        </div>

            </div>

      <div class="botnav" id="myNavbar">
        <a href="#home" class="active">Home</a>
        <a href="tarotCards.php">Tarot meanings</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </body>
</html>

