<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: art_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>artan-forum</title>
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <nav class="navigation hide" id="navigation">
                <ul class="nav-list">
                    <span class="close-icon" onclick="showiconbar()"><i class="fa fa-close"></i></span>
                    <li class="nav-item"><a href="main_page.php">Forums</a></li>
                    <li class="nav-item"><a href="post_page.php">Posts</a></li>
                    <li class="nav-item"><a href="faq_page.php">faq</a></li>           
                </ul>
            </nav>
                <a href="#" class="bar-icon" id="iconBar" onclick="hideiconbar()"><i class="fa fa-bars"></i></a>
            <div class="brand">the sea den</div>
        </div>
        <!--search box-->
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="Everything">Everything</option>
                    <option value="Titles">Titles</option>
                    <option value="Descriptions">Descriptions</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>


    <div class="welcome">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
      <!--subfroum html-->

      <div class="container">
        <!--Navigation-->
        <div class="navigate">
            <span><a href="">the sea den - Forums</a> >> <a href="">info</a> >> <a href="">faq</a></span>
        </div>

        <!--Topic Section-->
        <div class="topic-container">
            <!--Original thread-->
            <div class="head">
                <div class="authors">Author: the administrator</div>
                <div class="content">Topic: faq (Read 1325 Times)</div>
            </div>

            <div class="body">
                <div class="authors">
                    <div class="username"><a href="">the administrator </a></div>
                    <div>Role</div>
                    <img src="https://cdn.pixabay.com/photo/2015/11/06/13/27/ninja-1027877_960_720.jpg" alt="">
                    <div>Posts: <u>45</u></div>
                    <div>Points: <u>4586</u></div>
                </div>
                <div class="content">
                    hello all new users, this is the faq, for all your information needs.
                    <br>Question 1
                    <br><br>
                    What is the sea den?
                    <br>
                    The sea den is a rather old forum created in 2001. We are a rather active community so say hi to the others.
                    <br><br>
                    Question 2
                    <br>
                    What are the rules of the site?
                    <br><br>
                    We don’t have much in the form rules, we are rather lax hare, just be polite and we wont have to ban you. 
                    <br><br>
                    Question 3
                    <br>
                    How do I post on the sea den?
                    <br><br>
                    Easy, all you must do is write your post in the text editor on the bottom of the page and press post. You can do this in any individual thread.
                    <br><br>
                    Question 4
                    <br>
                    Help! I encountered an error in the forum.
                    <br><br>
                    If  you  have found a problem please send a email to me here: ajetiartan0@gmail.com
                    <hr>
                    Regards username
                    <br>
                </div>
            </div>
        </div>

        

    </div>

  <footer>
      <span>&copy; &nbsp; artån ajeti | all rights reserved</span>
  </footer>
</body>
<script src="main.js"></script>
</html>
