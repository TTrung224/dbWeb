<?php
session_start();
require("functions.php");

$email = "test@gmail.com";
$password = "test1";

$email = formatInput($email);
$email = strtolower($email);
$password = formatInput($password);
$validated = false;

if ($email != "" && $password != ""){
    
    $connection = dbConnect();
    $query = "SELECT * FROM acc WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $account = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
        if($account["email"] == $email && password_verify($password, $account["password"])){
            $validated = true;
        }
    }

    if($validated == false){
        echo "fail";
    } else {
        $_SESSION["logedIn"] = true;
        echo "success";
    }
}

// if(isset($_POST['email']) && isset($_POST['password'])){
//     $email = formatInput($_POST['email']);
//     $email = strtolower($email);
//     $password = formatInput($_POST['password']);
//     $validated = false;

//     if ($email != "" && $password != ""){
        
//         $connection = dbConnect();
//         $query = "SELECT * FROM acc WHERE email=$email";
//         $result = mysqli_query($connection,$query);

//         if (mysqli_num_rows($result) > 0) {
//             $account = mysqli_fetch_all($result, $MYSQLI_ASSOC)[0];
//             if($account["email"] == $email && password_verify($password, $account["password"])){
//                 $validated = true;
//             }
//         }

//         if($validated == false){
//             header("Location: ../login_page.php?error=not validated email or password");
//         } else {
//             $_SESSION["logedIn"] = true;
//             // $_SESSION["userInfo"] = ["email" => $data[0], "username" => $data[2], "realname" => $data[3], "pfp-path" => $data[4], "bio" => $data[5]];
//             header("Location: ../index.php");
//         }
//     } else{
//         header("Location: ../login_page.php");
//     }
// }