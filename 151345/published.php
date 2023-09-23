<?php
require_once "include/dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Published Articles</title>
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="css/webstructure.css" />
</head>
<body>
<div class="topnav">
    <a href="index.html">Home</a>
    <a href="aboutUs.html">About us</a>
    <a href="viewBlog.html">Blog</a>
    <a href="contactus.html">Contact us</a>
    <a href="ourProducts.html">Our Products</a>
    <div class="topnav_right">
    <a href="blog.php">Blog</a> 
    <a href="signout.php">Sign Out</a>
    <i class="fa-brands fa-meetup fa-beat fa-2xl" style="color: #51371f;"></i>
</div>
</div>
<div class="header">
    <h1>Published Articles</h1>
</div>
<div class="content_section row">
    <div class="content">
        <table>
            <tr>
                <th>#</th>
                <th>FullName</th>
                <th>Article Title</th>
                <th>Article Full Text</th>
                <th>Date of Publication</th>
            </tr>
            <?php
            $spot_author = "SELECT * FROM author ORDER BY fullname DESC";
            $author_res = $conn->query($spot_author);
            $au = 1;
            if ($author_res->num_rows > 0) {
                while ($author_row = $author_res->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?php echo $au; $au++; ?>.</td>
                        <td><?php echo $author_row["fullname"]; ?></td>
                        <td><?php echo $author_row["articletitle"]; ?></td>
                        <td><?php echo $author_row["articlefulltext"]; ?></td>
                        <td><?php echo $author_row["dateofpublication"]; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
