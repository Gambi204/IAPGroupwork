<?php 
     require_once"include/dbConnect.php";
     // SQL query to select all users' full names
        $sql = "SELECT fullname FROM users";

        // Prepare and execute the query
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Bind the result to a variable
        $stmt->bind_result($fullname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/webstructure.css"/>
    <title>Document</title>
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
    <h1>Users List</h1>
</div>





