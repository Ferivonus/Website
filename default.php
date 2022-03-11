<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name= "description" content="This is an awesome website">
  <meta name ="author" content="Fahrettin">
  <meta name ="keywords" content= "Fahrettin Baştürk, Astroloji, Tarot">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Fahrettin's website </title>
  <link rel="stylesheet" type="text/css" href="css/GridHome.css?<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
  <script src="javaScript/javascriptCodes.js"></script>
</head>
<body>
<ul class="topnav" id="myTopNavbar">
      <li><a class="active" href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a href="MyBlog.php">Blog</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Projects</a>
            <div class="dropdown-content">
                <a href="project1.php">Unity Tarot</a>
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

      <div class="leftSide">
        <h2 class="contentTitle">Left Side of Everything</h2>
        <p class="contentMyText">Being happy could be impossible thing, because there will always be events which is that upset to people and these events will permeate our identity...</p>
      </div>

      <div class="middlePicture">
      <div class="justifyMiddle">
      <img width= "160" src="documents/pictures/9fa806c665d9cfdb3a594c3250de1478.jpg" alt="hey"> 
      </div>
        <div class="justifyMiddle">
          <form action="default.php" method="post">
            <p class="contentMyText">Did you like my uwu girl?? <input type="radio" name="Wants" value="1" ></p>
            <p class="contentMyText">Or don't you like it...<input type="radio" name="Wants" value="0" ></p>
            <p class="contentMyText">You can submit there:
            <input type="submit" name="submit" value="submit"></p>
          </form>
        </div>
        <div class="middleSide">
        <?php


        if(isset($submit)){
          $Wants = $_POST["Wants"];
        }
        else{
          $Wants = 2;
        }

        if ($Wants == 1) {
          echo "<p>Dude, you know your wants, lol!!</p>";
        }
        elseif ($Wants == 0) {
          echo "<p>Duck off, thinking this girl is the better way of being happy then having gf</p>";
        }

        
        ?>
        
        </div>
        
      </div>
      
      <div class="rightSide">
      <h2 class="contentTitle">Right Side of Everything</h2>
      <p class="contentMyText">Being unhappy could be impossible thing, because there will always be events which is that fun events for people and these events will permeate our identity...</p>

      </div>
      
      <div class="ToTalk">
      <hr>
      <br>
      <h2 class="contentTitle">By the way, here is my curriculum vitae which is caled resume 🥰</h2>
      <p> As a leanguage of turkish You can look <a style="color:aqua" href="documents/files/Fahrettin_Baştürk_özgeçmiş.pdf"> here</a></p>
      <p>If you want to dowland it, you can do <a style="color:aqua" href="documents/files/Fahrettin_Baştürk_özgeçmiş.pdf" download> here</a> </p>
      <h2 class="contentTitle">What will you find there</h2>
      <p  class="contentMyText" >I created this website to have a place in internet to access with people who I would want to make connections. 
        About that, I am trying to share my knowledge about <a style="color: pink;" href="">astrology,</a> <a style="color: pink;" href=""> tarot</a> and <a style="color: pink;" href="">coding</a> </p>

      </div>

    
  </div>
        <br>
    <div class="botnav" id="myNavbar">
        <a href="#home" class="active">Home</a>
        <a href="tarotCards.php">Tarot meanings</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:16px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

</body>
