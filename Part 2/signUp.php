<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up</title>
    <link rel="stylesheet" href="css/webstructure.css"/>
    <link rel="stylesheet" href="css/formstructure.css"/>
    <script src="https://kit.fontawesome.com/804a3d4ad2.js"crossorigin="anonymous"></script>
</head>
<body>
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="aboutUs.html">About us</a>
        <a href="viewBlog.html">Blog</a>
        <a href="contactus.html">Contact us</a>
        <a href="ourProducts.html">Our Products</a>

        <?php if(isset($_SESSION["control"])) { ?>
            <a href="viewBlog.html?noset">View Users</a>
        <?php } ?>

        <div class="topnav_right">
            <?php
            if (isset($_SESSION["control"])) {
            ?>
                <div class="usertitle">
                    <a href=""><?php print "Hello " . $_SESSION["control"]["name"]; ?></a>
                    <a href="processes/signout_processes.php?signout">Sign Out</a>
                </div>
            <?php
            } else {
            ?>
        <a href="viewusers.php">View Users</a>  
        <a href="signIn.php">Sign in</a>
        <a href="signUp.php">Sign up</a>
        <?php } ?>
        <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
    </div>
    </div>
    <div class="header">
        <h1>Sign Up</h1>
    </div>
    <div class="content_row row">
        <div class="content">
        <form action="processes/signup_process.php" method="POST" autocomplete="off">
            
            <div><label for="fullname">Name:</label></div>
            <div><input type ="text"name="fullname"id="fullname" maxlength="50"/></label></div>
            <div><label for="username">Username:</label></div>
            <div><input type ="text"name="username"id="username"maxlength="50" required/></label></div>
            <div><label for="email">Email:</label></div>
            <div><input type ="email"name="email"id="email"maxlength="50"required/></label></div>
            <div><label for ="password">Password:</label></div> 
            <div><input type="password" name="password"id="password" maxlength="10" required/></div>  
            <div><label for="confirmpassword">Confirm Password:</label></div>
            <div><input type ="password"name="confpassword"id="password"maxlength="10"required/></label></div>  
        <div> <input type="submit" name="signUp"value="Sign Up"/></div>
        <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
            </div>
        </form>
        <div class="sidebar">
            <img src="pictures/2menu.jpg"width="170%"/>
        </div>
        </div>
    <div class="footer">
     &#169; 2023 Masala DARBAR
     <i class="fa-solid fa-house"></i><br>
    <i class="fa-brands fa-facebook fa-2xl"></i>
    <i class="fa-brands fa-twitter fa-2xl"></i>
    <i class="fa-brands fa-instagram fa-2xl"></i>
    <i class="fa-solid fa-grill-hot"></i>
</div>
</body>
</html>