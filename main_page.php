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
        <div class="top">
            <a href="main_page.php">
             <img src="bilder\logo-22.svg" width="150px" height="150px"> 
             <p id="tagline"> the sea den</p>
            </a>
        </div>
      <!--subfroum html-->
        <div class="container">
            <div class="subforum">
                <div class="subforum-title">
                    <h1>general information</h1>
                        <a href="logout.php">
                        <b>logout</b>
                        </a>
                        <p>need to reset your password? <a href="reset-password.php">you can do it here</a></p>
                </div>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
           
               <hr class="subforum-devider"> 
            <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
             </div>    
             
            <!--more-->
            <div class="subforum">
                <div class="subforum-title">
                    <h1>general information</h1>
                </div>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 

            <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
            </div>    
            <!--more-->
            <div class="subforum">
                <div class="subforum-title">
                    <h1>general information</h1>
                </div>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
                <hr class="subforum-devider"> 
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center ">
                        <i class="fa fa-car"></i>
                    </div>
                    <div class="subforum-description  subforum-column">
                        <h1><a href="">description title:</a></h1>
                        <p> description content: whatever</p>
                    </div>
                    <div class="suforum-stats subforum-column">
                        <span> 24 posts| 15 threds</span>
                    </div>
                    <div class="subfourm-info subforum-column">
                        <b><a href="">last post</a></b> by <a href="">forumuser</a> 
                        <br>
                        on the <small> 22 dec 2021</small>
                    </div>
                </div>
            </div>
       </div>

       <!--forum info-->
    
       <div class="forum-info">
            <div class="chart">
                the sea den - stats &nbsp;<i class="fa fa-bar-chart"></i>
            </div>
            <div>
                    <span><u>5,369</u>  posts in <u>1,210</u> topics by <u>45,210</u> users </span><br>
                    <span>Latest post: <b><a href="#">post</a></b> on 30 may 2021 by <a href="#">mylo</a> </span>
            </div>
       </div>
       
  <footer>
      <span>&copy; &nbsp; artån ajeti | all rights reserved</span>
  </footer>
</body>
<script src="main.js"></script>
</html>
