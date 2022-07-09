<?php
require("functions.php");

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = formatInput($_POST['email']);
    $email = strtolower($email);
    $password = formatInput($_POST['password']);
    $rePassword = formatInput($_POST['re-password']);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $username = formatInput($_POST['username']);
    $major = formatInput($_POST['major']);

    if ($email != "" && $password != "" && $rePassword != "" && $username != "" && $major != ""){
        
        if($password == $rePassword){
            $connection = dbConnect();
            $query = "insert into acc (email, password, userName, major) values ('$email', '$hashedPassword', '$username', '$major');";
            if (mysqli_query($connection, $query)) {
                header("Location: ../loginPage.php?signupStatus=true");
            } else {
                header("Location: ../signupPage.php?error=somethingWrong");
            }
        } else {
            header("Location: ../signupPage.php?error=wrongPasswordRetype");
        }    
    } else{
        header("Location: ../signupPage.php?error=fullFillError");
    }
}