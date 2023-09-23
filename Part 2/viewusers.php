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






