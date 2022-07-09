<?php
session_start();
require("functions.php");

// $email = "test1@gmail.com";
// $password = "testing";

// $email = formatInput($email);
// $email = strtolower($email);
// $password = formatInput($password);
// $validated = false;

// if ($email != "" && $password != ""){
    
//     $connection = dbConnect();
//     $query = "SELECT * FROM acc WHERE email = '$email'";
//     $result = mysqli_query($connection, $query);

//     if (mysqli_num_rows($result) > 0) {
//         $account = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
//         if($account["email"] == $email && password_verify($password, $account["password"])){
//             $validated = true;
//         }
//     }

//     if($validated == false){
//         echo "fail";
//     } else {
//         $_SESSION["logedIn"] = true;
//         echo "success";
//     }
// }

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = formatInput($_POST['email']);
    $email = strtolower($email);
    $password = formatInput($_POST['password']);
    $validated = false;

    if ($email != "" && $password != ""){
        
        $connection = dbConnect();
        $query = "SELECT * FROM acc WHERE email='$email'";
        $result = mysqli_query($connection,$query);

        if (mysqli_num_rows($result) > 0) {
            $account = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
            if($account["email"] == $email && password_verify($password, $account["password"])){
                $validated = true;
            }
        }

        if($validated == false){
            header("Location: ../loginPage.php?error=emailOrPasswordError");
        } else {
            $_SESSION["logedIn"] = true;
            $_SESSION["userInfo"] = ["email" => $email, "username" => $account['userName']];
            header("Location: ../index.php");
        }
    } else{
        header("Location: ../loginPage.php?error=fullFillError");
    }
}