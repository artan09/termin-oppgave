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
            <span><a href="">MyForum - Forums</a> >> <a href="">random subforum</a></span>
        </div>
        <!--Display posts table-->
        <div class="posts-table">
            <div class="table-head">
                <div class="status">Status</div>
                <div class="subjects">Subjects</div>
                <div class="replies">Replies/Views</div>
                <div class="last-reply">Last Reply</div>
            </div>
            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">Is learning Python in 2022 worth it?</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>
            <!--starts here-->
            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href=""> my opinon on new york</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">Ukrainian Conflict - Military Evaluations</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-book"></i></div>
                <div class="subjects">
                    <a href=""> General Space News</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-rocket"></i></div>
                <div class="subjects">
                    <a href=""> Intel CPUs discussion thread </a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-frown-o"></i></div>
                <div class="subjects">
                    <a href=""> Regional Mods are back!</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>


            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">New Logo/Favicon Constructive Feedback Thread</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">AMD Ryzen CPU General</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-lock"></i></div>
                <div class="subjects">
                    <a href="">Unable to browse site outside of incognito.</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>

            <div class="table-row">
                <div class="status"><i class="fa fa-fire"></i></div>
                <div class="subjects">
                    <a href="">Date issue?</a>
                    <br>
                    <span>Started by <b><a href="">User</a></b> .</span>
                </div>
                <div class="replies">
                    2 replies <br> 125 views
                </div>

                <div class="last-reply">
                    Oct 12 2021
                    <br>By <b><a href="">User</a></b>
                </div>
            </div>
            <!--ends here-->
        </div>
        <!--Pagination starts-->
            <div class="pagination">
                page: <a href="">1</a><a href="">2</a><a href="">3</a><a href="">...</a>
            </div>
        <!--pagination ends-->
    </div>
            
    
    <div class="note">
        <span><i class="fa fa-frown-o"></i>&nbsp; 0 Engagement Topic</span>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-share-square"></i></a><br>
        <span><i class="fa fa-book"></i>&nbsp; Low Engagement Topic</span>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-share-square"></i></a><br>
        <span><i class="fa fa-fire"></i>&nbsp; Popular Topic</span>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-share-square"></i></a><br>
        <span><i class="fa fa-rocket"></i>&nbsp; High Engagement Topic</span>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-share-square"></i></a><br>
        <span><i class="fa fa-lock"></i>&nbsp; Closed Topic</span>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-share-square"></i></a><br>
    </div>

  <footer>
      <span>&copy; &nbsp; artån ajeti | all rights reserved</span>
  </footer>
</body>
<script src="main.js"></script>
</html>
