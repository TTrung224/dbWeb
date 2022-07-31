<?php
session_start();
require("functions.php");

if(isset($_POST['category']) && isset($_POST['color'])){
    $catName = formatInput($_POST['category']);
    $color = formatInput($_POST['color']);
    $email = $_SESSION['userInfo']['email'];

    if ($catName != "" && $color != "" && $email != ""){
        $connection = dbConnect();
        $query = "insert into category (name, color, public, email) values ('$catName', '$color', '0', '$email')";
        mysqli_query($connection, $query);

    }
}
header("location: ../todo.php");
?>