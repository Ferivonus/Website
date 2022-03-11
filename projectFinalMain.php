<?php 
require 'db_connToDo.php';
session_start();

//mysqli connection with name of database which is called users in this case

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ISE311_css/mainsite.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="ISE311_css/topNav.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="ISE311_css/style.css?<?php echo time(); ?>">

    <script src="ISE311_js/javascriptCodes.js"></script>
    <script src="ISE311_js/jquery-3.2.1.min.js"></script>


    <title>Todo list v2.1.0</title>
</head>
<body>

<ul class="topnav" id="myTopNavbar">
<li><a href="default.php">Home</a></li>
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
                <a class="active" href="ToDoList.php">To do list</a>
            </div>
    </li>
    <li class="iconTop"><a style="font-size:15px;" href="javascript:void(0);" onclick="myFunctionTop()">&#9776;</a></li>

    </ul>

<div class="site">

<h1 class="page-title">Everything will be better in future</h1>

<div class="codeSide">

<?php    
    extract($_POST);
    $_SESSION['newPerson']=false;
    if(empty($_SESSION['userName'])){
        $_SESSION['newPerson']=true;

    }
    $username="";
    $userName="";
    $flag;
    
    $_SESSION['flag'];

    if(isset($_POST['quit'])){
            $username="";
            $_SESSION['userName'] = "";
            $_SESSION['flag'] = false;
            $_SESSION['newPerson'] = true;
            $SigningFlag = false;
        }


        $YouCanLoginAs="";
        
    
        if(isset($_POST['SignMe'])){
            $AccountUsername = $_POST['username'];
            $AccountUsername= strtolower($AccountUsername);
            $AccountPassword = $_POST['password'];
            if(empty($AccountUsername) || empty($AccountPassword))
            {
                $YouCanLoginAs="<p>username and password is required for sing in. </p>";
            }
            else{
                $SigningFlag=true;
                $Who = $AccountUsername;
                $sqlwho= "SELECT Username From Accounts WHERE Username like '$Who'";
                $result = $conn->query($sqlwho);

                foreach($result as $row){
                    $username = $row['Username'];
                    if($username == $AccountUsername){
                        $SigningFlag=false;
                        $YouCanLoginAs="Your username is already used by some dude.";
                        break;
                    }

                }
                
                if($SigningFlag)
                {
                    //use a protocol which could used for hiding password 
                    $sql = "INSERT INTO Accounts (Username,superPassword) values ('$AccountUsername','$password')";
                    $conn->query($sql);
                    $YouCanLoginAs = " <p>You can log in as ". $AccountUsername . " right now.</p>";
                    $_SESSION['newPerson']=false;

                    setcookie('userName', $AccountUsername, time()- 50000 );
                    $_SESSION['userName'] = $AccountUsername;
                    $AccountUsername = $userName;
                }      
            }      
        }

        elseif(isset($_POST['submitLog']))
        {
            $AccountUsername = $_POST['username'];
            $AccountPassword = $_POST['password'];
            if(empty($AccountUsername) || empty($AccountPassword))
                {
                    $YouCanLoginAs="<p>username and password is required for login. </p>";
                    
                }
                else{
                    $SubmitFlg=false;

                    $Who = $AccountUsername;

                    $sqlwho= "SELECT superPassword From Accounts WHERE Username = '$Who'";
                    //select superpassword with pdo:
                    $names = $conn->query($sqlwho);
                    
                    
                    foreach ($names as $row) {
                        $superPassword = $row['superPassword'];
                        if($AccountPassword == $superPassword){
                            $SubmitFlg=true;
                            $_SESSION['newPerson']=false;
                            break;
                        }
                    }

                    if($SubmitFlg)
                    {
                        $_SESSION['newPerson']=false;
                        setcookie('userName', $AccountUsername, time()- 50000 );
                        $_SESSION['userName'] = $AccountUsername;
                        $AccountUsername = $userName;
                    }
                    else{
                        $YouCanLoginAs="You miss wrote your username or password.";
                    }
                }
        }

        
        else{
            $YouCanLoginAs="";
        }


    if($_SESSION['newPerson'])
    {
            echo "<div class='justifyMiddle'>
            <form class='HomeworkForm' method='post' action='' >
                <label for='username'>username:</label><br>
                <input type='text' id='username' name='username' placeholder='Enter your username' value= '$AccountUsername'/> <br>
                <label for='password'>password:</label> <br>
                <input type='password' id='password' name='password' placeholder='Enter your password' /> <br> 
                <input type='submit' name='SignMe' value='sign me' >
        
                <input style='margin-left: 37px;' type='submit' name='submitLog' value='Log me in' > <br>
            </form>
              $YouCanLoginAs 
        </div> </div> </div>
        </body>
        </html>";
       exit();
    }   
?>
    <h3>Welcome <?php echo $_SESSION['userName']; ?> to my todo list</h3>
    <div class="add-section">

     <form action="/actions/add.php" method="POST" autocomplete="off">
             <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="tittle is required" />
                <input type="text" 
                     name="detailes" 
                     style="border-color: #ff6666"
                     placeholder="detailes is required" />
              <button type="submit" name="addJob">Add Your job <span>&#43;</span></button>

             <?php }else{ ?>
              <input type="text" 
                     name="title" 
                     placeholder="What do you need to do? as tittle" />
                <input type="text" 
                     name="detailes" 
                     placeholder="What do you need to do? as detailes" />
              <button type="submit" name="addJob">Add Your job <span>&#43;</span></button>

             <?php } 
             
             

             ?>
          </form>
    </div>



    <?php 
        extract($_POST);

        $JokeControl="";
        $username = $_SESSION['userName'];
        $username = strtolower($username);
        //$todos = $conn->query("SELECT * FROM todos where Username like '$username' ORDER BY id DESC");
        $todos = $conn->query("SELECT * FROM todos where username like '$username' ORDER BY id DESC");
        if ($todos->rowCount() <= 0) {
            $JokeControl =  "<h4>". $_SESSION['userName']. " You have to write your job :3 </h4>";
        }
        else{
            $JokeControl =  "<h4>". $_SESSION['userName']. " Your job list: </h4>";
        }
        ?>
            <div class = 'justifyMiddle'>
                <?php
                echo $JokeControl;
                ?>
            </div>

<div class="show-todo-section">
            

            
        <?php
         while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="todo-item">
                <span id="<?php echo $todo['id']; ?>"
                      class="remove-to-do">x</span>
                <?php if($todo['checked']){ ?> 
                    <input type="checkbox"
                           class="check-box"
                           data-todo-id ="<?php echo $todo['id']; ?>"
                           checked />
                    <h2 class="checked"><?php echo $todo['title'] ?></h2>
                <?php }else { ?>
                    <input type="checkbox"
                           data-todo-id ="<?php $todo['id']; ?>"
                           class="check-box" />
                    <h2><?php echo $todo['title'] ?></h2>
                <?php } ?>
                <br>
                <h3> <?php echo "detailes: ".$todo['detailes'] ?></h3> 
                <small>created: <?php echo $todo['date_time'] ?></small> 
            </div>
        <?php } ?>
     
        </div>
    </div>
</div>

    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(function(){
                const id = $(this).attr('id');
                
                $.post("actions/remove.php", 
                      {
                          id: id
                      },
                      (data)  => {
                         if(data){
                             $(this).parent().hide(600);
                         }
                      }
                );
            });

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('actions/check.php', 
                      {
                          id: id
                      },
                      (data) => {
                          if(data != 'error'){
                              const h2 = $(this).next();
                              if(data === '1'){
                                  h2.removeClass('checked');
                              }else {
                                  h2.addClass('checked');
                              }
                          }
                      }
                );
            });
        });
    </script>

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

</html>