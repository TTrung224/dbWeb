<?php
session_start();
if(!isset($_SESSION['logedIn'])){
    header("Location: loginPage.php");
}

require("functions.php");


if(isset($_POST['title']) && isset($_POST['categoryId']) && isset($_POST['date'])){
    $title = formatInput($_POST['title']);
    $info = formatInput($_POST['info']);
    $categoryId = (int)$_POST['categoryId'];
    $date = str_replace("T", " ", $_POST['date']).":59";

    $email = $_SESSION['userInfo']['email'];
    $connection = dbConnect();
    $query = "SELECT c.id FROM category c WHERE c.email='$email' or c.public=1";
    $result = mysqli_query($connection,$query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    $id = array_column($result, 'id');
    if ($title != "" && $info != ""&& in_array($categoryId, $id)){
        $query = "insert into deadline (title, info, deadline, categoryId, email) values ('$title', '$info', '$date', $categoryId, '$email');";
        mysqli_query($connection, $query);
        mysqli_close($connection);
        header("Location: ../deadline.php");
    }
    else {
        echo "<script>alert($result)</script>";
    }
}
?>