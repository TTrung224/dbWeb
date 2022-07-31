<?php
session_start();
require("functions.php");

if(isset($_POST['id']) && isset($_POST['todo'])){
    $id = formatInput($_POST['id']);
    $todo = formatInput($_POST['todo']);

    if ($id != "" && $todo != ""){
        $connection = dbConnect();
        $query = "update todo set title = '$todo' where id = $id";
        mysqli_query($connection, $query);
    }
}
header("location: ../todo.php");
?>