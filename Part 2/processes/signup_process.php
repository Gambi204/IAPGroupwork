<?php
    require_once "../include/dbConnect.php";

if(isset($_POST["signUp"])){

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confpassword = $_POST["confpassword"];
   

    if(!strcmp($password, $confpassword) === 0){
        die("Error: passwords do not match");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Error: Invalid email");
    }

    $insert_user = "INSERT INTO user ( fullname, username ,email, password,confpassword) VALUES ('$fullname', '$username','$email', '$password','$confpassword')";
    
    if ($conn->query($insert_user) === TRUE) {
      header("Location: ../signin.php?noset");
      exit();
    } else {
      echo "Error: " . $insert_user. "<br>" . $conn->error;
    }
}
?>