<?php
session_start();
require("functions.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if ($id != "") {
        $connection = dbConnect();
        $query = "DELETE FROM toDo WHERE id=$id";

        if ($connection->query($query) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("Deleted successfully")';
            echo '</script>';
            header("Refresh: 3; URL=../todo.php");
          } else {
            echo '<script language="javascript">';
            echo 'alert("Deleted failed")';
            echo '</script>';
            header("Refresh: 3; URL=../todo.php");
          }
    } 

}
?>

