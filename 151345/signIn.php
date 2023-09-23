
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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

    <div class="topnav_right">
        <a href="viewusers.php">View Users</a>  
        <a href="signIn.php">Sign in</a>
        <a href="signUp.php">Sign up</a>
        <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
    </div>
    </div>
    <div class="header">
        <h1>Sign In</h1>
    </div>
    <div class="content_row row">
        <div class="content">
        <form action="processes/signin_process.php" method="POST" autocomplete="off">
            <div><label for="email">Email:</label></div>
            <div><input type ="email"name="email"id="email"maxlength="50" required/></label></div>
            <div><label for ="password">Password:</label></div> 
            <div><input type="password" name="password" id="password" maxlength="10" required/></div>     
        <div> <input type="submit" name="signin"value="Sign In"/></div>
        <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
            </div>
        </form>
    <div class="sidebar">
        <img src="pictures/logo.jpg"width="110%"/>
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