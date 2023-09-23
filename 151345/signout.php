<?php
require_once "include/dbConnect.php";
$_SESSION=[];
session_unset();
session_destroy();
header("Location:signIn.php")
?>