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
    <div class="welcome">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
        <div class="top">
            <a href="">
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
            </div>
            <!--more-->

            <!--more-->

            <!--more-->





       </div>


</body>
<script src="script.js"></script>
</html>
