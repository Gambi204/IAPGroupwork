<?php
    require_once "../include/dbConnect.php";

if(isset($_POST["register"])){

    $fullname = $_POST["fullname"];
    $articletitle = $_POST["articletitle"];
    $articlefulltext = $_POST["articlefulltext"];
    $dateofpublication = $_POST["dateofpublication"];

    $insert_author = "INSERT INTO author ( fullname,articletitle,articlefulltext,dateofpublication) 
    VALUES ('$fullname', '$articletitle','$articlefulltext', '$dateofpublication')";
    
    if ($conn->query($insert_author) === TRUE) {
      header("Location: ../published.php?noset");
      exit();
    } else {
      echo "Error: " . $insert_author. "<br>" . $conn->error;
    }
}
?>