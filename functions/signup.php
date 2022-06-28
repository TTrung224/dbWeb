<?php
require("functions.php");

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = formatInput($_POST['email']);
    $email = strtolower($email);
    $password = formatInput($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $username = formatInput($_POST['username']);
    $major = formatInput($_POST['major']);

    if ($email != "" && $password != "" && $username != "" && $major != ""){
        
        $connection = dbConnect();
        $query = "insert into acc (email, password, userName, major) values ('$email', '$password', '$username', '$major');";
        if (mysqli_query($connection, $query)) {
            header("Location: ../loginPage.php");
        } else {
            echo "There is some error, please try again";
        }

        
    } else{
        header("Location: ../signupPage.php");
    }
}