<?php
require_once "../include/dbConnect.php";

if (isset($_POST["signin"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            session_start();
            $_SESSION["signin"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: ../Blog.php?noset");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "Email not valid";
    }
}
?>

