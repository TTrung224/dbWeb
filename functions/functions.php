<?php
function dbConnect(){
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "b704e0507b7306";
    $password = "41c3cb98";
    $dbname = "heroku_f8f2d91b657802f";

    $connection = mysqli_connect("localhost", "root", "Tranquoctrung224!", "test");

    // $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    } 

    return $connection;
}

function formatInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = strip_tags($data);
    return $data;
}