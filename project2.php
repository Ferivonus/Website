<!DOCTYPE html>
<html lang="en">
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
                <a href="project1.php">Unity Tarot</a>
                <a class="active" href="project2.php">Tarot Drawer</a>
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
              <h3 class="contentTitle">My Tarot Code In Php</h3>
              <p class="contentMyText">I convert my unity's tarot c# code to php for using more flexible than a mobile application when I and my friends can access the internet connection. </p>
              <p class="contentMyText">The code is using random number generator for taking cards an it takes them as an array for checking for similar generated numbers every turn, and if code sees a similarity between cards, it will generate new number till find a new different one.</p>
              <p class="contentMyText">After taking numbers, code is printing cards by their attended numbers.</p>
        </div>

        <?php

        extract($_POST);
        $server_servername = "localhost";
        $server_database = "u397214565_TarotDesk";
        $server_username = "u397214565_ferivonusTarot";
        $server_password = "Fahrettin_basturk22";

        // Create connection
        $conn = mysqli_connect($server_servername, $server_username, $server_password, $server_database);        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        
        function Controller( $random_Number,  $length,  $turn)
        {
            for ($controller =0; $controller < $length; $controller++) 
            {
                if ($turn != $controller)
                {
                    if ($random_Number[$turn] == $random_Number[$controller])
                    {
                        return true;
                    }
                } 
            }
            return false;
        }
    
        function ForLookingArray ($random_Number_Looking, $turn)
        {
                if ($random_Number_Looking[$turn] == 0)
            {
                      return "";
                }
                else if ($random_Number_Looking[$turn] == 1)
            {
                      return "[Ters] ";
            }
                else
            {
                      return "error ";
            }
                      
    
          }
    
        function Writing_to_Log($randomNumber, $writing_turn)
          {
                if ($randomNumber[$writing_turn] == 0)
                $Turner = "Joker, The Fool";
                else if ($randomNumber[$writing_turn] == 1)
                $Turner = "Sihirbaz, The Magican";
                else if ($randomNumber[$writing_turn] == 2)
                $Turner = "Azize, The High Priestess";
                else if ($randomNumber[$writing_turn] == 3)
                $Turner = "İmparatoriçe, The Empress";
                else if ($randomNumber[$writing_turn] == 4)
                $Turner = "İmparator, The Emperor";
                else if ($randomNumber[$writing_turn] == 5)
                $Turner = "Aziz, The Hierophant";
                else if ($randomNumber[$writing_turn] == 6)
                $Turner = "Aşıklar, The Lovers";
                else if ($randomNumber[$writing_turn] == 7)
                $Turner = "Savaş Arabası, The Chariot";
                else if ($randomNumber[$writing_turn] == 8)
                $Turner = "Güç, Strength";
                else if ($randomNumber[$writing_turn] == 9)
                $Turner = "Ermiş, Rhe Hermit";
                else if ($randomNumber[$writing_turn] == 10)
                $Turner = "Kader Çarkı, Wheel of Fortune";
                else if ($randomNumber[$writing_turn] == 11)
                $Turner = "Adalet, Justice";
                else if ($randomNumber[$writing_turn] == 12)
                $Turner = "Asılan Adam, The Hanged Man";
                else if ($randomNumber[$writing_turn] == 13)
                $Turner = "Ölüm, Death";
                else if ($randomNumber[$writing_turn] == 14)
                $Turner = "Denge, Temperance";
                else if ($randomNumber[$writing_turn] == 15)
                $Turner = "Şeytan, The Devil";
                else if ($randomNumber[$writing_turn] == 16)
                $Turner = "Yıkılan Kule, The Tower";
                else if ($randomNumber[$writing_turn] == 17)
                $Turner = "Yıldız, The Star";
                else if ($randomNumber[$writing_turn] == 18)
                $Turner = "Ay, The Moon";
                else if ($randomNumber[$writing_turn] == 19)
                $Turner = "Güneş, The Sun";
                else if ($randomNumber[$writing_turn] == 20)
                $Turner = "Mahkeme, The Last Judgement";
                else if ($randomNumber[$writing_turn] == 21)
                $Turner = "Dünya, The World";
                else if ($randomNumber[$writing_turn] == 22)
                $Turner = "Değnek Ası";
                else if ($randomNumber[$writing_turn] == 23)
                $Turner = "Değnek İkilisi";
                else if ($randomNumber[$writing_turn] == 24)
                $Turner = "Değnek Üçlüsü";
                else if ($randomNumber[$writing_turn] == 25)
                $Turner = "Değnek Dörtlüsü";
                else if ($randomNumber[$writing_turn] == 26)
                $Turner = "Değnek Beşlisi";
                else if ($randomNumber[$writing_turn] == 27)
                $Turner = "Değnek Altılısı";
                else if ($randomNumber[$writing_turn] == 28)
                $Turner = "Değnek Yedilisi";
                else if ($randomNumber[$writing_turn] == 29)
                $Turner = "Değnek Sekizlisi";
                else if ($randomNumber[$writing_turn] == 30)
                $Turner = "Değnek Dokuzlusu ";
                else if ($randomNumber[$writing_turn] == 31)
                $Turner = "Değnek Onlusu ";
                else if ($randomNumber[$writing_turn] == 32)
                $Turner = "Değnek Prensi ";
                else if ($randomNumber[$writing_turn] == 33)
                $Turner = "Değnek Şövalyesi";
                else if ($randomNumber[$writing_turn] == 34)
                $Turner = "Değnek Kraliçesi";
                else if ($randomNumber[$writing_turn] == 35)
                $Turner = "Değnek Kralı";
                else if ($randomNumber[$writing_turn] == 36)
                $Turner = "Kupa Ası";
                else if ($randomNumber[$writing_turn] == 37)
                $Turner = "Kupa İkilisi";
                else if ($randomNumber[$writing_turn] == 38)
                $Turner = "Kupa Üçlüsü";
                else if ($randomNumber[$writing_turn] == 39)
                $Turner = "Kupa Dörtlüsü";
                else if ($randomNumber[$writing_turn] == 40)
                $Turner = "Kupa Beşlisi";
                else if ($randomNumber[$writing_turn] == 41)
                $Turner = "Kupa Altılısı";
                else if ($randomNumber[$writing_turn] == 42)
                $Turner = "Kupa Yedilisi";
                else if ($randomNumber[$writing_turn] == 43)
                $Turner = "Kupa Sekizlisi";
                else if ($randomNumber[$writing_turn] == 44)
                $Turner = "Kupa Dokuzlusu";
                else if ($randomNumber[$writing_turn] == 45)
                $Turner = "Kupa Onlusu";
                else if ($randomNumber[$writing_turn] == 46)
                $Turner = "Kupa Prensi";
                else if ($randomNumber[$writing_turn] == 47)
                $Turner = "Kupa Şövalyesi";
                else if ($randomNumber[$writing_turn] == 48)
                $Turner = "Kupa Kraliçesi";
                else if ($randomNumber[$writing_turn] == 49)
                $Turner = "Kupa Kralı";
                else if ($randomNumber[$writing_turn] == 50)
                $Turner = "Kılıç Ası";
                else if ($randomNumber[$writing_turn] == 51)
                $Turner = "Kılıç İkilisi";
                else if ($randomNumber[$writing_turn] == 52)
                $Turner = "Kılıç Üçlüsü";
                else if ($randomNumber[$writing_turn] == 53)
                $Turner = "Kılıç Dörtlüsü";
                else if ($randomNumber[$writing_turn] == 54)
                $Turner = "Kılıç Beşlisi";
                else if ($randomNumber[$writing_turn] == 55)
                $Turner = "Kılıç Altılısı";
                else if ($randomNumber[$writing_turn] == 56)
                $Turner = "Kılıç Yedilisi";
                else if ($randomNumber[$writing_turn] == 57)
                $Turner = "Kılıç Sekizlisi";
                else if ($randomNumber[$writing_turn] == 58)
                $Turner = "Kılıç Dokuzlusu";
                else if ($randomNumber[$writing_turn] == 59)
                $Turner = "Kılıç Onlusu";
                else if ($randomNumber[$writing_turn] == 60)
                $Turner = "Kılıç Prensi";
                else if ($randomNumber[$writing_turn] == 61)
                $Turner = "Kılıç Şövalyesi";
                else if ($randomNumber[$writing_turn] == 62)
                $Turner = "Kılıç Kraliçesi";
                else if ($randomNumber[$writing_turn] == 63)
                $Turner = "Kılıç Kralı";
                else if ($randomNumber[$writing_turn] == 64)
                $Turner = "Tılsım Ası";
                else if ($randomNumber[$writing_turn] == 65)
                $Turner = "Tılsım İkilisi";
                else if ($randomNumber[$writing_turn] == 66)
                $Turner = "Tılsım Üçlüsü";
                else if ($randomNumber[$writing_turn] == 67)
                $Turner = "Tılsım Dörtlüsü";
                else if ($randomNumber[$writing_turn] == 68)
                $Turner = "Tılsım Beşlisi";
                else if ($randomNumber[$writing_turn] == 69)
                $Turner = "Tılsım Altılısı";
                else if ($randomNumber[$writing_turn] == 70)
                $Turner = "Tılsım Yedilisi";
                else if ($randomNumber[$writing_turn] == 71)
                $Turner = "Tılsım Sekizlisi";
                else if ($randomNumber[$writing_turn] == 72)
                $Turner = "Tılsım Dokuzlusu";
                else if ($randomNumber[$writing_turn] == 73)
                $Turner = "Tılsım Onlusu";
                else if ($randomNumber[$writing_turn] == 74)
                $Turner = "Tılsım Prensi";
                else if ($randomNumber[$writing_turn] == 75)
                $Turner = "Tılsım Şövalyesi";
                else if ($randomNumber[$writing_turn] == 76)
                $Turner = "Tılsım Kraliçesi";
                else if ($randomNumber[$writing_turn] == 77)
                $Turner = "Tılsım Kralı";
                else
                $Turner = "Error";
                return $Turner;
          }
        ?>
        <div class="codeSide">


            <div class="justifyMiddle">
            <form action="project2.php" method="post" autocomplete="on" >
                <label for="name">Would you want to share your name:</label><br>
                <input type="text" id="name" name="name" placeholder="you don't have to"/> <br> <br>
                <label for="question">what was your question to ask:</label><br>
                <input type="text" id="question" name="question" /> <br> 
                <label for="number1">How many cards between 1 and 10:</label> <br>
                <input type="number" id="number1" name="number1" value="3"/> <br>
                <input  type="submit" name="submit" value="take cards">  <br>
            </form>
            </div>
            <div class="justifyMiddle">
            <?php 
             $length= 0;
                if(isset($_POST['submit']))  
                {
                  $name = $_POST['name'];
                  $question = $_POST['question'];
                  $length = $_POST['number1'];
                  if($length > 77)
                  {
                    $length= 0;
                  }  
                }
                else 
                {
                    $length = 0;
                    $question = "";
                }  

             $random_Number = array(
                0=>'', 
                1=>'', 
                2=>'',
                3=>'',
                4=>'', 
                5=>'',
                6=>'',
                7=>'', 
                8=>'',
                9=>'',
                10=>'');
            $random_NumberTrueFalse = array(
                0=>'', 
                1=>'', 
                2=>'',
                3=>'',
                4=>'', 
                5=>'',
                6=>'',
                7=>'', 
                8=>'',
                9=>'',
                10=>'');
            $counter= 0;
            

                for ($turn = 0; $turn < $length; $turn++)
              {
                    do
                    {
                          $random_Number[$turn] = mt_rand(0,77); 
                    $random_NumberTrueFalse[$turn] = mt_rand(0,1);
                          $counter++;
                    } while (Controller($random_Number, $length, $turn));
              }
              if ($question != "")
              {
                echo "your question is that ". $question . " and its answer is: ". "<br>";
              }
              $cardsString="";
              $DatabaseFlag=0;
            for ($WritingTurn = 0; $WritingTurn < $length; $WritingTurn++) {
                $Looking = ForLookingArray($random_NumberTrueFalse, $WritingTurn);
                $WritingTurn++;
                echo $WritingTurn;
                echo ". card ";
                $WritingTurn--;
                echo  $Looking;
                echo Writing_to_Log($random_Number, $WritingTurn);
                $WritingTurn++;
                $card = $WritingTurn . ". card " . Writing_to_Log($random_Number, $WritingTurn). " ";
                $cardsString = $cardsString. $WritingTurn.". " . Writing_to_Log($random_Number, $WritingTurn). " ";
                $WritingTurn--;
                echo "<br>";
                $DatabaseFlag=1;
                $sql = "INSERT INTO TarotCards (Name,Questions,Cards) values ('$name','$question','$card')";
                mysqli_query($conn, $sql);
            }
            if($DatabaseFlag!=0)
            {
              $sql = "INSERT INTO TarotCards (Name,Questions,Cards) values ('$name','$question','$cardsString')";
              mysqli_query($conn, $sql);
            }
              echo "<br>". "I draw " . $counter . " cards till I can show you.";
    
        mysqli_close($conn);
        ?>
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