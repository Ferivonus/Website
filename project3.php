<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ISE311_css/mainsite.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="ISE311_css/topNav.css?<?php echo time(); ?>">
    <script src="ISE311_js/javascriptCodes.js"></script>

    <title>Project 3</title>
</head>
<body>

<?php  
session_start();
$server_servername = "localhost";
$server_database = "u397214565_Dairy";
$server_username = "u397214565_ferivonusDairy";
$server_password = "Fahrettin_basturk22";

$conn = new mysqli($server_servername, $server_username, $server_password, $server_database);        // Check connection
if (!$conn) {
//die("Connection failed: " . mysqli_connect_error());
}

?>


<ul class="topnav" id="myTopNavbar">
      <li><a href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a href="MyBlog.php">Blog</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="active dropbtn">Projects</a>
            <div class="dropdown-content">
                <a href="project1.php">Unity Tarot</a>
                <a href="project2.php">Tarot Drawer</a>
                <a class="active" href="project3.php">Dairy</a>
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

<div class="codeSide">

<?php    
    extract($_POST);
    $NewPersonDairy=true;
    $usernameDairy="";
    $userNameDairy="";
    $flagDairy;
    $_SESSION['NewPersonDairy']=$NewPersonDairy;
    $_SESSION['flagDairy'];

    if(isset($_POST['quitDairy'])){
            $usernameDairy="";
            $_SESSION['userNameDairy'] = "";
            $_SESSION['flagDairy'] = false;
        }


        $YouCanLoginAs="";


    
       
    
        if(isset($_POST['SignMeDairy'])){
            $AccountUsername = $_POST['usernameDairy'];
            $AccountUsername= strtolower($AccountUsername);
            $AccountPassword = $_POST['passwordDairy'];
            if(empty($AccountUsername) || empty($AccountPassword))
            {
                $YouCanLoginAs="<p>username and password is required for sing in. </p>";
            }
            else{
                $SigningFlag=true;
                $Who = $AccountUsername;
                $sqlwho= "SELECT AccountNameDairy From Accounts WHERE AccountNameDairy like '$Who'";
                $result = mysqli_query($conn, $sqlwho);

                while($row = mysqli_fetch_row($result))
                    {
                        foreach ($row as $key =>$value){
                            if($AccountUsername == $value){
                                $SigningFlag=false;
                                $YouCanLoginAs="Your username is already used by some dude.";
                                break;
                            }
                        }
                    }
                
                if($SigningFlag)
                {
                    //use a protocol which could used for hiding password 
                    $sql = "INSERT INTO Accounts (AccountNameDairy,superPassword) values ('$AccountUsername','$AccountPassword')";
                    mysqli_query($conn, $sql);
                    $YouCanLoginAs = " <p>You can log in as ". $AccountUsername . " right now.</p>";
                    $NewPersonDairy=false;
                    $_SESSION['NewPersonDairy']=true;
                    $_SESSION['flagDairy'] = false;

                    setcookie('userNameDairy', $AccountUsername, time()- 50000 );
                    $_SESSION['userNameDairy'] = $AccountUsername;
                    $AccountUsername = $userNameDairy;
                }      
            }      
        }

        elseif(isset($_POST['submitLogDairy']))
        {
            $AccountUsername = $_POST['usernameDairy'];
            $AccountPassword = $_POST['passwordDairy'];
            if(empty($AccountUsername) || empty($AccountPassword))
                {
                    $YouCanLoginAs="<p>username and password is required for login. </p>";
                    
                }
                else{
                    $SubmitFlg=false;

                    $Who = $AccountUsername;
                    $sqlwho= "SELECT superPassword From Accounts WHERE AccountNameDairy = '$Who'"; 
                    $result = mysqli_query($conn, $sqlwho);

                    while($row = mysqli_fetch_row($result))
                    {
                        foreach ($row as $key =>$value){
                            if($AccountPassword == $value){
                                $SubmitFlg=true;
                                break; 
                            }
                        }
                    }

                    if($SubmitFlg)
                    {
                        $NewPersonDairy=false;
                        $_SESSION['NewPersonDairy']=false;
                        setcookie('userNameDairy', $AccountUsername, time()- 50000 );
                        $_SESSION['userNameDairy'] = $AccountUsername;
                        $AccountUsername = $userNameDairy;
                        $_SESSION['flagDairy'] = true;
                    }
                    else{
                        $YouCanLoginAs="You miss wrote your username or password.";
                    }
                }
        }

        
        else{
            $YouCanLoginAs="";
        }

        if($_SESSION['flagDairy'])
        {
            $_SESSION['NewPersonDairy']=false;
        } 

    if($_SESSION['NewPersonDairy'])
    {
            echo "<div class='justifyMiddle'>
            <form class='HomeworkForm' method='post' action='' >
                <label for='usernameDairy'>username:</label><br>
                <input type='text' id='usernameDairy' name='usernameDairy' placeholder='Enter your username' value= '$AccountUsername'/> <br>
                <label for='passwordDairy'>password:</label> <br>
                <input type='password' id='passwordDairy' name='passwordDairy' placeholder='Enter your password' /> <br> 
                <input type='submit' name='SignMeDairy' value='sign me' >
        
                <input style='margin-left: 37px;' type='submit' name='submitLogDairy' value='Log me in' > <br>
            </form>
              $YouCanLoginAs 
        </div> </div> </div>
        </body>
        </html>";
       exit();
    }   
?>




<div class="justifyMiddle">
        <form class="HomeworkForm" method="post" action="">
            <h3><?php  echo "welcome ". $_SESSION['userNameDairy'];?></h3>
            <label for="DairyMessageDairy">What will you want to write your dairy:</label><br> 
            <input type="text" id="DairyMessageDairy" name="DairyMessageDairy" placeholder="type your work here" />
            <input type="submit" name="addDairy" value="Add Message">
            <input type="submit" name="quitDairy" value="quit">
         </form>
     </div>

    <?php 
        extract($_POST);

        $DairyMessage="";

        $JokeControl="";
        $usernameDairy = $_SESSION['userNameDairy'];

        if(isset($_POST['addDairy']))
        {
            
            $DairyMessage = $_POST['DairyMessageDairy'];
            if(empty($DairyMessage))
            {
                $JokeControl =  "<h4>". $_SESSION['userNameDairy']. " You have to write your Dairy Message :3 </h4>";

            }
            else{
                $usernameDairy = $_SESSION['userNameDairy'];
                $sql = "INSERT INTO Dairy (AccountNameDairy,DairyMessage) values ('$usernameDairy','$DairyMessage')";
                $DairyMessage=null;
                mysqli_query($conn, $sql);
                $JokeControl="";
            }            
            $NewPersonDairy=true;
        }
        $Who = $_SESSION['userNameDairy'];
        $sqlwho= "SELECT WorkToDo From Dairy WHERE AccountNameDairy like '$Who'"; 
        
        

    
    echo " <div class = 'justifyMiddle'> "; 
    
    echo $JokeControl;
           
        
    $resultWrite = mysqli_query($conn, $sqlwho);
              
            mysqli_close($conn);
        
    echo " </div>";
    
            ?>

</div>
</div>

</body>

</html>