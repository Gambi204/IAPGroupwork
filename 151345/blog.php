<?php
require_once "include/dbConnect.php";
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT* FROM user WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
}
else{
    header("Location: signIn.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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
    <a href="signout.php">Sign Out</a>
    <a href="published.php">Published</a>
    <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
</div>
</div>
<div class="header">
</div>
<div class="content_section row">
            <div class="content">
            <h1>Welcome<?php echo $row["fullname"]?></h1>
				<form action="processes/blog_process.php" method="POST" autocomplete="off" >
                <div><label for="name">Name:</label></div>
				<div>
					<input type="text" name="fullname" maxlength="50"  required autofocus />
				</div>
                <div><label for="articletitle">Article Title:</label></div>				
				<div>
					<input type="text" name="articletitle" maxlength="50"  required />
				</div>		
                <div><label for="articlefulltext">Article Full Text:</label></div>	
				<div>
					<input type="text" name="articlefulltext" maxlength="50"  required />
				</div>		
                <div><label for="dateofpublication">Date of Publication:</label></div>	
				<div>
					<input type="date" name="dateofpublication" maxlength="100"  required />
				</div>			
					<input type="submit" name="register" value="Sign Up" />
				</div>
                  </form>  
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