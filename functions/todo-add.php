<?php
session_start();
if(!isset($_SESSION['logedIn'])){
    header("Location: loginPage.php");
}

require("functions.php");


if(isset($_POST['title']) && isset($_POST['categoryId'])){
    $title = formatInput($_POST['title']);
    $categoryId = (int)$_POST['categoryId'];

    $email = $_SESSION['userInfo']['email'];
    $connection = dbConnect();
    $query = "SELECT c.id FROM category c WHERE c.email='$email' or c.public=1";
    $result = mysqli_query($connection,$query);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    $id = array_column($result, 'id');
    if ($title != "" && in_array($categoryId, $id)){
        $query = "insert into toDo (status, title, categoryId, email) values (0, '$title', $categoryId, '$email');";
        mysqli_query($connection, $query);
        mysqli_close($connection);
        header("Location: ../todo.php");
    }
    else {
        echo "<script>alert($result)</script>";
    }
}
?>